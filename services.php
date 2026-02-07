<?php 
$page_title = 'Our Services';
include 'header.php'; 
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['smart_grid']) ? $images['smart_grid'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="fas fa-bolt" style="margin-right: 15px;"></i>Our Services</h2>
        <p>Comprehensive renewable energy solutions for a sustainable future</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Introduction -->
        <section style="text-align: center; margin-bottom: 80px;">
            <h2 class="section-title">Complete Energy Solutions</h2>
            <p class="section-subtitle">
                HelioPower Group offers a full suite of renewable energy services designed to meet every aspect 
                of your clean energy transition. From solar installations to advanced energy storage, we've got you covered.
            </p>
        </section>

        <!-- Services Overview Grid (6 Main Services) -->
        <section style="margin-bottom: 80px;">
            <div class="feature-grid">
                <?php foreach ($services as $key => $service): ?>
                <div class="card">
                    <img src="<?php echo $service['image'] ?? ''; ?>" alt="<?php echo $service['title']; ?>" class="card-image">
                    <div class="card-content">
                        <div class="card-icon">
                            <i class="<?php echo $service['icon']; ?>"></i>
                        </div>
                        <h3 class="card-title"><?php echo $service['title']; ?></h3>
                        <p class="card-description"><?php echo $service['description']; ?></p>
                        <div style="margin-top: 20px;">
                            <a href="service-<?php echo $service['slug']; ?>.php" class="btn btn-primary" style="width: 100%; text-align: center;">
                                <i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Detailed Service Breakdowns -->
        
        <!-- Solar Systems -->
        <section style="margin-bottom: 80px; padding: 50px 40px; background: #fff3e0; border-radius: 15px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h2 style="color: #1e3c72; font-size: 2.2rem; margin-bottom: 20px;">
                        <i class="fas fa-sun" style="margin-right: 10px; color: #ffc107;"></i>Solar Systems
                    </h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Our solar solutions span from residential rooftop installations to megawatt-scale solar farms.
                    </p>
                    <h4 style="color: #2a5298; margin-top: 25px; margin-bottom: 15px; font-size: 1.1rem;">
                        <i class="fas fa-check-circle" style="margin-right: 8px;"></i>What's Included:
                    </h4>
                    <ul style="line-height: 2.2; color: #666;">
                        <li><i class="fas fa-check" style="color: #ff6b6b; margin-right: 8px;"></i> Site assessment and design</li>
                        <li><i class="fas fa-check" style="color: #ff6b6b; margin-right: 8px;"></i> Premium panel selection</li>
                        <li><i class="fas fa-check" style="color: #ff6b6b; margin-right: 8px;"></i> Professional installation</li>
                        <li><i class="fas fa-check" style="color: #ff6b6b; margin-right: 8px;"></i> Monitoring system setup</li>
                        <li><i class="fas fa-check" style="color: #ff6b6b; margin-right: 8px;"></i> 25-year warranty</li>
                    </ul>
                    <a href="service-solar-systems.php" class="btn btn-primary" style="margin-top: 25px;">
                        <i class="fas fa-solar-panel" style="margin-right: 8px;"></i>Explore Solar Solutions
                    </a>
                </div>
                <img src="<?php echo isset($images['solar_farm']) ? $images['solar_farm'] : ''; ?>" alt="Solar Installation" class="card-image" style="border-radius: 12px;">
            </div>
        </section>

        <!-- Energy Storage -->
        <section style="margin-bottom: 80px; padding: 50px 40px; background: #f3e5f5; border-radius: 15px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <img src="<?php echo isset($images['battery_storage']) ? $images['battery_storage'] : ''; ?>" alt="Energy Storage" class="card-image" style="border-radius: 12px;">
                <div>
                    <h2 style="color: #1e3c72; font-size: 2.2rem; margin-bottom: 20px;">
                        <i class="fas fa-battery-full" style="margin-right: 10px; color: #7c3aed;"></i>Energy Storage
                    </h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Advanced battery systems that store renewable energy for 24/7 power availability.
                    </p>
                    <h4 style="color: #2a5298; margin-top: 25px; margin-bottom: 15px; font-size: 1.1rem;">
                        <i class="fas fa-check-circle" style="margin-right: 8px;"></i>Battery Solutions:
                    </h4>
                    <ul style="line-height: 2.2; color: #666;">
                        <li><i class="fas fa-check" style="color: #7c3aed; margin-right: 8px;"></i> Lithium-ion technology</li>
                        <li><i class="fas fa-check" style="color: #7c3aed; margin-right: 8px;"></i> Smart management systems</li>
                        <li><i class="fas fa-check" style="color: #7c3aed; margin-right: 8px;"></i> Scalable capacity</li>
                        <li><i class="fas fa-check" style="color: #7c3aed; margin-right: 8px;"></i> Peak demand management</li>
                        <li><i class="fas fa-check" style="color: #7c3aed; margin-right: 8px;"></i> 10-15 year lifespan</li>
                    </ul>
                    <a href="service-energy-storage.php" class="btn btn-primary" style="margin-top: 25px;">
                        <i class="fas fa-battery-full" style="margin-right: 8px;"></i>Learn About Storage
                    </a>
                </div>
            </div>
        </section>

        <!-- EV Infrastructure -->
        <section style="margin-bottom: 80px; padding: 50px 40px; background: #e0f2f1; border-radius: 15px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <div>
                    <h2 style="color: #1e3c72; font-size: 2.2rem; margin-bottom: 20px;">
                        <i class="fas fa-charging-station" style="margin-right: 10px; color: #0097a7;"></i>EV Infrastructure
                    </h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Building Ukraine's electric vehicle charging network for sustainable transportation.
                    </p>
                    <h4 style="color: #2a5298; margin-top: 25px; margin-bottom: 15px; font-size: 1.1rem;">
                        <i class="fas fa-check-circle" style="margin-right: 8px;"></i>Charging Options:
                    </h4>
                    <ul style="line-height: 2.2; color: #666;">
                        <li><i class="fas fa-check" style="color: #0097a7; margin-right: 8px;"></i> Level 2 charging stations</li>
                        <li><i class="fas fa-check" style="color: #0097a7; margin-right: 8px;"></i> DC fast charging</li>
                        <li><i class="fas fa-check" style="color: #0097a7; margin-right: 8px;"></i> Home charging setup</li>
                        <li><i class="fas fa-check" style="color: #0097a7; margin-right: 8px;"></i> Fleet charging hubs</li>
                        <li><i class="fas fa-check" style="color: #0097a7; margin-right: 8px;"></i> Mobile app access</li>
                    </ul>
                    <a href="service-ev-infrastructure.php" class="btn btn-primary" style="margin-top: 25px;">
                        <i class="fas fa-charging-station" style="margin-right: 8px;"></i>Explore EV Solutions
                    </a>
                </div>
                <img src="<?php echo isset($images['ev_charging']) ? $images['ev_charging'] : ''; ?>" alt="EV Charging" class="card-image" style="border-radius: 12px;">
            </div>
        </section>

        <!-- Hydrogen Technology -->
        <section style="margin-bottom: 80px; padding: 50px 40px; background: #e8f5e9; border-radius: 15px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: center;">
                <img src="<?php echo isset($images['hydrogen_tech']) ? $images['hydrogen_tech'] : ''; ?>" alt="Hydrogen Technology" class="card-image" style="border-radius: 12px;">
                <div>
                    <h2 style="color: #1e3c72; font-size: 2.2rem; margin-bottom: 20px;">
                        <i class="fas fa-flask" style="margin-right: 10px; color: #2e7d32;"></i>Hydrogen Technology
                    </h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Next-generation clean energy solutions for industry and transportation.
                    </p>
                    <h4 style="color: #2a5298; margin-top: 25px; margin-bottom: 15px; font-size: 1.1rem;">
                        <i class="fas fa-check-circle" style="margin-right: 8px;"></i>Hydrogen Services:
                    </h4>
                    <ul style="line-height: 2.2; color: #666;">
                        <li><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i> Green hydrogen production</li>
                        <li><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i> Fuel cell systems</li>
                        <li><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i> Refueling stations</li>
                        <li><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i> Industrial applications</li>
                        <li><i class="fas fa-check" style="color: #2e7d32; margin-right: 8px;"></i> ESG compliance</li>
                    </ul>
                    <a href="service-hydrogen-technology.php" class="btn btn-primary" style="margin-top: 25px;">
                        <i class="fas fa-flask" style="margin-right: 8px;"></i>Learn About Hydrogen
                    </a>
                </div>
            </div>
        </section>

        <!-- Additional Services -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title">Additional Services</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div class="feature-box">
                    <i class="fas fa-tools feature-icon"></i>
                    <h3>System Maintenance</h3>
                    <p>Regular maintenance, inspections, and repairs to keep your renewable energy systems operating at peak performance</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3>Energy Monitoring</h3>
                    <p>Real-time monitoring and analytics to track energy production, consumption, and cost savings</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-lightbulb feature-icon"></i>
                    <h3>Energy Consulting</h3>
                    <p>Expert advice on energy efficiency, renewable integration, and cost optimization strategies</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-graduation-cap feature-icon"></i>
                    <h3>Training & Support</h3>
                    <p>Comprehensive training for your team on system operation, maintenance, and best practices</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-handshake feature-icon"></i>
                    <h3>Custom Solutions</h3>
                    <p>Tailored energy solutions designed specifically for your unique business needs</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-briefcase feature-icon"></i>
                    <h3>Project Management</h3>
                    <p>End-to-end project management from planning through installation and commissioning</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding: 60px 40px; border-radius: 15px; color: white; text-align: center;">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">
                <i class="fas fa-rocket" style="margin-right: 15px;"></i>Ready to Get Started?
            </h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">
                Let our renewable energy experts help you choose the perfect solution for your energy needs and sustainability goals.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary" style="background: white; color: #1e3c72;">
                    <i class="fas fa-calendar" style="margin-right: 8px;"></i>Schedule Consultation
                </a>
                <a href="projects.php" class="btn btn-outline">
                    <i class="fas fa-images" style="margin-right: 8px;"></i>View Our Projects
                </a>
            </div>
        </section>
        
    </div>
</div>

<style>
    @media (max-width: 768px) {
        /* Responsive grid for service sections */
        [style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
        
        /* Responsive padding */
        [style*="padding: 50px 40px"] {
            padding: 30px 20px !important;
        }
    }
</style>

<?php include 'footer.php'; ?>
