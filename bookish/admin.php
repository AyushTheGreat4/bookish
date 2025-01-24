<?php
require 'includes/config.php';
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit;
}

// Fetch pending books
$sql = "SELECT * FROM books WHERE status = 'pending'";
$stmt = $conn->query($sql);
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBookSite - Admin Panel</title>
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

    <!-- Admin Panel Section -->
    <section class="admin-panel">
        <div class="container">
            <h2 class="section-title">Admin Panel</h2>
            <div class="admin-content">
                <!-- Admin Navigation -->
                <div class="admin-nav">
                    <ul>
                        <li><a href="#manage-books">Manage Books</a></li>
                        <li><a href="#manage-users">Manage Users</a></li>
                        <li><a href="#settings">Settings</a></li>
                    </ul>
                </div>

                <!-- Admin Content -->
                <div class="admin-main">
                    <!-- Pending Books Section -->
                        <div id="pending-books" class="admin-section">
                            <h3>Pending Books for Review</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Book Title 1</td>
                                        <td>Author Name 1</td>
                                        <td>Fiction</td>
                                        <td>
                                            <button class="btn">Approve</button>
                                            <button class="btn btn-danger">Reject</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Book Title 2</td>
                                        <td>Author Name 2</td>
                                        <td>Non-Fiction</td>
                                        <td>
                                            <button class="btn">Approve</button>
                                            <button class="btn btn-danger">Reject</button>
                                        </td>
                                    </tr>
                                    <!-- Add more rows as needed -->
                                </tbody>
                            </table>
                        </div>
                    
                        <!-- Manage Books Section -->
                        <div id="manage-books" class="admin-section">
                            <h3>Manage Books</h3>
                            <table>
                                <!-- Existing Manage Books table content -->
                            </table>
                            <button class="btn">Add New Book</button>
                        </div>
                    
                        <!-- Manage Users Section -->
                        <div id="manage-users" class="admin-section">
                            <h3>Manage Users</h3>
                            <table>
                                <!-- Existing Manage Users table content -->
                            </table>
                            <button class="btn">Add New User</button>
                        </div>
                    
                        <!-- Manage Categories Section -->
                        <div id="manage-categories" class="admin-section">
                            <h3>Manage Categories</h3>
                            <table>
                                <!-- Existing Manage Categories table content -->
                            </table>
                            <button class="btn">Add New Category</button>
                        </div>
                    
                        <!-- Settings Section -->
                        <div id="settings" class="admin-section">
                            <h3>Settings</h3>
                            <form>
                                <!-- Existing Settings form content -->
                            </form>
                        </div>
                    </div>
                    <!-- Manage Books Section -->
                    <div id="manage-books" class="admin-section">
                        <h3>Manage Books</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Book Title 1</td>
                                    <td>Author Name 1</td>
                                    <td>Fiction</td>
                                    <td>
                                        <button class="btn">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Book Title 2</td>
                                    <td>Author Name 2</td>
                                    <td>Non-Fiction</td>
                                    <td>
                                        <button class="btn">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <button class="btn">Add New Book</button>
                    </div>

                    <!-- Manage Users Section -->
                    <div id="manage-users" class="admin-section">
                        <h3>Manage Users</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>john@example.com</td>
                                    <td>User</td>
                                    <td>
                                        <button class="btn">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jane Smith</td>
                                    <td>jane@example.com</td>
                                    <td>Admin</td>
                                    <td>
                                        <button class="btn">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <button class="btn">Add New User</button>
                    </div>

                    <!-- Manage Categories Section -->

                    <!-- Settings Section -->
                    <div id="settings" class="admin-section">
                        <h3>Settings</h3>
                        <form>
                            <div class="form-group">
                                <label for="site-name">Site Name</label>
                                <input type="text" id="site-name" name="site-name" value="MyBookSite">
                            </div>
                            <div class="form-group">
                                <label for="site-description">Site Description</label>
                                <textarea id="site-description" name="site-description" rows="3">Your go-to platform for discovering and reading amazing books.</textarea>
                            </div>
                            <button type="submit" class="btn">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <a href=about.php>About</a>
                <a href="privacy.php">Privacy Policy</a>
                <a href="terms">Terms of Service</a>
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