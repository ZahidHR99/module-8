<?php
  // Start a session
  session_start();

  // Check if session variable for first name is set
  if(isset($_SESSION['first_name'])) {
    // Display welcome message with user's first name
    echo '<p>Welcome, ' . $_SESSION['first_name'] . '!</p>';
  } else {
    // Redirect to login page if session variable is not set
    header('Location: login.php');
    exit;
  }
?>
