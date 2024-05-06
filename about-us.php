<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/forall.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/about-us.css">
    <title>About Us</title>
    <link rel="icon" href="public/CS-removebg.png" type="image/x-icon" />
</head>

<body>
    <!-- <nav>
        <div class="nav-container">
            <div class="nav-div">
                <div class="logo-img">
                    <a href="index.html"><img src="public/CyberSec.png" alt="cybersec" class="cybersec-png"></a>
                </div>
                <div class="ul-div">
                    <ul class="navbar-list">
                        <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="extra.html" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                    </ul>
                </div>
                <div class="share-div">
                    <img src="public/share.png" alt="share" class="share-png" onclick="">
                </div>
                <div>
                    <button class="btn-div"><a href="#" class="signin-btn">Sign In</a></button>
                </div>
            </div>
        </div>
        </nav>
    <div class="first-rectangle"></div> -->
    <?php require 'navbar.php'?>
    <div class="aboutus-container">
        <h2>About Us</h2>
        <p class="first-paragraph">Welcome to CyberSec, your premier destination for learning and implementing
            cutting-edge
            cybersecurity tools. CyberSec is designed to equip users with practical cybersecurity skills through
            interactive
            tools and resources.Each feature has been meticulously developed to provide hands-on learning experiences in
            a
            user-friendly environment.</p>
        <p>We believe that by providing practical tools, we can break down the barriers to entry in the cybersecurity
            field
            and foster a new generation of informed digital citizens and professionals.</p>
        <p>Our mission is straightforward—to empower students and cybersecurity enthusiasts with the knowledge, tools,
            and
            confidence to understand and navigate the digital world safely.</p>
        <p>Our website features various tools that help users simulate attacks, test network security, and learn about
            the
            latest in cybersecurity defense strategies. Each tool has been developed with the guidance of seasoned
            cybersecurity professionals and updated regularly to reflect new challenges and opportunities in the field.
        </p>

        <h2>Thank You</h2>
        <p class="first-paragraph">Thank you for visiting CyberSec. We hope you find our tools helpful and informative.
            Your
            interest and trust in our project inspire us to continuously improve and expand our offerings. If you have
            any
            suggestions or feedback, please feel free to share it with us. Together, we can make the digital world a
            safer
            place for everyone.</p>

    </div>
    <div class="contact-us-container">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <div class="profile-card">
            <img src="public/shail.jpg" alt="Profile Photo">
            <div class="profile-details">
                <h2>Shail Macwan</h2>
                <h4>22CS035</h4>

                <div class="media-buttons">
                    <a href="https://www.instagram.com/s_hail.0/" style="background : #000000" target="_blank"
                        class="link">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://github.com/Shail-26/" style="background : #000000" target="_blank" class="link">
                        <i class='bx bxl-github'></i>
                    </a>
                    <a href="https://www.linkedin.com/in/shail-macwan-tech/" style="background : #000000"
                        target="_blank" class="link">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="profile-card">
            <img src="public/dhruvi.jpg" alt="Profile Photo">
            <div class="profile-details">
                <h2>Dhruvi Mahale</h2>
                <h4>22CS036</h4>

                <div class="media-buttons">
                    <a href="https://www.instagram.com/_d_hruvi__/" style="background : #040600" target="_blank"
                        class="link">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://github.com/22CS036dhruvimahale/" style="background : #000000" target="_blank"
                        class="link">
                        <i class='bx bxl-github'></i>
                    </a>
                    <a href="https://www.linkedin.com/in/dhruvi-mahale-4aa072258/" style="background : #000000"
                        target="_blank" class="link">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


</body>

</html>