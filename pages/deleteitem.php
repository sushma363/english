<?php
include ("../connection/connection.php");


$id=$_GET['id'];

if(empty($id)){
		  
		  $sql =  "delete from tbl_product_menu";	
		  $result=mysql_query($sql);	
		  
    if($result)
	{
 		echo "<script> alert('All Products Deleted')</script>";
		
		
		
 	}
 
 	else
	{
 		echo mysql_error();
 	}	
}

else{
		$sql =  "delete from tbl_product_menu where SN = $id";
		$result=mysql_query($sql);
    if($result)
	{
 		echo "<script> alert('Product Deleted')</script>";
		
 	}
 
 	else
	{
 		echo mysql_error();
 	}
  
}
//header("Location:admin_panel.php");



 	


?>