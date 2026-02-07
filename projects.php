<?php 
$page_title = 'Our Projects';
include 'header.php'; 
?>

<div class="hero" style="background-image: linear-gradient(135deg, rgba(30, 60, 114, 0.85), rgba(42, 82, 152, 0.85)), url('<?php echo isset($images['industrial_solar']) ? $images['industrial_solar'] : ''; ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <h2><i class="fas fa-briefcase" style="margin-right: 15px;"></i>Our Projects</h2>
        <p>Transforming Ukraine's energy landscape with renewable energy solutions across multiple regions</p>
    </div>
</div>

<div class="content">
    <div class="container">
        
        <!-- Introduction -->
        <section style="text-align: center; margin-bottom: 80px;">
            <h2 class="section-title">Project Portfolio</h2>
            <p class="section-subtitle">
                From megawatt-scale solar farms to comprehensive EV charging networks, HelioPower has successfully 
                delivered over 500 renewable energy projects across Ukraine.
            </p>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-solar-panel feature-icon"></i>
                    <h3>Solar Plants</h3>
                    <p>Large-scale installations</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-battery-full feature-icon"></i>
                    <h3>Battery Systems</h3>
                    <p>Energy storage solutions</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-industry feature-icon"></i>
                    <h3>Factory Power</h3>
                    <p>Industrial solutions</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-network-wired feature-icon"></i>
                    <h3>Mini-Grids</h3>
                    <p>Community solutions</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-charging-station feature-icon"></i>
                    <h3>EV Charging</h3>
                    <p>Transportation electrification</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-fan feature-icon"></i>
                    <h3>Wind Energy</h3>
                    <p>Wind power systems</p>
                </div>
            </div>
        </section>

        <!-- Featured Projects -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title">Featured Projects</h2>
            
            <!-- Project 1: Solar Farms -->
            <div class="card" style="margin-bottom: 40px; overflow: visible;">
                <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 0; overflow: hidden;">
                    <div>
                        <img src="<?php echo isset($images['solar_farm']) ? $images['solar_farm'] : ''; ?>" alt="5 MW Solar Farm" class="card-image" style="height: 100%; border-radius: 12px 0 0 12px;">
                    </div>
                    <div class="card-content">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                            <i class="fas fa-solar-panel" style="font-size: 2rem; color: #ffc107;"></i>
                            <h3 class="card-title" style="margin: 0;">5 MW Solar Farm - Kyiv Region</h3>
                        </div>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Large-scale solar installation providing clean energy to 1,000+ households and several industrial facilities. 
                            Features cutting-edge panel technology with advanced monitoring systems and grid integration.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;">
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Capacity</p>
                                <p style="color: #666;">5 MW / 6,500 panels</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Annual Output</p>
                                <p style="color: #666;">6.5 GWh</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">CO2 Saved</p>
                                <p style="color: #666;">3,250 tons/year</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Completion</p>
                                <p style="color: #666;">Q3 2023</p>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Similar Project?</a>
                    </div>
                </div>
            </div>

            <!-- Project 2: Factory Rooftop Solar -->
            <div class="card" style="margin-bottom: 40px; overflow: visible;">
                <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 0; overflow: hidden;">
                    <div class="card-content">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                            <i class="fas fa-industry" style="font-size: 2rem; color: #4caf50;"></i>
                            <h3 class="card-title" style="margin: 0;">2.5 MW Rooftop Solar + 500 kWh Battery - Lviv</h3>
                        </div>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Integrated solar and energy storage system for a manufacturing facility. The solution reduces operating costs by 35% 
                            and provides backup power during grid outages. Smart monitoring tracks real-time performance.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;">
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Solar Capacity</p>
                                <p style="color: #666;">2.5 MW</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Battery Storage</p>
                                <p style="color: #666;">500 kWh</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Annual Savings</p>
                                <p style="color: #666;">$200K+</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Completion</p>
                                <p style="color: #666;">Q1 2023</p>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Similar Project?</a>
                    </div>
                    <div>
                        <img src="<?php echo isset($images['industrial_solar']) ? $images['industrial_solar'] : ''; ?>" alt="Factory Rooftop Solar" class="card-image" style="height: 100%; border-radius: 0 12px 12px 0;">
                    </div>
                </div>
            </div>

            <!-- Project 3: EV Charging Network -->
            <div class="card" style="margin-bottom: 40px; overflow: visible;">
                <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 0; overflow: hidden;">
                    <div>
                        <img src="<?php echo isset($images['ev_charging']) ? $images['ev_charging'] : ''; ?>" alt="EV Charging Network" class="card-image" style="height: 100%; border-radius: 12px 0 0 12px;">
                    </div>
                    <div class="card-content">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                            <i class="fas fa-charging-station" style="font-size: 2rem; color: #2196f3;"></i>
                            <h3 class="card-title" style="margin: 0;">20-Station EV Charging Network</h3>
                        </div>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Extensive EV charging infrastructure across Ukraine's major cities and highways. Mix of Level 2 and DC fast chargers, 
                            with real-time app-based reservation and payment system. Solar-powered stations reduce operational costs.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;">
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Chargers</p>
                                <p style="color: #666;">20 stations</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Charging Ports</p>
                                <p style="color: #666;">35+ ports</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Daily Users</p>
                                <p style="color: #666;">500+ vehicles</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Completion</p>
                                <p style="color: #666;">Ongoing</p>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Similar Project?</a>
                    </div>
                </div>
            </div>

            <!-- Project 4: Mini-Grid -->
            <div class="card" style="overflow: visible;">
                <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 0; overflow: hidden;">
                    <div class="card-content">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                            <i class="fas fa-network-wired" style="font-size: 2rem; color: #9c27b0;"></i>
                            <h3 class="card-title" style="margin: 0;">3 MW Hybrid Mini-Grid - Industrial Zone</h3>
                        </div>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Localized power generation system serving an industrial zone with 15 factories. Combines solar, wind, and battery storage 
                            with smart grid management. Reduces energy costs by 30% across the zone while improving reliability.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;">
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Total Capacity</p>
                                <p style="color: #666;">3 MW</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Storage</p>
                                <p style="color: #666;">1 MWh</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Facilities Served</p>
                                <p style="color: #666;">15 factories</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Completion</p>
                                <p style="color: #666;">Q4 2023</p>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Similar Project?</a>
                    </div>
                    <div>
                        <img src="<?php echo isset($images['smart_grid']) ? $images['smart_grid'] : ''; ?>" alt="Mini-Grid" class="card-image" style="height: 100%; border-radius: 0 12px 12px 0;">
                    </div>
                </div>
            </div>

            <!-- Project 5: Wind Energy Farm -->
            <div class="card" style="margin-bottom: 40px; overflow: visible;">
                <div style="display: grid; grid-template-columns: 1fr 1.2fr; gap: 0; overflow: hidden;">
                    <div>
                        <img src="<?php echo isset($images['wind_turbines']) ? $images['wind_turbines'] : ''; ?>" alt="Wind Energy Farm" class="card-image" style="height: 100%; border-radius: 12px 0 0 12px;">
                    </div>
                    <div class="card-content">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                            <i class="fas fa-fan" style="font-size: 2rem; color: #00bcd4;"></i>
                            <h3 class="card-title" style="margin: 0;">10 MW Wind Farm - Eastern Ukraine</h3>
                        </div>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                            State-of-the-art wind energy installation featuring 5 modern turbines with advanced noise reduction technology. 
                            Generates consistent clean power throughout the year and supplies electricity to multiple municipalities.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;">
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Capacity</p>
                                <p style="color: #666;">10 MW</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Turbines</p>
                                <p style="color: #666;">5 units</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Annual Output</p>
                                <p style="color: #666;">25 GWh</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Completion</p>
                                <p style="color: #666;">Q2 2024</p>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Similar Project?</a>
                    </div>
                </div>
            </div>

            <!-- Project 6: Hydrogen Pilot Plant -->
            <div class="card" style="overflow: visible;">
                <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 0; overflow: hidden;">
                    <div class="card-content">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                            <i class="fas fa-flask" style="font-size: 2rem; color: #ff6b6b;"></i>
                            <h3 class="card-title" style="margin: 0;">Green Hydrogen Production Pilot - Kyiv Tech Hub</h3>
                        </div>
                        <p style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                            Pioneering hydrogen production facility powered by renewable energy. Combines solar and wind power to electrolyze water 
                            into hydrogen fuel for industrial applications. Part of Ukraine's hydrogen economy development strategy.
                        </p>
                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-bottom: 20px;">
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Production</p>
                                <p style="color: #666;">500 kg/day</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Power Input</p>
                                <p style="color: #666;">2 MW renewable</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Status</p>
                                <p style="color: #666;">Operational</p>
                            </div>
                            <div>
                                <p style="color: #2a5298; font-weight: 600; margin-bottom: 5px;">Completion</p>
                                <p style="color: #666;">Q1 2024</p>
                            </div>
                        </div>
                        <a href="contact.php" class="btn btn-primary"><i class="fas fa-arrow-right" style="margin-right: 8px;"></i>Similar Project?</a>
                    </div>
                    <div>
                        <img src="<?php echo isset($images['hydrogen_tech']) ? $images['hydrogen_tech'] : ''; ?>" alt="Hydrogen Plant" class="card-image" style="height: 100%; border-radius: 0 12px 12px 0;">
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Statistics -->
        <section class="gradient-section" style="margin-bottom: 80px;">
            <h2 style="font-size: 2.2rem; margin-bottom: 50px; text-align: center;">Our Impact</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;">
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; font-weight: 700; margin-bottom: 10px;">500+</div>
                    <p style="font-size: 1.1rem;">Projects Completed</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; font-weight: 700; margin-bottom: 10px;">150 MW</div>
                    <p style="font-size: 1.1rem;">Installed Capacity</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; font-weight: 700; margin-bottom: 10px;">500K+</div>
                    <p style="font-size: 1.1rem;">Tons CO2 Avoided</p>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 3.5rem; font-weight: 700; margin-bottom: 10px;">10,000+</div>
                    <p style="font-size: 1.1rem;">Lives Impacted</p>
                </div>
            </div>
        </section>

        <!-- Services Offered -->
        <section style="margin-bottom: 80px;">
            <h2 class="section-title">Complete Project Services</h2>
            
            <div class="feature-grid">
                <div class="feature-box">
                    <i class="fas fa-pencil-ruler feature-icon"></i>
                    <h3>Design & Engineering</h3>
                    <p>Custom system design optimized for your location and energy needs</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-hammer feature-icon"></i>
                    <h3>Installation</h3>
                    <p>Professional installation by certified technicians with safety compliance</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h3>Monitoring</h3>
                    <p>Real-time performance tracking and detailed analytics dashboard</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-wrench feature-icon"></i>
                    <h3>Maintenance</h3>
                    <p>Regular maintenance, repairs, and system optimization services</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-graduation-cap feature-icon"></i>
                    <h3>Training</h3>
                    <p>Comprehensive training for your team on system operation and care</p>
                </div>
                <div class="feature-box">
                    <i class="fas fa-handshake feature-icon"></i>
                    <h3>Support</h3>
                    <p>24/7 technical support and dedicated account management</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding: 60px 40px; border-radius: 15px; text-align: center; color: white;">
            <h2 style="font-size: 2.2rem; margin-bottom: 20px;">
                <i class="fas fa-lightbulb" style="margin-right: 15px;"></i>Ready for Your Next Project?
            </h2>
            <p style="font-size: 1.1rem; margin-bottom: 30px; max-width: 700px; margin-left: auto; margin-right: auto;">
                Let our project management team help you plan and execute your renewable energy project on time and within budget.
            </p>
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php" class="btn btn-primary" style="background: white; color: #1e3c72;">
                    <i class="fas fa-calendar" style="margin-right: 8px;"></i>Start Your Project
                </a>
                <a href="services.php" class="btn btn-outline">
                    <i class="fas fa-services" style="margin-right: 8px;"></i>View Services
                </a>
            </div>
        </section>
        
    </div>
</div>

<?php include 'footer.php'; ?>
