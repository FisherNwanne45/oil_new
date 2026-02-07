<?php 
$page_title = 'About Us';
include 'header.php'; 
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['team_office']) ? $images['team_office'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="fas fa-info-circle" style="margin-right: 15px;"></i>About HelioPower Group</h2>
        <p>Leading the renewable energy revolution in <?php echo COUNTRY; ?></p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Company Overview -->
        <section style="margin-bottom: 80px; text-align: center;">
            <h2 class="section-title">Who We Are</h2>
            <p style="font-size: 1.1rem; line-height: 1.8; max-width: 900px; margin: 0 auto 40px; color: #555;">
                <?php echo COMPANY_NAME; ?> is <?php echo COUNTRY; ?>'s leading provider of renewable energy and green technology solutions. 
                Since our founding, we have specialized in solar systems, energy storage, EV infrastructure, and hydrogen technology, 
                serving clients across multiple regions with uncompromising quality and commitment to sustainability.
            </p>
            
            <img src="<?php echo isset($images['team_office']) ? $images['team_office'] : ''; ?>" alt="HelioPower Team" class="card-image" style="border-radius: 12px; max-width: 800px; margin: 0 auto;">
        </section>

        <!-- Mission & Vision -->
        <section style="margin-bottom: 80px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <div style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding: 50px; border-radius: 15px; color: white;">
                    <i class="fas fa-bullseye" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Our Mission</h3>
                    <p style="line-height: 1.9; font-size: 1.05rem;">
                        To power Ukraine with clean, sustainable energy solutions that reduce carbon emissions, 
                        lower energy costs, and create a greener future for generations to come.
                    </p>
                </div>
                <div style="background: linear-gradient(135deg, #4caf50 0%, #66bb6a 100%); padding: 50px; border-radius: 15px; color: white;">
                    <i class="fas fa-eye" style="font-size: 3rem; margin-bottom: 20px;"></i>
                    <h3 style="font-size: 1.8rem; margin-bottom: 20px;">Our Vision</h3>
                    <p style="line-height: 1.9; font-size: 1.05rem;">
                        To be the most trusted and innovative renewable energy provider in Ukraine, 
                        setting the standard for excellence in green technology and sustainable development.
                    </p>
                </div>
            </div>
        </section>

        <!-- CEO Leadership Section -->
        <section style="background: #f8f9fa; padding: 60px 40px; border-radius: 15px; margin-bottom: 80px;">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h2 class="section-title" style="margin-bottom: 50px;">Leadership</h2>
                
                <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 50px; align-items: start;">
                    <div style="text-align: center;">
                        <img src="<?php echo isset($images['about_ceo']) ? $images['about_ceo'] : ''; ?>" alt="<?php echo CEO_FULL_NAME; ?>" style="width: 280px; height: 280px; border-radius: 50%; object-fit: cover; box-shadow: 0 10px 30px rgba(0,0,0,0.2); margin-bottom: 20px;">
                        <h3 style="font-size: 1.5rem; color: #1e3c72; margin-bottom: 8px;"><?php echo CEO_FULL_NAME; ?></h3>
                        <p style="color: #666; font-size: 1.1rem; font-weight: 600;">CEO & Founder</p>
                    </div>
                    
                    <div>
                        <p style="font-size: 1.1rem; line-height: 1.9; color: #555; margin-bottom: 20px;">
                            <strong><?php echo CEO_FIRST_NAME; ?> <?php echo CEO_LAST_NAME; ?></strong> is the visionary leader 
                            behind <?php echo COMPANY_NAME; ?>. With a passion for sustainable development and deep expertise 
                            in renewable energy, she has built the company into one of <?php echo COUNTRY; ?>'s most trusted providers of 
                            green technology solutions.
                        </p>
                        
                        <p style="font-size: 1.1rem; line-height: 1.9; color: #555; margin-bottom: 25px;">
                            Under her leadership, HelioPower has successfully delivered over 500 projects across <?php echo COUNTRY; ?>, 
                            from large-scale solar farms generating megawatts to cutting-edge EV charging infrastructure and hydrogen technology 
                            initiatives. Her unwavering commitment to environmental responsibility and continuous innovation continues to drive 
                            the company forward.
                        </p>
                        
                        <div style="background: white; padding: 25px; border-radius: 10px; border-left: 4px solid #1e3c72; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
                            <p style="font-style: italic; color: #555; font-size: 1.05rem; line-height: 1.8; margin-bottom: 15px;">
                                "Our goal is not just to provide energy, but to transform how Ukraine powers its future. 
                                Every solar panel we install, every charging station we build, every innovation we pioneer—
                                brings us closer to a cleaner, more sustainable tomorrow where clean energy powers prosperity."
                            </p>
                            <p style="text-align: right; color: #1e3c72; font-weight: 600;">
                                — <?php echo CEO_FULL_NAME; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Do -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title">What We Do</h2>
            
            <p style="font-size: 1.1rem; line-height: 1.8; color: #555; text-align: center; max-width: 800px; margin: 0 auto 40px;">
                HelioPower Group provides comprehensive renewable energy solutions across Ukraine, covering the entire spectrum of clean energy needs:
            </p>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-solar-panel feature-icon"></i>
                    <h3>Build Solar Plants</h3>
                    <p>Design and construct large-scale solar farms and installations</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-battery-full feature-icon"></i>
                    <h3>Install Batteries</h3>
                    <p>Deploy energy storage and smart grid management systems</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-industry feature-icon"></i>
                    <h3>Power Factories</h3>
                    <p>Provide industrial-scale renewable energy solutions</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-network-wired feature-icon"></i>
                    <h3>Run Mini-Grids</h3>
                    <p>Operate localized power generation and distribution systems</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-sliders feature-icon"></i>
                    <h3>Manage Systems</h3>
                    <p>Provide complete clean energy system oversight and optimization</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3>Trade Power</h3>
                    <p>Enable energy trading and power distribution services</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-tools feature-icon"></i>
                    <h3>Maintain Systems</h3>
                    <p>Provide ongoing maintenance and performance optimization</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-charging-station feature-icon"></i>
                    <h3>EV Charging</h3>
                    <p>Build and operate comprehensive EV charging networks</p>
                </div>
            </div>
        </section>

        <!-- Our Values -->
        <section class="gradient-section" style="margin-bottom: 80px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 50px; text-align: center;">Our Core Values</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center;">
                    <i class="fas fa-leaf" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Sustainability</h3>
                    <p>Committed to environmental responsibility and reducing carbon footprint</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-lightbulb" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Innovation</h3>
                    <p>Embracing cutting-edge technology and forward-thinking solutions</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-handshake" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Integrity</h3>
                    <p>Honest, transparent relationships with clients and partners</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-star" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Excellence</h3>
                    <p>Delivering the highest quality in every project</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-users-cog" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Collaboration</h3>
                    <p>Working together with stakeholders to achieve shared goals</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-graduation-cap" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="margin-bottom: 15px; font-size: 1.3rem;">Continuous Learning</h3>
                    <p>Investing in knowledge and expertise to stay at the forefront of industry</p>
                </div>
            </div>
        </section>

        <!-- Why Choose Us -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title">Why Choose HelioPower</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-trophy feature-icon"></i>
                    <h3>Proven Track Record</h3>
                    <p>500+ successful projects from small installations to large-scale solar farms</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-users feature-icon"></i>
                    <h3>Expert Team</h3>
                    <p>Highly skilled professionals with deep expertise in renewable energy</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-cogs feature-icon"></i>
                    <h3>Full-Service Solutions</h3>
                    <p>From design to installation to maintenance - we handle everything</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-map-marker-alt feature-icon"></i>
                    <h3>Local Presence</h3>
                    <p>Multiple offices across <?php echo COUNTRY; ?> for responsive service</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-check-double feature-icon"></i>
                    <h3>ESG Compliant</h3>
                    <p>Aligned with environmental, social, and governance standards</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-rocket feature-icon"></i>
                    <h3>Future-Ready</h3>
                    <p>Investing in next-gen technology including hydrogen solutions</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding: 60px 40px; border-radius: 15px; text-align: center; color: white;">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">Join Us in Building a Sustainable Future</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">
                Let's discuss how HelioPower can help power your operations with clean, renewable energy while reducing costs 
                and environmental impact.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="services.php" class="btn btn-primary" style="background: white; color: #1e3c72;">
                    <i class="fas fa-services" style="margin-right: 8px;"></i>Explore Services
                </a>
                <a href="contact.php" class="btn btn-outline">
                    <i class="fas fa-envelope" style="margin-right: 8px;"></i>Contact Us
                </a>
            </div>
        </section>
        
    </div>
</div>

<style>
    @media (max-width: 768px) {
        [style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
        
        /* Leadership section responsive layout */
        [style*="grid-template-columns: 1fr 1.2fr"] {
            grid-template-columns: 1fr !important;
        }
        
        /* Move CEO image to top on mobile */
        [style*="grid-template-columns: 1fr 1.2fr"] > div:first-child {
            order: -1;
        }
    }
</style>

<?php include 'footer.php'; ?>
