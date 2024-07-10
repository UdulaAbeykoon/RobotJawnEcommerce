<?php
  #start session
  session_start();
?>

<html>
  <link rel="stylesheet" type="text/css" href="menu_style.css"> 

  <nav class="navbar">
    <!-- logo -->
    <div class="logo">
      <a href="/">
        <img src="/pictures/robotjawn.png" style="height:50px;">
      </a>
    </div>
    <!-- navigation bar -->
    <ul class="nav-links">
      <!-- menu -->
      <div class="menu">
        <li><a href="/">Home</a></li>
        <li class="services">
          <a href="/products.php">Products</a>
        </li>
        <li class="gallery">
          <a href="/gallery.php">Gallery</a>
        </li>
        <li class="FTC">
          <a href="https://www.firstinspires.org/robotics/ftc">FTC</a>
        </li>
        <li class="Devolotics">
          <a href="https://www.youtube.com/@Devolotics">Devolotics</a>
        </li>
        
        <?php
        if ($_SESSION["isLoggedIn"] != true)
        {
          echo '<li><a href="/loginPage.php">Log In</a></li>';
        }
        else
        {
          echo '<li><a href="/loginPage.php">Log Out</a></li>';
        }
      ?>
        
        <li><a href="/cart.php">Cart</a></li>
      </div>
    </ul>
  </nav> 
</html>