<?php 
$validUsername = "Ryan";
$validPassword = "password";

$username = $_REQUEST['username']; // ID in login form = username
$password = $_REQUEST['password']; // ID in login form = password

if ($validUsername == $username && $validPassword == $password) {
  echo "Login successful";
} else {
  echo "Login failed";
}

?>