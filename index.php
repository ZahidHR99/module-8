<!DOCTYPE html>
<html>
  <head>
    <title>Registration and Login Form</title>
  </head>
  <style>
    input{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }
  </style>
  <body>
    <h2>Registration Form</h2>
    <form action="registration.php" method="post">
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required><br><br>
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" required><br><br>
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" required><br><br>
      <input type="submit" value="Register">
    </form>
    <br>
    <hr>
    <br>
    <h2>Login Form</h2>
    <form action="login.php" method="post">
      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
