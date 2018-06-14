
<!DOCTYPE html>
<html>
<meta charset = "utf-8"/>
<link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="../css/mycss.css">
<script src="../js/bootstrap.js"></script>

<!--this is java script for image preview-->
<script type="text/jscript">
   function previewFile(){
       var preview = document.querySelector('img'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  previewFile();  //calls the function named previewFile()
  </script>



<?php

include ("../connection/connection.php");

session_start();
if(!isset($_SESSION['id']) && $_SESSION['name'] == ""){
  header("Location:login.php");
    exit;
}
?>
<body >
<div class="container-fluid" style="background-color:#000000;color:#FFFFFF;height:200px;padding:50px">
  <h1> IKalu Meat Shop</h1>
  <p>A Complete Meat Solution.</p>
</div>

<div class="container-fluid">
<ul style="margin:20px 0 22px 0;" class="test1 nav nav-tabs">
  <li class="active"><a href="#add" data-toggle="tab">ADD</a></li>
  <li><a href="#update" data-toggle="tab">UPDATE</a></li>
  <li><a href="#delete" data-toggle="tab">DELETE</a></li>
  <li><a href="#view" data-toggle="tab">VIEW</a></li>
   <li><a href="#vieworder" data-toggle="tab">VIEW ORDER</a></li>
   <li><a href="#changepw" data-toggle="tab">Change Password</a></li>
    <li><a href="#logout" data-toggle="tab">LOG OUT</a></li>	
</ul>

<div class="tab-content">


	<div class="tab-pane active" id="add">
	<!--add products code here-->

<div class="container">
  <h2> Add new item here!!!</h1>
  <form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
      <label for="item">Item:</label>
      <input type="text" class="form-control" id="item" name="txtItem" placeholder="Enter item" required>
    </div>
    <div class="form-group">
      <label for="price">Price:</label>
      <input type="text" class="form-control" id="price" name="txtPrice" placeholder="Enter price" required>
    </div>

	<div>
		<div><label>Image preview:</label><input type="file" name="txtImage" onChange="previewFile()" required><br>
		<img src="" height="100" alt="Image preview"></div>
	</div>
	
	<div>
		<label>Description:</label><textarea class ="form-control" name="txtDesp" placeholder="Enter Description" required></textarea><br>
		
	</div>


    <button type="submit" class="btn btn-default" name="btnSubmit">Add</button>
  </form>
    <?php
	
	if(isset($_POST['btnSubmit']))
	{

extract($_POST);
$filetmp = $_FILES["txtImage"]["tmp_name"];
$filename = $_FILES["txtImage"]["name"];
$filetype = $_FILES["txtImage"]["type"];
$filepath = "../images/".$filename;

move_uploaded_file($filetmp,$filepath);

$sql="insert into tbl_product_menu(Items,Price,Image,Description) values('$txtItem', '$txtPrice','$filename','$txtDesp')";
$result = mysql_query($sql);
	if($result)
		{
			echo "<script>alert('Product Inserted!');</script>"; 
		}
	else
		{
			echo "<script>alert('Duplicate Entry tried for the Item!');</script>"; 
		}

	}
	else
	{
		echo mysql_error(); 
	}

?>
  
</div>
<!--add products code end here-->
</div><!--end div id tab-->

<!--update products code here-->
<div class="tab-pane" id="update">
<div class="container">
<?php include("update_list.php"); ?>
</div>
</div>
<!--update products code end here-->

<!--start delete-->
<div class="tab-pane" id="delete" ><?php include("delete_table.php"); ?></div>
<!--end delete-->

<!--start view products-->
<div class="tab-pane" id="view"><?php include("view_products.php"); ?></div>
<!--end view products-->



<div class="tab-pane" id="vieworder">
<!--view order products code here-->

  <?php include("orderview.php"); ?>

<!--view order code end here-->
</div><!--end div id tab-->

<div class="tab-pane" id="changepw">
	<div class="container">
  
<?php include ("changepassword.php") ?>

	</div>
</div></div>


<div class="tab-pane" id="logout">
	<div class="container">
  
  <form method="post" action="logout.php">
    
    Click here to Logout <b>>>></b> <button type="submit" class="btn btn-default" name="submit">Logout</button>
  </form>
	</div>
</div>


</div><!--end tab content-->
</div><!--end container-->





<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- IKalu Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="../js/plugins/morris/raphael.min.js"></script>
<script src="../js/plugins/morris/morris.min.js"></script>
<script src="../js/plugins/morris/morris-data.js"></script>
</body>
</html>
