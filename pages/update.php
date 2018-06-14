<?php
session_start();
include("../Connection/connection.php");


//$id=$_GET['id'];
if(isset($_GET['id'])){
$id=$_GET['id'];
$sql = "select * from tbl_product_menu where SN = $id";
$result = mysql_query($sql);
$row=mysql_fetch_row($result);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Edit Here!!!!</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="txtuItem">Items</label>
      <input type="text" class="form-control" id="txtuItem" name="txtuItem" value="<?php echo $row[1];?>">
    </div>
    <div class="form-group">
      <label for="txtuImage">Old Image</label>
      <img src="../images/<?php echo $row['3'];?>" width="150px" height="100px" / ><br>
	  Upload Image<input type="file" name="txtuImage" />
	  <input type="hidden" id="hImage" name = "hImage" value="<?php echo $row[3];?>">
    </div>
	   <div class="form-group">
      <label for="txtuPrice">Price</label>
      <input type="text" class="form-control" id="txtuPrice" name="txtuPrice" value="<?php echo $row[2];?>">
    </div><br>
	<label>Description:<input type="text" id="desp" name="txtuDesp" value="<?php echo $row[4];?>">
	 <input type="submit" class="" id="submit" name="btnUpdate" value="Update now">
  </form>
  
  <?php
	
	if(isset($_POST['btnUpdate']))
	{

extract($_POST);
$filetmp = $_FILES["txtuImage"]["tmp_name"];
$filename = $_FILES["txtuImage"]["name"];
$filetype = $_FILES["txtuImage"]["type"];
$filepath = "../images/".$filename;

move_uploaded_file($filetmp,$filepath);
  
if(empty($filename))
{
  
	$sql_update="UPDATE tbl_product_menu set Items='".$_POST['txtuItem']."',Price='".$_POST['txtuPrice']."',Image='".$_POST['hImage']."',Description='".$_POST['txtuDesp']."' WHERE SN = $id";

}
else
{
	$sql_update="UPDATE tbl_product_menu set Items='".$_POST['txtuItem']."',Price='".$_POST['txtuPrice']."',Image='$filename',Description='".$_POST['txtuDesp']."' WHERE SN = $id";
}

$result = mysql_query($sql_update);
echo "<script>alert('Product Updated!');</script>"; 
header("Location:admin_panel.php");

}
else
{
	echo mysql_error();
}

?>
</div>

</body>
</html>



