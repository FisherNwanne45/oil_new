# HelioPower Group Ltd - Website

A professional PHP website for HelioPower Group Ltd, Ukraine's leading renewable energy and green technology company.

## Company Information

- **Company Name:** HelioPower Group Ltd
- **Location:** Ukraine (Offices in Kyiv and Lviv)
- **Industry:** Renewable Energy & Green Technology
- **CEO:** Kateryna Petrenko

## Services

1. **Solar Systems** - Solar panels, inverters, installation, solar farms, rooftop solar
2. **Energy Storage** - Battery systems and smart grid technology
3. **EV Infrastructure** - Charging stations, fleet charging hubs, highway chargers
4. **Hydrogen Technology** - Next-generation clean energy solutions

## Website Structure

```
heliopower/
├── config.php          # Configuration file with all company variables
├── header.php          # Common header with navigation
├── footer.php          # Common footer with company info
├── index.php           # Homepage
├── services.php        # Services page
├── projects.php        # Projects page
├── about.php           # About us page with CEO profile
├── contact.php         # Contact page with form
└── README.md           # This file
```

## Setup Instructions

### Requirements
- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)

### Installation

1. **Download/Clone the files**
   ```bash
   # Place all files in your web server directory
   # For example: /var/www/html/heliopower/
   ```

2. **Configure your web server**
   
   **For Apache:**
   - Ensure mod_rewrite is enabled
   - Place files in your document root or create a virtual host
   
   **For Nginx:**
   - Configure your server block to point to the project directory
   
   **For Development (PHP Built-in Server):**
   ```bash
   cd /path/to/heliopower
   php -S localhost:8000
   ```
   Then visit: http://localhost:8000

3. **Customize Configuration**
   - Open `config.php`
   - Update contact information, addresses, or other variables as needed
   - All common variables are centralized in this file

### File Descriptions

#### config.php
Contains all company information and common variables:
- Company name and tagline
- CEO information
- Office locations and addresses
- Contact information (phones, emails)
- Services array
- Project types
- Social media links
- Business hours

#### header.php
- Responsive header with company branding
- Top bar with contact info
- Navigation menu (automatically highlights active page)
- Hero section placeholder

#### footer.php
- Company information
- Quick links navigation
- Office locations
- Contact details
- Social media links
- Copyright information

#### Page Files (index.php, services.php, etc.)
Each page:
- Includes header.php and footer.php
- Sets page-specific title
- Contains unique content
- Uses variables from config.php

## Customization

### Adding a New Page

1. Create a new PHP file (e.g., `newpage.php`)
2. Add this structure:
```php
<?php 
$page_title = 'Your Page Title';
include 'header.php'; 
?>

<div class="hero">
    <div class="container">
        <h2>Page Heading</h2>
        <p>Page description</p>
    </div>
</div>

<div class="content">
    <div class="container">
        <!-- Your content here -->
    </div>
</div>

<?php include 'footer.php'; ?>
```

3. Add navigation link to `header.php`:
```php
<li><a href="newpage.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'newpage.php' ? 'active' : ''; ?>">New Page</a></li>
```

### Updating Company Information

All company information is in `config.php`. Simply edit the values:

```php
// Example changes:
define('PHONE1', '+380 44 NEW-NUMBER');
define('EMAIL_GENERAL', 'newemail@heliopower.ua');
```

### Styling

All styling is inline CSS within the files for easy deployment. To customize:
- Edit the `<style>` tags in header.php for global styles
- Edit inline styles in individual pages for page-specific styling

## Features

✅ Responsive design (mobile-friendly)
✅ Clean, professional layout
✅ Contact form with PHP validation
✅ Centralized configuration
✅ Active page highlighting in navigation
✅ SEO-friendly structure
✅ Easy to customize

## Contact Form

The contact form in `contact.php`:
- Validates required fields
- Checks email format
- Displays success/error messages
- Currently saves to variables (can be extended to send emails or save to database)

### To Enable Email Sending:

Uncomment and modify this line in `contact.php`:
```php
mail(EMAIL_GENERAL, "New Contact Form Submission", $message, "From: $email");
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Future Enhancements

Potential additions:
- Database integration for contact form submissions
- Admin panel for content management
- Multi-language support
- Blog section
- Project portfolio gallery
- Customer testimonials
- Live chat integration

## Support

For questions or assistance, contact:
- Email: info@heliopower.ua
- Phone: +380 44 123 4567

## License

© 2025 HelioPower Group Ltd. All rights reserved.
