<?php

// Create a connection to the database
$servername = "localhost";  // Replace with your MySQL server name
$username = "root";      // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "sample";         // Replace with your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select user from the database
$userID = 1; // Change this to the desired user ID
$query = "SELECT * FROM addusers WHERE id = $national_id";
$result = mysqli_query($connection, $query);

if ($result) {
    // User found, perform update
    $user = mysqli_fetch_assoc($result);
    $newName = ""; // Change this to the new name

    // Update user's name
    $updateQuery = "UPDATE addusers SET username = '$newName' WHERE id = $national_id";
    $updateResult = mysqli_query($connection, $updateQuery);

    if ($updateResult) {
        echo "User updated successfully!";
    } else {
        echo "Error updating user: " . mysqli_error($connection);
    }
} else {
    echo "User not found!";
}

// Close the database connection
mysqli_close($connection);
?>
