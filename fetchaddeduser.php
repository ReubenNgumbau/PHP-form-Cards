<?php

include 'navbar.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Fetch added User Card</title>
    <style>
        /* CSS styles for the card layout */
        .card {
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 20px;
            margin: 10px;
            display: inline-block;
            background-color: lightgray;
            border-color: red;
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            margin-bottom: 0;
        }
        
        /* CSS styles for the container */
        .container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
    </style>
</head>
<body>
    <?php
        // Assuming you have a database connection established
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sample";

        // Create a connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch user data from the database
        $sql = "SELECT * FROM addusers";
        $result = $conn->query($sql);

        // Iterate through each user and display their information in a card
        if ($result->num_rows > 0) {
            echo '<div class="container">'; // Open the container
            while ($row = $result->fetch_assoc()) {
                $username = $row["username"];
                $email = $row["email"];
                $phonenumber = $row["phone_number"];

                // Display user information in a card
                echo '<div class="card">';
                echo '<h3>' . $username . '</h3>';
                echo '<p>Email: ' . $email . '</p>';
                echo '<p>Phone Number: ' . $phonenumber . '</p>';
                echo '<a href="update.php"> <button> Update </button></a> <br><br>';
                echo '<a href="adduserformcard.php"> <button> View </button></a>';
                echo '</div>';
            }
            echo '</div>'; // Close the container
        } else {
            echo "No users found.";
        }

        // Close the database connection
        $conn->close();
    ?>
</body>
</html>

