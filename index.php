
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runwal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/aajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <a class="anchor" name="nav-3"></a>
    <section class="nav-3">
        <nav>
            <div class="logo">
                <img src="mainLogoheader.svg" alt="Logo">
            </div>
        <a class="item" href="aboutus.php">
            <div data-text="About Us" class="linktext">About Us</div>
        </a>
        <a class="item" href="ourproject.php">
            <div data-text="Our Projects" class="linktext">Our Projects</div>
        </a>
        <a class="item" href="nri.php">
            <div data-text="NRI Corner" class="linktext">NRI Corner</div>
        </a>
        <a class="item" href="newsevents.php">
            <div data-text="News & Events" class="linktext">News & Events</div>
        </a>
        <a class="item" href="customercorner.php">
            <div data-text="Customer Corner" class="linktext">Customer Corner</div>
        </a>
        <a class="item" href="Career.php">
            <div data-text="Careers" class="linktext">Careers</div>
        </a>
        <a class="item" href="contact.php">
            <div data-text="Contact Us" class="linktext">Contact Us</div>
        </a>
        <a class="item" href="enquire.php">
            <div class="linktext"><button class="button-78" role="button">Enquire Now</button></div>
        </a>
        </nav>
    </section>
    <div id="main">
        <div id="page1">
            <video src="homebg.mp4" autoplay loop muted></video>
            <button class="chatbot-button" onclick="toggleChat()">💬 Chat</button>

    <div class="chat-container" id="chat-container">
        <div class="chat-header">Chatbot</div>
        <div class="chat-box" id="chat-box">
            <div class="chat-message bot">Hello! How can I assist you?</div>
        </div>
        <div class="input-container">
            <input type="text" id="user-input" placeholder="Type a message...">
            <button class="send" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function toggleChat() {
            const chatContainer = document.getElementById("chat-container");
            chatContainer.style.display = (chatContainer.style.display === "none" || chatContainer.style.display === "") ? "block" : "none";
        }

        function sendMessage() {
    const userInput = document.getElementById("user-input");
    const chatBox = document.getElementById("chat-box");

    if (userInput.value.trim() === "") return;

    // Add user's message
    const userMessage = document.createElement("div");
    userMessage.classList.add("chat-message", "user");
    userMessage.textContent = userInput.value;
    chatBox.appendChild(userMessage);

    // Add bot's "thinking" message
    const botThinking = document.createElement("div");
    botThinking.classList.add("chat-message", "bot");
    botThinking.textContent = "...";
    chatBox.appendChild(botThinking);

    // Send user input to Flask API
    fetch("http://127.0.0.1:5000/chat", {  // Updated the correct Flask endpoint
        method: "POST",
        body: JSON.stringify({ message: userInput.value }),
        headers: { "Content-Type": "application/json" }
    })
    .then(response => response.json())
    .then(data => {
        botThinking.textContent = data.reply;  // Replace "thinking" with actual reply
    })
    .catch(error => {
        botThinking.textContent = "Error: Unable to reach the chatbot.";
        console.error("Error:", error);
    });

    userInput.value = "";  // Clear input field
}

// Send message on Enter key press
document.getElementById("user-input").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        sendMessage();
    }
});

    </script>

        </div>
    </div>
    <div class="text-div1">
        <p>BUILDING FOR GENERATIONS TO COME</p>
    </div>
    <div class="text-div2">
        <p>Established in 1978, Runwal Realty continues to lead India's real estate industry. Guided by a commitment to excellence, customer-centric design, and sustainability, the group consistently sets new standards for quality, transparency, and trust.</p>
    </div>

    <div class="stats-container">
        <div class="stat-item">
            <span class="stat-number" data-target="45">0+</span>
            <p class="stat-text">Years of Legacy</p>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-target="50">0+</span>
            <p class="stat-text">Projects Delivered</p>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-target="48000">0+</span>
            <p class="stat-text">Happy Families</p>
        </div>
        <div class="stat-item">
            <span class="stat-number" data-target="51">0+</span>
            <p class="stat-text">Awards & Accolades</p>
        </div>
    </div>
    

    <div class="experiences-section">
        <h2 class="experience-heading">Unveiling Luxury Excellence</h2>
        <h3 class="testimonial-heading">Ongoing Development</h3>
    </div>
    
      <!-- Cards Section (6 cards displayed in pairs of 3) -->
      <div class="cards-container">
        <div class="project">
            <img src="com1.jpeg" alt="Runwal Pearl">
            <div class="project-details">
                <h3>Runwal Pearl</h3>
                <p>Spacious and elegant apartments with a serene ambiance.</p>
                <div class="location">📍 Parel (E) Mumbai</div>
            </div>
        </div>
        <div class="project">
            <img src="com2.jpeg" alt="Runwal Elina">
            <div class="project-details">
                <h3>Runwal Elina</h3>
                <p>Modern homes for a luxurious lifestyle in the heart of the city.</p>
                <div class="location">📍 Parel (E) Mumbai</div>
            </div>
        </div>
        <div class="project">
            <img src="com3.jpeg" alt="Runwal Anthurium">
            <div class="project-details">
                <h3>Runwal Anthurium</h3>
                <p>Exclusive residential space offering 2.5, 3 & 4 BHK Apartments with stunning views of lush....</p>
                <div class="location">📍 L.B.S. Marg Mulund (W)</div>
            </div>
        </div>

        <!-- 3 More Cards -->
        <div class="project">
            <img src="com4.jpeg" alt="Runwal Garden">
            <div class="project-details">
                <h3>Runwal Garden</h3>
                <p>A beautiful residential community nestled amidst lush greenery.</p>
                <div class="location">📍 Thane</div>
            </div>
        </div>
        <div class="project">
            <img src="com5.jpeg" alt="Runwal Plaza">
            <div class="project-details">
                <h3>Runwal Plaza</h3>
                <p>Modern homes for a luxurious lifestyle in the heart of the city.</p>
                <div class="location">📍 Andheri</div>
            </div>
        </div>
        <div class="project">
            <img src="com6.jpeg" alt="Runwal Regency">
            <div class="project-details">
                <h3>Runwal Regency</h3>
                <p>Spacious and elegant apartments with a serene ambiance.</p>
                <div class="location">📍 Kalyan</div>
            </div>
        </div>
    </div>

    <div class="testimonials-container">
        <p class="subheading">Showcasing Genuine Experiences</p>
        <h3 id="testi">Testimonials</h3>
        <div class="carousel">
          <div class="carousel-items">
            <!-- Testimonial Item 1 -->
            <div class="testimonial-item">
              <div class="video-wrapper">
                <img src="testi1.jpeg" alt="Video 1" />
                <button class="play-btn">&#9658;</button>
              </div>
              <h3>Runwal Timeless Families</h3>
              <p>Wadala</p>
            </div>
            <!-- Testimonial Item 2 -->
            <div class="testimonial-item">
              <div class="video-wrapper">
                <img src="testi2.jpeg" alt="Video 2" />
                <button class="play-btn">&#9658;</button>
              </div>
              <h3>Runwal Sanctuary Families</h3>
              <p>Mulund</p>
            </div>
            <!-- Testimonial Item 3 -->
            <div class="testimonial-item">
                <div class="video-wrapper">
                  <img src="testi3.jpeg" alt="Video 2" />
                  <button class="play-btn">&#9658;</button>
                </div>
                <h3>Runwal Sanctuary Families</h3>
                <p>Mulund</p>
              </div>
            <!-- Testimonial Item 4 -->
            <div class="testimonial-item">
              <div class="video-wrapper">
                <img src="testi4.jpeg" alt="Video 3" />
                <button class="play-btn">&#9658;</button>
              </div>
              <h3>Runwal 25 Hour Life Families</h3>
              <p>Thane</p>
            </div>
          </div>
        </div>
      </div>
      
  <section>
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
    </section>
</body>
</html>

        