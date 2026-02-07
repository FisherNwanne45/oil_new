<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?><?php echo COMPANY_NAME; ?></title>
    <meta name="description" content="<?php echo COMPANY_TAGLINE; ?>">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- External CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="header">
        <div class="top-bar">
            <div class="container">
                <div class="contact-info">
                    <span><i class="fas fa-phone"></i> <?php echo PHONE1; ?></span>
                    <span><i class="fas fa-envelope"></i> <?php echo EMAIL_GENERAL; ?></span>
                    <span><i class="fas fa-map-marker-alt"></i> <?php echo CITY1; ?>, <?php echo COUNTRY; ?></span>
                </div>
                <div class="translate-widget">
                    <i class="fas fa-globe"></i>
                    <div id="google_translate_element"></div>
                </div>
            </div>
        </div>
        
        <div class="main-header">
            <div class="container">
                <a href="index.php" class="logo-link">
                    <div class="logo">
                        <h1><i class="fas fa-sun"></i><?php echo COMPANY_NAME; ?></h1>
                        <p><?php echo COMPANY_TAGLINE; ?></p>
                    </div>
                </a>
                
                <button class="hamburger" id="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <nav id="navigation">
                    <ul id="nav-menu">
                        <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>"><i class="fas fa-home"></i> Home</a></li>
                        
                        <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>"><i class="fas fa-info-circle"></i> About Us</a></li>
                        
                        <!-- Services Dropdown -->
                        <li class="nav-item">
                            <a href="services.php" class="dropdown-toggle <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' || strpos(basename($_SERVER['PHP_SELF']), 'service-') === 0 ? 'active' : ''; ?>">
                                <i class="fas fa-bolt"></i> Services
                            </a>
                            <div class="dropdown-menu">
                                <?php foreach ($services as $key => $service): ?>
                                <a href="service-<?php echo $service['slug']; ?>.php">
                                    <i class="<?php echo $service['icon']; ?>"></i>
                                    <?php echo $service['title']; ?>
                                </a>
                                <?php endforeach; ?>
                            </div>
                        </li>
                        
                        <li><a href="projects.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>"><i class="fas fa-briefcase"></i> Projects</a></li>
                        <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>"><i class="fas fa-envelope"></i> Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false, includedLanguages: 'en,uk,pl,de,fr,es'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
