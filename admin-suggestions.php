<link rel="stylesheet" href="includes/style-navbar.inc.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <?php
  include "includes/header.php";
  if(isset($_SESSION['admin'])){
    include "includes/navbar-loggedin.php";
    ?>
    <body>
      <?php
      if(isset($_SESSION['msg'])){
        ?>
        <div class="alert alert-<?php echo($_SESSION['msgtype']);?>">
          <?php
           echo $_SESSION['msg'];
           unset($_SESSION['msg']);
           ?>
        </div>
        <?php
      }

      ?>

      <ul>

      <?php
      $sql="SELECT * FROM `suggestioncontent` ORDER BY `id` DESC";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0)
      {
        while($row=mysqli_fetch_assoc($res))
        {
          ?>
          <li class="suggestion-items">
            <?php echo $row['content_user'];?>
            <br /><br />
            <?php echo $row['content'];?>
            <br />
            <a href="includes/delete.inc.php?delete=<?php echo $row['id'];?>" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
          </li>
          <?php
        }


      }?>

    </ul>
      </body>
      <?php
    }
    else {
      header("Location: login.php");
    }?>

    </script>
