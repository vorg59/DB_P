﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATLAS TRIPSTER | Booking</title>
    <link rel="stylesheet" href="BookingStyle.css">
    <link rel="stylesheet" href="style.css">
    <script src="/Atlas Tripster/Resources/Atlas/JS/backend1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/476f5c0c88.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><div class="brand"><h1 class="animate__heartBeat"><img src="logo2.png"></div></h1></a>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="booking.php">Booking</a>
                <a href="travelpackages.php">Packages</a>
                <a href="login.php">Login/Sign Up</a>
                <a href="wishlistwithlogin.php">Wishlist</a>
            </div>
        </nav>

</header>
<div class="backgrnd">
    <div class="booking-form">
        <h2>Online Booking</h2>
        <form action="http://localhost:3000/submit" method="post">
            <label for="Name">Name</label>
            <input type="text" name="Name" id="person-name" required>

            <label for="Email">Email</label>
            <input type="text" name="Email" id="person-email" required>

            <label for="Destination">Destination</label>
            <select name="class" id="class" required>
                <option value="select">Select</option>
                <option value="Paris">Paris</option>
                <option value="London">London</option>
                <option value="Dubai">Dubai</option>
                <option value="New York">Switzerland</option>
                <option value="Switzerland">Paris</option>
                <option value="Netherland">Netherland</option>
                <option value="Shenghai">Shenghai</option>
                <option value="Chicago">Chicago</option>
                
            </select>

            <label for="Departure-date">Departure</label>
            <input type="date" class="date-in" name="Departure-date" id="DDate" required>

            <label for="Return-date">Return</label>
            <input type="date" class="date-in" name="Return-date" id="RDate" required>

            <label for="persons">Passengers</label>
            <input type="number" name="persons" id="person-count" required>
            
            <label for="class">Class</label>
            <select name="class" id="class" required>
                <option value="select">Select</option>
                <option value="Economy">Economy</option>
                <option value="Business">Silver</option>
                <option value="Economy">Gold</option>
                <option value="Business">Platinum</option>
            </select>
            <a href="pay.php">Proceed</a>

        </form>
    </div>
</div>
<footer>
    <div class="row">
        <div class="col">
            <img src="logo2.png" class="flogo">
            <p>Our website will streamline the entire travel planning process.</p>
        </div>
        <div class="col">
            <h2>Offices</h2>
            <div class="cont">
                <li><i class="fa-solid fa-location-dot"></i><a href="https://google.com/maps/dir//fast+university+location+map/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x391903f08ebc7e8b:0x47e934f4cd34790?sa=X&ved=2ahUKEwjEwZq4u9iEAxXWh_0HHaEECLcQ9Rd6BAhgEAA"> 852-B Milaad St, Block B Faisal Town</a></li>
                <li><i class="fa-regular fa-envelope"></i><a href="mailto:l227757@lhr.nu.edu.pk">l227757@lhr.nu.edu.pk</a></li>
                <li><i class="fa-solid fa-phone"></i><a href="tel:(042) 111 128 128">(042) 111 128 128</a></li>
            </div>
        </div>
        <div class="col">
            <h2>Links</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About us</a></li>
            </ul>
        </div>
        <div class="col">
            <h2>Websites</h2>
            <div class="socialicons">
                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="https://www.nu.edu.pk/"><i class="fab fa-twitter"></i></a>
  
            </div>
        </div>
    </div>
    <hr><p class="copy"></p>
  </footer>
</body>
</html>