<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
   
    <script src="https://kit.fontawesome.com/476f5c0c88.js" crossorigin="anonymous"></script>
    <title>ATLAS TRIPSTER | Register</title>
</head>
<body>
    <nav>
        <div class="brand" ><img class="topic" src="/Atlas Tripster/Resources/Atlas/IMAGES/logo2.png"><h1 class="topic2">ATLAS TRIPSTER</h1></div>
        <div class="menu">
            <a href="/Atlas Tripster/Resources/Atlas/HTML/index.html">Home</a>
            <a href="/Atlas Tripster/Resources/Atlas/HTML/booking.html">Booking</a>
            <a href="/Atlas Tripster/Resources/Atlas/HTML/travelpackages.html">Packages</a>
            <a href="/Atlas Tripster/Resources/Atlas/HTML/login.html">Login/Sign Up</a>
            <a href="/Atlas Tripster/Resources/Atlas/HTML/wishlistwithlogin.html">Wishlist</a>
        </div>
    </nav>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
      
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
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO signup (name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    }
?>


    <div class="h">
        <div class="form">
            <div class="buttonbox">
                <div id="btn"></div>
                <a href="/Atlas Tripster/Resources/Atlas/HTML/login.html" class="t">Login</a>
                <a href="/Atlas Tripster/Resources/Atlas/HTML/Register.html" class="t">Sign Up</a>
            </div>
            <div class="socialiconss">
                <a href="https://www.facebook.com"><i class="fa-brands fa-facebook-f"></i></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-apple"></i></a>
                <a href="https://www.nu.edu.pk/"><i class="fab fa-google"></i></a>
            </div>
           
            <form action="register.php" method="post" class="inputgroup" >
                <input type="text" class="inputfield" id="name" name="name" placeholder="User name" required>
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