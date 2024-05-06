<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !=true){
    header("location: signin.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/forall.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/passwd-check.css">
    <script src="scripts/password-gen.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
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
    <div class="center-text">
        <h1 class="tool_title">Password Strength Tester</h1>
        <p class="desc_tool">Strengthen Your Security: Test Your Password Strength Today!</p>
    </div>
    <div class="outer-container">
        <div class="bg-outer">
            <div class="password-container">
                <label for="password">Enter Password:</label>
                <input type="password" id="password" oninput="checkPasswordStrength()" placeholder="Type your password...">
                <div type="button" id="togglePassword" class="show">Show</div>
                <div class="strength-meter">
                    <div class="strength-text" id="strengthText">Strength: </div>
                    <div class="meter">
                        <div class="meter-fill-grey" id="strengthMeter" style="background-color:none"></div>
                    </div>
                    <div class="time-to-crack" id="timeToCrack">Approx. Time to crack: </div>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/passwd-check.js"></script>
</body>