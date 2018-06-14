<?php
session_start();

require("../connection/connection.php");
require("../Function/function.php");

$date1 = $_SESSION['ss_date'];
$time1 = $_SESSION['ss_time'];
 
extract($_POST);

tbl_order($date1,$time1,$txtFname,$txtCname,$txtContact,$txtAddress,$txtEmail,$dpItems,$txtDesp);

?>
	 
	 

