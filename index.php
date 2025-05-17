<?php
session_start();


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
  
</html>