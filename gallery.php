<?php
  #start session
  session_start();

  #nav bar
  include 'menu.php'; 
?>

 <html>
   <link rel="stylesheet" type="text/css" href="menu_style.css"> 

   echo
   '<div class="productsHeading">
     <div class="productsHeadingMiddle">
       <h1 style=" color: #ffffff;">Gallery</h1>
       <br>
       <p style=" color: #ffffff;">Robots from around the world...</p>
     </div>
   </div>
     <?php 
       include 'gallery.html'; 
     ?>
     
 </html>