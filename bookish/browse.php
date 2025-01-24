<!DOCTYPE html>
<html lang="en">
</head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBookSite - Browse Books</title>
    <link rel="stylesheet" href="assets/css/style.css">
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <a href="index.html" class="logo">MyBookSite</a>
            <nav class="navbar">
                <a href="index.html">Home</a>
                <a href="browse.html">Browse Books</a>
                <a href="about.html">About</a>
                <a href="contact.html">Contact</a>
                <a href="upload.html" class="btn">Upload Book</a> 
                <a href="login.html" class="btn">Login</a>
                <a href="signup.html" class="btn">Sign Up</a>
                <a href="admin.html" class="btn btn-admin">Admin Panel</a>
            </nav>
        </div>
    </header>

    <!-- Search and Filters Section -->
    <section class="search-filters">
        <div class="container">
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" placeholder="Search for books..." class="search-input">
                <button class="btn">Search</button>
            </div>

            <!-- Filters -->
            <div class="filters">
                <select class="filter-select">
                    <option value="all">All Categories</option>
                    <option value="fiction">Fiction</option>
                    <option value="non-fiction">Non-Fiction</option>
                    <option value="science">Science</option>
                    <option value="history">History</option>
                </select>
                <select class="filter-select">
                    <option value="all">All Authors</option>
                    <option value="author1">Author 1</option>
                    <option value="author2">Author 2</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Book Grid Section -->
    <section class="books-grid">
        <div class="container">
            <h2 class="section-title">Browse Books</h2>
            <div class="books-grid">
                <!-- Book Card 1 -->
                <div class="book-card">
                    <img src="assets/images/Book 1.png" alt="Book 1" class="book-cover">
                    <h3 class="book-title">Thing I Never Said</h3>
                    <p class="book-author">Claudia Wilson</p>
                    <a href="#" class="btn">Read Now</a>
                </div>
                <!-- Book Card 2 -->
                <div class="book-card">
                    <img src="assets/images/road.jpg" alt="Book 2" class="book-cover">
                    <h3 class="book-title">The Road</h3>
                    <p class="book-author">Cormac McCarthy</p>
                    <a href="#" class="btn">Read Now</a>
                </div>
                <!-- Add more book cards as needed -->
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="about.html">About</a> <!-- Link to the About page -->
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