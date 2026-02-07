# Contact Form Setup - PHPMailer Configuration

## Overview
The contact form now includes:
- **PHPMailer Integration** for reliable Gmail SMTP email delivery
- **CSRF Protection** to prevent cross-site request forgery attacks
- **Honeypot Field** to catch bot spam submissions
- **Rate Limiting** to prevent form spam (5 submissions per IP per minute)
- **Input Validation** and sanitization
- **Email Confirmation** sent to users after submission
- **AJAX Form Submission** for smooth user experience

## Installation

### Step 1: Install PHPMailer (Recommended)

If you have Composer installed:

```bash
cd /Applications/XAMPP/xamppfiles/htdocs/oil2
composer require phpmailer/phpmailer
```

**Without Composer:**
If you can't use Composer, PHPMailer files can be installed manually. However, Composer is highly recommended.

### Step 2: Configure Gmail SMTP

The form uses Gmail's SMTP server for sending emails. Follow these steps:

#### A. Enable 2-Factor Authentication on your Gmail account
1. Go to https://myaccount.google.com/
2. Click "Security" in the left menu
3. Enable "2-Step Verification"

#### B. Generate an App Password
1. Go to https://myaccount.google.com/apppasswords
2. Select "Mail" and "Windows Computer" (or your platform)
3. Click "Generate"
4. Gmail will provide a 16-character password

#### C. Update config.php

Edit `/Applications/XAMPP/xamppfiles/htdocs/oil2/config.php` and update:

```php
// PHPMailer Configuration - Gmail SMTP
define('PHPMAILER_HOST', 'smtp.gmail.com');
define('PHPMAILER_PORT', 587);
define('PHPMAILER_USERNAME', 'your_gmail@gmail.com'); // Your Gmail address
define('PHPMAILER_PASSWORD', 'xxxx xxxx xxxx xxxx'); // Gmail App Password (without spaces in code)
define('PHPMAILER_FROM_EMAIL', 'your_gmail@gmail.com');
define('PHPMAILER_FROM_NAME', 'HelioPower Group');
define('PHPMAILER_REPLY_TO', EMAIL_GENERAL);
```

**Important:** Never commit the actual password to version control. Use environment variables in production.

## How It Works

### Form Flow
1. User submits form on contact.php
2. JavaScript captures the submission and sends via AJAX
3. contact-form-handler.php processes the request
4. CSRF token is verified
5. Honeypot field is checked for bot activity
6. IP-based rate limiting is enforced
7. Form fields are validated
8. Email is sent via PHPMailer (or fallback to mail())
9. Confirmation email is sent to user
10. Response is returned as JSON
11. JavaScript displays success/error message

### Security Features

#### CSRF Protection
- Unique token generated per session
- Token validated on form submission
- Token is invalidated after use

#### Honeypot Field
- Hidden "website" field that real users won't fill
- If field contains data, request is silently rejected (appears successful to bots)
- Bots that auto-fill all fields will trigger this

#### Rate Limiting
- Maximum 5 submissions per IP address per minute
- Tracked via PHP sessions
- Old submissions automatically cleaned up

#### Input Validation
- Name and email are required
- Email is validated with filter_var()
- Message content is checked for excessive links
- All data is sanitized before use

## File Structure

```
oil2/
├── contact.php                           # Contact page with form
├── config.php                            # Configuration with PHPMailer settings
├── handlers/
│   └── contact-form-handler.php         # Form processing and email sending
├── assets/
│   ├── style.css                        # Includes form styling
│   └── script.js                        # Includes form submission handler
└── vendor/                              # PHPMailer (if using Composer)
    └── phpmailer/
```

## CSS Styling

The form includes modern styling with:
- Padding and proper spacing around form fields
- Focus states with border color and shadow
- Input field transitions
- Success/error message styling with animations
- Mobile-responsive design

Styles are defined in `assets/style.css`:
- `#contact-form` - Form container with padding
- `.form-honeypot` - Hidden honeypot field
- `.form-success` - Success message styling
- `.form-error` - Error message styling

## JavaScript Functionality

The form submission is handled by `initContactForm()` in `assets/script.js`:
- Prevents default form submission
- Shows loading spinner on submit button
- Sends form data via AJAX to the handler
- Displays success or error messages
- Automatically resets form on success
- Scrolls to response message for visibility

## Fallback Behavior

If PHPMailer is not installed:
- Form automatically falls back to PHP's mail() function
- All validation and security features still work
- Email delivery may be less reliable than SMTP
- Still recommended to install PHPMailer for better deliverability

## Testing

### Test Form Submission
1. Go to http://localhost/oil2/contact.php
2. Fill in the form with test data
3. Submit the form
4. Check that:
   - Success message appears
   - Form is cleared
   - Check your email (info@heliopower.ua) for the notification
   - Check the user's email for the confirmation

### Test Bot Prevention
1. Open browser Developer Tools (F12)
2. In Console, run:
   ```javascript
   document.querySelector('[name="website"]').value = 'http://spamsite.com';
   document.getElementById('contact-form').submit();
   ```
3. You should see a success message (silent rejection)
4. No email should be sent

## Troubleshooting

### "Too many submissions" error
- Clear browser cookies/session
- Or wait 60 seconds
- The rate limit helps prevent spam

### Email not sending
1. Check that Gmail has 2FA enabled
2. Verify the App Password is correct
3. Check that port 587 is not blocked by firewall
4. Check error_log in PHP error log
5. Test with fallback mail() function

### CSRF token mismatch
- Browser cookies may be disabled
- Session may have expired
- Try refreshing the page and resubmitting

## Security Recommendations for Production

1. **Use Environment Variables** for Gmail credentials:
   ```php
   define('PHPMAILER_USERNAME', getenv('GMAIL_USERNAME'));
   define('PHPMAILER_PASSWORD', getenv('GMAIL_PASSWORD'));
   ```

2. **Enable HTTPS** - The form submits sensitive data

3. **Add reCAPTCHA** (optional) - For additional bot protection:
   - Sign up at https://www.google.com/recaptcha/admin
   - Add reCAPTCHA v3 to the form
   - Verify token in handler

4. **Database Logging** - Store submissions in database for audit trail

5. **Email Validation** - Verify email domain MX records

6. **Spam Filter** - Implement additional content filtering

## Support

For issues with:
- **PHPMailer**: https://github.com/PHPMailer/PHPMailer/wiki
- **Gmail SMTP**: https://support.google.com/mail/answer/7126229
- **Form Security**: Follow OWASP guidelines
