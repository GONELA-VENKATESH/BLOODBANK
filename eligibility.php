<?php
// eligibility.php

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
    <title>Blood Donation Eligibility - Blood Bank & Donation</title>
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
        <h1 class="heading">Blood Donation Eligibility</h1>

        <section class="eligibility-info">
            <h2>Who Can Donate Blood?</h2>
            <p>
                Blood donation is a vital way to help save lives, but not everyone is eligible to donate. To ensure the safety of both the donor and the recipient, certain eligibility criteria must be met. Here’s a detailed guide to understanding who can donate blood.
            </p>

            <h3>1. Age Requirements</h3>
            <p>
                Donors must be at least 17 years old to donate blood. In some states or countries, 16-year-olds may donate with parental consent. There is no upper age limit for donation as long as the individual is in good health. However, for first-time donors above the age of 65, it’s important to consult with a healthcare provider before donating.
            </p>

            <h3>2. Weight and Health Requirements</h3>
            <p>
                Donors must weigh at least 50 kg (110 pounds) to ensure they can safely tolerate the blood donation process. Individuals should be in good health at the time of donation, meaning they should feel well and free from acute illnesses. Chronic conditions like diabetes or high blood pressure may not disqualify donors as long as the conditions are controlled with medication or other treatments.
            </p>

            <h3>3. Health Conditions and Medications</h3>
            <p>
                People with certain health conditions are not eligible to donate blood. These include:
                <ul>
                    <li><strong>HIV/AIDS:</strong> Individuals who are HIV-positive or have AIDS are permanently deferred from donating blood.</li>
                    <li><strong>Cancer:</strong> Individuals with active cancer or those undergoing cancer treatment are not eligible. However, those who are cancer-free for at least 1-5 years (depending on the type of cancer) may be eligible.</li>
                    <li><strong>Heart Disease:</strong> Those with a history of heart disease may need to consult a doctor and could be deferred from donating.</li>
                </ul>
                In terms of medications, individuals taking antibiotics for active infections are temporarily deferred, as are those on certain blood-thinning medications. Always check with the donation center if you’re on medication.
            </p>

            <h3>4. Travel History</h3>
            <p>
                Recent travel to countries with a high risk of diseases such as malaria or Zika virus can make individuals temporarily ineligible to donate. This deferral is usually for a period of 1 to 3 years, depending on the specific disease risk in the area visited. Travel restrictions can vary, so donors should check with their local blood bank if they’ve recently traveled.
            </p>

            <h3>5. Tattoos and Piercings</h3>
            <p>
                Individuals with recent tattoos or piercings are temporarily deferred from donating for 3 to 12 months. This is to ensure that any potential risk of infection has passed. If the tattoo or piercing was done in a state-regulated facility, the deferral period may be shorter.
            </p>

            <h3>6. Pregnancy and Breastfeeding</h3>
            <p>
                Pregnant individuals are not eligible to donate blood. After giving birth, donors must wait at least six weeks before donating again. Breastfeeding individuals can donate as long as they meet other eligibility criteria.
            </p>

            <h3>7. Frequency of Donation</h3>
            <p>
                Blood donors can give whole blood every 56 days (approximately 8 weeks). For platelet donation, donors can give more frequently, every 7 to 14 days, but no more than 24 times a year.
            </p>

            <p>
                <strong>Remember:</strong> Even if you are deferred from donating, you can still support blood donation efforts in other ways, such as volunteering or encouraging others to donate.
            </p>
            <a href="donate.php" class="btn">Check Donation Locations</a>
        </section>
    </div>
</body>
</html>
