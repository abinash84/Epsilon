
    <link href="style-components.css" rel="stylesheet">
    <link href="includes/style-navbar.inc.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/style-popup.inc.css">
    <script href="bootstrap/js/bootstrap.min.js"></script>
    <!-- <script href="js_components.js"></script> -->
    <div id="popup1" class="overlay">
          <div class="popup">
              <h2>Request Succesfully Sent</h2>
              <a href="#" class="close" onclick="closepop();">&times;</a>
          </div>
      </div>

<?php
include "includes/header.php";
$product_ids=array();
if(isset($_POST['add-to-cart'])){
  $quantityissued=$_POST['quantity-issued'];
  $quantityissued=mysqli_real_escape_string($conn,$quantityissued);
  $quantityissued=htmlentities($quantityissued);
  if($quantityissued<1){
    header("Location: components-issue.php");
  }
  else{
    $id=$_GET['id'];
    $id=mysqli_real_escape_string($conn,$id);
    $id=htmlentities($id);
    if(isset($_SESSION['shopping-cart'])){
      $count=count($_SESSION['shopping-cart']);
      $product_ids=array_column($_SESSION['shopping-cart'],'id');
      if(!in_array($id,$product_ids)){
        $_SESSION['shopping-cart'][$count]=array
        (
          'id' =>$id,
          'compname' =>$_POST['componentname'],
          'quantity' =>$quantityissued

        );
      }
      for($i=0;$i<count($product_ids);$i++){
        if($product_ids[$i]==$id){
          $_SESSION['shopping-cart'][$i]['quantity']=$quantityissued;
        }
      }
    }
    else{
      $_SESSION['shopping-cart'][0]=array
      (
        'id' =>$_GET['id'],
        'compname' =>$_POST['componentname'],
        'quantity' =>$quantityissued

      );
    }
  }

  /*function pre_r($array){
    echo '<pre>';
    print_r($array);

   echo '</pre>';
  }
  pre_r($_SESSION);*/

}




// Popup
if(filter_input(INPUT_GET,'request')=='successful'){
  echo ' 
     
       <script type="text/javascript">
       let myElement=document.querySelector("#popup1");
       myElement.style.visibility="visible";
       myElement.style.opacity=1;
       </script>
       ';
  
  }
//
if(filter_input(INPUT_GET,'action')=='delete'){
  foreach($_SESSION['shopping-cart'] as $key=>$product){
    if ($product['id']==filter_input(INPUT_GET,'id')){
      unset($_SESSION['shopping-cart'][$key]);

    }
  }
$_SESSION['shopping-cart']=array_values($_SESSION['shopping-cart']);

}

?>
<?php
if(isset($_SESSION['user_email'])){
  include "includes/navbar-loggedin.php";
  if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }
  ?>
  <body onload=enable_number(false);>

      <div class="container">
        <!-- Search form -->
        <form class="form-inline mr-auto" action="components-issue.php" method="POST">
        <input class="form-control mr-sm-3" type="text" name="compsearch" placeholder="Search Components" aria-label="Search">
        <input class="btn btn-info mr-sm-3" type="submit" name="search-comp" value="Search">
        <input class="btn btn-success" type="submit" name="showAll" value="Show All">
      </form>
      	<table id="cart" class="table table-hover table-condensed">
          			<thead>
      						<tr>
      							<th style="width:30%">Component Name</th>
                    <th style="width:20%">Component Available</th>
      							<th style="width:8%">Quantity</th>
      						</tr>
      					</thead>
                <?php
                if(isset($_POST['search-comp']) && !isset($_POST['showAll'])){ //if search has been clicked
                
                  
                  $compsearch=mysqli_real_escape_string($conn,$_POST['compsearch']);
                  $compsearch=htmlentities($compsearch);
                  $sql="SELECT * FROM `compavailable` WHERE `compname` LIKE '%$compsearch%' ORDER BY 'id' DESC ";
                  $res=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($res)>0)
                  {
                    while($row=mysqli_fetch_assoc($res))
                    {
                   ?>
                  <tbody>
                    <tr>
                      <form name=f1 method="POST" action="components-issue.php?action=add&id=<?php echo$row['id']; ?>">
  
                         <td data-th="Component">
                            <div class="row">
                                <div class="col-sm-10">
                                  <div class="custom-control form-control-lg custom-checkbox">
                                  <!--  <input type="checkbox"  class="custom-control-input" >
                                      <input type="checkbox" class="box" name=others onclick="enable_number(this.checked)" >--> <?php   echo ($row['compname']); ?>
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
                      <td data-th="Quantity">
                        <input type="number" name="quantity-issued" class="form-control text-center" value="0" min="0" max="6">
                        <input type="hidden" name="componentname" value="<?php echo $row['compname'];?>">
                        <input type="hidden" name="qtyavailable" value="<?php echo $row['quantity'];?>">
                        <input type="submit" name="add-to-cart" class="btn btn-info" value="Add to Cart" />
  
                      </td>
                      </form>
                      <?php
                    }
                  }else{
                    echo "No items match your search" ;
                  }
                  
                }else{
                
               
                  $sql="SELECT * FROM `compavailable` ORDER BY 'id' DESC ";
                  $res=mysqli_query($conn,$sql);
                
                
                if(mysqli_num_rows($res)>0)
                {
                  while($row=mysqli_fetch_assoc($res))
                  {
                 ?>
      					<tbody>
      						<tr>
                    <form name=f1 method="POST" action="components-issue.php?action=add&id=<?php echo$row['id']; ?>">

      							   <td data-th="Component">
      								    <div class="row">
      									      <div class="col-sm-10">
                                <div class="custom-control form-control-lg custom-checkbox">
                                <!--  <input type="checkbox"  class="custom-control-input" >
                                    <input type="checkbox" class="box" name=others onclick="enable_number(this.checked)" >--> <?php   echo ($row['compname']); ?>
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
      							<td data-th="Quantity">
                      <input type="number" name="quantity-issued" class="form-control text-center" value="0" min="0" max="6">
                      <input type="hidden" name="componentname" value="<?php echo $row['compname'];?>">
                      <input type="hidden" name="qtyavailable" value="<?php echo $row['quantity'];?>">
                      <input type="submit" name="add-to-cart" class="btn btn-info" value="Add to Cart" />

      							</td>
                    </form>
                    <?php
                  }
                }
              }
                     ?>
                     <div class="table-responsive">
                       <table class="table">
                         <tr>
                           <th colspan="5">
                             <h3>Order Details</h3>
                           </th>
                         </tr>
                         <tr>
                           <th width="40%">Product Name</th>
                              <th width="40%">Quantity</th>
                              <th width="5%">Action</th>
                         </tr>

                       <?php
                          if(!empty($_SESSION['shopping-cart'])){
                            foreach($_SESSION['shopping-cart'] as $key =>$product){
                              ?>
                              <tr>

                              <td><?php echo $product['compname']; ?>  </td>
                              <td><?php echo $product['quantity']; ?>  </td>
                              <td>
                                <a href="components-issue.php?action=delete&id=<?php echo $product['id']?>">
                                  <div class="btn-danger">
                                    Remove
                                  </div>
                                </a>

                              </td>
                            </tr>
                            <?php
                          }?>
                            <tr>

                            <td colspan="5">

                              <?php

                            if(isset($_SESSION['shopping-cart'])){
                              if(count($_SESSION['shopping-cart'])){
                                ?>
                                <form action="includes/components-issue.inc.php" method="POST">
                                  <div class="button">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-info" type="submit" name="submit">Submit</button>
                                    </div>
                                  </div>
                                </form>

                                <?php
                              }
                            }
                            ?>
                          </td>
                        </tr>
                        <?php
                          }
                          ?>
                       </table>
                     </div>

      						</tr>
      					</tbody>


      				</table>
      </div>
    </body>
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
   <script type="text/javascript">
          function closepop(){
           
         document.getElementById("popup1").style.visibility = "hidden";
         document.getElementById("popup1").style.opacity = 0;
       }
       </script>
</html>
