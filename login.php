
<?php
include "includes/header.php" ;
?>
    <link rel="stylesheet" href="includes/style-navbar.inc.css">
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
  <body>
    <?php
    if(isset($_SESSION['user_email'])){
      include "includes/navbar-loggedin.php" ;
      ?>
      <div class="banner">
        <div class="loggedin-disclaimer">
          <?php echo "You're logged in as"." ".$_SESSION['user_email'];?>
        </div>
      </div>
      <?php
    }
    else{

      include "includes/navbar.php" ;
      ?>
      <div class="banner">
      <div class="outercontainer">

        <div class="container">
            <div class="card">
              <div class="notloggedin-disclaimer">
                <?php
                if(isset($_SESSION['message'])){
                  echo $_SESSION['message'];
                  unset($_SESSION['message']);
                }?>
                <?php echo "Please login to continue";?>
              </div>
              <div class="row">
                <div class="epsilon-logo">
                  <img class="l" src="images/epsilon-logo.jpg" alt="Epsilon Logo">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-8">
                  <form class="form-container" action="includes/login.inc.php" method="POST">

                      <div class="form-group">
                        <label for="inputEmail">Login Id</label>
                        <input class="form-control" type="text" id="inputEmail" name="email" placeholder="LDAP Id">
                      </div>
                      <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input class="form-control" type="password" id="inputPassword" name="pwd" placeholder="Login Password">
                      </div>
                      <div class="button">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <button class="btn btn-primary" type="submit" name="submit">Log In</button>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </body>
     <?php
   }
   ?>


</html>
