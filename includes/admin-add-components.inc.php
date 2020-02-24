<?php
include "header.php";
if(isset($_SESSION['admin'])){
  if(isset($_POST['submit'])){
    $flag=0;
    $compname=mysqli_real_escape_string($conn,$_POST['compname']);
    $qty=mysqli_real_escape_string($conn,$_POST['qty']);
    $compname=htmlentities($_POST['compname']);
    $qty=htmlentities($_POST['qty']);
    if(empty($compname)||empty($qty)){
      header("Location: ../admin-add-components.php?sent=empty");
      exit();
    }
    else{
      $sql="SELECT * FROM `compavailable` ORDER BY 'id' ASC";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0)
      {
        while($row=mysqli_fetch_assoc($res))
        {

          if($compname==$row['compname']){

            $updatedqty=$row['quantity']+$qty;
            $update="UPDATE `compavailable` SET `quantity`='$updatedqty' WHERE `compname`='$compname'";
            mysqli_query($conn,$update);
            $flag=1;
            $_SESSION['message']= $row['quantity'] ;
            header("Location: ../admin-add-components.php");
          }
        }
      }
        if($flag==0){
          $sql="INSERT INTO `compavailable`( `compname`, `quantity`) VALUES ('$compname','$qty')";
           $res=mysqli_query($conn,$sql);
           if($res)
           {
             $_SESSION['message']="Added succesfully ";
             header("Location: ../admin-add-components.php");
           }
       else{
         $_SESSION['message']="Sorry something went wrong";
         header("Location: ../admin-add-components.php");
       }
     }



}
}
else{
  header("Location: ../admin-add-components.php");
}
}
else{
  header("Location: ../login.php");
}
?>
