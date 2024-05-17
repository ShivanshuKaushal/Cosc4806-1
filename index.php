<?php
session_start();
?>

<html>
  <head>
    <title>Shivanshu</title>
  </head>
  <body>
    <h1>Assignment1</h1> 
    
    <p> Welcome, User </p>
    <?php echo "Today is ", date('F j, Y') ?>
   <footer>
    <p><a href="/logout.php">Click here to logout </a></p>
   </footer>
  </body>
</html>