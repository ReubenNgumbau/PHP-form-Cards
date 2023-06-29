<?php
// Retrieve the form data
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];

// Create a connection to the database
$servername = "localhost";  // Replace with your MySQL server name
$username = "root";      // Replace with your MySQL username
$password = "";  // Replace with your MySQL password
$dbname = "sample";         // Replace with your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$stmt = $conn->prepare("INSERT INTO addusers (username, email, phone_number) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $username, $email, $phonenumber);
$stmt->execute();

// Check if the query was successful
if ($stmt->affected_rows > 0) {
    echo "User added successfully!";
} else {
    echo "Error: " . $conn->error;
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>


