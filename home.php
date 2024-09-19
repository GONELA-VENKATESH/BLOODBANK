<?php
// home.php

// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'Guest'; // Default to Guest if not logged in
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Blood Bank & Donation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background"></div>

    <div class="content">
        <header>
            <nav class="navbar">
                <div class="logo">
                    <h1>Blood Bank & Donation</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="donate.php">Donate</a></li>
                    <li><a href="recipients.php">Recipients</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li> <!-- Display username -->
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </header>

        <!-- Blood Donation Info Section -->
        <section class="donation-info">
            <h2>Why Donate Blood?</h2>
            <p>Donating blood is a simple, safe way to save lives. Your blood can help treat patients with cancer, traumatic injuries, and surgical patients.</p>
            <p><strong>Eligibility:</strong> You must be at least 17 years old, weigh at least 50 kg, and be in good health. Donors can donate blood every 56 days.</p>
            <a href="eligibility.php" class="btn">Learn More</a>
        </section>

        <!-- Blood Inventory Status Section -->
        <section class="inventory-status">
            <h2>Current Blood Inventory</h2>
            <div class="inventory-grid">
                <div class="inventory-item">
                    <span>A+</span>
                    <p>50 units available</p>
                </div>
                <div class="inventory-item">
                    <span>B+</span>
                    <p>30 units available</p>
                </div>
                <div class="inventory-item">
                    <span>O-</span>
                    <p>15 units available</p>
                </div>
                <!-- Add more blood types as needed -->
            </div>
            <a href="inventory.php" class="btn">View Full Inventory</a>
        </section>

        <!-- Upcoming Donation Drives Section -->
        <section class="donation-drives">
            <h2>Upcoming Donation Drives</h2>
            <ul>
                <li>City Center Drive – September 25, 2024</li>
                <li>Community Health Camp – October 10, 2024</li>
                <li>University Blood Drive – November 5, 2024</li>
            </ul>
            <a href="events.php" class="btn">See All Events</a>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials">
            <h2>Success Stories</h2>
            <div class="testimonial">
                <blockquote>
                    "Donating blood was the easiest way to make a difference. I feel great knowing that I could help save lives." – <strong>Sarah K.</strong>
                </blockquote>
            </div>
            <div class="testimonial">
                <blockquote>
                    "Receiving blood during my surgery saved my life. I am forever grateful to the donors." – <strong>John D.</strong>
                </blockquote>
            </div>
            <a href="stories.php" class="btn">Read More Stories</a>
        </section>

        <!-- Contact Section -->
        <section class="contact">
            <h2>Contact Us</h2>
            <p>For inquiries, please contact us at:</p>
            <p><strong>Email:</strong> support@bloodbank.com</p>
            <p><strong>Phone:</strong> +1 (555) 123-4567</p>
            <a href="contact.php" class="btn">Get in Touch</a>
        </section>

        <!-- Latest News or Blog Section -->
        <section class="latest-news">
            <h2>Latest News & Updates</h2>
            <article class="news-item">
                <h3>Blood Donation Helps Fight Cancer</h3>
                <p>Research shows that blood donations are crucial in the treatment of cancer patients...</p>
                <a href="blog.php?article=1" class="btn">Read More</a>
            </article>
            <article class="news-item">
                <h3>Blood Bank Implements New Safety Protocols</h3>
                <p>We have implemented new safety protocols to ensure the safety of donors and staff during the COVID-19 pandemic...</p>
                <a href="blog.php?article=2" class="btn">Read More</a>
            </article>
            <a href="news.php" class="btn">View All News</a>
        </section>
    </div>
</body>
</html>
