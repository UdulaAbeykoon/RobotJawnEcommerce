<?php
  #start session
  session_start();

  $password = $_POST['password'];  # https://www.w3schools.com/php/php_superglobals_post.asp

  $secretpassword="123";
  $counter=0;
  
  if ($secretpassword==$password)
  {
    #session variable
    $_SESSION["isLoggedIn"] = false;
  }
  else
  {
    #session variable
    $_SESSION["isLoggedIn"] = true;
  }

  #nav bar
  include 'menu.php'; 
?>

<html>
  <body class="loginPageBackground">
    <div class="loginPageBody">
      <div class="loginPopup"><center>
        <?php
          if ($_SESSION["isLoggedIn"] == true)
          {
	          echo 
              '<h1 style="margin-top: 27.5%;"">Wrong password</h1>
              <br>
              <p>Log Out failed</p>
              <a href="loginPage.php">
                <div class="tryAgainBtn">
                  Try again!
                </div>
              </a>';
	        }
          else
          {
	          // remove all session variables
            session_unset();
            // destroy the session
            session_destroy();
            
            echo 
              '<h1 style="margin-top: 25%;">Successfully logged out!</h1>
              <br>
              <p>Return Home?</p>
              <div class="squareBg grow2">
                <a href="/">
                  <div class="squareMenu" style="margin-left:55%;">
                    <img src="/pictures/home-button.png">
                  </div>
                </a>
              </div>';
          }
        ?>
      </center></div>
    </div>
  </body>
</html>  


