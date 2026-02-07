<?php 
$page_title = 'Home';
include 'header.php'; 
?>

<div class="hero-slider">
    <div class="slider-container">
        <div class="hero-slide active" style="background-image: url('<?php echo isset($images['hero_home']) ? $images['hero_home'] : ''; ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <h2><i class="fas fa-sun" style="margin-right: 15px;"></i>Powering Ukraine with Clean Energy</h2>
                <p>Leading provider of solar systems, energy storage, EV infrastructure, and hydrogen technology across <?php echo COUNTRY; ?></p>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('<?php echo isset($images['wind_turbines']) ? $images['wind_turbines'] : ''; ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <h2><i class="fas fa-leaf" style="margin-right: 15px;"></i>Sustainable Energy Solutions</h2>
                <p>Transforming Ukraine's energy landscape with innovative renewable technology and expert installation</p>
            </div>
        </div>
        <div class="hero-slide" style="background-image: url('<?php echo isset($images['ev_charging']) ? $images['ev_charging'] : ''; ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <h2><i class="fas fa-bolt" style="margin-right: 15px;"></i>The Future of Energy</h2>
                <p>Join thousands of satisfied customers across Ukraine in the transition to clean, sustainable power</p>
            </div>
        </div>
    </div>
    <button class="hero-slider-prev"><i class="fas fa-chevron-left"></i></button>
    <button class="hero-slider-next"><i class="fas fa-chevron-right"></i></button>
    <div class="hero-slider-dots"></div>
</div>

<div class="content">
    <div class="container">
        
        <!-- What We Do Section -->
        <section style="text-align: center; margin-bottom: 80px;">
            <h2 class="section-title">What We Do</h2>
            <p class="section-subtitle">
                We build renewable energy solutions, install advanced battery systems, power factories, operate mini-grids, 
                manage clean energy systems, trade power, and provide comprehensive maintenance services across <?php echo COUNTRY; ?>.
            </p>
        </section>

        <!-- Services Grid with Images (6 Main Services) -->
        <section style="margin-bottom: 80px;">
            <div class="feature-grid">
                <?php foreach ($services as $key => $service): ?>
                <div class="card">
                    <div style="position: relative; height: 200px; overflow: hidden;">
                        <img src="<?php echo $service['image'] ?? ''; ?>" alt="<?php echo $service['title']; ?>" class="card-image" style="height: 100%; object-fit: cover;">
                        <div style="position: absolute; top: 15px; right: 15px; background: rgba(30, 60, 114, 0.9); padding: 12px 15px; border-radius: 50%; color: white; font-size: 1.8rem;">
                            <i class="<?php echo $service['icon']; ?>"></i>
                        </div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title"><?php echo $service['title']; ?></h3>
                        <p class="card-description"><?php echo $service['description']; ?></p>
                        <div style="margin-top: 20px;">
                            <a href="service-<?php echo $service['slug']; ?>.php" style="color: #1e3c72; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="gradient-section" style="margin-bottom: 80px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 50px; text-align: center;">Why Choose HelioPower?</h2>
            <div class="feature-grid">
                <div style="text-align: center;">
                    <i class="fas fa-trophy" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Industry Leader</h3>
                    <p>Trusted provider of renewable energy solutions across Ukraine with proven track record</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-leaf" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px;">ESG Committed</h3>
                    <p>Aligned with climate policies and sustainability goals for a better future</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-cogs" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Complete Solutions</h3>
                    <p>From installation to maintenance, we provide end-to-end service excellence</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-users" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Expert Team</h3>
                    <p>Skilled professionals with years of experience delivering quality results</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-headset" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px;">24/7 Support</h3>
                    <p>Dedicated support team available round the clock for your peace of mind</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-dollar-sign" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3 style="font-size: 1.3rem; margin-bottom: 10px;">Cost Savings</h3>
                    <p>Significant reduction in energy costs with proven ROI within 5-7 years</p>
                </div>
            </div>
        </section>

        <!-- Featured Projects Preview -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title">Featured Projects</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-bottom: 40px;">
                <div class="card">
                    <img src="<?php echo isset($images['project_solar']) ? $images['project_solar'] : ''; ?>" alt="Solar Farm Project" class="card-image">
                    <div class="card-content">
                        <h4 style="color: #1e3c72; margin-bottom: 10px; font-size: 1.2rem;">5 MW Solar Farm</h4>
                        <p style="color: #666; margin-bottom: 15px; font-size: 0.95rem;">Large-scale solar installation providing clean power to 1000+ households</p>
                        <span style="display: inline-block; background: #e3f2fd; color: #1e3c72; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem;">Solar Energy</span>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo isset($images['project_battery']) ? $images['project_battery'] : ''; ?>" alt="Battery Storage Project" class="card-image">
                    <div class="card-content">
                        <h4 style="color: #1e3c72; margin-bottom: 10px; font-size: 1.2rem;">EV Charging Network</h4>
                        <p style="color: #666; margin-bottom: 15px; font-size: 0.95rem;">20-station fast-charging network across major Ukrainian cities</p>
                        <span style="display: inline-block; background: #f3e5f5; color: #1e3c72; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem;">EV Infrastructure</span>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo isset($images['industrial_solar']) ? $images['industrial_solar'] : ''; ?>" alt="Industrial Solar" class="card-image">
                    <div class="card-content">
                        <h4 style="color: #1e3c72; margin-bottom: 10px; font-size: 1.2rem;">Factory Power System</h4>
                        <p style="color: #666; margin-bottom: 15px; font-size: 0.95rem;">2 MW rooftop solar with battery storage for industrial operations</p>
                        <span style="display: inline-block; background: #e8f5e9; color: #1e3c72; padding: 6px 12px; border-radius: 20px; font-size: 0.85rem;">Industrial</span>
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                <a href="projects.php" class="btn btn-primary"><i class="fas fa-images" style="margin-right: 8px;"></i>View All Projects</a>
            </div>
        </section>

        <!-- Services Include Section -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title">Our Complete Service Range</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                <div>
                    <img src="<?php echo isset($images['team_office']) ? $images['team_office'] : ''; ?>" alt="Team at Work" class="card-image" style="border-radius: 12px; margin-bottom: 30px;">
                </div>
                <div>
                    <ul style="list-style: none; line-height: 2.8; font-size: 1.05rem;">
                        <?php foreach ($project_types as $project): ?>
                        <li style="color: #555; padding: 8px 0; border-bottom: 1px solid #e0e0e0;">
                            <i class="fas fa-check" style="color: #4caf50; margin-right: 12px; font-weight: bold;"></i><?php echo $project; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Statistics/Impact -->
        <section style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding: 60px 40px; border-radius: 15px; margin-bottom: 80px; color: white;">
            <h2 class="section-title" style="color: white; margin-bottom: 50px;">Our Impact</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px; text-align: center;">
                <div>
                    <div style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;">500+</div>
                    <p style="font-size: 1.1rem;">Projects Completed</p>
                </div>
                <div>
                    <div style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;">150 MW</div>
                    <p style="font-size: 1.1rem;">Renewable Capacity</p>
                </div>
                <div>
                    <div style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;">500K+</div>
                    <p style="font-size: 1.1rem;">Tons CO2 Avoided</p>
                </div>
                <div>
                    <div style="font-size: 3rem; font-weight: 700; margin-bottom: 10px;">10,000+</div>
                    <p style="font-size: 1.1rem;">Lives Impacted</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: #fff3cd; padding: 50px 40px; border-radius: 15px; text-align: center;">
            <h2 style="color: #1e3c72; margin-bottom: 20px; font-size: 2rem;"><i class="fas fa-bolt" style="margin-right: 10px;"></i>Ready to Go Green?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #555; max-width: 700px; margin-left: auto; margin-right: auto;">
                Contact our renewable energy experts today to discuss your energy needs and discover how HelioPower can help you 
                transition to clean, sustainable energy while reducing costs.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary" style="font-size: 1.05rem; padding: 16px 42px;">
                    <i class="fas fa-envelope" style="margin-right: 8px;"></i>Get In Touch
                </a>
                <a href="services.php" class="btn btn-secondary" style="font-size: 1.05rem; padding: 16px 42px;">
                    <i class="fas fa-services" style="margin-right: 8px;"></i>Explore Services
                </a>
            </div>
        </section>
        
    </div>
</div>

<style>
    @media (max-width: 768px) {
        .content > .container > section > div[style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<?php include 'footer.php'; ?>
