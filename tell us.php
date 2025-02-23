<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Specialists Layout</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f5f5f5;
    }

    .container {
      width: 80%;
      background: white;
      padding: 20px;
      border: 1px solid goldenrod;
      border-radius: 8px;
      display: flex;
      gap: 20px;
      align-items: center;
      animation: fadeIn 1s ease-in-out;
    }

    .logo {
      width: 100px;
      height: 100px;
      background: url('logo.png') no-repeat center center/contain;
      flex-shrink: 0;
    }

    .content {
      flex: 1;
    }

    .content h1 {
      font-size: 1.8em;
      color: black;
      margin-bottom: 10px;
    }

    .content p {
      font-size: 1em;
      color: #444;
      line-height: 1.5;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo"></div>
    <div class="content">
      <h1>The Specialists</h1>
      <p>The Specialists bring together Runwal Realty & select Channel Partners to forge an association where both draw their collective strengths to create a robust future.</p>
    </div>
  </div>
</body>
</html>
