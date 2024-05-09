<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];

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
    else{ 
        // Submit the review to the database
        $sql = "INSERT INTO reviews (rating,email, review) VALUES ('$rating','$email', '$review')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your review has been submitted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>';
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> We are facing some technical issue and your review was not submitted successfully! We regret the inconvenience caused!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="review.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/476f5c0c88.js" crossorigin="anonymous"></script>
    
    <title>Web Design Mastery | Customer Section</title>
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
    <section>
      
    </section>

    <section>     
      <div class="container">
        <div class="container__left">
          <h1>Read what our customers love about us</h1>
          <div class="card">
            <img src="pic-1.jpg" alt="user" />
            <div class="card__content">
              <span><i class="ri-double-quotes-l"></i></span>
              <div class="card__details">
                <p>
                  We had a great time collaboraring with the Atlas Tripster. They
                  have my high recommendation!
                </p>
                <h4>- Fatima</h4>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="pic-2.png" alt="user" />
            <div class="card__content">
              <span><i class="ri-double-quotes-l"></i></span>
              <div class="card__details">
                <p>
                  The team drastically improved our product's user experience &
                  increased our business outreach.
                </p>
                <h4>- Anas</h4>
              </div>
            </div>
          </div>
          <div class="card">
            <img src="pic-3.png" alt="user" />
            <div class="card__content">
              <span><i class="ri-double-quotes-l"></i></span>
              <div class="card__details">
                <p>
                  I absolutely loved working with the Atlas tripster. They are Complete
                  experts at what they do!
                </p>
                <h4>- Rizwan</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="container__right">
          <div class="textarea">
          <form action="review.php" method="POST">
    <h4>Rate us</h4>
    <div class="star-widget">
        <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
        <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
        <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
        <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
        <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
    </div>
    <input type="email" class="inputfield" id="email" name="email" placeholder="Email id" required>
    <textarea name="review" placeholder="Describe your experience.." required></textarea>
    <button type="submit">Submit</button>
    <button type="submit"><a href="morereview.php"> See More</a></button>
</form>

        </div>
      </div>
    </section> 

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

    </header>
  </body>
</html>
