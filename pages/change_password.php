<?php 

require("../connection/connection.php");
require("../Function/function.php");

	
	extract($_POST);
	
	$success = passwordCheck($old);
	
	
	
?>

