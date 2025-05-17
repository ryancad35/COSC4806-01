<?php
session_start();

// If user is not authenticated, redirect to login page
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: login.php');
    exit;
}


?>

<!DOCTYPE html>
<html>
  <head>
    <title>COSC4806</title>
  </head>
  
  <body>
    <h1>Assignment #1</h1>
    
    <p>Welcome, <?=$_SESSION['username'] ?? '' ?></p>

    

  </body>

  <footer>
    <p></p><a href='logout.php'>Click here to logout</a></p>
  </footer>
  
</html>