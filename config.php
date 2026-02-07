<?php
// HelioPower Group Ltd - Configuration File

// Company Information
define('COMPANY_NAME', 'HelioPower Group Ltd');
define('COMPANY_TAGLINE', 'Renewable Energy & Green Technology Solutions');
define('CEO_FIRST_NAME', 'Kateryna');
define('CEO_LAST_NAME', 'Petrenkobb');
define('CEO_FULL_NAME', CEO_FIRST_NAME . ' ' . CEO_LAST_NAME);

// Location Information
define('COUNTRY', 'Ukraine');
define('CITY1', 'Kyiv'); // Capital
define('CITY2', 'Lviv');
define('ADDRESS1', '15 Shevchenko Boulevard, Kyiv, 01001, Ukraine');
define('ADDRESS2', '42 Prospect Svobody, Lviv, 79000, Ukraine');

// Contact Information
define('PHONE1', '+380 44 123 4567'); // Kyiv office
define('PHONE2', '+380 32 234 5678'); // Lviv office
define('EMAIL_GENERAL', 'info@heliopower.ua');
define('EMAIL_CEO', 'k.petrenko@heliopower.ua');
define('EMAIL_SALES', 'sales@heliopower.ua');
define('EMAIL_SUPPORT', 'support@heliopower.ua');

// Social Media
define('FACEBOOK_URL', 'https://facebook.com/heliopowergroup');
define('LINKEDIN_URL', 'https://linkedin.com/company/heliopower-group');
define('TWITTER_URL', 'https://twitter.com/heliopowerua');

// Business Hours
define('BUSINESS_HOURS', 'Monday - Friday: 9:00 AM - 6:00 PM');
define('TIMEZONE', 'EET (UTC+2)');

// Determine base path dynamically for image URLs (works on localhost and production)
$base_path = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
if ($base_path === '' || $base_path === '/') {
    $base_path = ''; // At root level (production)
}

// Image Configuration
$images = [
    // Hero Sections - Full Width Background Images (1920x1080 recommended)
    'hero_home' => $base_path . '/assets/img/hero_home.jpg', // 1280x960px - Solar panels hero
    'solar_farm' => $base_path . '/assets/img/solar_farm.jpg', // 1280x854px - Solar farm
    'battery_storage' => $base_path . '/assets/img/battery_storage.jpg', // 1280x854px - Battery storage
    'ev_charging' => $base_path . '/assets/img/ev_charging.jpg', // 1280x854px - EV charging
    'hydrogen_tech' => $base_path . '/assets/img/hydrogen_tech.jpg', // 1280x940px - Hydrogen technology
    'wind_turbines' => $base_path . '/assets/img/wind_turbines.jpg', // 1280x897px - Wind turbines
    'smart_grid' => $base_path . '/assets/img/smart_grid.jpg', // 1280x781px - Smart grid network
    'industrial_solar' => $base_path . '/assets/img/industrial_solar.jpg', // 1280x853px - Industrial solar installation
    
    // About Page Images
    'about_ceo' => $base_path . '/assets/img/about_ceo.jpg', // 1280x1280px - CEO portrait (square, for circular crop)
    'team_office' => $base_path . '/assets/img/team_office.jpg', // 1280x853px - Team office
    
    // Service Page Images
    'installation' => $base_path . '/assets/img/installation.jpg', // 1280x854px - Installation work
    'maintenance' => $base_path . '/assets/img/maintenance.jpg', // 1280x853px - Technician maintenance
    'wind_energy' => $base_path . '/assets/img/wind_energy.jpg', // 1280x960px - Wind energy
    'energy_management' => $base_path . '/assets/img/energy_management.jpg', // 1280x853px - Energy management
    
    // Service Detail Page Cards - Alternating Image/Text Layouts
    'solar_monitoring' => $base_path . '/assets/img/solar_monitoring.jpg', // 1280x853px - Solar monitoring
    'battery_tech' => $base_path . '/assets/img/battery_tech.jpg', // 1280x848px - Battery technology
    'ev_network' => $base_path . '/assets/img/ev_network.jpg', // 1280x865px - EV network infrastructure
    'hydrogen_apps' => $base_path . '/assets/img/hydrogen_apps.jpg', // 1280x912px - Hydrogen applications
    
    // Homepage Project Cards
    'project_solar' => $base_path . '/assets/img/project_solar.jpg', // 1280x853px - Solar project showcase
    'project_battery' => $base_path . '/assets/img/project_battery.jpg', // 1280x853px - Battery project showcase
];

// Services Configuration
$services = [
    'solar' => [
        'title' => 'Solar Systems',
        'description' => 'Complete solar solutions including panels, inverters, and professional installation for factories and estates',
        'icon' => 'fas fa-sun',
        'image' => isset($images['solar_farm']) ? $images['solar_farm'] : '',
        'slug' => 'solar-systems'
    ],
    'storage' => [
        'title' => 'Energy Storage',
        'description' => 'Advanced battery systems and smart grid technology for efficient energy management',
        'icon' => 'fas fa-battery-full',
        'image' => isset($images['battery_storage']) ? $images['battery_storage'] : '',
        'slug' => 'energy-storage'
    ],
    'ev' => [
        'title' => 'EV Infrastructure',
        'description' => 'Charging stations, fleet charging hubs, and highway chargers across Ukraine',
        'icon' => 'fas fa-charging-station',
        'image' => isset($images['ev_charging']) ? $images['ev_charging'] : '',
        'slug' => 'ev-infrastructure'
    ],
    'hydrogen' => [
        'title' => 'Hydrogen Technology',
        'description' => 'Next-generation clean energy solutions aligned with ESG and climate policies',
        'icon' => 'fas fa-flask',
        'image' => isset($images['hydrogen_tech']) ? $images['hydrogen_tech'] : '',
        'slug' => 'hydrogen-technology'
    ],
    'wind' => [
        'title' => 'Wind Energy',
        'description' => 'Wind turbine systems and farm development for large-scale renewable energy generation',
        'icon' => 'fas fa-fan',
        'image' => isset($images['wind_turbines']) ? $images['wind_turbines'] : '',
        'slug' => 'wind-energy'
    ],
    'management' => [
        'title' => 'Energy Management',
        'description' => 'Smart grid solutions and energy management systems for optimal efficiency and distribution',
        'icon' => 'fas fa-network-wired',
        'image' => isset($images['energy_management']) ? $images['energy_management'] : '',
        'slug' => 'energy-management'
    ]
];

// Project Types
$project_types = [
    'Solar farms',
    'Rooftop solar installations',
    'Factory power systems',
    'Mini-grids',
    'Battery installations',
    'EV charging networks',
    'Energy system maintenance'
];

// Website Settings
define('SITE_URL', 'https://heliopower.ua');
define('ASSETS_PATH', '/assets');
define('CURRENT_YEAR', date('Y'));

// PHPMailer Configuration - Gmail SMTP
define('PHPMAILER_HOST', 'smtp.gmail.com');
define('PHPMAILER_PORT', 587);
define('PHPMAILER_USERNAME', 'noreply@heliopower.ua'); // Your Gmail address
define('PHPMAILER_PASSWORD', 'your_app_password_here'); // Gmail App Password (not your regular password)
define('PHPMAILER_FROM_EMAIL', 'noreply@heliopower.ua');
define('PHPMAILER_FROM_NAME', 'HelioPower Group');
define('PHPMAILER_REPLY_TO', EMAIL_GENERAL);

// Contact Form Settings
define('CONTACT_FORM_ENABLED', true);
define('CONTACT_FORM_HONEYPOT_ENABLED', true); // Honeypot field to catch bots
define('CONTACT_FORM_RATE_LIMIT', 5); // Max submissions per minute per IP
?>
