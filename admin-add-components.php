<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="includes/style-navbar.inc.css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

<?php
include "includes/header.php";
if(isset($_SESSION['admin'])){
  include "includes/navbar-loggedin.php";

  if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }


  if(isset($_POST['remove'])){
    $compname=$_POST['componentname'];
    $qtyavailable=$_POST['qtyavailable'];
    $quantityremove=$_POST['quantity-remove'];
    $qtyupdated=$qtyavailable-$quantityremove;
    $update="UPDATE `compavailable` SET `quantity`='$qtyupdated' WHERE `compname`='$compname'";
    mysqli_query($conn,$update);

    header("Location: admin-add-components.php");
  }

  elseif(isset($_POST['add'])){
    $compname=$_POST['componentname'];
    $qtyavailable=$_POST['qtyavailable'];
    $quantityadd=$_POST['quantity-add'];
    $qtyupdated=$qtyavailable+$quantityadd;
    $update="UPDATE `compavailable` SET `quantity`='$qtyupdated' WHERE `compname`='$compname'";
    mysqli_query($conn,$update);

    header("Location: admin-add-components.php");
  }



?>
  <body onload=enable_number(false);>

      <div class="container">
        <table id="cart" class="table table-hover table-condensed">
                <thead>
                  <tr>
                    <th style="width:30%">Component Name</th>
                    <th style="width:30%">Component Available</th>
                    <th style="width:8%">Quantity Add</th>
                    <th style="width:10%">Quantity Remove</th>
                  </tr>
                </thead>
    <?php
  $sql="SELECT * FROM `compavailable` ORDER BY 'id' ASC";
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    while($row=mysqli_fetch_assoc($res))
    {
   ?>
  <tbody>
    <tr>
      <form method="POST" action="admin-add-components.php">

         <td data-th="Component">
            <div class="row">
                <div class="col-sm-10">
                  <div class="custom-control form-control-lg custom-checkbox">
                  <!--  <input type="checkbox"  class="custom-control-input" >
                      <input type="checkbox" class="box" name=others onclick="enable_number(this.checked)" >--> <?php  echo $row['compname']; ?>
                      <br /><br />
                  </div>
                </div>
             </div>
          </td>
          <td data-th="Component Available">
            <div class="row">
                <div class="col-sm-10">
                  <div class="custom-control form-control-lg custom-checkbox">
                  <!--  <input type="checkbox"  class="custom-control-input" >
                      <input type="checkbox" class="box" name=others onclick="enable_number(this.checked)" >--> <?php  echo ($row['quantity']); ?>
                      <br /><br />
                  </div>
                </div>
             </div>

          </td>
      <td data-th="Quantity Add">
        <input type="number" name="quantity-add" class="form-control text-center" value="0" min="0">
        <input type="hidden" name="componentname" value="<?php echo $row['compname'];?>">
        <input type="hidden" name="qtyavailable" value="<?php echo $row['quantity'];?>">
        <input type="submit" name="add" class="btn btn-info" value="Add" />
        <?php
        $qtyavailable= $row['quantity'];
         ?>
      </td>
      <td data-th="Quantity Remove">
        <input type="number" name="quantity-remove" class="form-control text-center" value="0" min="0" max="<?php echo $qtyavailable ?>">
        <input type="hidden" name="componentname" value="<?php echo $row['compname'];?>">
        <input type="hidden" name="qtyavailable" value="<?php echo $row['quantity'];?>">
        <input type="submit" name="remove" class="btn btn-info" value="Remove" />

      </td>
      </form>
      </tr>
    </tbody>

      <?php
    }
  }
?>

</table>
</div>
</body>



  <form action="includes/admin-add-components.inc.php" method="POST">

    <div class="form-group">
      <label for="inputEmail">Component Name</label>
      <input class="form-control" type="text" id="inputComp" name="compname" placeholder="Component Name">
    </div>
    <div class="form-group">
      <label for="inputPassword">Quantity</label>
      <input class="form-control" type="text" id="inputQuantity" name="qty" placeholder="Quantity">
    </div>
    <div class="button">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
      </div>
  </form>
  <?php
}
else{
  header("Location: login.php");
}
 ?>
 <script language="JavaScript">
 <!--

 function enable_number(status)
 {
 status=!status;
   document.f1.other_number.disabled = status;
 }
 //-->


 </script>
 </html>
