<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATLAS TRIPSTER | Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/476f5c0c88.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><div class="brand" ><img class="topic" src="logo2.png"><h1 class="topic2">ATLAS TRIPSTER</h1></div></a>
            <div class="menu">
                <a href="index.php">Home</a>
                <a href="booking.php">Booking</a>
                <a href="travelpackages.php">Packages</a>
                <a href="login.php">Login/Sign Up</a>
                <a href="wishlistwithlogin.php">Wishlist</a>
            </div>
        </nav>
    </header>
    <div class="h">
        <div class="form">
            <div class="buttonbox">
                <div id="btn"></div>
                <a href="login.php" class="t">Login</a>
                <a href="Register.php" class="t">Sign Up</a>
            </div>
            <div class="socialiconss">
                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></i></a>
                <a href="https://www.apple.com/"><i class="fab fa-apple"></i></a>
                <a href="https://www.nu.edu.pk/"><i class="fab fa-google"></i></a>
            </div>
            <form id="login" class="inputgroup">
                <input type="text" class="inputfield" id="user-name" name="user-name" placeholder="User name" required>
                <input type="password" class="inputfield" id="password" name="password" placeholder="Password" required>
                <input type="checkbox" class="check" id="remember-me"><label for="remember-me">Remember me</label>
                <button type="submit" class="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>