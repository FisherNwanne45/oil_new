# How the Contact Form Works (With and Without PHPMailer)

## Quick Answer

✅ **The form WORKS RIGHT NOW without PHPMailer!**

It will use PHP's built-in `mail()` function to send emails. No installation needed.

## How It Works

### Option 1: Works Immediately (No Installation)
The contact form uses **fallback emailing**:
- If PHPMailer is not installed → Uses PHP's `mail()` function
- Form submission still works
- Emails still send (through your server's mail system)
- No setup required!

### Option 2: Better Email Delivery (Optional)
For more reliable email delivery (especially if your server's mail system is unreliable), install PHPMailer:

```bash
cd /Applications/XAMPP/xamppfiles/htdocs/oil2
composer require phpmailer/phpmailer
```

If you don't have Composer, [install it first](https://getcomposer.org/download/).

## Testing the Form

### Test Immediately (Right Now!)
1. Go to http://localhost/oil2/contact.php
2. Fill in the form
3. Click "Send Message"
4. You should see: **"Thank you for your message!"**
5. Check your configured email (info@heliopower.ua in config.php)

### If Emails Don't Arrive

The issue is likely with your **server's mail system**, not the form:

#### On Windows/XAMPP:
1. Open XAMPP Control Panel
2. Click "Admin" on Apache
3. Check if Sendmail is configured in `php.ini`:
   ```
   [mail function]
   SMTP = localhost
   smtp_port = 25
   sendmail_from = info@heliopower.ua
   ```

#### On macOS (Your System):
1. Mail setup is more complex on Mac. You have two choices:

**Choice A: Use Gmail (Easier)**
   - Install PHPMailer (see above)
   - Configure Gmail credentials in `config.php`

**Choice B: Use Mail Server**
   - Test with: `php -r "mail('your@email.com', 'Test', 'Working!'); echo 'Sent';"`
   - If that doesn't work, mail() isn't configured

## Why the "Errors" Appear in VS Code

The VS Code errors about `PHPMailer\PHPMailer\PHPMailer` are **completely normal**. They appear because:

1. You haven't installed PHPMailer yet (optional)
2. VS Code doesn't know the class exists
3. **The code still works!** PHP checks if the file exists at runtime

## The Code Logic

```php
// Check if PHPMailer is installed
if (file_exists('/vendor/autoload.php')) {
    // Use PHPMailer (better email delivery)
    // Send via Gmail SMTP
} else {
    // Use PHP mail() (works now, no setup needed)
    // Send via server's mail system
}
```

## Quick Testing

### Test Current Setup (Right Now):
```bash
cd /Applications/XAMPP/xamppfiles/htdocs/oil2

# Test if mail() works on your system
php -r "
    \$result = mail('test@example.com', 'Test Subject', 'Test Body');
    if (\$result) {
        echo 'mail() function works!';
    } else {
        echo 'mail() function not configured';
    }
"
```

### Test the Form via Browser:
1. Visit http://localhost/oil2/contact.php
2. Fill form and submit
3. Check email for: `info@heliopower.ua` (or configure in config.php)

## Summary Table

| Feature | Works Now? | Setup Needed? |
|---------|-----------|---------------|
| Form displays | ✅ Yes | None |
| Form validation | ✅ Yes | None |
| CSRF protection | ✅ Yes | None |
| Bot prevention | ✅ Yes | None |
| Email to admin | ✅ Yes | PHP mail() must work |
| Confirmation email | ✅ Yes | PHP mail() must work |
| Gmail SMTP | ❌ No | Install PHPMailer |
| Professional emails | ❌ No | Install PHPMailer |

## Next Steps

1. **Right Now**: Test the form at http://localhost/oil2/contact.php
2. **If Emails Work**: You're done! The form is fully functional.
3. **If Emails Don't Work**: Either:
   - Check your server mail setup (see above)
   - Install PHPMailer for Gmail SMTP (recommended for production)

## Still Having Issues?

The most common causes:
1. **Mail server not configured** on your machine
2. **Sendmail not set up** on macOS
3. **SMTP not available** in your server environment

**Solution**: Install PHPMailer and use Gmail. It's the most reliable method.

See `CONTACT_FORM_SETUP.md` for Gmail setup instructions.
