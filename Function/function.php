<?php


function tbl_product_menu($sn)
{
if($sn!=""){
		  $sql =  "select * from tbl_product_menu where SN = $sn";
		  }
else{
		  $sql =  "select * from tbl_product_menu LIMIT 12";			
		  }
$result = mysql_query($sql);
return $result;

}



function tbl_order($date1,$time1,$txtFname,$txtCname,$txtContact,$txtAddress,$txtEmail,$dpItems,$txtDesp)
{
		  $sql = "insert into tbl_order SET Date ='$date1',Time='$time1',
		  Full_name='$txtFname',Company_name='$txtCname',Contact='$txtContact',Address='$txtAddress',Email='$txtEmail',Items='$dpItems', Description='$txtDesp'";
		  $parse = mysql_query($sql);
         
	if($parse)
	   {
	   echo "inserted";
	   }
	 else
	 {	 
	 echo mysql_error();
	 }
}

function desp($sn)
{
	if($sn!="")
	{
		$sql = "select * from tbl_product_menu WHERE SN=$sn";	
	}
	else
	{
		$sql = "select * from tbl_product_menu";
	}
	$result = mysql_query($sql);
	return $result;
}


function viewitems($sn)
{

if($sn!=""){
		  $sql =  "select * from tbl_product_menu where SN = $sn";
		  }
else{
		  $sql = "select * from tbl_product_menu";		
		  }
$result = mysql_query($sql);
return $result;
	
}

function passwordCheck($old)
{
session_start();
	$query="select count(Pwd) as cnt from tbl_admin_login where Pwd='$old'";
	$parse=mysql_query($query);
	$row=mysql_fetch_assoc($parse); //assoc le name auto lincha
	//print_r ($row);
	
	if($row['cnt'])   //cnt is alias in sql
	{
		updateNewPass($_POST['confirmpassword'],$_SESSION['id']);
	}
	else{
		echo "<script>alert('Oops! Old password did not match! Try again!');</script>";
		
	}
	
	
	
}
function updateNewPass($new,$id)
	{

	if(($_POST["new"]) == ($_POST["confirmpassword"]))
	{
	 $query="update tbl_admin_login set Pwd='$new' where SN='$id'";
		$parse=mysql_query($query);
	if ($parse)
	{
	header("Location:admin_panel.php");
	}
	
		 
	}
	else{
		
		echo "<script>alert('Oops! New Password & confirm password did not match! Try again!');</script>";
	}
	
	}


?>