<link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="../css/mycss.css">
<script src="../js/bootstrap.js"></script>

  <title>View customer order</title>

<div class="container-fluid">
  <h2>Total order</h2>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>SN</th>
        <th>Date</th>
        <th>Time</th>
		<th>Full Name</th>
        <th>Company Name</th>
        <th>Conatact number</th>
		<th>Address</th>
        <th>Email</th>
        <th>Items</th>
		<th>Description</th>
		<th>Action</th>
		<th>Action</th>
		</tr>
		</tbody>

<?php

 $sql="select * from tbl_order";
 $result = mysql_query($sql);
 if($result){
 while($row=mysql_fetch_array($result))
 {
 	echo"<tr>";
	echo "<td>".$row['SN']."</td>";
	  echo "<td>".$row['Date']."</td>";
       echo "<td>".$row['Time']."</td>";
		echo "<td>".$row['Full_name']."</td>";
       echo "<td>".$row['Company_name']."</td>";
        echo "<td>".$row['Contact']."</td>";
		echo "<td>".$row['Address']."</td>";
       echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Items']."</td>";
		echo "<td>".$row['Description']."</td>";
	echo "<td><a href='deleteorder.php?id=$row[SN]'>Delete</a>";
	echo "<td><a href='deleteorder.php?id=$row[SN]'>Delete</a>";
	echo "</tr>";
 }
 }


?>

  </table>
</div>
<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="../js/plugins/morris/raphael.min.js"></script>
<script src="../js/plugins/morris/morris.min.js"></script>
<script src="../js/plugins/morris/morris-data.js"></script>
