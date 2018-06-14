
<div class="container">
  <h2>Available Items</h2> <div> <a href='deleteitem.php?id=''>Delete All</a> </div>           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Items</th>
        <th>Price</th>
		<th>Image</th>	
		<th>Action</th>
      </tr>
    </thead>
	
    <tbody>
<?php

 $sql="select * from tbl_product_menu";
 $result=mysql_query($sql);
 
 if($result)
 {
 
	while($row=mysql_fetch_array($result))
	{
	echo"<tr>";
	echo "<td>".$row['SN']."</td>";
	echo "<td>".$row['Items']."</td>";
	echo"<td>".$row['Price']."</td>";
	echo"<td><img height='50px' width='50px' class='img-responsive' src='../images/".$row[3]."'></td>";
	echo "<td><a href='deleteitem.php?id=$row[SN]'>Delete</a>";
	echo "</tr>";
	}
 }
?>
   
    </tbody>
	</table></div>