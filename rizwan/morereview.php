<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Reviews</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="review.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/476f5c0c88.js" crossorigin="anonymous"></script>
    <style>
        .card {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
        }

        .card__content {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .card__content img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 20px;
            object-fit: cover; /* Ensures the image maintains aspect ratio while covering its container */
        }

        .card__details {
            flex: 1;
        }

        .card__details p {
            font-style: italic;
            color: #333;
            font-weight: bold;
        }

        .card__details h4 {
            color: #555;
            margin-top: auto;
            margin-bottom: 0;
            text-align: right; /* Aligns text to the right */
        }
    </style>
</head>
<body>
<header>
      <nav>
        <div class="brand">
            <h1 class="animate__heartBeat">
                <img src="logo2.png">
            </h1>
        </div>
        <div class="menu">
          <a href="index.php">Home</a>
          <a href="booking.php">Booking</a>
          <a href="travelpackages.php">Packages</a>
          <a href="login.php">Login/Sign Up</a>
          <a href="wishlistwithlogin.php">Wishlist</a>
      </div>
    </nav>
    <h1>Customer Reviews</h1>
    <?php
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "atlas";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }

    // Fetch all reviews from the database
    $sql = "SELECT * FROM reviews";
    $result = mysqli_query($conn, $sql);

    // Check if there are any reviews
    if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            // Echo HTML for each review
            echo '<div class="card">';
            echo '<div class="card__content">';
            echo '<img src="person.jpg" alt="user" />';
            echo '<div class="card__details">';
            echo '<span><i class="ri-double-quotes-l"></i></span>';
            echo $row["review"];
            echo '</p>';
            echo '<h4>- ' . $row["email"] . '</h4>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No reviews available.";
    }

    // Close the connection
    mysqli_close($conn);
    ?>

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
