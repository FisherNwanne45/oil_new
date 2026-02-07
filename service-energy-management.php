<?php 
$page_title = 'Energy Management';
include 'header.php'; 

$service = $services['energy_management'] ?? [];
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['energy_management']) ? $images['energy_management'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="<?php echo $service['icon']; ?>" style="margin-right: 15px;"></i><?php echo $service['title']; ?></h2>
        <p>Intelligent systems for optimal energy distribution and efficiency</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Main Introduction -->
        <section style="margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h2 class="section-title">Energy Management Solutions</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Effective energy management is critical for reducing operational costs and meeting sustainability goals. 
                        HelioPower Group delivers advanced energy management systems that monitor, analyze, and optimize your energy 
                        consumption across all facilities and operations.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        Our integrated solutions provide real-time insights into energy usage patterns, identify efficiency opportunities, 
                        and automate demand response to minimize costs while supporting your renewable energy transition.
                    </p>
                    <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Start Optimizing Today</a>
                </div>
                <div>
                    <img src="<?php echo isset($images['smart_grid']) ? $images['smart_grid'] : ''; ?>" alt="Energy Management System" class="card-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                </div>
            </div>
        </section>

        <!-- Service Offerings -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Energy Management Services</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3>Energy Audits</h3>
                    <p>Comprehensive analysis of your energy consumption, identifying inefficiencies and savings opportunities.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-server feature-icon"></i>
                    <h3>Smart Metering</h3>
                    <p>Advanced metering infrastructure providing real-time consumption data and detailed usage analytics.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-tachometer-alt feature-icon"></i>
                    <h3>Demand Response</h3>
                    <p>Automated systems to manage peak demand and reduce consumption during high-cost periods.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-wifi feature-icon"></i>
                    <h3>IoT Integration</h3>
                    <p>Connected devices and sensors providing comprehensive monitoring across all building systems.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-desktop feature-icon"></i>
                    <h3>Dashboard & Analytics</h3>
                    <p>Intuitive web and mobile dashboards with advanced analytics for data-driven decision making.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-cogs feature-icon"></i>
                    <h3>System Optimization</h3>
                    <p>Continuous tuning and optimization of HVAC, lighting, and equipment systems for peak efficiency.</p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="gradient-section" style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; margin-bottom: 40px; text-align: center;">Key Benefits</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center;">
                    <i class="fas fa-dollar-sign" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Reduced Costs</h3>
                    <p>Cut energy expenses by 15-30% through smart optimization and demand management</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-leaf" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Lower Emissions</h3>
                    <p>Reduce carbon footprint by optimizing consumption and increasing renewable integration</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-eye" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Full Visibility</h3>
                    <p>Real-time insights into energy usage patterns across all facilities and departments</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-sync" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Automated Control</h3>
                    <p>Intelligent systems automatically optimize operations without manual intervention</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-shield" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Reliability</h3>
                    <p>Ensure consistent operations with load balancing and predictive maintenance capabilities</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-chart-pie" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Smart Reporting</h3>
                    <p>Detailed reports for compliance, budgeting, and strategic energy planning</p>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Energy Management Technology</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h3 style="font-size: 1.8rem; color: #1e3c72; margin-bottom: 20px;">Advanced Monitoring Platform</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Our integrated Energy Management System (EMS) provides comprehensive monitoring and control of all energy 
                        systems, enabling organizations to optimize performance and reduce operational costs significantly.
                    </p>
                    <ul style="line-height: 2.2; font-size: 1rem; color: #666;">
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Real-time consumption tracking</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Predictive analytics and forecasting</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Automated demand response</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Multi-facility dashboard access</li>
                    </ul>
                </div>
                <div>
                    <img src="<?php echo isset($images['energy_management']) ? $images['energy_management'] : ''; ?>" alt="Energy Management Dashboard" class="card-image" style="border-radius: 12px;">
                </div>
            </div>
        </section>

        <!-- Application Areas -->
        <section style="margin-bottom: 60px; background: #e8f5e9; padding: 50px; border-radius: 12px;">
            <h2 class="section-title" style="text-align: center; margin-bottom: 40px;">Applications</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <div>
                    <h3 style="color: #1e3c72; margin-bottom: 15px;"><i class="fas fa-building" style="margin-right: 10px; color: #ffd700;"></i>Commercial Buildings</h3>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">
                        Optimize HVAC, lighting, and equipment in office buildings, shopping centers, and commercial facilities.
                    </p>
                </div>
                <div>
                    <h3 style="color: #1e3c72; margin-bottom: 15px;"><i class="fas fa-industry" style="margin-right: 10px; color: #ffd700;"></i>Industrial Facilities</h3>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">
                        Manage complex industrial processes and equipment to reduce energy waste and increase productivity.
                    </p>
                </div>
                <div>
                    <h3 style="color: #1e3c72; margin-bottom: 15px;"><i class="fas fa-hospital" style="margin-right: 10px; color: #ffd700;"></i>Healthcare Facilities</h3>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">
                        Maintain critical systems while optimizing energy use in hospitals, clinics, and medical facilities.
                    </p>
                </div>
                <div>
                    <h3 style="color: #1e3c72; margin-bottom: 15px;"><i class="fas fa-graduation-cap" style="margin-right: 10px; color: #ffd700;"></i>Educational Institutions</h3>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 20px;">
                        Reduce operating costs while maintaining comfortable learning and research environments.
                    </p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="text-align: center;">
            <h2 style="color: #1e3c72; margin-bottom: 20px; font-size: 2rem;">Optimize Your Energy Use Today</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #555; max-width: 600px; margin-left: auto; margin-right: auto;">
                Discover how HelioPower's energy management systems can reduce your costs and improve sustainability.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary"><i class="fas fa-calendar" style="margin-right: 8px;"></i>Schedule a Consultation</a>
                <a href="projects.php" class="btn btn-secondary"><i class="fas fa-images" style="margin-right: 8px;"></i>View Case Studies</a>
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
