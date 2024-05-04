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
    <link rel="stylesheet" href="styles/des.css">
    <title>CyberSec Toolbox</title>
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

    <div class="main-area">
        <div class="container">
            <div class="center-text">
                <h1 class="tool_title">Text Encryption - Decryption</h1>
                <p class="desc_tool">Unlocking Privacy: Your Text, Secured with DES Encryption</p>
            </div>
            <div class="summarizer">
                <div class="row">
                    <div class="col-12">
                        <div class="summarizer-item">
                            <label for="title" class="enter-any-text">Enter any text to be encrypted</label>
                            <div class="form-group">
                                <textarea placeholder="i.e., the importance of the honey bee" rows="9" cols="100" maxlength="1000" id="inputTextEncrypt" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="key"><p id="bold">Enter Secret Key</p> (Remember, the encrypted text can't be decrypted without this secret key)</label>
                                <textarea placeholder="Enter Secret Key (Default = 1234)" rows="1" cols="100" maxlength="64" id="inputKeyEncrypt" class="form-control"></textarea>
                            </div>
                            <div class="summarizer-action">
                                <button class="button" onclick="performOperationEncryption()">
                                    Generate
                                </button>
                            </div>
                            <label for="title" class="encrypted-output enter-any-text">Encrypted Output</label>
                            <div class="form-group">
                                <textarea placeholder="Result goes here" rows="" cols="100" id="outputBoxEncrypted" class="form-control" readonly></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="summarizer-item">
                            <label for="title" class="enter-any-text">Enter any text to be Decrypted</label>
                            <div class="form-group">
                                <textarea placeholder="724d6f26690fee4e1a0ef68afa6c51fb" rows="9" cols="100" maxlength="1000" id="inputTextDecrypt" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="key"><p id="bold">Enter Secret Key</p> (The same key used during encryption)</label>
                                <textarea placeholder="Enter Secret Key (Default = 1234)" rows="1" cols="100" maxlength="64" id="inputKeyDecrypt" class="form-control"></textarea>
                            </div>
                            <div class="summarizer-action">
                                <button class="button" onclick="performOperationDecryption()">
                                    Generate
                                </button>
                            </div>
                            <label for="title" class="encrypted-output enter-any-text">Decrypted Output</label>
                            <div class="form-group">
                                <textarea placeholder="Result goes here" rows="" cols="100" id="outputBoxDecrypted" class="form-control" readonly></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
    <script src="scripts/des.js"></script>

</body>
</html>