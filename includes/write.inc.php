
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script scr="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
include "header.php";

if(isset($_POST['submit'])){
  if(empty($_POST['suggestion'])){
    $_SESSION['message']="<div class='chip green white-text'>Field Empty </div>";
    header("Location: ../suggestions.php");
  }
  else{
    $content= $_POST['suggestion'];
    $content=mysqli_real_escape_string($conn,$content);
    $content=htmlentities($content);
    $user=$_SESSION['user_email'];
    $sql="INSERT INTO `suggestioncontent`( `content`, `content_user`) VALUES ('$content','$user')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      $_SESSION['message']="<div class='chip green white-text'>Suggestion is received  </div>";
      header("Location: ../suggestions.php");
    }
  }

}
else{
  $_SESSION['message']="<div class='chip green white-text'>Sorry something went wrong </div>";
  header("Location: ../suggestions.php");
}
?>
