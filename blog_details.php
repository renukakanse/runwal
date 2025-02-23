<?php
// Include the database connection file
include("db_connection.php");

// Get the blog ID from the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $blog_id = intval($_GET['id']);

    // Fetch the blog details from the database
    $query = "SELECT * FROM blogs WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the blog exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
        $image_url = $row['image_url']; // Assuming it's stored as a relative path
    } else {
        echo "Blog not found!";
        exit;
    }
} else {
    echo "Invalid blog ID!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .card {
            background: #fff;
            max-width: 1100px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease-in-out;
            width: 100%;
        }
        .card:hover {
            transform: scale(1.03);
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .card-title {
            font-size: 2.5em;
            font-weight: bold;
            color: black;
            margin-bottom: 10px;
            word-wrap: break-word;
        }
        .card-content {
            text-align: justify;
            margin-top: 10px;
            color: #8B5F34;
            font-size: 1.1em;
        }
        .back-button {
          display: inline-block;
  padding: 0.5rem 1.2rem;
  border: 2px solid #9c7a4f;
  border-radius: 5px;
  transition: all 0.3s ease;
            font-size: 1.2rem; color: #0a0a09; text-decoration: none; font-weight: bold;
        }
        .back-button:hover {
          background-color: #9c7a4f;
  color: white;
  transform: scale(1.1); /* Slight zoom effect */
        }
        @media (max-width: 1024px) {
            .card {
                max-width: 95%;
            }
            .card-title {
                font-size: 2em;
            }
        }
        @media (max-width: 768px) {
            .card {
                max-width: 100%;
                padding: 15px;
            }
            .card-title {
                font-size: 1.8em;
            }
            .card-content {
                font-size: 1em;
            }
        }
        @media (max-width: 480px) {
            .card-title {
                font-size: 1.5em;
            }
            .card-content {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1 class="card-title"><?php echo htmlspecialchars($title); ?></h1>
        <?php if (!empty($image_url)): ?>
            <img src="/adminpanel/<?php echo htmlspecialchars($image_url); ?>" alt="<?php echo htmlspecialchars($title); ?>">
        <?php else: ?>
            <p>No image available</p>
        <?php endif; ?>
        <div class="card-content">
            <p><?php echo nl2br(htmlspecialchars($content)); ?></p>
        </div>
        <a href="blog.php" class="back-button">Back to Blogs</a>
    </div>
</body>
</html>
