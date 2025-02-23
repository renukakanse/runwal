<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        .show {
            display: block !important;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Manage Blogs</h1>
    <button class="btn btn-primary mb-3" onclick="showAddBlogModal()">Add New Blog</button>
    <table class="table" id="blogTable">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP Code to Fetch Data Dynamically -->
            <?php
                include 'db_connection.php'; // Include database connection
                $query = "SELECT * FROM blogs";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><img src='" . $row['image_url'] . "' alt='Blog Image' style='width: 100px;'></td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>
                            <button class='btn btn-warning' onclick='editBlog(" . $row['id'] . ")'>Edit</button>
                            <button class='btn btn-danger' onclick='deleteBlog(" . $row['id'] . ")'>Delete</button>
                          </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<!-- Add Blog Modal -->
<div id="addBlogModal" class="modal">
    <h5>Add New Blog</h5>
    <form action="add_blog.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="blogTitle" class="form-label">Blog Title</label>
            <input type="text" class="form-control" id="blogTitle" name="title" placeholder="Enter blog title" required>
        </div>
        <div class="mb-3">
            <label for="blogContent" class="form-label">Content</label>
            <textarea class="form-control" id="blogContent" name="content" rows="4" placeholder="Enter blog content" required></textarea>
        </div>
        <div class="mb-3">
            <label for="blogImage" class="form-label">Choose Image</label>
            <input type="file" class="form-control" id="blogImage" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
    </form>
</div>

<script>
    function showAddBlogModal() {
        document.getElementById('addBlogModal').classList.add('show');
    }
    function closeModal() {
        document.getElementById('addBlogModal').classList.remove('show');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
