<?php
  #start session
  session_start();
?>

<html>
  <head>
    <title>RobotJawn</title>
  </head>
  <body>

  <!-- nav bar -->
  <?php 
    include 'menu.php'; 
  ?>

  <!-- body -->
  <?php 
    include 'home.html'; 
  ?>
   
  <!-- This script places a badge on your repl's full-browser view back to your repl's cover page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green, teal, blue, blurple, magenta, pink! -->

  <script src="https://replit.com/public/js/replit-badge.js" theme="dark" defer></script> 
  </body>
</html>