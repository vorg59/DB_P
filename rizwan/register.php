﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="style.css">
   
    <script src="https://kit.fontawesome.com/476f5c0c88.js" crossorigin="anonymous"></script>
    <title>ATLAS TRIPSTER | Register</title>
</head>
<body>
    <nav>
        <div class="brand" ><img class="topic" src="logo2.png"><h1 class="topic2">ATLAS TRIPSTER</h1></div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="booking.php">Booking</a>
            <a href="travelpackages.php">Packages</a>
            <a href="login.php">Login/Sign Up</a>
            <a href="wishlistwithlogin.php">Wishlist</a>
        </div>
    </nav>
    <div class="h">
        <div class="form">
            <div class="buttonbox">
                <div id="btn"></div>
                <a href="login.php" class="t">Login</a>
                <a href="Register.php" class="t">Sign Up</a>
            </div>
            <div class="socialiconss">
                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-apple"></i></a>
                <a href="https://www.nu.edu.pk/"><i class="fab fa-google"></i></a>
            </div>
           
            <form id="signup" class="inputgroup" action="/signup" method="POST">
                <input type="text" class="inputfield" id="username" name="username" placeholder="User name" required>
                <input type="email" class="inputfield" id="email" name="email" placeholder="Email id" required>
                <input type="password" class="inputfield" id="password" name="password" placeholder="Password" required>
                <input type="checkbox" class="check" id="terms" name="terms"><label for="terms">Agree to terms and conditions</label>
                <button type="submit" class="submit">Sign up</button>
            </form>
        </div>
    </div>
    <script src="/Atlas Tripster/Resources/Atlas/backend/register.js"></script>
</body>
</html>