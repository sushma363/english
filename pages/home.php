<?php
		 require("connection/connection.php");
		 require("Function/function.php");	  
?>
<div>
<div class="container">
  <!--SLider-->
  <div class="row"> <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active"> <img src="images/1.jpg" alt="Image" width="460" height="345">
          <div class="carousel-caption">
            <h3>Drumstick</h3>
            <p>Drumstick is favourtie flavour of chicken.</p>
          </div>
        </div>
        <div class="item"> <img src="images/2.jpg" alt="Image" width="460" height="345">
          <div class="carousel-caption">
            <h3>Lolly</h3>
            <p>The receipe of Lolly can be available upon request.</p>
          </div>
        </div>
        <div class="item"> <img src="images/3.jpg" alt="Image" width="460" height="345">
          <div class="carousel-caption">
            <h3>Chopsy</h3>
            <p>Chopsi is the most sold product from the restaurant.</p>
          </div>
        </div>
        <div class="item"> <img src="images/4.jpg" alt="Image" width="460" height="345">
          <div class="carousel-caption">
            <h3>Sausage</h3>
            <p>Sausage are available of both Buff and Chicken. </p>
          </div>
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
  
  <br>
  <!--line break-->
  <!--Slider end-->
 
  
  <div class="row">
  	<div class="col-sm-8">
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
		<div style="text-align:center;"> <a href="#">Read More</a> </div>
		
		
		<!--<div style="text-align:center;">
	   
	   <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
	  
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

</div>-->
	   </div>
	   

    </div>
	
    <div class="col-sm-4">
      <div class="panel panel-primary" style="border-color:#000000;">
        <div class="panel-heading" id="panel-heading">Today's Menu</div>
         <div class="panel-body" style="text-align:justify">
          <p>
          <div>
		  
		  
		 
		  
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Items</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
			  <?php
		  
		   $data = tbl_product_menu("");
		 
		 while ($row = mysql_fetch_array($data))

					{
		  ?>
		  
                <tr>
                  <td></h1><?php echo $row[0];?></td>
                  <td><a href="index.php?page=desp&id=<?php echo $row[0];?>" style="color:#000000;"><?php echo $row[1];?></a></td>
                  <td><?php echo $row[2];?></td>
                </tr>
		 <?php
					}
		  ?>
                
                
              </tbody>
            </table>
            <a href="#">Read More</a> 
			</div>
          </p>
        </div>
        <!--End div Panel body-->
      </div>
      <!--End div Panel heading-->
	  
	   
	  
	  
	  	<div class="panel panel-primary" style="border-color:#000000;">
        	<div class="panel-heading" id="panel-heading">Google Map Here!!</div>
         		<div class="panel-body" style="text-align:justify">
	  
      <!--Google Map layout Start 2-->
      <!-- Responsive iFrame -->
<div class="Flexible-container">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d220.80938344298744!2d85.33615421662519!3d27.687936028171713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1995d994c5b3%3A0xeedf0d3e127115ab!2sNew+Baneshwor+Bus+Stand!5e0!3m2!1sen!2snp!4v1480171282816" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
      <!--Google Map layout End 2-->
	  </div></div></div>
	  
	  
    </div>
    <!--End div Panel primary-->
  </div>
  <!--End col sm-4-->
</div>
<!--End row-->
</div>
