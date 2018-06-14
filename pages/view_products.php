
<head>
  <title>View item</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container">
  <h2>Available Items</h2>            
  <table class="table table-hover" >
    <thead>
      <tr>
        <th>Id</th>
        <th>Items</th>
        <th>Price</th>
		<th>Image</th>
		<th>Description</th>
      </tr>
    </thead>
	
    <tbody>
<?php
$result = tbl_product_menu("");
 if($result){
	while($row=mysql_fetch_array($result)){
	echo"<tr>";
	echo "<td>".$row['SN']."</td>";
	echo "<td>".$row['Items']."</td>";
	echo"<td>".$row['Price']."</td>";
	echo "<td><img height='50px' width='50px' class='img-responsive' src='../images/".$row[3]."'></td>";
	echo "<td>".$row['Description']."</td>";
	echo "</tr>";
	}
 }

?>
   
    </tbody>
  </table>
</div>

