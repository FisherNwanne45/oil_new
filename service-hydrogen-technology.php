<?php 
$page_title = 'Hydrogen Technology';
include 'header.php'; 

$service = $services['hydrogen'] ?? [];
$image = isset($images['hydrogen_tech']) ? $images['hydrogen_tech'] : '';
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['hydrogen_tech']) ? $images['hydrogen_tech'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="<?php echo $service['icon']; ?>" style="margin-right: 15px;"></i><?php echo $service['title']; ?></h2>
        <p>Next-generation clean energy aligned with ESG and climate policies</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Main Introduction -->
        <section style="margin-bottom: 60px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h2 class="section-title">Hydrogen Technology Solutions</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 20px;">
                        Hydrogen is poised to be the energy carrier of the future. It offers zero-emission energy with no greenhouse gases, 
                        making it ideal for heavy industry, power generation, and transportation applications.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        HelioPower Group is at the forefront of hydrogen technology development in Ukraine, helping businesses transition 
                        to clean energy while meeting their ESG commitments and climate goals.
                    </p>
                    <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Get a Free Quote</a>
                </div>
                <div>
                    <img src="<?php echo $image; ?>" alt="Hydrogen Technology" class="card-image" style="border-radius: 12px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
                </div>
            </div>
        </section>

        <!-- Hydrogen Solutions -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Our Hydrogen Solutions</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-industry feature-icon"></i>
                    <h3>Green Hydrogen Production</h3>
                    <p>Electrolysis-based hydrogen production using renewable energy sources with zero carbon emissions.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-gas-pump feature-icon"></i>
                    <h3>Hydrogen Refueling Stations</h3>
                    <p>Complete hydrogen refueling infrastructure for fuel cell vehicles and industrial applications.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-fan feature-icon"></i>
                    <h3>Fuel Cell Technology</h3>
                    <p>Fuel cell systems for power generation, heating, and transportation with exceptional efficiency.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-flask feature-icon"></i>
                    <h3>Hydrogen Storage</h3>
                    <p>Advanced storage solutions for safe, efficient hydrogen storage and transportation.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-industry feature-icon"></i>
                    <h3>Industrial Applications</h3>
                    <p>Hydrogen solutions for industrial processes, heating, and manufacturing with reduced emissions.</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-handshake feature-icon"></i>
                    <h3>Consulting & Support</h3>
                    <p>Expert guidance on hydrogen technology implementation and strategy for your organization.</p>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="gradient-section" style="margin-bottom: 60px;">
            <h2 style="font-size: 2rem; margin-bottom: 40px; text-align: center;">Why Hydrogen?</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="text-align: center;">
                    <i class="fas fa-cloud" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Zero Carbon Emissions</h3>
                    <p>Produces only water vapor as byproduct, eliminating greenhouse gas emissions</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-star" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>High Energy Density</h3>
                    <p>Hydrogen contains 3x more energy per kilogram than gasoline</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-bolt" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Fast Refueling</h3>
                    <p>Fuel cell vehicles can be refueled in 3-5 minutes, comparable to gasoline</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-leaf" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>ESG Compliance</h3>
                    <p>Aligns with environmental, social, and governance goals</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-landmark" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Climate Policy</h3>
                    <p>Supports national and international climate commitments</p>
                </div>
                <div style="text-align: center;">
                    <i class="fas fa-chart-line" style="font-size: 3rem; margin-bottom: 15px;"></i>
                    <h3>Future-Ready</h3>
                    <p>Invest in tomorrow's energy technology today</p>
                </div>
            </div>
        </section>

        <!-- Applications -->
        <section style="margin-bottom: 60px;">
            <h2 class="section-title">Hydrogen Applications</h2>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
                <div>
                    <h3 style="font-size: 1.8rem; color: #1e3c72; margin-bottom: 20px;">Industrial & Commercial Uses</h3>
                    <ul style="line-height: 2.4; font-size: 1rem; color: #666; margin-bottom: 20px;">
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Heavy industry power generation</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Steel and petrochemical manufacturing</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Heating and district energy</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Hydrogen fuel cells for vehicles</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Grid energy storage</li>
                        <li><i class="fas fa-check" style="color: #4caf50; margin-right: 10px;"></i> Data center power backup</li>
                    </ul>
                </div>
                <div>
                    <img src="<?php echo isset($images['hydrogen_apps']) ? $images['hydrogen_apps'] : ''; ?>" alt="Hydrogen Applications" class="card-image" style="border-radius: 12px;">
                </div>
            </div>
        </section>

        <!-- Technology Overview -->
        <section style="background: #e8f5e9; padding: 50px 40px; border-radius: 15px; margin-bottom: 60px;">
            <h3 style="font-size: 1.8rem; color: #1e3c72; margin-bottom: 30px; text-align: center;">Our Hydrogen Expertise</h3>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <div style="background: white; padding: 25px; border-radius: 10px;">
                    <h4 style="color: #1e3c72; margin-bottom: 12px;"><i class="fas fa-flask" style="margin-right: 10px; color: #2a5298;"></i>Research & Development</h4>
                    <p style="color: #666; font-size: 0.95rem;">Continuous R&D to improve hydrogen production efficiency and reduce costs</p>
                </div>
                <div style="background: white; padding: 25px; border-radius: 10px;">
                    <h4 style="color: #1e3c72; margin-bottom: 12px;"><i class="fas fa-certificate" style="margin-right: 10px; color: #2a5298;"></i>Industry Certification</h4>
                    <p style="color: #666; font-size: 0.95rem;">Certified and compliant with international hydrogen standards and safety protocols</p>
                </div>
                <div style="background: white; padding: 25px; border-radius: 10px;">
                    <h4 style="color: #1e3c72; margin-bottom: 12px;"><i class="fas fa-globe" style="margin-right: 10px; color: #2a5298;"></i>Global Partnerships</h4>
                    <p style="color: #666; font-size: 0.95rem;">Working with leading hydrogen technology providers and international organizations</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: #fff3cd; padding: 50px 30px; border-radius: 15px; text-align: center;">
            <h2 style="color: #1e3c72; margin-bottom: 20px; font-size: 2rem;">Ready for Clean Hydrogen Energy?</h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; color: #555; max-width: 600px; margin-left: auto; margin-right: auto;">
                Let our hydrogen experts help you develop a hydrogen strategy that aligns with your ESG and climate goals.
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
