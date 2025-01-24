<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBookSite - Contact</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="container">
            <a href="index.html" class="logo">MyBookSite</a>
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

    <!-- Contact Section -->
    <section class="contact-page">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-content">
                <!-- Contact Form -->
                <div class="contact-form">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="contact-info">
                    <h3 class="info-title">Get in Touch</h3>
                    <p class="info-text">
                        Have questions or feedback? We'd love to hear from you! Reach out to us using the contact form or the information below.
                    </p>
                    <ul class="info-list">
                        <li><strong>Email:</strong> <a href="mailto:info@mybooksite.com">info@mybooksite.com</a></li>
                        <li><strong>Phone:</strong> <a href="tel:+1234567890">+1 (234) 567-890</a></li>
                        <li><strong>Address:</strong> 123 Book Street, Reading City, RC 12345</li>
                    </ul>
                </div>
            </div>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href="about.html">About</a>
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