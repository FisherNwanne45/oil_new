<?php
// Start session for CSRF token - must be before any output
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$page_title = 'Contact Us';
include 'header.php';

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$csrf_token = $_SESSION['csrf_token'];
?>

<div class="hero"
    style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['maintenance']) ? $images['maintenance'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="fas fa-envelope" style="margin-right: 15px;"></i>Contact Us</h2>
        <p>Get in touch with Ukraine's leading renewable energy provider</p>
    </div>
</div>

<div class="content">
    <div class="container">

        <div id="form-response-message" style="display: none;"></div>

        <!-- Simple Two-Column Layout -->
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; margin-bottom: 80px;">

            <!-- Left: Contact Form -->
            <div>
                <h2 class="section-title">Contact Us</h2>
                <p style="color: #666; margin-bottom: 30px;">Fill out the form below and we'll get back to you within 24
                    hours.</p>

                <form method="POST" action="handlers/contact-form-handler.php" id="contact-form">

                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>">
                    <input type="text" name="website" class="form-honeypot" tabindex="-1" autocomplete="off"
                        placeholder="Website">

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Name <span
                                style="color: #e74c3c;">*</span></label>
                        <input type="text" name="name" required
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 1rem;"
                            value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Email <span
                                style="color: #e74c3c;">*</span></label>
                        <input type="email" name="email" required
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 1rem;"
                            value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Phone</label>
                        <input type="tel" name="phone"
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 1rem;"
                            value="<?php echo isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : ''; ?>">
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Service
                            Interest</label>
                        <select name="service"
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 1rem; background: white;">
                            <option value="">Select a service...</option>
                            <option value="solar">Solar Systems</option>
                            <option value="storage">Energy Storage</option>
                            <option value="ev">EV Infrastructure</option>
                            <option value="hydrogen">Hydrogen Technology</option>
                            <option value="wind">Wind Energy</option>
                            <option value="management">Energy Management</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div style="margin-bottom: 25px;">
                        <label style="display: block; margin-bottom: 8px; color: #333; font-weight: 600;">Message <span
                                style="color: #e74c3c;">*</span></label>
                        <textarea name="message" required rows="5"
                            style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 8px; font-size: 1rem; font-family: inherit; resize: vertical;"><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    </div>

                    <button type="submit"
                        style="width: 100%; padding: 14px; background: #1e3c72; color: white; border: none; border-radius: 8px; font-size: 1rem; font-weight: 600; cursor: pointer;">
                        <i class="fas fa-paper-plane" style="margin-right: 8px;"></i>Send Message
                    </button>
                </form>
            </div>

            <!-- Right: Contact Information -->
            <div>
                <h2 class="section-title">Get In Touch</h2>

                <!-- Kyiv Office -->
                <div
                    style="background: white; padding: 30px; border-radius: 10px; border-left: 4px solid #ffd700; margin-bottom: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <h3 style="color: #1e3c72; margin: 0 0 20px 0; font-size: 1.1rem;"><i class="fas fa-map-marker-alt"
                            style="margin-right: 10px; color: #ffd700;"></i><?php echo CITY1; ?> Office</h3>
                    <p style="margin: 0 0 15px 0; color: #666;"><strong>Address:</strong><br><?php echo ADDRESS1; ?></p>
                    <p style="margin: 0 0 15px 0; color: #666;"><strong>Phone:</strong><br><a
                            href="tel:<?php echo str_replace(' ', '', PHONE1); ?>"
                            style="color: #1e3c72; text-decoration: none;"><?php echo PHONE1; ?></a></p>
                    <p style="margin: 0; color: #666;"><strong>Email:</strong><br><a
                            href="mailto:<?php echo EMAIL_GENERAL; ?>"
                            style="color: #1e3c72; text-decoration: none;"><?php echo EMAIL_GENERAL; ?></a></p>
                </div>

                <!-- Lviv Office -->
                <div
                    style="background: white; padding: 30px; border-radius: 10px; border-left: 4px solid #ffd700; margin-bottom: 25px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);">
                    <h3 style="color: #1e3c72; margin: 0 0 20px 0; font-size: 1.1rem;"><i class="fas fa-map-marker-alt"
                            style="margin-right: 10px; color: #ffd700;"></i><?php echo CITY2; ?> Office</h3>
                    <p style="margin: 0 0 15px 0; color: #666;"><strong>Address:</strong><br><?php echo ADDRESS2; ?></p>
                    <p style="margin: 0 0 15px 0; color: #666;"><strong>Phone:</strong><br><a
                            href="tel:<?php echo str_replace(' ', '', PHONE2); ?>"
                            style="color: #1e3c72; text-decoration: none;"><?php echo PHONE2; ?></a></p>
                    <p style="margin: 0; color: #666;"><strong>Email:</strong><br><a
                            href="mailto:<?php echo EMAIL_GENERAL; ?>"
                            style="color: #1e3c72; text-decoration: none;"><?php echo EMAIL_GENERAL; ?></a></p>
                </div>

                <!-- Business Hours -->
                <div
                    style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); color: white; padding: 30px; border-radius: 10px;">
                    <h3 style="margin: 0 0 20px 0; font-size: 1.1rem;"><i class="fas fa-clock"
                            style="margin-right: 10px; color: #ffd700;"></i>Business Hours</h3>
                    <p style="margin: 0 0 10px 0;"><strong><?php echo BUSINESS_HOURS; ?></strong></p>
                    <p style="margin: 0; font-size: 0.9rem; opacity: 0.9;">Timezone: <?php echo TIMEZONE; ?></p>
                </div>
            </div>
        </div>

        <!-- Why Contact Section -->
        <section style="margin-bottom: 80px; text-align: center;">
            <h2 class="section-title" style="margin-bottom: 50px;">Why Choose Us?</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px;">
                <div style="padding: 30px; background: #f8fafc; border-radius: 10px;">
                    <i class="fas fa-headset"
                        style="font-size: 2.5rem; color: #2a5298; display: block; margin-bottom: 15px;"></i>
                    <h3 style="color: #1e3c72; margin-bottom: 10px;">24/7 Support</h3>
                    <p style="color: #666; font-size: 0.95rem;">Quick response times and dedicated support</p>
                </div>
                <div style="padding: 30px; background: #f8fafc; border-radius: 10px;">
                    <i class="fas fa-handshake"
                        style="font-size: 2.5rem; color: #2a5298; display: block; margin-bottom: 15px;"></i>
                    <h3 style="color: #1e3c72; margin-bottom: 10px;">Free Consultation</h3>
                    <p style="color: #666; font-size: 0.95rem;">Expert advice tailored to your needs</p>
                </div>
                <div style="padding: 30px; background: #f8fafc; border-radius: 10px;">
                    <i class="fas fa-check-circle"
                        style="font-size: 2.5rem; color: #2a5298; display: block; margin-bottom: 15px;"></i>
                    <h3 style="color: #1e3c72; margin-bottom: 10px;">No Obligation</h3>
                    <p style="color: #666; font-size: 0.95rem;">Free quotes with no strings attached</p>
                </div>
            </div>
        </section>

    </div>
</div>

<style>
    @media (max-width: 768px) {
        [style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<?php include 'footer.php'; ?>