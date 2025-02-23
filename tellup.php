
<?php
// Database connection (Replace with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "runwaldb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Your Property Preferences</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            transition: transform 0.3s ease-in-out;
        }
        .container:hover {
            transform: scale(1.05);
        }
        h2 {
            text-align: center;
            color: goldenrod;
        }
        label {
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s ease-in-out;
        }
        input:hover, select:hover, textarea:hover {
            border-color: goldenrod;
        }
        button {
            width: 100%;
            padding: 10px;
            background: goldenrod;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }
        button:hover {
            background: #b8860b;
        }
        button:active {
            background: #b8860b;
        }
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .container {
                width: 90%;
            }
        }
    </style>
    <script>
        function validateForm(event) {
            event.preventDefault();
            let name = document.getElementById('name').value;
            let phone = document.getElementById('phone').value;
            let email = document.getElementById('email').value;
            let nameRegex = /^[A-Za-z ]+$/;
            let phoneRegex = /^[0-9]{10}$/;
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!nameRegex.test(name)) {
                alert('Please enter a valid name (only letters and spaces allowed).');
                return;
            }
            if (!phoneRegex.test(phone)) {
                alert('Please enter a valid 10-digit phone number.');
                return;
            }
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            let button = document.getElementById('submitButton');
            button.innerText = 'Thanks';
            button.style.background = '#b8860b';
            button.disabled = true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Share Your Property Preferences</h2>
        <form onsubmit="validateForm(event)">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="phone">Contact Number</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
            
            <label for="location">Preferred Location</label>
            <input type="text" id="location" name="location">
            
            <label for="budget">Budget Range</label>
            <input type="text" id="budget" name="budget">
            
            <label for="property">Type of Property</label>
            <select id="property" name="property">
                <option value="Apartment">Apartment</option>
                <option value="Villa">Villa</option>
                <option value="Commercial">Commercial</option>
                <option value="Other">Other</option>
            </select>
            
            <label for="comments">Additional Comments</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
            
            <button id="submitButton" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>