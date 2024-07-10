<?php
  #start session
  session_start();
?>


<html>
<head>
  <title>LOGIN PAGE</title>
</head>
  

<?php 
  include 'menu.php'; 
?>

<body class="loginPageBackground">
  <div class="loginPageBody">
    <div class="loginPopup"><center>

      <?php
        if ($_SESSION["isLoggedIn"] != true)
        {
          include 'loginForm.html';
        }
        else
        {
          include 'logoutForm.html'; 
        }
      ?>

    </center></div>
  </div>
</body>

</html>