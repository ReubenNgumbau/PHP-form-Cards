<!DOCTYPE html>
<html>
<head>
  <style>
      /* CSS styles for heading */
      h1 {
        background-color: mediumseagreen;
        color: black;
        text-align: center;
        padding: 0 0 ;
        margin: 0 0 ;
       }

    /* CSS styles for the navigation bar */
    .navbar {
      background-color: mediumseagreen;
      overflow: hidden;
      text-decoration: blink;
    }

    .navbar a {
      float: left;
      background-color: transparent;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: underline;
    }

    /* CSS styles for the form input card */
    .card {
      width: 300px;
      background-color: lightgray;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      padding: 20px;
      margin: 20px auto;
    }

    .form-card input[type="text"],
    .form-card input[type="email"],
    .form-card input[type="text"]
    .form_card textarea {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      resize: vertical;
    }

    .card button {
      background-color: #333;
      color: white;
      padding: 12px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    .card button:hover {
      background-color: #555;
    }
  </style>
</head>
 
<body>
  <div class="navbar">
    <h1>Users</h1>
    <a href="adduserformcard.php">Add Users</a>
    <a href="fetchaddeduser.php">View Users</a>
  </div>
</body>
</html>
