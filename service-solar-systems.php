<?php 
$page_title = 'Solar Systems';
include 'header.php'; 

$service = $services['solar'] ?? [];
$image = isset($images['solar_farm']) ? $images['solar_farm'] : '';
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['solar_farm']) ? $images['solar_farm'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="<?php echo $service['icon']; ?>" style="margin-right: 15px;"></i><?php echo $service['title']; ?></h2>
        <p>Harnessing the power of the sun for a sustainable future</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Main Introduction -->
        <section style="margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h2 class="section-title">Complete Solar Solutions</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Solar energy is the cleanest and most abundant renewable energy source available. HelioPower Group provides 
                        comprehensive solar solutions designed to meet the unique needs of businesses, factories, and residential properties across Ukraine.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        From initial assessment to installation and ongoing maintenance, our expert team ensures your solar system 
                        operates at peak efficiency for decades to come.
                    </p>
                    <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Get a Free Quote</a>
                </div>
                <div>
                    <img src="<?php echo $image; ?>" alt="Solar Farm Installation" class="card-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                </div>
            </div>
        </section>

        <!-- Service Offerings -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Our Solar Services</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-solar-panel feature-icon"></i>
                    <h3>Solar Panels</h3>
                    <p>High-efficiency photovoltaic panels from leading manufacturers, designed for maximum energy conversion and durability in any climate.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-microchip feature-icon"></i>
                    <h3>Inverters & Controllers</h3>
                    <p>Advanced power conversion systems that transform DC power into AC electricity with minimal losses and maximum efficiency.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-building feature-icon"></i>
                    <h3>Rooftop Installation</h3>
                    <p>Space-efficient rooftop solutions for commercial buildings, factories, and residential estates, maximizing energy production.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-tractor feature-icon"></i>
                    <h3>Solar Farms</h3>
                    <p>Large-scale solar installations on dedicated land, generating megawatts of clean power for grid supply and industrial use.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-tools feature-icon"></i>
                    <h3>Professional Installation</h3>
                    <p>Expert installation by certified technicians ensuring optimal performance, safety, and compliance with all regulations.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-headset feature-icon"></i>
                    <h3>Maintenance & Support</h3>
                    <p>Ongoing monitoring, maintenance, and technical support to keep your system operating at peak efficiency throughout its lifespan.</p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="gradient-section" style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; margin-bottom: 40px; text-align: center;">Why Choose Solar?</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center;">
                    <i class="fas fa-piggy-bank" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Save on Energy Costs</h3>
                    <p>Reduce your electricity bills by up to 80% with solar energy generation</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-leaf" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Environmental Impact</h3>
                    <p>Significantly reduce your carbon footprint and environmental impact</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-arrow-trending-up" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Increase Property Value</h3>
                    <p>Add value to your property while going green</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-shield" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>25+ Year Warranty</h3>
                    <p>Industry-leading warranty coverage and performance guarantees</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-sync" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Low Maintenance</h3>
                    <p>Minimal maintenance requirements with maximum uptime</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-globe" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Grid Independence</h3>
                    <p>Reduce dependence on traditional power grid</p>
                </div>
            </div>
        </section>

        <!-- Technology Highlights -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Advanced Technology</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <img src="<?php echo isset($images['solar_monitoring']) ? $images['solar_monitoring'] : ''; ?>" alt="Solar Monitoring System" class="card-image" style="border-radius: 12px;">
                </div>
                <div>
                    <h3 style="font-size: 1.8rem; color: #1e3c72; margin-bottom: 20px;">Smart Monitoring & Analytics</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Our integrated monitoring systems provide real-time data on your solar system's performance, allowing you to 
                        track energy generation, consumption, and savings.
                    </p>
                    <ul style="line-height: 2.2; font-size: 1rem; color: #666; margin-bottom: 20px;">
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Real-time performance tracking</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Mobile app access</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Predictive maintenance alerts</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Energy consumption insights</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: #fff3cd; padding: 50px 30px; border-radius: 15px; text-align: center;">
            <h2 style="color: #1e3c72; margin-bottom: 20px; font-size: 2rem;">Ready to Go Solar?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #555; max-width: 600px; margin-left: auto; margin-right: auto;">
                Let our solar experts assess your property and create a customized solution for your energy needs.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary"><i class="fas fa-calendar" style="margin-right: 8px;"></i>Schedule Consultation</a>
                <a href="projects.php" class="btn btn-secondary"><i class="fas fa-images" style="margin-right: 8px;"></i>View Projects</a>
            </div>
        </section>
        
    </div>
</div>

<style>
    @media (max-width: 768px) {
        /* Stack grids on mobile */
        [style*="grid-template-columns: 1fr 1fr"] {
            grid-template-columns: 1fr !important;
            gap: 30px !important;
        }
        
        /* Stack two-column grids */
        [style*="grid-template-columns: 1fr 1.2fr"],
        [style*="grid-template-columns: 1.2fr 1fr"] {
            grid-template-columns: 1fr !important;
        }
        
        /* Reduce padding on mobile */
        [style*="padding: 50px"] {
            padding: 30px 20px !important;
        }
        
        /* Adjust section margins */
        [style*="margin-bottom: 60px"] {
            margin-bottom: 40px !important;
        }
    }
</style>

<?php include 'footer.php'; ?>
