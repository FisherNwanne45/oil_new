<?php 
$page_title = 'Wind Energy';
include 'header.php'; 

$service = $services['wind'] ?? [];
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['wind_turbines']) ? $images['wind_turbines'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="<?php echo $service['icon']; ?>" style="margin-right: 15px;"></i><?php echo $service['title']; ?></h2>
        <p>Harnessing the power of wind for sustainable energy generation</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Main Introduction -->
        <section style="margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h2 class="section-title">Wind Energy Solutions</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Wind energy is one of the fastest-growing renewable energy sources. HelioPower Group specializes in 
                        comprehensive wind turbine systems and farm development for large-scale, utility-class energy generation.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        From site assessment to turbine installation, grid integration, and ongoing maintenance, our expert team 
                        ensures your wind farm generates maximum clean power efficiently and reliably.
                    </p>
                    <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Get a Free Assessment</a>
                </div>
                <div>
                    <img src="<?php echo isset($images['wind_turbines']) ? $images['wind_turbines'] : ''; ?>" alt="Wind Turbine Installation" class="card-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                </div>
            </div>
        </section>

        <!-- Service Offerings -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Our Wind Services</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-fan feature-icon"></i>
                    <h3>Wind Turbines</h3>
                    <p>State-of-the-art turbines from leading manufacturers, optimized for local wind conditions and maximum energy output.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-map-marked feature-icon"></i>
                    <h3>Site Assessment</h3>
                    <p>Comprehensive wind resource analysis, environmental studies, and site evaluation for optimal turbine placement.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-hammer feature-icon"></i>
                    <h3>Installation & Setup</h3>
                    <p>Expert installation by certified technicians with complete grid integration and grid-connection compliance.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-network-wired feature-icon"></i>
                    <h3>Grid Integration</h3>
                    <p>Seamless connection to national grid infrastructure with all regulatory compliance and synchronization services.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-tools feature-icon"></i>
                    <h3>Maintenance & Support</h3>
                    <p>Preventive maintenance, repairs, and 24/7 technical support to ensure maximum uptime and performance.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3>Performance Monitoring</h3>
                    <p>Real-time monitoring systems tracking energy production, efficiency metrics, and predictive maintenance alerts.</p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="gradient-section" style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; margin-bottom: 40px; text-align: center;">Why Choose Wind Energy?</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center;">
                    <i class="fas fa-leaf" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Zero Emissions</h3>
                    <p>Clean, renewable energy with no greenhouse gas emissions throughout operation</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-chart-line" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>High Capacity Factor</h3>
                    <p>Modern turbines achieve 40-50% capacity factors for consistent power generation</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-coins" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Cost-Effective</h3>
                    <p>Low operating costs and long-term ROI from stable energy generation</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-shield" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>25+ Year Lifespan</h3>
                    <p>Durable turbines designed for decades of reliable operation and energy generation</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-sync" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Low Maintenance</h3>
                    <p>Minimal maintenance requirements with exceptional uptime and reliability</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-globe" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Grid Independence</h3>
                    <p>Reduce reliance on traditional energy sources and centralized power grids</p>
                </div>
            </div>
        </section>

        <!-- Technology Highlights -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Advanced Wind Technology</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <img src="<?php echo isset($images['wind_energy']) ? $images['wind_energy'] : ''; ?>" alt="Wind Energy Technology" class="card-image" style="border-radius: 12px;">
                </div>
                <div>
                    <h3 style="font-size: 1.8rem; color: #1e3c72; margin-bottom: 20px;">Smart Monitoring & Control</h3>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Our integrated SCADA systems provide real-time monitoring of wind farm performance, energy production, 
                        and equipment health, allowing for proactive maintenance and optimized operations.
                    </p>
                    <ul style="line-height: 2.2; font-size: 1rem; color: #666; margin-bottom: 20px;">
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Real-time wind speed and power tracking</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Mobile app and web dashboard access</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Predictive maintenance algorithms</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Automated performance optimization</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: #e8f5e9; padding: 50px 30px; border-radius: 15px; text-align: center;">
            <h2 style="color: #1e3c72; margin-bottom: 20px; font-size: 2rem;">Ready to Harness Wind Power?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #555; max-width: 600px; margin-left: auto; margin-right: auto;">
                Let our wind energy experts assess your site and design a customized solution for maximum energy generation.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary"><i class="fas fa-calendar" style="margin-right: 8px;"></i>Schedule Site Assessment</a>
                <a href="projects.php" class="btn btn-secondary"><i class="fas fa-images" style="margin-right: 8px;"></i>View Wind Projects</a>
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
