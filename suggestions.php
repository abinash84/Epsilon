<?php
include "includes/header.php" ;
?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="includes/style-navbar.inc.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style_suggestions.css">
<body>
  <?php
  if(isset($_SESSION['user_email'])){
    include "includes/navbar-loggedin.php" ;
  
  }
  else{

    include "includes/navbar.php";
  }
    ?>
  <div class="banner">
    <div class="outercontainer">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="customDiv">
              <form action="includes/write.inc.php" method="POST">
                <div class="form-group">
                  <?php
                  if(isset($_SESSION['message'])){
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                  }?>
                  <label for="inputDescription">Drop us a message... <br><br></label>
                  <textarea name ="suggestion" id="inputDescription" class="form-control"
                  rows="10" ></textarea>
                </div>
                <div class="col-lg-offset-6">
                  <div class="customDiv">
                    <button class="btn btn-info" type="submit" name="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
    </div>
  </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
