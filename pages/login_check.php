<?php
session_start();

include ("../Connection/connection.php");


	   $user=$_POST['txtUsername'];
  	   $pass=$_POST['txtPwd'];
	   
	 
	   
	   $query="Select * from tbl_admin_login where Username='$user' AND Pwd='$pass'";
	   $result=mysql_query($query);
	   
	   $row=mysql_fetch_assoc($result);
	   
	   $_SESSION['id']=$row['SN'];
	   $_SESSION['name']=$row['Username'];
	   //echo $_SESSION['id'];
	   //exit();    
	   
	   
	   $data=mysql_num_rows($result);
	   
	   //echo $check;
	   
	   if($data)
	   {
	   header ("Location:admin_panel.php");
	   
	   }
	   else
	   {
	   	
		//echo "username and password is invalid";
		header ("Location:login.php");
	   
	   }
	   	   
	   ?>