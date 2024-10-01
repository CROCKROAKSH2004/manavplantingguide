<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true;
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planting Guide</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<header>
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Plant Recommendation Tool</a>
        <a href="#">About us</a>
        <a href="#">Bookmarks</a>
    </div>
    <button class="openbtn" onclick="openNav()">&#9776;</button>

    <div class="logo-container">
        <a href="#" class="logo">
            <img src="plant_logo.png" alt="Planting Guide Logo">
            <span>Planting Guide</span>
        </a>
    </div>
    <nav class="nav-center">
        <ul>
            <li><a href="#">Plant Recommendation Tool</a></li>
            <li><a href="#">About Us</a></li>
        </ul>
    </nav>
    <div class="auth-container">
        <?php if ($isLoggedIn): ?>
            <p>Welcome, <?php echo htmlspecialchars($username); ?>!</p>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <button class="sign-up" onclick="window.location.href='register.html'">Sign Up</button>
            <button class="sign-in" onclick="window.location.href='login.html'">Sign In</button>
        <?php endif; ?>
    </div>
</header>

<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Find the Perfect Plants for Your Environment</h1>
        <p class="hero-subheading">Explore tailored plant recommendations based on your location and soil type.</p>
        <button class="hero-button" onclick="getStarted()">Get Started</button>
    </div>
</div>

<!-- How It Works Section -->
<section class="how-it-works">
    <div class="section-header">
        <h2>How It Works</h2>
        <p>Follow these steps to get personalized plant recommendations based on your location and soil type.</p>
    </div>
    <div class="steps-container">
        <div class="step">
            <div class="icon">🌍</div>
            <h3>Select Your Region</h3>
            <p>Choose your location to get plant recommendations suited for your area's climate and soil.</p>
        </div>
        <div class="step">
            <div class="icon">🌱</div>
            <h3>Choose Soil Type</h3>
            <p>Identify the type of soil you have to ensure the recommended plants will thrive.</p>
        </div>
        <div class="step">
            <div class="icon">🔍</div>
            <h3>Get Plant Suggestions</h3>
            <p>Receive a list of plants that are best suited for your region and soil type.</p>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section" id="features">
    <div class="features-container">
        <div class="feature-item">
            <img src="plant_photo_3.png" alt="Plant Recommendations" class="feature-icon">
            <h3 class="feature-title">Plant Recommendations</h3>
            <p class="feature-description">Get personalized plant suggestions based on your location and environment.</p>
        </div>
        <div class="feature-item">
            <img src="plant_photo_1.png" alt="Care Tips" class="feature-icon">
            <h3 class="feature-title">Care Tips</h3>
            <p class="feature-description">Receive expert advice on how to care for your plants for optimal growth.</p>
        </div>
        <div class="feature-item">
            <img src="plant_photo_2.png" alt="Bookmark Your Plants" class="feature-icon">
            <h3 class="feature-title">Bookmark Your Plants</h3>
            <p class="feature-description">Save and track the plants you're interested in for future reference.</p>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial-section">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="profile-container">
                <img src="meloni.jpg" alt="Meloni">
                <div class="profile-name">Meloni G.</div>
                <div class="review-text">🌸 "I decided to create a garden for Modi, partly because I’m tired of only seeing his face in selfies..."</div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="profile-container">
                <img src="modi.jpg" alt="Modi">
                <div class="profile-name">Modi J.</div>
                <div class="review-text">"Meloni’s idea of a garden makeover was truly a surprise..."</div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="profile-container">
                <img src="putin.jpg" alt="Putin">
                <div class="profile-name">Putin V.</div>
                <div class="review-text">"Planting a garden was a radical change from my usual activities..."</div>
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>About Us</h3>
            <p>Learn more about our mission to help you grow the perfect plants for your environment.</p>
        </div>
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">How It Works</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Contact Info</h3>
            <p><strong>Email:</strong> support@plantguide.com</p>
            <p><strong>Phone:</strong> +91 0000 8888 99</p>
            <p><strong>Location:</strong> Sion East, near KJ Somaiya Hospital 400022</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 Planting Guide. All Rights Reserved.</p>
        <ul class="social-icons">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
</footer>

<script src="landing_page.js"></script>
</body>
</html>
