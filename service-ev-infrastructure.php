<?php 
$page_title = 'EV Infrastructure';
include 'header.php'; 

$service = $services['ev'] ?? [];
$image = isset($images['ev_charging']) ? $images['ev_charging'] : '';
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['ev_charging']) ? $images['ev_charging'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="<?php echo $service['icon']; ?>" style="margin-right: 15px;"></i><?php echo $service['title']; ?></h2>
        <p>Building the future of transportation with comprehensive EV charging networks</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Main Introduction -->
        <section style="margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h2 class="section-title">Electric Vehicle Infrastructure</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Electric vehicles are transforming transportation, and reliable charging infrastructure is essential for their adoption. 
                        HelioPower Group provides comprehensive EV charging solutions across Ukraine.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        From public charging stations to dedicated fleet hubs and residential installations, we provide turnkey solutions 
                        tailored to your specific needs.
                    </p>
                    <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Get a Free Quote</a>
                </div>
                <div>
                    <img src="<?php echo $image; ?>" alt="EV Charging Station" class="card-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                </div>
            </div>
        </section>

        <!-- Charging Types -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Charging Solutions</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-plug feature-icon"></i>
                    <h3>Level 2 Charging</h3>
                    <p>Standard AC charging for homes, workplaces, and public locations. Perfect for daily charging needs.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-zap feature-icon"></i>
                    <h3>DC Fast Charging</h3>
                    <p>Rapid DC charging for commercial locations, highways, and fleet operations. 30-80% charge in 20-30 minutes.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-building feature-icon"></i>
                    <h3>Workplace Charging</h3>
                    <p>Charging solutions for employee parking areas, helping reduce commuting costs and emissions.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-home feature-icon"></i>
                    <h3>Home Installation</h3>
                    <p>Dedicated home charging stations installed and configured for optimal charging and vehicle management.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-truck feature-icon"></i>
                    <h3>Fleet Charging Hubs</h3>
                    <p>Comprehensive charging infrastructure for commercial fleet operations and electric bus stations.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-road feature-icon"></i>
                    <h3>Highway Chargers</h3>
                    <p>Ultra-fast charging stations along major highways for long-distance electric vehicle travel.</p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="gradient-section" style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; margin-bottom: 40px; text-align: center;">EV Charging Benefits</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center;">
                    <i class="fas fa-leaf" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Zero Emissions</h3>
                    <p>Support the transition to clean transportation and reduce urban air pollution</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-dollar-sign" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Lower Operating Costs</h3>
                    <p>Electricity is significantly cheaper than fuel, reducing vehicle operating expenses</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-traffic-light" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Traffic Reduction</h3>
                    <p>Support sustainable urban mobility and reduced traffic congestion</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-network-wired" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Smart Connectivity</h3>
                    <p>IoT-enabled stations with real-time availability and remote management</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-building feature-icon" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Property Value</h3>
                    <p>EV charging stations increase property attractiveness and value</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-headset" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>24/7 Support</h3>
                    <p>Comprehensive support and maintenance for all charging stations</p>
                </div>
            </div>
        </section>

        <!-- Network Expansion -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Our Charging Network</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <img src="<?php echo isset($images['ev_network']) ? $images['ev_network'] : ''; ?>" alt="EV Network Map" class="card-image" style="border-radius: 12px;">
                </div>
                <div>
                    <h3 style="font-size: 1.8rem; color: #1e3c72; margin-bottom: 20px;">Expanding Across Ukraine</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        We are rapidly expanding our EV charging network to provide convenient access across all major cities and highways.
                    </p>
                    <ul style="line-height: 2.2; font-size: 1rem; color: #666; margin-bottom: 20px;">
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> 50+ public charging stations</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> 20+ fleet charging hubs</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> 10+ highway fast-chargers</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> 100+ home installations</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Real-time app for charger location</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: #fff3cd; padding: 50px 30px; border-radius: 15px; text-align: center;">
            <h2 style="color: #1e3c72; margin-bottom: 20px; font-size: 2rem;">Join the EV Revolution</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #555; max-width: 600px; margin-left: auto; margin-right: auto;">
                Whether you're a business, fleet operator, or individual, we have the perfect charging solution for you.
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
