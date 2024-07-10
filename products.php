// <?php
  #start session
  session_start();

  #nav bar
  include 'menu.php'; 
?>

 <html>
   <link rel="stylesheet" type="text/css" href="menu_style.css"> 

   <div class="productsHeading">
     <div class="productsHeadingMiddle">
       <h1 style=" color: #ffffff;">Products</h1>
       <br>
       <p style=" color: #ffffff;">Below are the best-selling robots for the 2023-2024 season CENTERSTAGE!</p>
     </div>
   </div>
 </html>

<!-- ?php 
  // if ($_SESSION["isLoggedIn"] == false)
  // {
  //   include 'notLoggedIn.html'; 
  // }
  // else
  // { --> 

    echo
      '<div class="productsBody">
        <div class="productSection">
          <img src="/pictures/gallery0.jpg">
          <hr style="border: 1px solid #fff; margin-left: 5%; margin-right: 5%; margin-bottom: 5%;">
          <h1>DRX</h1>
          <br>
          <p style="margin-left: 5%; margin-right: 5%;">Expertly crafted from across the world, this robot has unbelievable technical design and autonomous accuracy. </p>
          <p style="margin-top: 6%; color: #3cc4ec;"><strong>CDN$ 79.99</strong></p>
          <a href="https://www.drxacademy.com/">
            <div class="toAbout">
              <p style="margin-top: 10%;">About</p>
            </div>
          </a>
          <form method="post" action="/cart.php">
            <input type="submit" name="DrXCart" value="Add To Cart">
          </form>
        </div>
        <div class="productSection">
          <img src="/pictures/gallery1.jpg">
          <hr style="border: 1px solid #fff; margin-left: 5%; margin-right: 5%; margin-bottom: 5%;">
          <h1>TEXPAND</h1>
          <br>
          <p style="margin-left: 5%; margin-right: 5%;">CENTERSTAGE WORLD CHAMPIONS! This robot does not disappoint with speed and easy maneuverability, you're guaranteed to bring home WAC! </p>
           <p style="margin-top: 6%; color: #3cc4ec;"><strong>CDN$ 79.99</strong></p>
          <a href="https://texpand.org.za/">
            <div class="toAbout">
              <p style="margin-top: 10%;">About</p>
            </div>
          </a>
          <form method="post" action="/cart.php">
            <input type="submit" name="SH2Cart" value="Add To Cart">
          </form>
        </div>
        <div class="productSection">
          <img src="/pictures/gallery2.jpg">
          <hr style="border: 1px solid #fff; margin-left: 5%; margin-right: 5%; margin-bottom: 5%;">
          <h1>TurtleBOT</h1>
          <br>
          <p style="margin-left: 5%; margin-right: 5%;">This robot is made by FIRST! With a funny face and tons of fame, this robot is likely to make your opponents laugh so hard, it will secure the victory!</p>
           <p style="margin-top: 6%; color: #3cc4ec;"><strong>CDN$ 79.99</strong></p>
          <a href="https://www.youtube.com/watch?v=6e-5Uo1dRic&t=203s">
            <div class="toAbout">
              <p style="margin-top: 10%;">About</p>
            </div>
          </a>
          <form method="post" action="/cart.php">
            <input type="submit" name="DSCart" value="Add To Cart">
          </form>
        </div>
        <div class="productSection">

          <img src="/pictures/gallery3.jpg" style="width: auto; height: 200px;">
          <hr style="border: 1px solid #fff; margin-left: 5%; margin-right: 5%; margin-bottom: 5%;">
          <h1>DEVOLOTICS</h1>
          <br>
          <p style="margin-left: 5%; margin-right: 5%;">This robot is crafted in the depths of ninjas basement. This robot has a 10% chance of a working auton and a 90% chance of disconnection. Buy this robot to get grey hairs!</p>
           <p style="margin-top: 6%; color: #3cc4ec;"><strong>CDN$ 79.99</strong></p>
          <a href="https://www.youtube.com/watch?v=mdsNB1N-9G8&t=11s">
            <div class="toAbout">
              <p style="margin-top: 10%;">About</p>
            </div>
          </a>
          <form method="post" action="/cart.php">
            <input type="submit" name="TCPCart" value="Add To Cart">
          </form>
        </div>
        
      </div>';
  }
?>

