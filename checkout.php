<?php
  #start session
  session_start();

  #nav bar
  include 'menu.php'; 

  # Get total from session
  $total = $_SESSION['total'];
?>

<html>
  <link rel="stylesheet" type="text/css" href="menu_style.css"> 

  <div class="cartBody">
    <?php
      if ($_SESSION["isLoggedIn"] == false)
      {
        include 'notLoggedIn.html'; 
      }
      else
      {
        echo '<div class="cartCenter"><div class="cartCenterMiddle">';
        echo '<h2 style="color: white; padding-top:15%; text-align: center; font-size: 2em;">Total Price: CDN$ ' . $total . '</h2>';
        echo '</div></div>';
      }
    ?>
  </div>
</html>

