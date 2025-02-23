
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R Loyalty - Loyalty Benefits</title>
    <link rel="stylesheet" href="rloyality.css">
</head>
<body>

    <!--Header-->
    <header class="navbar">
        <div class="logo">Runwal Realty</div>
        <nav>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="ourproject.php">Our Projects</a></li>
        <li><a href="nri.php">NRI Corner</a></li>
        <li><a href="newsevents.php">News & Events</a></li>
        <li><a href="customercorner.php">Customer Corner</a></li>
        <li><a href="Career.php">Careers</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        </nav>
        <a class="item" href="enquire.php">
            <div class="linktext"><button class="button-78" role="button">Enquire Now</button></div>
        </a>
      </header>
        <div class="hero">
            <div class="hero-content">
                <div class="rlogo">
                    <img src="rloyallogo.jpeg" alt="Runwal Loyalty Logo" style="max-width: 100%; height: auto;">
                </div>
                <h1>Loyalty</h1>
                <p>Embracing loyalty has never been so rewarding.</p>
                <a href="#benefits" class="btn">Learn More</a>


            </div>
        </div>

        <!-- Highlights Section -->
        <section class="highlights">
            <h3 class="section-subtitle">Timeless Legacy</h3>
            <h2 class="section-title">Designed for Generations to Come</h2>
            <div class="stats">
                <div class="stat-item">
                    <span class="counter" data-target="45">0</span>
                    <p>Years of Legacy</p>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="counter" data-target="42">0</span>
                    <p>Projects Delivered</p>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="counter" data-target="35000">0</span>
                    <p>Happy Families</p>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <span class="counter" data-target="50">0</span>
                    <p>Awards & Accolades</p>
                </div>
            </div>
        </section>

        <!-- Rewards Section -->
        <section class="rewards-section">
            <h1 class="section-title">Loyalty Rewards Program</h1>
            <p class="section-subtitle">
                As our special & distinguished member, you have the option to choose from a bouquet of gifts as your rewards.
            </p>
            <div class="rewards-container">
                <div class="reward-card card1">
                    <div class="reward-icon">1%</div>
                    <p class="reward-text">Benefit to Referrer on successful booking by their Referred Friend/Relative</p>
                </div>
                <div class="reward-card card2">
                    <div class="reward-icon">2%</div>
                    <p class="reward-text">Loyalty benefit on every booking</p>
                </div>
                <div class="reward-card card3">
                    <div class="reward-icon">1%</div>
                    <p class="reward-text">Benefit to the Referred Friend/Relative for the booking</p>
                </div>
                <div class="gift-box">
                    <img src="gift box.jpeg" alt="Gift Box" class="gift-image">
                    <div class="popup">Loyalty Benefit</div>
                </div>
            </div>
        </section>

        <!-- Steps to Loyalty Section -->
        <section class="steps-to-loyalty">
            <h3 class="section-subtitle">How to Earn</h3>
            <h2 class="section-title">4 Easy Steps to RLoyalty</h2>
            <div class="steps-grid">
                <div class="step">
                    <div class="step-icon">
                        <img src="refer.png" alt="Recommend Step Icon">
                    </div>
                    <div class="step-content">
                        <h4>Step 1</h4>
                        <p>Recommend a Runwal project to friends & family</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <img src="apartment.png" alt="Assistance Step Icon">
                    </div>
                    <div class="step-content">
                        <h4>Step 2</h4>
                        <p>An R Loyalist representative assists them in visiting the Runwal site.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <img src="handshake.png" alt="Booking Step Icon">
                    </div>
                    <div class="step-content">
                        <h4>Step 3</h4>
                        <p>They book their dream home with Runwal Realty.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-icon">
                        <img src="reward.png" alt="Reward Step Icon">
                    </div>
                    <div class="step-content">
                        <h4>Step 4</h4>
                        <p>Earn amazing rewards!</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="intro">
            <h2>When Friends Are Like Family, Staying Together Makes Sense</h2>
            <p>
                At Runwal Group, we believe in offering you more than just your home. Welcome to R Circle, our exclusive referral & loyalty program for existing homeowners. R Circle allows you to build your own community at your Runwal Group project. You can refer your friends and family to book a home with us and get exciting and substantial rewards.
            </p>
        </section>

        <!-- Benefits Section -->
        <section id="benefits" class="benefits">
            <h2>Benefits</h2>
            <ul>
                <li>Build your community – invite your friends to be your neighbors.</li>
                <li>Exciting referral rewards.</li>
                <li>Loyalty discounts on repeat purchases.</li>
                <li>Exclusive preview of our new launches.</li>
                <li>Invites to our special events.</li>
            </ul>
        </section>

        <!-- Reference Form Section -->
        <section class="reference-form">
            <h2>Reference Form</h2>
            <form action="submit_form.php" method="post">
                <!-- Section 1 -->
                <fieldset>
                    <legend>Your Details</legend>
                    <label>Are you an existing Runwal Customer?</label>
                    <div>
                        <input type="radio" id="yes" name="existing-customer" value="yes" required>
                        <label for="yes">Yes</label>
                        <input type="radio" id="no" name="existing-customer" value="no" required>
                        <label for="no">No</label>
                    </div>
                </fieldset>

                <!-- Section 2 -->
                <fieldset>
                    <legend>Project Selection</legend>
                    <label for="project">Select Project:</label>
                    <select id="project" name="project" required>
                        <option value="" disabled selected>Select a project</option>
                        <option value="runwal-bliss">Runwal Bliss</option>
                        <option value="runwal-forests">Runwal Forests</option>
                        <option value="runwal-pinnacle">Runwal Pinnacle</option>
                        <option value="runwal-avenue">Runwal Avenue</option>
                        <option value="runwal-gardens">Runwal Gardens</option>
                    </select>
                </fieldset>

                <!-- Section 3 -->
                <fieldset>
                    <legend>Acquaintance Details</legend>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter full name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter email address" required>
                    <label for="phone">Mobile Number:</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter mobile number" required>
                </fieldset>

                <!-- Submit Button -->
                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    
        <div class="image-container">
            <img class="image" src="footerbg.png" alt="Loyalty Program Banner">
        </div>
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <ul>
                        <li><a href="aboutus.html">About the Company</a></li>
                        <li><a href="aboutus.html">Journey</a></li>
                        <li><a href="aboutus.html">Team</a></li>
                        <li><a href="customer.html">CSR</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Business Verticals</h3>
                    <ul>
                        <li><a href="residential.html">Residential</a></li>
                        <li><a href="organized.html">Organized Retail</a></li>
                        <li><a href="commercial.html">Commercial Offices</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>News & Events</h3>
                    <ul>
                        <li><a href="newsevents.html">Events & Awards</a></li>
                        <li><a href="newsevents.html">Press Release</a></li>
                        <li><a href="blog.html">Media Coverage</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Customer Corner</h3>
                    <ul>
                        <li><a href="Rloyality.html">R Loyalist</a></li>
                        <li><a href="speciality.html">The Specialists</a></li>
                    </ul>
                </div>
                <div class="footer-logo">
                    <p>Runwal Realty Since 1978</p>
                    <address>
                        Runwal & Omkar Esquare, 5th Floor,<br>
                        Eastern Express Highway, Sion (East),<br> Mumbai - 400022
                    </address>
                    <p>Phone: 022 - 61133000, 022 - 24093749</p>
                    <p>Email: <a href="mailto:corporate@runwal.com">corporate@runwal.com</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2024 Runwal. All rights reserved.</p>
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </footer>
        

    <!-- Counter Animation Script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");
            counters.forEach(counter => {
                const target = +counter.getAttribute("data-target");
                const duration = 2000; // Animation duration in ms
                const increment = target / (duration / 20);

                const updateCounter = () => {
                    const current = +counter.innerText;
                    if (current < target) {
                        counter.innerText = Math.ceil(current + increment);
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.innerText = target >= 1000 ? `${Math.ceil(target / 1000)}K` : target;
                    }
                };

                updateCounter();
            });
        });
    </script>
</body>
</html>
