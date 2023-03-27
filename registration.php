<?php
  // Start a session
  session_start();

  // Check if all fields were submitted
  if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    // Set variables for fields
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if all fields are not empty
    if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($password) && !empty($confirm_password)) {
      // Check if email is in a valid format
      if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if password and confirm password match
        if($password == $confirm_password) {
          // Registration successful, set session variable for first name and show confirmation message
          $_SESSION['first_name'] = $first_name;
          echo '<p>Registration successful. Welcome, ' . $first_name . '!</p>';
        } else {
          // Password and confirm password do not match, show error message
          echo '<p>Passwords do not match. Please try again.</p>';
        }
      } else {
        // Email is not in a valid format, show error message
        echo '<p>Invalid email address. Please try again.</p>';
      }
    } else {
      // One or more fields are empty, show error message
      echo '<p>All fields are required. Please try again.</p>';
    }
}

?>