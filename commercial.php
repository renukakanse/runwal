<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Runwal Residential Page</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #f9f9f9;
    }

    /* Navbar Styles */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #fff;
      padding: 1rem 2rem;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #9c7a4f;
    }

    .navbar ul {
      display: flex;
      list-style: none;
    }

    .navbar ul li {
      margin: 0 1rem;
    }

    .navbar ul li a {
      text-decoration: none;
      color: #333;
      font-size: 0.9rem;
    }

    .enquire-btn {
      background: #9c7a4f;
      color: #fff;
      border: none;
      padding: 0.5rem 1rem;
      cursor: pointer;
      border-radius: 5px;
    }

    .enquire-btn:hover {
      background: #84603b;
    }

    /* Residential Section */
    .residential-section {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .residential-section h1 {
      font-size: 2rem;
      text-align: center;
      margin-bottom: 1rem;
    }

    .tabs {
      display: flex;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .tabs button {
      padding: 0.5rem 1rem;
      border: none;
      background: none;
      font-size: 1rem;
      cursor: pointer;
      border-bottom: 2px solid transparent;
    }

    .tabs button.active {
      border-bottom: 2px solid #9c7a4f;
      color: #9c7a4f;
    }

    /* Card Styles */
    .card {
      display: flex;
      flex-direction: row;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      max-width: 100%; /* Use full available width */
      margin: 20px auto; /* Center the card */
      transition: all 0.3s ease-in-out;
      padding: 1rem; /* Add padding for better spacing */
    }

    /* Optional: On hover, make the card slightly larger */
    .card:hover {
      transform: scale(1.02);
    }

    .card img {
      width: 40%; /* Adjust the image width */
      object-fit: cover;
    }

    .card-content {
      padding: 1.5rem;
      flex: 1; /* Ensure content takes up remaining space */
    }

    .card-content h2 {
      font-size: 1.5rem;
    }

    .card-content p {
      margin-bottom: 1rem;
    }

    /* Read More Button */
    .read-more {
      display: inline-block;
      padding: 0.7rem 1.5rem;
      background: #9c7a4f;
      color: #fff;
      font-size: 1rem;
      font-weight: bold;
      text-decoration: none;
      border-radius: 5px;
      transition: all 0.3s ease-in-out;
      position: relative;
      overflow: hidden;
    }

    .read-more::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: #84603b;
      z-index: 1;
      transition: all 0.3s ease-in-out;
    }

    .read-more:hover::before {
      left: 0;
    }

    .read-more:hover {
      color: #fff;
    }

    .read-more span {
      position: relative;
      z-index: 2;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar ul {
        flex-direction: column;
        gap: 0.5rem;
      }

      .navbar ul li {
        margin: 0;
      }

      .card {
        flex-direction: column;
        padding: 1rem; /* Adjust padding for smaller screens */
      }

      .card img {
        width: 100%; /* Full width for mobile */
      }
    }

    @media (max-width: 480px) {
      .navbar {
        padding: 1rem;
      }

      .navbar .logo {
        font-size: 1.2rem;
      }

      .residential-section h1 {
        font-size: 1.5rem;
      }

      .tabs button {
        font-size: 0.9rem;
        padding: 0.4rem 0.8rem;
      }

      .card-content h2 {
        font-size: 1.2rem;
      }

      .card-content p {
        font-size: 0.9rem;
      }

      .enquire-btn {
        padding: 0.4rem 0.8rem;
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <header class="navbar">
    <div class="logo">Runwal Realty</div>
    <nav>
      <ul>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="ourproject.html">Our Projects</a></li>
        <li><a href="nri.html">NRI Corner</a></li>
        <li><a href="newsevents.html">News & Events</a></li>
        <li><a href="customercorner.html">Customer Corner</a></li>
        <li><a href="Career.html">Careers</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
    </nav>
    <button class="enquire-btn">Enquire Now</button>
  </header>

  <main>
    <section class="residential-section">
      <h1>Commercial</h1>
      <!-- <div class="tabs">
        <button class="active">Ongoing</button>
        <a href="upcoming.html"><button class="tab-button">Upcoming</button></a>
        <a href="complete.html"><button class="tab-button">Completed</button></a>
      </div> -->
      <!-- Card 1 -->
      <div class="card">
        <img src="rsquare.jpeg" alt="Runwal 25 Hour Life">
        <div class="card-content">
          <h2>R Square</h2>
          <p>A state-of-the-art, IGBC Gold-certified commercial landmark designed for sustainability and excellence in the modern workspace.</p>
          <p><strong>Location:</strong> Andheri,Mumbai</p>
          <p><strong>Configuration:</strong> Office spaces with flexible layouts and modern infrastructure</p>
          <a href="#" class="read-more"><span>Read More</span></a>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="card">
        <img src="com.jpg" alt="Runwal Lands End">
        <div class="card-content">
          <h2>Runwal Commerz</h2>
          <p>Offers efficient and flexible office spaces with world-class infrastructure, situated just 10 minutes from Powai.</p>
          <p><strong>Location:</strong> Kanjurmarg, Mumbai</p>
          <p><strong>Configuration:</strong> Grade A office spaces with flexible floor plans and retail zones</p>
          <a href="#" class="read-more"><span>Read More</span></a>
        </div>          
      </div>
      <!-- card 3 -->
      <div class="card">
        <img src="mall.avif" alt="Runwal Lands End">
        <div class="card-content">
          <h2>R City Mall</h2>
          <p>A sprawling shopping mall covering 1.2 million square feet, housing over 350 stores, multiple food outlets, entertainment zones, and a movie theatre.</p>
          <p><strong>Location:</strong> Ghatkopar, Mumbai</p>
          <p><strong>Configuration:</strong> 3 Bed Residences</p>
          <a href="#" class="read-more"><span>Read More</span></a>
        </div>
        </div>
            <!-- card 4 -->
            <div class="card">
                <img src="rsquare2.jpg" alt="Runwal Lands End">
                <div class="card-content">
                  <h2>R Square</h2>
                  <p>A standalone tower spread across a vast area, exemplifying Runwal's legacy of excellence.
                </p>
                  <p><strong>Location:</strong> LBS Marg Mulund(W)</p>
                  <p><strong>Configuration:</strong> Premium office spaces with high-end amenities and smart design</p>
                  <a href="#" class="read-more"><span>Read More</span></a>
                </div>
                </div>

    </section>
  </main>
  
</body>
</html>