<!DOCTYPE html>
<html>
<head>
  <title>Add User Form</title>
  <style>
        /* Styling the form container */
        .form-container {
          max-width: 400px;
          margin: 0 auto;
          padding: 20px;
          background-color: #f2f2f2;
          border-radius: 5px;
        }
            /* Styling form labels */
            .form-container label {
              display: block;
              margin-bottom: 10px;
              color: #333;
              font-weight: bold;
            }
                /* CSS styles for the form input */
                .form-container input type=text
                .form-container input type=email
                .form-container input type=text
                .form-container textarea {
                  width: 100%;
                  padding: 10px;
                  margin-bottom: 20px;
                  border: 1px solid #ccc;
                  border-radius: 4px;
                }
              /* CSS styles for the form submit button */
              .form-container  input type=submit
              background-color: #4CAF50;
              color: white;
              padding: 10px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
            form-container input type=submit: hover {
              background-color: #45a049;
            }
            /* Styling form validation/error messages */
            .form-container .error_message{
              color: #FF0000;
              margin-bottom: 10px;
               </style>
</head>
<body>


  <h1>Add User</h1>
  <form action="submit.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phonenumber">Phone Number:</label>
    <input type="text" id="phonenumber" name="phonenumber" required><br><br>

    <input type="submit" value="AddUser">
  </form>
</body>
</html>


