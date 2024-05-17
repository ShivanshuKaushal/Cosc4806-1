<?php
session_start();
?>

<html>
  <head>
    <title>Shivanshu</title>
  </head>
  <body>
    <h1>Assignment1</h1> 
    
    <p> Welcome, <?=$_SESSION['username'] ?></p>
    
    <p><a href="/login.php">Click here to login </a></p>
</html>