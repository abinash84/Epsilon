<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="includes/style-navbar.inc.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<?php
include "includes/header.php";
if(isset($_SESSION['admin'])){
  include "includes/navbar-loggedin.php";
  /*$reject=mysqli_real_escape_string($conn,$_POST['reject']);
  $approve=mysqli_real_escape_string($conn,$_POST['approve']);
  $reject=htmlentities($reject);
  $approve=htmlentities($approve);*/
  if(isset($_POST['delete']))
  {

    $itemid=mysqli_real_escape_string($conn,$_POST['itemid']);
    $itemid=htmlentities($itemid);
    $rej="DELETE FROM `consumedlist` WHERE `id`='$itemid'";
    $resp=mysqli_query($conn,$rej);
      header("Location: admin-consumed-list.php");
  }
  else if(isset($_POST['deleteall'])){
      $userconsumed=mysqli_real_escape_string($conn,$_POST['user_consumed']);
      $userconsumed=htmlentities($userconsumed);
      $rej="DELETE FROM `consumedlist` WHERE `user_consumed`='$userconsumed'";
      $resp=mysqli_query($conn,$rej);
      header("Location: admin-consumed-list.php");
  }
 ?>
  
  <!-- Search form -->
  <form class="form-inline mr-auto" action="admin-consumed-list.php" method="POST">
  <input class="form-control mr-sm-3" type="text" name="usersearch" placeholder="Search Users" aria-label="Search">
  <input class="btn btn-info  mr-sm-3" type="submit" name="search-user" value="Search">
  <input class="btn btn-success" type="submit" name="showAll" value="Show All">
</form>
 
 <?php

 //For Searching

 if(isset($_POST['search-user']) && !isset($_POST['showAll'])){ //if search has been clicked
                
                  
  $usersearch=mysqli_real_escape_string($conn,$_POST['usersearch']);
  $usersearch=htmlentities($usersearch);
  $sql="SELECT * FROM `consumedlist` WHERE `user_consumed` LIKE '%$usersearch%' ORDER BY 'id' DESC ";
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    ?>
    <div class="table-responsive">
    <table class="table">
      <div class="Approval List">
        <h3>Consumed List</h3>
      </div>
      <?php
    $oldrow='fdbgkzkjz';
    while($row3=mysqli_fetch_assoc($res))
    {
      if($row3['user_consumed']!=$oldrow){
        $oldrow=$row3['user_consumed'];
        ?>

            <tr>
              <th width="40%">
                <h3><?php echo $row3['user_consumed']?></h3>
              </th>
              <th width="20%">
              <form action="admin-consumed-list.php" method="POST">
            
                <input type="hidden" name="user_consumed" value="<?php echo $row3['user_consumed'];?>">
                 
              <td>
                  <button type="submit" class="btn btn-warning" name="deleteall">Delete All</button>
              </td>
            </form>
            </th>
            </tr>
            <tr>
              <th width="40%">Product Name</th>
                  <th width="40%">Consumed Quantity</th>
                  <th width="20%">Action</th>
            </tr>
          <?php
        }
          ?>

            <tr>
              <td> <?php echo $row3['compname']; ?></td>
              <td> <?php echo $row3['quantity']; ?></td>
                <form action="admin-consumed-list.php" method="POST">
                <input type="hidden" name="itemid" value="<?php echo $row3['id'];?>">
                <input type="hidden" name="itemname" value="<?php echo $row3['compname'];?>">
                <input type="hidden" name="user_consumed" value="<?php echo $row3['user_consuned'];?>">
                 
              <td>
                  <button type="submit" class="btn btn-danger" name="delete">Delete</button>
              </td>
            </form>
            </tr>
      <?php
    }?>
  </table>
  </div>
  <?php
  }else{
       echo "No items match your search" ;                                     //If no items match the search   
  }
 }else{
  //consumed list

  $sql3="SELECT * FROM `consumedlist` ORDER BY `user_consumed` ASC";
  $res3=mysqli_query($conn,$sql3);
  if(mysqli_num_rows($res3)>0)
  {
    ?>
    <div class="table-responsive">
    <table class="table">
      <div class="Approval List">
        <h3>Consumed List</h3>
      </div>
      <?php
    $oldrow='fdbgkzkjz';
    while($row3=mysqli_fetch_assoc($res3))
    {
      if($row3['user_consumed']!=$oldrow){
        $oldrow=$row3['user_consumed'];
        ?>

            <tr>
              <th width="40%">
                <h3><?php echo $row3['user_consumed']?></h3>
              </th>
              <th width="20%">
              <form action="admin-consumed-list.php" method="POST">
            
                <input type="hidden" name="user_consumed" value="<?php echo $row3['user_consumed'];?>">
                 
              <td>
                  <button type="submit" class="btn btn-warning" name="deleteall">Delete All</button>
              </td>
            </form>
            </th>
            </tr>
            <tr>
              <th width="40%">Product Name</th>
                  <th width="40%">Consumed Quantity</th>
                  <th width="20%">Action</th>
            </tr>
          <?php
        }
          ?>

            <tr>
              <td> <?php echo $row3['compname']; ?></td>
              <td> <?php echo $row3['quantity']; ?></td>
                <form action="admin-consumed-list.php" method="POST">
                <input type="hidden" name="itemid" value="<?php echo $row3['id'];?>">
                <input type="hidden" name="itemname" value="<?php echo $row3['compname'];?>">
                <input type="hidden" name="user_consumed" value="<?php echo $row3['user_consuned'];?>">
                 
              <td>
                  <button type="submit" class="btn btn-danger" name="delete">Delete</button>
              </td>
            </form>
            </tr>
      <?php
    }?>
  </table>
  </div>
  <?php
  }
  else{

    echo "No Consumed list currently.";
  }
}
}
else{
  header("Location: login.php");
}
 ?>
