<?php
  #start session
  session_start();

  $username = $_POST['username'];  # retrieves the values from the form with name username to a local variable, just to make it easier
  $password = $_POST['password'];  # https://www.w3schools.com/php/php_superglobals_post.asp

  $secretuser="admin";   # server assigned username and password
  $secretpassword="123";
  
  if ($secretuser==$username && $secretpassword==$password)
  {
    #session variable
    $_SESSION["isLoggedIn"] = true;
  }
  else
  {
    #session variable
    $_SESSION["isLoggedIn"] = false;
  }

  $linksArr = array ("index.php", "products.php");


?>

<html>
  <body class="loginPageBackground">
    <div class="loginPageBody">
      <div class="loginPopup"><center>
        <?php
          if ($_SESSION["isLoggedIn"] == true)
          {
            $_SESSION["attempts"] = 0;
	          echo 
              
              '<h1>Hooray! You logged in!</h1>
              <br>
              <br>
              Return Home and Explore:
              <div class="squareBg grow2">';
                for  ($i=0; $i<=3; $i++)
                {
                  echo
                    '<a href="/'.$linksArr[$i].'">
                      <div class="squareMenu">
                        <img src="/pictures/home-button.png">
                      </div>
                    </a>';
                }
              '</div>';
	        }
          else
          {
            $_SESSION["attempts"] = $_SESSION["attempts"] + 1;
	          echo 
              '<h1 style="margin-top: 27.5%;">Log In failed</h1>
              <br>
              <p>Your attempts exceeds '.$_SESSION["attempts"].' times</p>
              <a href="loginPage.php">
                <div class="tryAgainBtn">
                  Try again!
                </div>
              </a>';
          }
        ?>
      </center></div>
    </div>
  </body>
</html>  


