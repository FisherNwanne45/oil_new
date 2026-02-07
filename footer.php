    <footer style="background: linear-gradient(180deg, #1e3c72 0%, #132a4a 100%); color: #ffffff; padding: 60px 0 20px; margin-top: 80px; border-top: 4px solid #ffd700;">
        <div class="container">
            
            <!-- Footer Main Content -->
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr 1fr; gap: 40px; margin-bottom: 50px;">
                
                <!-- Company Info Section -->
                <div>
                    <div style="display: flex; align-items: center; margin-bottom: 20px;">
                        <i class="fas fa-leaf" style="font-size: 1.5rem; color: #ffd700; margin-right: 12px;"></i>
                        <h3 style="margin: 0; font-size: 1.1rem; color: #ffd700;"><?php echo COMPANY_NAME; ?></h3>
                    </div>
                    <p style="color: #b8c6db; line-height: 1.8; margin-bottom: 20px;">
                        Leading provider of renewable energy and green technology solutions across <?php echo COUNTRY; ?>.
                    </p>
                    <div style="background: rgba(255, 215, 0, 0.1); padding: 15px; border-radius: 8px; border-left: 3px solid #ffd700;">
                        <p style="margin: 0; color: #ffd700;"><strong>Leadership</strong></p>
                        <p style="margin: 5px 0 0 0; color: #b8c6db;"><?php echo CEO_FULL_NAME; ?>, CEO</p>
                    </div>
                </div>
                
                <!-- Quick Links Section -->
                <div>
                    <h3 style="color: #ffd700; margin-bottom: 25px; font-size: 1.1rem;">Quick Links</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 12px;"><a href="index.php" style="color: #b8c6db; text-decoration: none; transition: color 0.3s;"><i class="fas fa-home" style="margin-right: 10px; color: #ffd700;"></i>Home</a></li>
                        <li style="margin-bottom: 12px;"><a href="services.php" style="color: #b8c6db; text-decoration: none; transition: color 0.3s;"><i class="fas fa-bolt" style="margin-right: 10px; color: #ffd700;"></i>Services</a></li>
                        <li style="margin-bottom: 12px;"><a href="projects.php" style="color: #b8c6db; text-decoration: none; transition: color 0.3s;"><i class="fas fa-briefcase" style="margin-right: 10px; color: #ffd700;"></i>Projects</a></li>
                        <li style="margin-bottom: 12px;"><a href="about.php" style="color: #b8c6db; text-decoration: none; transition: color 0.3s;"><i class="fas fa-info-circle" style="margin-right: 10px; color: #ffd700;"></i>About Us</a></li>
                        <li style="margin-bottom: 0;"><a href="contact.php" style="color: #b8c6db; text-decoration: none; transition: color 0.3s;"><i class="fas fa-envelope" style="margin-right: 10px; color: #ffd700;"></i>Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services Section -->
                <div>
                    <h3 style="color: #ffd700; margin-bottom: 25px; font-size: 1.1rem;">Our Services</h3>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <?php foreach ($services as $service): ?>
                            <li style="margin-bottom: 10px;">
                                <a href="service-<?php echo $service['slug']; ?>.php" style="color: #b8c6db; text-decoration: none; font-size: 0.95rem;">
                                    <i class="<?php echo $service['icon']; ?>" style="margin-right: 10px; color: #ffd700;"></i><?php echo $service['title']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Contact Section -->
                <div>
                    <h3 style="color: #ffd700; margin-bottom: 25px; font-size: 1.1rem;">Get In Touch</h3>
                    <div style="margin-bottom: 25px;">
                        <p style="color: #ffd700; margin: 0 0 8px 0; font-weight: 600;"><i class="fas fa-envelope" style="margin-right: 10px;"></i>General</p>
                        <p style="color: #b8c6db; margin: 0; font-size: 0.9rem;"><?php echo EMAIL_GENERAL; ?></p>
                    </div>
                    <div style="margin-bottom: 25px;">
                        <p style="color: #ffd700; margin: 0 0 8px 0; font-weight: 600;"><i class="fas fa-phone" style="margin-right: 10px;"></i>Kyiv Office</p>
                        <p style="color: #b8c6db; margin: 0; font-size: 0.9rem;"><?php echo PHONE1; ?></p>
                    </div>
                    <div>
                        <p style="color: #ffd700; margin: 0 0 8px 0; font-weight: 600;"><i class="fas fa-clock" style="margin-right: 10px;"></i>Business Hours</p>
                        <p style="color: #b8c6db; margin: 0; font-size: 0.9rem;"><?php echo BUSINESS_HOURS; ?></p>
                    </div>
                </div>
            </div>
            
            <!-- Footer Divider -->
            <div style="border-top: 1px solid rgba(255, 215, 0, 0.2); padding-top: 30px;">
                
                <!-- Social Media & Copyright -->
                <div style="display: grid; grid-template-columns: 1fr auto 1fr; gap: 30px; align-items: center;">
                    <div>
                        <h4 style="color: #ffd700; margin-bottom: 15px; font-size: 0.95rem;">Follow Us</h4>
                        <div style="display: flex; gap: 15px;">
                            <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" title="Facebook" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255, 215, 0, 0.1); border-radius: 50%; color: #ffd700; text-decoration: none; transition: all 0.3s;"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" title="LinkedIn" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255, 215, 0, 0.1); border-radius: 50%; color: #ffd700; text-decoration: none; transition: all 0.3s;"><i class="fab fa-linkedin-in"></i></a>
                            <a href="<?php echo TWITTER_URL; ?>" target="_blank" title="Twitter" style="display: flex; align-items: center; justify-content: center; width: 40px; height: 40px; background: rgba(255, 215, 0, 0.1); border-radius: 50%; color: #ffd700; text-decoration: none; transition: all 0.3s;"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    
                    <div style="text-align: center;">
                        <div style="font-size: 1.5rem; color: #ffd700; margin-bottom: 5px;">💡</div>
                        <p style="margin: 0; color: #b8c6db; font-size: 0.85rem;">Powering Ukraine</p>
                    </div>
                    
                    <div style="text-align: right;">
                        <p style="margin: 0 0 8px 0; color: #ffd700; font-weight: 600; font-size: 0.95rem;">© <?php echo CURRENT_YEAR; ?> <?php echo COMPANY_NAME; ?></p>
                        <p style="margin: 0; color: #b8c6db; font-size: 0.85rem;">All rights reserved</p>
                    </div>
                </div>
                
            </div>
        </div>
        
        <style>
            footer a:hover {
                color: #ffd700 !important;
            }
        </style>
    </footer>
    
    <!-- External Scripts -->
    <script src="assets/script.js"></script>
</body>
</html>
