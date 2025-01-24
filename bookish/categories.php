<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBookSite - Categories</title>
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
                <a href="upload.php" class="btn">Upload Book</a>
                <a href="login.php" class="btn">Login</a>
                <a href="signup.php" class="btn">Sign Up</a>
                <a href="admin.php" class="btn btn-admin">Admin Panel</a>
            </nav>
        </div>
    </header>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Book Categories</h2>
            <div class="categories-grid">
                <!-- Category Card 1 -->
                <div class="category-card">
                    <img src="assets/images/fiction.jpg" alt="Fiction" class="category-image">
                    <h3 class="category-title">Fiction</h3>
                    <p class="category-description">Explore imaginative and creative stories.</p>
                    <a href="browse.html?category=fiction" class="btn">View Books</a>
                </div>
                <!-- Category Card 2 -->
                <div class="category-card">
                    <img src="assets/images/non-fiction.jpg" alt="Non-Fiction" class="category-image">
                    <h3 class="category-title">Non-Fiction</h3>
                    <p class="category-description">Discover real-world knowledge and insights.</p>
                    <a href="browse.html?category=non-fiction" class="btn">View Books</a>
                </div>
                <!-- Category Card 3 -->
                <div class="category-card">
                    <img src="assets/images/science.jpg" alt="Science" class="category-image">
                    <h3 class="category-title">Science</h3>
                    <p class="category-description">Dive into the world of science and technology.</p>
                    <a href="browse.html?category=science" class="btn">View Books</a>
                </div>
                <!-- Category Card 4 -->
                <div class="category-card">
                    <img src="assets/images/history.jpg" alt="History" class="category-image">
                    <h3 class="category-title">History</h3>
                    <p class="category-description">Learn about the past and its impact on the present.</p>
                    <a href="browse.html?category=history" class="btn">View Books</a>
                </div>
                <!-- Add more categories as needed -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="#about">About</a>
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