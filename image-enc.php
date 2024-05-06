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
    <link rel="stylesheet" href="styles/image-enc.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <script src="scripts/image-encryption.js"></script>
    <title>Image Encryption</title>
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


    <div class="main-area">
        <div class="container">
            <div class="center-text">
                <h1 class="tool_title">Image Encryption - Decryption</h1>
                <p class="desc_tool">Protecting Your Photos: Secure Encryption for Images</p>
            </div>
            <div class="upload-container-one">
                <div class="upload-container">
                    <div class="uploader-inner" id="none" style="display : block">
                        <div class="file-upload-div">
                            <input style="display: none;" id="imageInput" type="file" name="pic" accept="image/*" onchange="showFileName(this);" />
                            <button title="Upload from PC"
                                onclick="document.getElementById('imageInput').click()">Upload from PC</button>
                        </div>
                        <!-- <p class="drag-text">
                            or Drag files here
                        </p> -->
                    </div>
                </div>
                <span class="file-name" id="file-name"></span>
                <div class="input-msg">
                    <label for="msg">
                        <p id="bold">The Encryption Key</p>
                    </label>
                    <textarea placeholder="Enter Encryption Key" rows="2" cols="50" maxlength="1000" id="encryptionKey"
                        class="form-control"></textarea>
                </div>
                <div class="encrypt-btn">
                    <button title="Encrypt" onclick="encryptImage()">Encrypt</button>
                </div>
                <div class="download-btn" id="download-btn" style="display: none">
                    <button><a id="downloadEncryptedLink" download="encrypted_image.png">Download Encrypted
                            Image</a></button>
                </div>
            </div>
            <hr />

            <div class="upload-container-one">
                <div class="upload-container">
                    <div class="uploader-inner" id="none" style="display : block">
                        <div class="file-upload-div">
                            <input style="display: none;" id="encryptedImageInput" type="file" name="pic" accept="image/*" onchange="showFileName1(this);" />
                            <button title="Upload from PC" onclick="document.getElementById('encryptedImageInput').click()">Upload from PC</button>
                        </div>
                        <!-- <p class="drag-text">
                            or Drag files here
                        </p> -->
                    </div>
                </div>
                <span class="file-name1" id="file-name1"></span>
                <div class="input-msg">
                    <label for="msg">
                        <p id="bold">The Decryption Key</p>
                    </label>
                    <textarea placeholder="Enter Decryption Key" rows="2" cols="50" maxlength="1000" id="decryptionKey" class="form-control"></textarea>
                </div>
                <div class="encrypt-btn">
                    <button title="Decrypt" onclick="decryptImage()">Decrypt</button>
                </div>
                <div class="decryptedImageDisplay" id="decryptedImageDisplay" style="display:none">
                    <img id="decryptedImage">
                </div>
                <div class="download-btn-decrypt" id="download-btn-decrypt" style="display: none">
                    <button><a id="downloadDecryptedLink" download="decrypted_image.png">Download Decrypted Image</a></button>
                </div>
                
            </div>

        </div>
    </div>
</body>

</html>