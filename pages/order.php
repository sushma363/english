<?php
		 require("connection/connection.php");
		 require("Function/function.php");
		 
		 session_start();
	
		

		  
?>
</div>
<form action="pages/order_check.php" method="post">
<div class="container">
<div style="height:auto;width:auto;background-color:#FF9933;text-align:center;border-radius:3px;">
	
    	<b>Dear Valued Customer, You are required to fill up this form to order the available products: </b>
	
</div>
<br />

<?php
date_default_timezone_set("Asia/Kathmandu");
//$datetime=date("Y-m-d h:i:sa");
?>

<div style="float:right;background-color:#FF9933;border:solid 5px;border-color:#FF9933;border-radius:3px;">
Current Date:
<?php 
$date =  date('Y-m-d');
echo $date;
$_SESSION['ss_date']= $date;

?>
<br />
Current Time:
<?php
//$offset = strtotime("5 Hours"); 
//$time = date('H:m:s', $offset);
$time = date('H:i:s');
echo $time;

$_SESSION['ss_time']= $time;


?>


</div>
<br /><br />



  <div class="form-group">
    <label for="formGroupFullname">Full Name:</label>
    <input type="text" class="form-control" id="formGroupFullname"   placeholder="Your Name goes Here" name="txtFname" maxlength="100" required>
  </div>
  
  
  <div class="form-group">
    <label for="formGroupCompanyname">Company Name:</label>
    <input  class="form-control" id="formGroupCompanyname" placeholder="Your Company Name goes Here" name="txtCname" maxlength="100" required >
  </div>
  <div class="form-group">
    <label for="formGroupcontacts">Contact:</label>
    <input type="number" class="form-control" id="formGroupcontacts" placeholder="Your Contact deatils goes Here" name="txtContact" maxlength="10" required>
  </div>
 
  <div class="form-group">
    <label for="formGroupAddress">Address:</label>
    <input type="text" class="form-control" id="formGroupAddress" placeholder="Your Address goes Here" name="txtAddress" maxlength="100" required>
  </div>
  
  <div class="form-group">
    <label for="formGroupEmail">Email:(optional)</label>
    <input type="text" class="form-control" id="formGroupEmail" placeholder="Your valid Email Address goes Here" name="txtEmail" maxlength="100">
  </div>

  <label>Items: Please Select One Item</label>
    
 
<div>

<?php

$sql = "SELECT Items FROM tbl_product_menu";
$result = mysql_query($sql);
?>


<select name='dpItems' style="background-color:#FF9933;border:5px;border-color:#FF9933;border-radius:5px;color:#FFFFFF;size:auto;" >
<?php

//echo "<select name='item'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['Items'] ."'>" . $row['Items'] ."</option>";
}
//echo "</select>";
?>
</select>

</div>
<br />
  <div class="form-group">
    <label for="formGroupDescription">Description</label>
    <textarea  class="form-control" id="formGroupDescription" placeholder="Your Description goes Here" name="txtDesp" maxlength="100" required></textarea>
  </div>
  <div>
  <input type="submit" class="btn btn-info" value="Order Submit" style="background-color:#FF9933;border:0px;">
  </div>
  </div>
  
</form>
