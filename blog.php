<?php
// blog.php

// Start session if needed
session_start();

// Example blog articles stored in an array
$articles = [
    1 => [
        'title' => 'Blood Donation Helps Fight Cancer',
        'date' => 'September 18, 2024',
        'content' => "Blood donation is often viewed as a simple act of kindness, but for many, especially cancer patients, it can be a lifeline. As cancer treatment continues to advance, the need for blood donations remains critical. From chemotherapy to surgeries, blood transfusions play a significant role in the recovery process for cancer patients, ensuring they have the strength to continue their battle.

Chemotherapy, one of the most common treatments for cancer, targets and kills fast-growing cancer cells. Unfortunately, it also affects healthy cells, including those responsible for producing blood cells in the bone marrow. As a result, many cancer patients undergoing chemotherapy experience severe anemia, a condition marked by a decrease in red blood cells. This can leave them feeling weak, fatigued, and in need of blood transfusions to replenish the lost cells.

Blood transfusions are also necessary for patients who experience significant blood loss during surgeries, which are often required to remove tumors or treat cancer-related complications. These procedures can cause a drop in red blood cells, platelets, or plasma, leading to a critical need for blood donors.

In fact, many cancer treatments would be impossible without blood donors. Platelet transfusions, in particular, are vital for patients with leukemia or lymphoma. Platelets are responsible for blood clotting, and patients with these types of cancer often have low platelet counts due to both their disease and its treatment. Without enough platelets, even a minor injury could result in serious bleeding, and surgical procedures would be extremely risky.

Blood donation is also essential for stem cell transplants, another treatment option for some cancer patients. Stem cells, which are found in the bone marrow, are used to replace damaged or destroyed cells in patients undergoing intense chemotherapy or radiation therapy. After the procedure, patients may require blood and platelet transfusions as their body begins to regenerate healthy cells.

One of the greatest misconceptions about blood donation is that it is painful or risky. In reality, the process is simple, safe, and relatively quick. The average donation takes less than an hour from start to finish, with the actual blood collection lasting only about 10 minutes. Moreover, blood donation centers follow strict safety protocols to ensure that donors are comfortable and that their blood is collected using sterile equipment.

For the recipient, the impact of a blood donation is profound. A single pint of blood, which is the standard donation amount, can save up to three lives. Cancer patients often need multiple transfusions during their treatment, and having a stable supply of blood ensures that hospitals can meet these needs without delay.

What many people don't realize is that donating blood not only helps others but can also benefit the donor. Regular blood donation has been linked to improved cardiovascular health, as it helps reduce iron levels in the body. High iron levels are associated with an increased risk of heart disease, and donating blood can help maintain healthy iron levels.

In addition, the act of giving blood can foster a sense of community and fulfillment. Knowing that a small act can have such a big impact on someone else's life is incredibly rewarding. For cancer patients, each donation represents a renewed chance at life, hope, and recovery.

If you’ve ever considered donating blood, now is the time. Cancer patients across the globe are in constant need of lifesaving blood, and your donation could make all the difference. Whether it’s red blood cells, platelets, or plasma, every component of your blood can help someone in need. Make an appointment today and become a part of the lifesaving effort.

By donating blood, you're not just giving a physical resource—you're offering hope, strength, and a second chance to those who need it most. Cancer is a battle that no one fights alone, and through blood donation, you can stand alongside these patients in their journey toward healing."
    ],
    2 => [
        'title' => 'Blood Bank Implements New Safety Protocols',
        'date' => 'August 22, 2024',
        'content' => "In response to the challenges posed by the ongoing COVID-19 pandemic, blood banks around the world have implemented new safety protocols to protect both donors and staff. While blood donation is a vital service that cannot be paused, ensuring the safety of everyone involved has become a top priority.

The pandemic introduced a new level of complexity to blood collection. Traditionally, blood donation drives and centers operate in close quarters, with donors sitting side-by-side while they give blood. However, the rise of COVID-19 has made it necessary to rethink how these spaces are organized to minimize the risk of virus transmission.

One of the key changes implemented by blood banks is social distancing. Donation centers have restructured their layouts to ensure that donors are seated at least six feet apart from one another. This often means fewer donation stations, but it is a necessary step to prevent the spread of the virus.

Additionally, blood donation appointments are now staggered to reduce the number of people in a center at any given time. Previously, walk-ins were common, but now most blood banks require donors to make appointments in advance. This not only limits crowding but also allows staff to properly disinfect donation areas between each donor.

Speaking of disinfection, enhanced cleaning protocols have been a major focus. All equipment, surfaces, and chairs are sanitized after every use. Donation centers have increased the availability of hand sanitizer, encouraging donors to clean their hands frequently throughout the process. Staff members, too, are required to adhere to strict hygiene practices, including frequent handwashing and wearing personal protective equipment (PPE) like gloves and masks.

Masks have become a staple in all public spaces, and blood banks are no exception. Both donors and staff are required to wear masks at all times, except when donors are actively eating or drinking post-donation snacks. Some centers even provide masks for those who arrive without one. This universal masking policy helps reduce the potential spread of respiratory droplets, which are a primary mode of transmission for the virus.

Temperature checks and health screenings are another critical safety measure. Before entering the donation center, each donor undergoes a brief health assessment, which includes a temperature check and questions about recent travel, exposure to COVID-19, and any symptoms they may be experiencing. Donors who show signs of illness or have had potential exposure to the virus are asked to postpone their donation until they are fully recovered and have followed the recommended isolation guidelines.

Beyond these visible safety protocols, blood banks have also adapted their communication strategies. Many have implemented online platforms where donors can schedule appointments, fill out health questionnaires, and even receive real-time updates about their donation status. These digital tools minimize physical interaction and streamline the donation process.

One might wonder whether all these precautions have discouraged donors, but the response has been overwhelmingly positive. Blood banks report that donors feel reassured by the new safety measures and are more willing to participate, knowing that their health is being safeguarded. In fact, some blood donation centers have seen an uptick in donors, particularly among younger generations who are eager to support their communities during this challenging time.

The pandemic has underscored the importance of maintaining a stable blood supply. Hospitals rely on donations for surgeries, trauma care, and chronic illness treatments, and this need does not diminish during a global health crisis. By implementing these new safety protocols, blood banks are able to continue providing lifesaving blood to those who need it most while keeping everyone safe.

Moving forward, many of these safety measures are likely to remain in place, even after the pandemic subsides. The enhanced focus on hygiene, social distancing, and appointment-based donations has proven to be an effective model, not only for preventing the spread of infectious diseases but also for creating a more streamlined donation process overall.

In uncertain times like these, one thing remains constant: the need for blood. By adhering to the new safety protocols, blood donors can continue to give the gift of life without putting themselves or others at risk. If you’re healthy and able, consider making an appointment to donate blood today—your contribution could save a life."
    ]
];

// Get the article ID from the URL query string (default to 1 if not set)
$article_id = isset($_GET['article']) ? (int)$_GET['article'] : 1;

// Check if the article exists, otherwise show a 404 error
if (!array_key_exists($article_id, $articles)) {
    $article = [
        'title' => '404 - Article Not Found',
        'date' => '',
        'content' => 'Sorry, the article you are looking for does not exist.'
    ];
} else {
    $article = $articles[$article_id];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($article['title']); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Blood Bank & Donation</h1>
            </div>
            <ul class="nav-links">
                <li><a href="donate.php">Donate</a></li>
                <li><a href="recipients.php">Recipients</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="profile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        <!-- Blog Article -->
        <section class="article">
            <h2><?php echo htmlspecialchars($article['title']); ?></h2>
            <p class="date"><?php echo htmlspecialchars($article['date']); ?></p>
            <p><?php echo htmlspecialchars($article['content']); ?></p>
            <a href="news.php" class="btn">Back to News</a>
        </section>
    </div>
</body>
</html>
