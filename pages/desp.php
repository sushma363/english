
<?php
 
require("connection/connection.php");
require("Function/function.php");

$data = desp($_GET['id']);
$row = mysql_fetch_row($data);

?>
<div class="container" style="text-align:center;">
<h2>Product Details</h2><br />
		<div class="row">
			<div class="col-sm-6">
			       <div style="text-align:left;"><b>Symbol No. <?php echo $row[0] ?></b></div>
			       <div class="col-lg-12 col-md-12 col-xs-12 thumb">
                         <a class="thumbnail">
                           <img class="img-responsive" src="images/<?php echo $row['3'];?>" alt="image">
                         </a>
			       </div>				   
			       <div><a class="btn btn-info" href="index.php?page=order">Add to Cart</a></div>
           </div>
			
			<div class="col-sm-6">
				<h4>Description</h4>
				
				<div><b>Item: </b><i><?php echo $row['1'] ?></i></div>				
            
			   <div><b>Product Details:</b> <?php echo $row['4'];?></div>
			</div>
			
		</div>
		<h2>More Products</h2>
		
<div class="col-sm-12">
       <div class="panel panel-primary" style="border-color:#000000;">
	   	<div class="panel-heading" id="panel-heading">Products</div>
		<div class="panel-body" style="text-align:justify">
		<div class="row">
		
		
		 <?php
		  
		  $data = tbl_product_menu("");
		 
		 while ($row = mysql_fetch_array($data))

					{
		  ?>

            <div class="col-lg-4 col-md-3 col-xs-6 thumb">
                <a class="thumbnail">
                    <img class="img-responsive" src="images/<?php echo $row['3'];?>" alt="image">
                </a>
				
				<div style="text-align:center;"><a class="btn btn-info" href="index.php?page=order">Add to Cart</a>
				<a class="btn btn-info" href="index.php?page=desp&id=<?php echo $row['0'];?>">View</a>
				</div><br />
            </div>
			
			<?php
					}
		  ?>
		  
            
        </div>

		</div>
	  </div>
	</div>
		
	</div><!--end container-->