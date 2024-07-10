<?php
  #start session
  session_start();

  #nav bar
  include 'menu.php'; 

  # Initialize cart if not already done
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
  }

  # Add items to cart
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['TCPCart'])) {
      array_push($_SESSION['cart'], 'TCPCart');
    } elseif (isset($_POST['DSCart'])) {
      array_push($_SESSION['cart'], 'DSCart');
    } elseif (isset($_POST['SH2Cart'])) {
      array_push($_SESSION['cart'], 'SH2Cart');
      if (isset($_POST['DrXCart'])) {
        array_push($_SESSION['cart'], 'DrXCart');
      }

    }
  }
    # Calculate total
    $total = 79.99 * count($_SESSION['cart']);
    $_SESSION['total'] = $total; // Store total in session
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
        
        # Display items in cart
        foreach ($_SESSION['cart'] as $item) {
          if ($item === 'TCPCart') {
            echo '<div class="cartProduct"><img src="/pictures/gallery3.jpg"><p>Robot - Devolotics</p><p style="float: right; margin-right: 5%;">CDN$ 79.99</p></div>';
          } elseif ($item === 'DSCart') {
            echo '<div class="cartProduct"><img src="/pictures/gallery2.jpg"><p>Robot - Turtlebot</p><p style="float: right; margin-right: 5%;">CDN$ 79.99</p></div>';
          } elseif ($item === 'SH2Cart') {
            echo '<div class="cartProduct"><img src="/pictures/gallery1.jpg"><p>Robot - Texpand</p><p style="float: right; margin-right: 5%;">CDN$ 79.99</p></div>';
            } elseif ($item === 'DrXCart') { 
            echo '<div class="cartProduct"><img src="/pictures/gallery0.jpg"><p>Robot - Dr.X</p><p style="float: right; margin-right: 5%;">CDN$ 79.99</p></div>';
          }
        }

        echo '</div>';
        echo '<a href="/products.php"><input type="button" value="Continue Shopping"></a>';
        echo '<a href="/checkout.php"><input type="button" value="Checkout"></a>'; 
        echo '</div>';
      }
    ?>
  </div>
</html>
