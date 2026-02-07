<?php 
$page_title = 'Energy Storage';
include 'header.php'; 

$service = $services['storage'] ?? [];
$image = isset($images['battery_storage']) ? $images['battery_storage'] : '';
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['battery_storage']) ? $images['battery_storage'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="<?php echo $service['icon']; ?>" style="margin-right: 15px;"></i><?php echo $service['title']; ?></h2>
        <p>Advanced battery systems for reliable, efficient energy management</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Main Introduction -->
        <section style="margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h2 class="section-title">Energy Storage Solutions</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Energy storage is essential for maximizing the benefits of renewable energy. Our advanced battery systems store excess 
                        energy generated during peak production times for use when production is lower or demand is higher.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        With smart grid technology and battery management systems, we ensure optimal energy utilization, reduced peak demand charges, 
                        and improved grid stability.
                    </p>
                    <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Get a Free Quote</a>
                </div>
                <div>
                    <img src="<?php echo $image; ?>" alt="Energy Storage System" class="card-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                </div>
            </div>
        </section>

        <!-- Service Offerings -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Storage Solutions We Offer</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-battery-full feature-icon"></i>
                    <h3>Lithium-Ion Batteries</h3>
                    <p>Modern, high-efficiency battery technology with extended cycle life and superior performance characteristics.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-cube feature-icon"></i>
                    <h3>Battery Management Systems</h3>
                    <p>Intelligent systems that optimize charging/discharging cycles, extend battery life, and ensure safe operation.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-network-wired feature-icon"></i>
                    <h3>Smart Grid Integration</h3>
                    <p>Seamless integration with existing grids and solar systems for efficient energy management and peak shaving.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-power-off feature-icon"></i>
                    <h3>Backup Power Systems</h3>
                    <p>Reliable backup power during grid outages, ensuring uninterrupted power supply for critical operations.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-sliders feature-icon"></i>
                    <h3>Load Balancing</h3>
                    <p>Automatic load balancing to manage demand response and reduce strain on electrical infrastructure.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3>Real-time Monitoring</h3>
                    <p>Advanced monitoring systems with detailed analytics and optimization recommendations.</p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="gradient-section" style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; margin-bottom: 40px; text-align: center;">Key Benefits</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center;">
                    <i class="fas fa-bolt" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Peak Demand Management</h3>
                    <p>Reduce demand charges by storing energy during off-peak hours</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-lock" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Grid Stability</h3>
                    <p>Contribute to grid stability and frequency regulation</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-clock" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>24/7 Power Supply</h3>
                    <p>Ensure continuous power supply regardless of weather or time</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-handshake" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Increased Resilience</h3>
                    <p>Build resilience against power outages and grid failures</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-dollar-sign" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Lower Energy Costs</h3>
                    <p>Significantly reduce electricity costs through smart storage</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-chart-pie" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>ROI Optimization</h3>
                    <p>Maximize return on investment through efficient energy management</p>
                </div>
            </div>
        </section>

        <!-- Technology Highlights -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Advanced Battery Technology</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <img src="<?php echo isset($images['battery_tech']) ? $images['battery_tech'] : ''; ?>" alt="Battery Technology" class="card-image" style="border-radius: 12px;">
                </div>
                <div>
                    <h3 style="font-size: 1.8rem; color: #1e3c72; margin-bottom: 20px;">Next-Generation Energy Storage</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Our battery systems use the latest lithium-ion and advanced storage technologies, providing:
                    </p>
                    <ul style="line-height: 2.2; font-size: 1rem; color: #666; margin-bottom: 20px;">
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> 90%+ round-trip efficiency</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> 10-15 year lifespan</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Temperature-regulated operation</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Advanced safety features</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: #fff3cd; padding: 50px 30px; border-radius: 15px; text-align: center;">
            <h2 style="color: #1e3c72; margin-bottom: 20px; font-size: 2rem;">Enhance Your Energy Independence</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #555; max-width: 600px; margin-left: auto; margin-right: auto;">
                Our energy storage experts will help you design the perfect battery system for your needs.
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
