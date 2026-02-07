<?php
/**
 * Contact Form Handler with PHPMailer
 * Handles form submission, validation, CSRF protection, and email sending
 */

require_once dirname(dirname(__FILE__)) . '/config.php';

// Initialize response
$response = [
    'success' => false,
    'message' => '',
    'errors' => []
];

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Rate limiting - check if IP has submitted too many times
$ip_address = $_SERVER['REMOTE_ADDR'];
$rate_limit_key = 'contact_form_' . $ip_address;
$submissions = isset($_SESSION[$rate_limit_key]) ? $_SESSION[$rate_limit_key] : [];

// Clean old submissions (older than 60 seconds)
$current_time = time();
$submissions = array_filter($submissions, function($timestamp) use ($current_time) {
    return ($current_time - $timestamp) < 60;
});

if (count($submissions) >= CONTACT_FORM_RATE_LIMIT) {
    $response['message'] = 'Too many submissions. Please try again later.';
    http_response_code(429);
    echo json_encode($response);
    exit;
}

// Record this submission
$submissions[] = $current_time;
$_SESSION[$rate_limit_key] = $submissions;

// CSRF Token validation
if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token'])) {
    $response['errors'][] = 'Security validation failed. Please refresh and try again.';
    echo json_encode($response);
    exit;
}

if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    $response['errors'][] = 'Security token mismatch. Please refresh and try again.';
    echo json_encode($response);
    exit;
}

// Honeypot check - if filled, it's a bot
if (CONTACT_FORM_HONEYPOT_ENABLED && !empty($_POST['website'])) {
    // Silently fail for bots
    $response['success'] = true;
    $response['message'] = 'Thank you for your message.';
    echo json_encode($response);
    exit;
}

// Collect and sanitize form data
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service = trim($_POST['service'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
if (empty($name)) {
    $response['errors'][] = 'Please provide your full name.';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['errors'][] = 'Please provide a valid email address.';
}

if (empty($message)) {
    $response['errors'][] = 'Please provide a message.';
}

// Check for potential spam patterns
if (preg_match('/(?:http|https|ftp):\/\//', $message) && substr_count($message, '://') > 2) {
    $response['errors'][] = 'Your message contains too many links. Please remove some.';
}

// If there are validation errors, return them
if (!empty($response['errors'])) {
    echo json_encode($response);
    exit;
}

// Send email using PHP's mail() function or PHPMailer if available
$email_sent = false;
$php_mailer_available = file_exists(__DIR__ . '/../vendor/autoload.php');

if ($php_mailer_available) {
    // Use PHPMailer if installed
    try {
        require __DIR__ . '/../vendor/autoload.php';
        
        $mail = new \PHPMailer\PHPMailer\PHPMailer(true);
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = PHPMAILER_HOST;
        $mail->Port = PHPMAILER_PORT;
        $mail->SMTPAuth = true;
        $mail->Username = PHPMAILER_USERNAME;
        $mail->Password = PHPMAILER_PASSWORD;
        $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        
        // Recipients
        $mail->setFrom(PHPMAILER_FROM_EMAIL, PHPMAILER_FROM_NAME);
        $mail->addAddress(EMAIL_GENERAL);
        $mail->addReplyTo($email, $name);
        
        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission from {$name}";
        $email_body = buildEmailBody($name, $email, $phone, $service, $message);
        $mail->Body = $email_body;
        $mail->AltBody = strip_tags($email_body);
        
        // Send email
        if ($mail->send()) {
            $email_sent = true;
            
            // Send confirmation email to user
            try {
                $confirmation_mail = new \PHPMailer\PHPMailer\PHPMailer(true);
                $confirmation_mail->isSMTP();
                $confirmation_mail->Host = PHPMAILER_HOST;
                $confirmation_mail->Port = PHPMAILER_PORT;
                $confirmation_mail->SMTPAuth = true;
                $confirmation_mail->Username = PHPMAILER_USERNAME;
                $confirmation_mail->Password = PHPMAILER_PASSWORD;
                $confirmation_mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                
                $confirmation_mail->setFrom(PHPMAILER_FROM_EMAIL, PHPMAILER_FROM_NAME);
                $confirmation_mail->addAddress($email, $name);
                
                $confirmation_mail->isHTML(true);
                $confirmation_mail->Subject = "We've Received Your Message - HelioPower Group";
                $confirmation_mail->Body = buildConfirmationEmailBody($name, $message);
                $confirmation_mail->AltBody = strip_tags($confirmation_mail->Body);
                
                $confirmation_mail->send();
            } catch (Exception $e) {
                error_log("Confirmation email failed: " . $e->getMessage());
            }
        }
    } catch (Exception $e) {
        error_log("PHPMailer Error: " . $e->getMessage());
        // Fall through to use mail() function as fallback
        $php_mailer_available = false;
    }
}

// Fallback: Use PHP mail() function if PHPMailer not available or failed
if (!$php_mailer_available || !$email_sent) {
    $to = EMAIL_GENERAL;
    $subject = "New Contact Form Submission from {$name}";
    $headers = "From: " . PHPMAILER_FROM_EMAIL . "\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $email_body = buildEmailBody($name, $email, $phone, $service, $message);
    
    $email_sent = mail($to, $subject, $email_body, $headers);
    
    if ($email_sent) {
        // Send confirmation email
        $confirmation_subject = "We've Received Your Message - HelioPower Group";
        $confirmation_body = buildConfirmationEmailBody($name, $message);
        $confirmation_headers = "From: " . PHPMAILER_FROM_EMAIL . "\r\nContent-Type: text/html; charset=UTF-8\r\n";
        mail($email, $confirmation_subject, $confirmation_body, $confirmation_headers);
    }
}

// Prepare response
if ($email_sent) {
    $response['success'] = true;
    $response['message'] = 'Thank you for your message! We will contact you within 24 hours.';
    
    // Clear CSRF token for next form
    unset($_SESSION['csrf_token']);
} else {
    $response['errors'][] = 'Failed to send your message. Please try again later.';
    $response['message'] = 'Error sending email.';
}

echo json_encode($response);
exit;

/**
 * Build HTML email body for admin notification
 */
function buildEmailBody($name, $email, $phone, $service, $message) {
    $service_text = !empty($service) ? ucfirst($service) : 'Not specified';
    
    return <<<HTML
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; }
            .header { background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: white; padding: 20px; border-radius: 5px 5px 0 0; }
            .content { background: white; padding: 20px; border-bottom: 1px solid #ddd; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #1e3c72; margin-bottom: 5px; }
            .message { background: #f5f5f5; padding: 15px; border-left: 4px solid #2a5298; }
            .footer { background: #f9f9f9; padding: 15px; font-size: 12px; color: #666; border-radius: 0 0 5px 5px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>New Contact Form Submission</h2>
            </div>
            <div class="content">
                <div class="field">
                    <div class="label">Name:</div>
                    <div>$name</div>
                </div>
                <div class="field">
                    <div class="label">Email:</div>
                    <div><a href="mailto:$email">$email</a></div>
                </div>
                <div class="field">
                    <div class="label">Phone:</div>
                    <div>$phone</div>
                </div>
                <div class="field">
                    <div class="label">Service of Interest:</div>
                    <div>$service_text</div>
                </div>
                <div class="field">
                    <div class="label">Message:</div>
                    <div class="message">
                        <p>$message</p>
                    </div>
                </div>
            </div>
            <div class="footer">
                <p>This is an automated email from your website contact form.</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}

/**
 * Build confirmation email for user
 */
function buildConfirmationEmailBody($name, $message) {
    return <<<HTML
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f9f9f9; }
            .header { background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: white; padding: 20px; border-radius: 5px 5px 0 0; }
            .content { background: white; padding: 20px; }
            .footer { background: #f9f9f9; padding: 15px; font-size: 12px; color: #666; border-radius: 0 0 5px 5px; }
            .cta { background: #2a5298; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; display: inline-block; margin-top: 15px; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h2>Thank You for Contacting HelioPower Group</h2>
            </div>
            <div class="content">
                <p>Dear $name,</p>
                <p>We have received your message and appreciate you reaching out to us. Our team will review your inquiry and get back to you within 24 business hours.</p>
                <p><strong>We received the following message:</strong></p>
                <p style="background: #f5f5f5; padding: 15px; border-left: 4px solid #2a5298;">$message</p>
                <p>If you have any urgent questions, please call us directly at our offices.</p>
                <a href="https://heliopower.ua" class="cta">Visit Our Website</a>
            </div>
            <div class="footer">
                <p><strong>HelioPower Group Ltd</strong><br>
                Renewable Energy & Green Technology Solutions<br>
                Website: https://heliopower.ua</p>
            </div>
        </div>
    </body>
    </html>
    HTML;
}
?>
