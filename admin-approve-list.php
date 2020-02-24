
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="includes/style-navbar.inc.css">
<link rel="stylesheet" href="includes/style-popup.inc.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<div id="popup1" class="overlay">
          <div class="popup">
              <h2>Invalid Request</h2>
              <a href="#" class="close" onclick="closepop();">&times;</a>
              <div class="content">
                  Approved quantity must be equal to Consumed quantity + Returned Quantity
              </div>
          </div>
      </div>
<?php
include "includes/header.php";
if(isset($_SESSION['admin'])){
  include "includes/navbar-loggedin.php";
  /*$reject=mysqli_real_escape_string($conn,$_POST['reject']);
  $approve=mysqli_real_escape_string($conn,$_POST['approve']);
  $reject=htmlentities($reject);
  $approve=htmlentities($approve);*/

  
  if(isset($_POST['reject']))
  {

    $itemid=mysqli_real_escape_string($conn,$_POST['itemid']);
    $itemid=htmlentities($itemid);
    $rej="DELETE FROM `comprequest` WHERE `id`='$itemid'";
    $resp=mysqli_query($conn,$rej);
      header("Location: admin-approve-list.php");
  }
  elseif(isset($_POST['approve'])){
    $itemid=mysqli_real_escape_string($conn,$_POST['itemid']);
    $itemid=htmlentities($itemid);
    $quantityapproved=mysqli_real_escape_string($conn,$_POST['quantity-approved']);
    $quantityapproved=htmlentities($quantityapproved);
    $itemname=mysqli_real_escape_string($conn,$_POST['itemname']);
    $itemname=htmlentities($itemname);
    $userapproved=mysqli_real_escape_string($conn,$_POST['user_approved']);
    $userapproved=htmlentities($userapproved);
    $sql2="SELECT * FROM `compavailable` ORDER BY `id` ASC";
    $res2=mysqli_query($conn,$sql2);

    if (mysqli_num_rows($res2)>0)
    {
      while($row2=mysqli_fetch_assoc($res2)){
        if($row2['compname']==$itemname){
          $qtyavailable=$row2['quantity'];
        }
      }
    }
    $updatedqty=$qtyavailable-$quantityapproved;
    $update="UPDATE `compavailable` SET `quantity`='$updatedqty' WHERE `compname`='$itemname'";
    mysqli_query($conn,$update);
    //date  approved
    date_default_timezone_set('Asia/Kolkata');
    $str=date('d-m-Y');
    //
    //checking whether the user's request for the same component has been approved on the same date or not 

    $sql3="SELECT * FROM `approvedlist` WHERE user_approved='$userapproved' AND compname='$itemname' AND date_apr='$str'";
    $result=mysqli_query($conn,$sql3);
    $result_check=mysqli_num_rows($result);
    if($result_check>=1){
      if($row=mysqli_fetch_assoc($result)){
        $prev_quantity=$row['quantity'];
          $new_quantity=$quantityapproved+$prev_quantity;
          $sql="UPDATE `approvedlist` SET quantity=$new_quantity WHERE  user_approved='$userapproved' AND compname='$itemname' AND date_apr='$str'";
          $res=mysqli_query($conn,$sql);
      }
    }else{
    $app="INSERT INTO `approvedlist`( `user_approved`, `compname`,`quantity`,`date_apr`) VALUES ('$userapproved','$itemname','$quantityapproved','$str')";
    mysqli_query($conn,$app);
    }
    $ap="DELETE FROM `comprequest` WHERE `id`='$itemid'";
    $resp=mysqli_query($conn,$ap);

    header("Location: admin-approve-list.php");
  }



  elseif(isset($_POST['confirm'])){
    $flag=0;
    $itemid_r=mysqli_real_escape_string($conn,$_POST['itemid_r']);
    $itemid_r=htmlentities($itemid_r);
    $quantityapproved=mysqli_real_escape_string($conn,$_POST['approved-quantity']);
    $quantityapproved=htmlentities($quantityapproved);
    $quantityr=mysqli_real_escape_string($conn,$_POST['quantity-returned']);
    $quantityr=htmlentities($quantityr);
    $quantityc=mysqli_real_escape_string($conn,$_POST['quantity-consumed']);
    $quantityc=htmlentities($quantityc);
    $itemname_r=mysqli_real_escape_string($conn,$_POST['itemname_r']);
    $itemname_r=htmlentities($itemname_r);
    $userr=mysqli_real_escape_string($conn,$_POST['user_returned']);
    $userr=htmlentities($userr);
    if($quantityapproved!=($quantityc+$quantityr)){
      echo ' 
     
       <script type="text/javascript">
       let myElement=document.querySelector("#popup1");
       myElement.style.visibility="visible";
       myElement.style.opacity=1;
       </script>
       ';
    }else{
    $sql4="SELECT * FROM `compavailable` ORDER BY `id` ASC";
      $sql5="SELECT * FROM `consumedlist` ORDER BY `id` ASC";
    $res4=mysqli_query($conn,$sql4);
    $res5=mysqli_query($conn,$sql5);
    if (mysqli_num_rows($res4)>0)
    {
      while($row4=mysqli_fetch_assoc($res4)){
        if($row4['compname']==$itemname_r){
          $qtyavailable=$row4['quantity'];
        }
      }
    }
    if (mysqli_num_rows($res5)>0)
    {
      while($row5=mysqli_fetch_assoc($res5)){
        if($row5['compname']==$itemname_r && $row5['user_consumed']==$userr ){
          $qtyconsumedbefore=$row5['quantity'];
          $consumedlistid=$row5['id'];
          $flag=1;
        }
      }
    }
    if($flag==0){
      if($quantityc>0){
        $sql6="INSERT INTO `consumedlist`(`user_consumed`, `compname`, `quantity`) VALUES ('$userr','$itemname_r','$quantityc')";
        $res6=mysqli_query($conn,$sql6);
        if($res6)
        {
          $_SESSION['message']="consumed succesfully ";
          header("Location: ../admin-approve-list.php");
        }
      }
    }
    $updatedqty=$qtyavailable+$quantityr;
    $update="UPDATE `compavailable` SET `quantity`='$updatedqty' WHERE `compname`='$itemname_r'";
    mysqli_query($conn,$update);
    if($flag==1){
      $updatedconsumedqty=$qtyconsumedbefore+$quantityc;
      $update2="UPDATE `consumedlist` SET `quantity`='$updatedconsumedqty' WHERE `id`='$consumedlistid'";
      mysqli_query($conn,$update2);
    }


    $apdel="DELETE FROM `approvedlist` WHERE `id`='$itemid_r'";
    mysqli_query($conn,$apdel);
    header("Location: admin-approve-list.php");
  }
}



  $sql="SELECT * FROM `comprequest` ORDER BY `user_request` ASC";
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    ?>
    <div class="table-responsive">
    <table class="table">
      <div class="Request List">
        <h3>Request List</h3>
      </div>
      <?php
    $oldrow='fdbgkzkjz';
    while($row=mysqli_fetch_assoc($res))
    {
      if($row['user_request']!=$oldrow){
        $oldrow=$row['user_request'];
        ?>

            <tr>
              <th colspan="5">
                <h3><?php echo $row['user_request']?></h3>
              </th>
            </tr>
            <tr>
              <th width="40%">Product Name</th>
                 <th width="30%">Quantity</th>
                  <th width="20%">Approved Quantity</th>
                 <th width="5%">Action1</th>
                 <th width="5%">Action2</th>
            </tr>
          <?php
        }
          ?>

            <tr>
              <td> <?php echo $row['compname']; ?></td>
              <td> <?php echo $row['quantity']; ?></td>
              <form action="admin-approve-list.php" method="POST">
                <td data-th="Quantity">
                  <input type="number" name="quantity-approved" class="form-control text-center" value="<?php echo $row['quantity'];?>" min="1" max="6">
                  <input type="hidden" name="itemid" value="<?php echo $row['id'];?>">
                  <input type="hidden" name="itemname" value="<?php echo $row['compname'];?>">
                  <input type="hidden" name="user_approved" value="<?php echo $row['user_request'];?>">
                  </td>

              <td>
                <button type="submit" class="btn btn-danger" name="reject">Reject</button>

              </td>
              <td>
                  <button type="submit" class="btn btn-success" name="approve">Approve</button>
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
    echo "No Request list currently.";
  }
  //approved list
  $sql3="SELECT * FROM `approvedlist` ORDER BY `user_approved` ASC";
  $res3=mysqli_query($conn,$sql3);
  if(mysqli_num_rows($res3)>0)
  {
    ?>
    <div class="table-responsive">
    <table class="table">
      <div class="Approval List">
        <h3>Approval List</h3>
      </div>
      <?php
    $oldrow='fdbgkzkjz';
    while($row3=mysqli_fetch_assoc($res3))
    {
      if($row3['user_approved']!=$oldrow){
        $oldrow=$row3['user_approved'];
        ?>

            <tr>
              <th colspan="5">
                <h3><?php echo $row3['user_approved']?></h3>
              </th>
            </tr>
            <tr>
              <th width="40%">Product Name</th>
                  <th width="20%">Approved Quantity</th>
                  <th width="20%">Returned Quantity</th>
                  <th width="20%">Consumed Quantity</th>
                  <th width="10%">Action</th>
            </tr>
          <?php
        }
          ?>

            <tr>
              <td> <?php echo $row3['compname']; ?></td>
              <td> <?php echo $row3['quantity']; ?></td>
                <form action="admin-approve-list.php" method="POST">
                  <td data-th="Returned Quantity">
                    <input type="number" name="quantity-returned" class="form-control text-center" value="<?php echo $row3['quantity'];?>" min="0" max="<?php echo $row3['quantity'];?>">

                    <input type="hidden" name="itemid_r" value="<?php echo $row3['id'];?>">
                    <input type="hidden" name="itemname_r" value="<?php echo $row3['compname'];?>">
                    <input type="hidden" name="user_returned" value="<?php echo $row3['user_approved'];?>">
                    </td>
                    <td data-th="Consumed Quantity">

                      <input type="number" name="quantity-consumed" class="form-control text-center" value="0" min="0" max="<?php echo $row3['quantity'];?>">
                      <input type="hidden" name="approved-quantity" value="<?php echo $row3['quantity'];?>">
                    </td>
              <td>
                  <button type="submit" class="btn btn-success" name="confirm">Confirm</button>
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

    echo "No Approval list currently.";
  }
}
else{
  header("Location: login.php");
}

 ?>
 <script type="text/javascript">
          function closepop(){
           
         document.getElementById("popup1").style.visibility = "hidden";
         document.getElementById("popup1").style.opacity = 0;
       }
       </script>
