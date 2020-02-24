<?php
include "header.php";
if(isset($_SESSION['user_email'])){
  if(isset($_POST['submit']))
  {
    $useremail=$_SESSION['user_email'];
    foreach($_SESSION['shopping-cart'] as $key =>$product){
      $compname=$product['compname'];
      $quantity=$product['quantity'];
      date_default_timezone_set('Asia/Kolkata');
      $str=date('d-m-Y');


      // checking whether the user already made the same request on the same date
      $sql="SELECT * FROM comprequest WHERE user_request='$useremail' AND compname='$compname' AND date_req='$str'";
      $result=mysqli_query($conn,$sql);
      $result_check=mysqli_num_rows($result);
      if($result_check>=1){
        if($row=mysqli_fetch_assoc($result)){
          $prev_quantity=$row['quantity'];
          $new_quantity=$quantity+$prev_quantity;
          $sql="UPDATE comprequest SET quantity=$new_quantity WHERE  user_request='$useremail' AND compname='$compname' AND date_req='$str'";
          $res=mysqli_query($conn,$sql);
      if($res)
      {
          $_SESSION['message']="<div class='chip green white-text'>Request received . </div>";
          foreach($_SESSION['shopping-cart'] as $key=>$product){
         
            unset($_SESSION['shopping-cart'][$key]);
      
          
        }
        header("Location: ../components-issue.php?request=successful");
        
      }
      else{
          $_SESSION['message']="<div class='chip green white-text'>Something went wrong . </div>";
      }
        }

      }else{
      $sql="INSERT INTO `comprequest`( `user_request`, `compname`,`quantity`,`date_req`) VALUES ('$useremail','$compname','$quantity','$str')";
      $res=mysqli_query($conn,$sql);
      if($res)
      {
          $_SESSION['message']="<div class='chip green white-text'>Request received . </div>";
          foreach($_SESSION['shopping-cart'] as $key=>$product){
         
            unset($_SESSION['shopping-cart'][$key]);
      
          
        }
        header("Location: ../components-issue.php?request=successful");
      }
      else{
          $_SESSION['message']="<div class='chip green white-text'>Something went wrong . </div>";
      }
    }
    }

  }
  else{
    header("Location: ../components-issue.php");
  }

}
else{
  header("Location: ../login.php");
}
