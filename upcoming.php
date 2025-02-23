<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "runwaldb"; // Make sure this is your database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data for upcoming projects
$query = "SELECT * FROM projects WHERE status='upcoming'";  // Make sure 'status' column holds 'upcoming' for upcoming projects
$result = $conn->query($query);
?>

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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
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

        main {
            flex: 1;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        /* Residential Section */
        .residential-section {
            max-width: 1200px;
            width: 100%;
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

        /* Buildings Grid */
        .buildings {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            width: 100%; /* This is the key to full width */
        }

        .building {
            text-align: center;
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            animation: fadeIn 1s forwards;
        }

        .building img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            display: block;
        }

        .building p {
            margin-top: 10px;
            font-size: 18px;
            color: #333;
        }

        .location-icon {
            font-size: 22px;
            color: #007BFF;
        }

        /* Animation */
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        .building {
            animation-delay: calc(0.2s * var(--building-index));
        }

        .building:nth-child(1) { --building-index: 1; }
        .building:nth-child(2) { --building-index: 2; }
        .building:nth-child(3) { --building-index: 3; }
        .building:nth-child(4) { --building-index: 4; }
        .building:nth-child(5) { --building-index: 5; }
        .building:nth-child(6) { --building-index: 6; }

        /* Media Queries */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar ul {
                flex-direction: column;
                gap: 0.5rem;
                margin-top: 1rem;
            }
            .navbar ul li {
                margin: 0.5rem 0;
            }
        }

        @media (max-width: 480px) {
            /* ... existing media query styles ... */
        }
        .card {
    background-color: #fff;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    opacity: 0;
    animation: fadeIn 1s forwards;
    text-align: center;
}

.card img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.card .card-content {
    margin-top: 10px;
    font-size: 18px;
    color: #333;
}

.location-icon {
    font-size: 22px;
    color: #007BFF;
}

@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}

.card {
    animation-delay: calc(0.2s * var(--card-index));
}

.card:nth-child(1) { --card-index: 1; }
.card:nth-child(2) { --card-index: 2; }
.card:nth-child(3) { --card-index: 3; }
.card:nth-child(4) { --card-index: 4; }
.card:nth-child(5) { --card-index: 5; }
.card:nth-child(6) { --card-index: 6; }

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
            <h1>Residential</h1>
            <div class="tabs">
                <a href="residential.html"><button class="tab-button">Ongoing</button></a>
                <button class="active">Upcoming</button>
                <a href="complete.html"><button class="tab-button">Completed</button></a>
            </div>
            <div class="buildings">
                <!-- Static Data Example -->
                <div class="building">
                    <img src="upcom1.jpg" alt="Vile Parle">
                    <p><span class="location-icon">📍</span> Vile Parle</p>
                </div>
                <div class="building">
                    <img src="upcom2.jpg" alt="Bandra">
                    <p><span class="location-icon">📍</span> Bandra</p>
                </div>
                <div class="building">
                    <img src="upcom3.jpg" alt="Andheri">
                    <p><span class="location-icon">📍</span> Andheri</p>
                </div>

                <!-- Dynamic Project Cards (Displaying only Image and Location) -->
<?php while ($row = $result->fetch_assoc()): ?>
    <div class="card">
        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="<?php echo $row['location']; ?>">
        <div class="card-content">
            <p><span class="location-icon">📍</span> <?php echo $row['location']; ?></p>
        </div>
    </div>
<?php endwhile; ?>

            </div>
        </section>
    </main>

    <footer></footer>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
