<?php
require 'includes/config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $uploaded_by = $_SESSION['user_id'];

    // Handle file upload
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_path = 'uploads/' . $file_name;

    move_uploaded_file($file_tmp, $file_path);

    // Insert book into database
    $sql = "INSERT INTO books (title, author, description, category, file_path, uploaded_by) VALUES (:title, :author, :description, :category, :file_path, :uploaded_by)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'title' => $title,
        'author' => $author,
        'description' => $description,
        'category' => $category,
        'file_path' => $file_path,
        'uploaded_by' => $uploaded_by
    ]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Book - MyBookSite</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <a href="index.php" class="logo">MyBookSite</a>
            <nav class="navbar">
                <a href="index.php">Home</a>
                <a href="browse.php">Browse Books</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
                <a href="login.php" class="btn">Login</a>
                <a href="signup.php" class="btn">Sign Up</a>
            </nav>
        </div>
    </header>

    <!-- Upload Book Section -->
    <section class="upload-book">
        <div class="container">
            <h2 class="section-title">Upload or Donate a Book</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Book Title</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" name="category" required>
                        <option value="fiction">Fiction</option>
                        <option value="non-fiction">Non-Fiction</option>
                        <option value="science">Science</option>
                        <option value="history">History</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="file">Upload Book (PDF or EPUB)</label>
                    <input type="file" id="file" name="file" accept=".pdf,.epub" required>
                </div>
                <button type="submit" class="btn">Submit for Review</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="about.php">About</a>
                <a href="#privacy">Privacy Policy</a>
                <a href="#terms">Terms of Service</a>
            </div>
            <div class="social-media">
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>