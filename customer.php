<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website Layout</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      height: 100vh;
      display: flex;
      flex-direction: column;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('customer.jpeg') no-repeat center center/cover;
      filter: brightness(50%);
      z-index: -1;
    }

    nav {
      position: absolute;
      top: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 40px;
      background: rgba(0, 0, 0, 0.5);
      color: white;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li {
      font-size: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: darkgoldenrod;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: white;
    }

    .enquire {
      padding: 10px 20px;
      background: white;
      color: black;
      border: goldenrod;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .enquire:hover {
      background: darkgoldenrod;
    }

    .content {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      color: white;
      text-align: center;
    }

    .content div {
      display: flex;
      gap: 200px;
    }

    .content div span {
      font-size: 1.5em;
      border-bottom: 1px solid white;
      padding: 5px 10px;
      cursor: pointer;
      transition: transform 0.3s ease, color 0.3s ease;
    }

    .content div span:hover {
      transform: scale(1.1);
      color: goldenrod;
    }

    .content div span a {
      text-decoration: none;
      color: inherit; /* Inherits the text color */
    }

    .footer {
      text-align: center;
      padding: 10px;
      background: rgba(0, 0, 0, 0.5);
      color: darkgoldenrod;
    }
  </style>
</head>
<body>
  <nav>
    <ul>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Our Projects</a></li>
      <li><a href="#">NRI Corner</a></li>
      <li><a href="#">News & Events</a></li>
      <li><a href="#">Customer Corner</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <button class="enquire">Enquire Now</button>
  </nav>

  <div class="content">
    <div>
      <span><a href="Rloyality.html">R Loyalist</a></span>
      <span><a href="speciality.html">The Specialists</a></span>
      
    </div>
  </div>

  
</body>
</html>
