<?php

session_start();

$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $loggedin = true;
    $name = $_SESSION['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/forall.css">
    <link rel="stylesheet" href="styles/navbar.css">
    <link rel="stylesheet" href="styles/cover.css">
    <script src="https://kit.fontawesome.com/72f3493b1d.js" crossorigin="anonymous"></script>
    <title>CyberSec Toolbox</title>
</head>

<body>
    <?php require 'navbar.php'?>
    
    <div class="container-cover">
        <div class="cover-title">
            <div class="cover-inner-title">
                <p class="title-feature">FEATURES</p>
                <h1 class="main-bold-title">Securing Digital Footprints: Unveil, Encrypt, Fortify.</h1>
                <div class="img">
                    <img src="public/cover-secure.png" alt="secure">
                </div>
                <div class="btn">
                    <?php 
                    if(!$loggedin){
                        echo '<div class="inner-btn" onclick="location.href=`signin.php`">Get Started for Free</div>';
                    }
                    else {
                        echo '<div class="inner-btn" onclick="location.href=`index.php`">Explore the Website</div>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
    <div class="bottom-banner">
        <!--Nothing now-->
        <div class="content">
        <?php 
            if(!$loggedin){
                echo '<h1>To access the website, Please <span onclick="location.href=`signin.php`" style="cursor: pointer">Sign Up</span></h1>';
            }
            else {
                echo '<h1>Hello, Welcome to our Website <span>'.$_SESSION['name'].'</span>!</h1>';   //
            }
        ?>
        </div>
    </div>
</body>
