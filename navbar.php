<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $loggedin = true;
}

echo '<nav>
    <div class="nav-container">
        <div class="nav-div">
            <div class="logo-img">
                <a href="cover.php"><img src="public/CyberSec.png" alt="cybersec" class="cybersec-png"></a>
            </div>
            <div class="ul-div">
                <ul class="navbar-list">
                    <li class="nav-item"><a href="cover.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="index.php" class="nav-link">Tools</a></li>
                    <li class="nav-item"><a href="about-us.php" class="nav-link">About Us</a></li>
                </ul>
            </div>
            <div class="share-div">
                <img src="public/share.png" alt="share" class="share-png" id="triggerDiv"> 
            </div>
            
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="modal-inner-content">
                        <div class="m-title">Show Us Some Love</div>
                        <div class="m-desc">Tell the world about CyberSec</div>
                        <div class="icons">
                            <a href="https://twitter.com/intent/tweet?text=Securing Digital Footprints: Unveil, Encrypt, Fortify.&amp;url=https://cybersec.com" target="_blank" title="Share to Twitter" rel="noreferrer noopener">
                                <div class="x-icon">
                                    <img src="public/x-social-media-white-icon.png" alt="" class="x-icon-img">
                                </div>
                            </a>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control default-background" value="https://www.cybersec.com" aria-label="" readonly="" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary js-copy-link" data-link="https://www.cybersec.com" type="button" id="button-addon2">Copy Link</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="overlay"></div>';
            if(!$loggedin){
            echo '
            <a href="signin.php" class="signin-btn">
                <div class="sign-in">
                    <button class="btn-div"><h1 class="btn-h1">Sign Up</h1></button>
                </div>
            </a>';
            }
            if($loggedin){
            echo '
            <a href="logout.php" style="text-decoration: none">
                <div class="icon">
                    <h1 style="margin-right: 30px;"><img src="public/user.png" alt="user" class="user-img"></h1>
                </div>
            </a>';
            }
            echo '
        </div>
    </div>
</nav>

<div class="first-rectangle"></div>';

echo '<script src="scripts/modal.js"></script>
<script src="scripts/copy-link.js"></script>';

?>