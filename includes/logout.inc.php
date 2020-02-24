<?php
include "header.php";
if(isset($_SESSION['user_email'])){
  unset($_SESSION['user_email']);
  session_destroy();
  header("Location: ../login.php");
}
else{
  header("Location: ../login.php");
}
?>
