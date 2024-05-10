<?php
$showAlert=false;
$showError=false;
if(isset($_POST['signup'])){
    include '_dbconnect.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $existsql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $existsql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        // $showError = "<h1 style='color:white; display:flex; justify-content:center; position:absolute;'>Email already exists.</h1>";
        echo "<script>alert('Email already exists.')</script>";
    } else {
        if(($password == $cpassword)){
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO `users` (`name`,`email`,`password`,`dt`) VALUES ('$name','$email','$hash',current_timestamp())";
    
            $result = mysqli_query($conn, $sql);
    
            if($result) {
                // $showAlert = "<h1 style='color:white; display:flex; justify-content:center; position:absolute;'>User Created<h1>";
                echo "<script>alert('User Created')</script>";
                // header("Location: signin.php");
            }
        } else{
            // $showError = "<h1 style='color:white; display:flex; justify-content:center; position:absolute;'>Passwords do not match</h1>";
            echo "<script>alert('Passwords do not match')</script>";
        }
    }
}

$login=false;
$showErrorL=false;

if(isset($_POST['login'])){
    include '_dbconnect.php';
    $email = $_POST['email'];
    $password = $_POST['password']; 

    // $sql = "SELECT * FROM users where email = '$email' AND password = '$password'";
    $sql = "SELECT * FROM users where email = '$email'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1) {
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $row['name'];
                header("location: cover.php");
            } else {
                // $showErrorL = "<h1 style='color:white; display:flex; justify-content:center; position:absolute;'>Invalid Credentials.</h1>";
                echo "<script>alert('Invalid Credentials')</script>";
            }
        }
    } else {
        // $showErrorL = "<h1 style='color:white; display:flex; justify-content:center; position:absolute;'>Invalid Credentials.</h1>";
        echo "<script>alert('Invalid Credentials')</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN IN PAGE</title>
    <link rel="stylesheet" href="styles/forall.css">
    <link rel="stylesheet" href="styles/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" href="public/CS-removebg.png" type="image/x-icon" />

</head>

<body>
    <?php
        if($showAlert) {
            echo $showAlert;
        }
        if($showError) {
            echo $showError;
        }

        if($showErrorL) {
            echo $showErrorL;
        }
        if($login) {
            echo "Login Success";
        }

    ?>
    <div class="container">
        <div class="form-box">
            <h1 class="title">Sign Up</h1>
            <div class="underline"></div>
            <form method='post' action='signin.php'>
                <div class="input-group1">
                    <div class="input-field namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Name" name='name' id='namereq' required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-at"></i>
                        <input type="email" placeholder="Email" name='email' required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" placeholder="Password" name='password' required>
                    </div>
                    <div class="input-field cpassword">
                        <i class="fa-solid fa-key"></i>
                        <input type="text" placeholder="Confirm Password" name='cpassword' id='cpassreq' required>
                    </div>
                    <!--<p>Password Suggestions <a href="#">Click here!</a></p>-->
                </div>
                <div class="submit-div">
                    <button type="submit" class='submit-btn up' name='signup'>Submit</button>
                    <button type="submit" class='hide submit-btn in' name='login'>Submit</button>
                </div>
                <div class="btn-field">
                    <button type="button" class="signUpBtn">Sign up</button>
                    <button type="button" class="disable signInBtn">Sign in</button>
                </div>
            </form>
        </div>
    </div>
    <script src="scripts/signin.js"></script>
</body>

</html>