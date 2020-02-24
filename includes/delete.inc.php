<?php
include "header.php";
    if(isset($_SESSION['admin'])){
       if(isset($_GET['delete'])){
         $id=$_GET['delete'];

         $sql="DELETE FROM suggestioncontent WHERE id='$id'";
         mysqli_query($conn,$sql);
         $_SESSION['msgtype']="success";
         $_SESSION['msg']="success";
         header("Location: ../admin-suggestions.php");
       }
    }
    else{
      header("Location: ../login.php");
    }
 ?>
