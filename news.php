<?php
// news.php

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
    <title>News & Updates - Blood Bank & Donation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="donate.php">Donate</a></li>
            <li><a href="recipients.php">Recipients</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
        </ul>
    </nav>

    <!-- Page content -->
    <div class="content">
        <h1 class="heading">Latest News & Updates</h1>

        <!-- Internal Blood Bank News -->
        <section class="news-section">
            <article class="news-item">
                <h2><a href="blog.php?article=1">Blood Donation Helps Fight Cancer</a></h2>
                <p>Research shows that blood donations are crucial in the treatment of cancer patients. Discover how your donation can make a difference in the fight against cancer...</p>
                <a href="blog.php?article=1" class="btn">Read More</a>
            </article>

            <article class="news-item">
                <h2><a href="blog.php?article=2">Blood Bank Implements New Safety Protocols</a></h2>
                <p>We have implemented new safety protocols to ensure the safety of donors and staff during the COVID-19 pandemic...</p>
                <a href="blog.php?article=2" class="btn">Read More</a>
            </article>
        </section>

        <!-- External Daily Updated News Links -->
        <section class="external-news">
            <h2>Daily Updated News from External Sources</h2>
            <ul>
                <li><a href="https://www.who.int/news-room" target="_blank">World Health Organization (WHO) - Latest Health News</a></li>
                <li><a href="https://www.cnn.com/health" target="_blank">CNN Health - Top Stories and Health News</a></li>
                <li><a href="https://www.bbc.com/news/health" target="_blank">BBC News - Health News</a></li>
                <li><a href="https://www.nytimes.com/section/health" target="_blank">The New York Times - Health Section</a></li>
                <li><a href="https://www.reuters.com/health" target="_blank">Reuters Health News</a></li>
            </ul>
        </section>
    </div>
</body>
</html>
