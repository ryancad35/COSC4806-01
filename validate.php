<?php 
  session_start(); 
  
  $validUsername = "Ryan";
  $validPassword = "password";
  
  $username = $_REQUEST['username']; // ID in login form = username
  $password = $_REQUEST['password']; // ID in login form = password
  
  if ($validUsername == $username && $validPassword == $password) {
    $_SESSION['username'] = $username;
    $_SESSION['authenticated'] = true;
    header('location: index.php');
    exit;
  } else {
    if (!isset($_SESSION['failedAttempts'])) {
      $_SESSION['failedAttempts'] = 1; // Create session variable $failedAttempts if it doesn't exist yet
    } else {
      $_SESSION['failedAttempts'] += 1; // increment failed attempts
    }
    header('location: login.php');
  }

?>