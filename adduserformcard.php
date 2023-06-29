<?php

include 'navbar.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Add User FormCard</title>
  <style>
    .form-card {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: lightgray;
      border-color: red;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    .form-card label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }
    
    .form-card input[type="text"],
    .form-card input[type="email"],
    .form-card input[type="text"] {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-card button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="form-card">
    <h2>Add User</h2>
    <form action="submit.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="phonenumber">Phone Number:</label>
      <input type="tel" id="phonenumber" name="phonenumber" required>
      
      <button type="submit">Add User</button>
    </form>
  </div>
</body>
</html>
