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
    <link rel="stylesheet" href="styles/home.css">
    <script src="https://kit.fontawesome.com/72f3493b1d.js" crossorigin="anonymous"></script>
    <title>CyberSec Toolbox</title>
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
    <div class="container-tools">
        <div class="row-tools">
            <div class="js-tools-slider">
                <div class="tools_item violet">
                    <a href="image-enc.php">
                    <div class="tool-images">
                        <img src="public/image-enc.png" alt="tool-image" class="tool-image">
                        <hr />
                    </div>
                    <div class="tool-footer footer-text">
                        Image Encryption
                    </div>
                    </a>
                </div>
                <div class="tools_item orange">
                    <a href="des.php">
                        <div class="tool-images">
                            <img src="public/pngtree-icon-depicting-the-gradient-vector-of-an-encryption-key-for-a-darkthemed-interface-vector-png-image_43631982.jpg" alt="tool-image" class="tool-image">
                            <hr />
                        </div>
                        <div class="tool-footer footer-text">
                            Text Encryption
                        </div>
                    </a>
                </div>
                <div class="tools_item red">
                    <a href="password_check.php">
                        <div class="tool-images">
                            <img src="public/image-encryption.jpeg" alt="tool-image" class="tool-image">
                            <hr />
                        </div>
                        <div class="tool-footer footer-text">
                            Password Checker
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-tools">
        <div class="row-tools">
            <div class="js-tools-slider">
                <div class="tools_item blue">
                    <a href="image-steg.php">
                    <div class="tool-images">
                        <img src="public/image-steganography.png" alt="tool-image" class="tool-image">
                        <hr />
                    </div>
                    <div class="tool-footer footer-text">
                        Image Steganography
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
