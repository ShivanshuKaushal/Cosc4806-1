<?php
session_start();

$valid_username = "mike";
$valid_password = "password";

$username = $_REQUEST['username'];
$SESSION['username'] = $username;
$password = $_REQUEST['password'];

if ($valid_username == $username && $valid_password == $password){
   if ($_SESSION['authenticated'] = 1){header ('location: /index.php');}
} else {
  if (!isset($_SESSION['failed_attempts'])){
    $_SESSION['failed_attempts'] = 1;
  } else {
    $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
  }
  echo " This is unsuccessful attempt number: " . $_SESSION['failed_attempts'];
}
?>