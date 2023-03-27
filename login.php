<?php
  // Start a session
  session_start();

  // Check if both fields were submitted
  if(isset($_POST['email']) && isset($_POST['password'])) {
    // Set variables for fields
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if both fields are not empty
    if(!empty($email) && !empty($password)) {
      // Check if email and password are correct
      // Replace with your own validation logic
      if($email == 'admin@gmail.com' && $password == '123456') {
        // Login successful, set session variable for first name and redirect to welcome page
        $_SESSION['first_name'] = 'John'; // Replace with user's first name
        header('Location: welcome.php');
        exit;
      } else {
        // Invalid email or password, show error message
        echo '<p>Invalid email or password. Please try again.</p>';
      }
    } else {
      // One or both fields are empty, show error message
      echo '<p>Both fields are required. Please try again.</p>';
    }
  }
?>
