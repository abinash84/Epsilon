<?php
include "header.php";
if(isset($_POST['submit']))
{
  include 'dbh.php';

  $useremail=mysqli_real_escape_string($conn,$_POST['email']);
  $pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
  $useremail=htmlentities($_POST['email']);
  $pwd=htmlentities($_POST['pwd']);
 if(empty($useremail)||empty($pwd)){
  header("Location: ../login.php?login=empty");
  exit();
}else{
  $sql="SELECT * FROM users WHERE user_email='$useremail'";
  $result=mysqli_query($conn,$sql);
  $result_check=mysqli_num_rows($result);
  if($result_check<1)
   {

     header("Location: ../login.php?login=error");
     exit();
   }
   else{
     if($row=mysqli_fetch_assoc($result)){
       if($pwd==$row['user_pwd']){
         if($row['user_email']=="utkarsh@iitbhilai.ac.in"||$row['user_email']=="himanim@iitbhilai.ac.in"){
           $_SESSION['user_email']=$useremail;
           $_SESSION['admin']=$useremail;
        header("Location: ../admin-add-components.php");
         }
         else{
           $_SESSION['user_email']=$useremail;
        header("Location: ../components-issue.php");
         }

     }
       else{
         $_SESSION['message']="<div class='chip green white-text'>Invalid Credentials  </div>";
         header("Location: ../login.php?login=error");
       }

     }
   }
}
}
else{
  header("Location: ../login.php?login=error");
  exit();
}
 ?>
