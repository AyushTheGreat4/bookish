<?php
require 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if passwords match
    if ($_POST['password'] !== $_POST['confirm-password']) {
        echo "Passwords do not match.";
        exit;
    }

    // Insert user into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'username' => $name,
        'email' => $email,
        'password' => $password
    ]);

    // Redirect to login page
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBookSite - Sign Up</title>
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

    <!-- Signup Section -->
    <section class="auth-page">
        <div class="container">
            <h2 class="section-title">Sign Up</h2>
            <div class="auth-form">
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <button type="submit" class="btn">Sign Up</button>
                </form>
                <p class="auth-link">Already have an account? <a href="login.php">Login</a></p>
            </div>
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