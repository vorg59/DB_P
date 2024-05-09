<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Information</title>
    <link rel="stylesheet" href="confirm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">

</head>
<body>
    <div class="backgrnd">
        <div class="booking-form">
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

            // Retrieve the last booking data from the database
            $sql = "SELECT * FROM booking_info ORDER BY id DESC LIMIT 1"; // Assuming 'id' is the primary key
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                // Display the retrieved data in the HTML
                echo "<h2>Booking Information</h2>";
                echo "<p>Name: " . $row['Name'] . "</p>";
                echo "<p>Email: " . $row['Email'] . "</p>";
                echo "<p>Phone: " . $row['phone'] . "</p>";
                echo "<p>Destination: " . $row['destination'] . "</p>";
                echo "<p>Departure Date: " . $row['DDate'] . "</p>";
                echo "<p>Return Date: " . $row['RDate'] . "</p>";
                echo "<p>Passengers: " . $row['persons'] . "</p>";
                echo "<p>Class: " . $row['please'] . "</p>";
                echo "<p>Price: " . $row['price'] . "</p>";
            } else {
                echo "No booking data found.";
            }

            // Close the connection
            mysqli_close($conn);
            ?>
            <div class="button-container">
            <button onclick="location.href='index.php';">Back to Home</button>
                <button onclick="location.href='pay.php';">Confirm</button>
                
            </div>
        </div>
    </div>
</body>
</html>
