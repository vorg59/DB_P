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
        echo "Rating: " . $row["rating"]. " - Email: " . $row["email"]. " - Review: " . $row["review"]. "<br>";
    }
} else {
    echo "No reviews available.";
}

// Close the connection
mysqli_close($conn);
?>
