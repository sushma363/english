<!DOCTYPE html>
<html>
<meta charset = "utf-8"/>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="css/mycss.css">
<script src="js/bootstrap.js"></script>
<!--Start Slider-->
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 60%;
      margin: auto;
  }
  </style>
<!--End Slider-->
<!--Start Nav Affix -->
<style>
  .affix {
      top: 0;
      width: 100%;
      -webkit-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
      background-color: #000000;
      border-color: #000000;

  }
  .affix a {
      color: #FFFFFF !important;
      padding: 15px !important;
      -webkit-transition: all .5s ease-in-out;
      transition: all .5s ease-in-out;
  }
  .affix-top a {
      padding: 20px !important;
  }
  .affix + .container-fluid {
      padding-top: 95px;
  }
  </style>
<!--End NAV Affix -->

<!--Start CSS products-->
<style>
div.img {
    margin: 7px;
    border: 1px solid #ccc;
    float: left;
    width: 220px;
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>
<!--END CSS products-->



<title>Ikalu</title>
<link rel="icon" type="image/x-icon" href="images/symbol.png"/>
<body>
<!--Start Logo and Slogan-->
<div class="container-fluid" style="background-color:#000000;color:#FFFFFF;height:200px;padding-top:50px;">

  <div style="text-align:left;"></div>
  <div>
  	<h1>IKalu Meat Shop</h1>
  	<p>A Complete Meat Solution.</p>
	</div>
</div>
<!--End Logo and Slogan-->
<!--Start Nav-->
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="border-radius:0">
  <div class="container-fluid">
    <div class="navbar-header"> <a href="index.php?page=home" class="navbar-brand">IKalu Meat Shop </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#toggles"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id ="toggles">
      <ul class="nav navbar-nav">
        <li><a href="index.php?page=home"><span class="glyphicon glyphicon-home"> Home </span></a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-th-list"> MeatProducts <span class="caret"></span></span></a>
          <ul class="dropdown-menu" id="dropdown">
            <li><a href="#">Fresh</a></li>
            <li><a href="#">Pure</a></li>
            <li><a href="#">Drumsticks</a></li>
            <li><a href="#">Rato Bhale</a></li>
            <li><a href="#">Sussage</a></li>
            <li><a href="#">Legs</a></li>
          </ul>
        </li>
        <li><a href="index.php?page=order"><span class="glyphicon glyphicon-bookmark"> Feeds</span></a> </li>
        <li><a href="#"><span class="glyphicon glyphicon-earphone"> ContactUs</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-info-sign"> AboutUs</span></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="pages/login.php"><span class="glyphicon glyphicon-user"> Login</span></a></li>
      </ul>
    </div>
  </div>
  <!--End div collapse navbar-collapse-->
</nav>
<!--End Nav-->



 <?php

if(isset($_GET["page"]))
{

	$page = $_GET['page'];
	
	if($page)
	{
	include("pages/$page.php");
	}

}

else
{
include("pages/home.php");

}


?>
</td>


  <br>
  <!--line break-->
  
  <div class="panel-footer" style="background-color:#000000;border-radius:0;color:#FFFFFF;text-align:center;height:100px">copyright 2016 @ IKalu Meat Shop<br>Designed and Developed by CCI Nepal</div>
  
 

<!--Start Nav 2nd-->
<nav class="navbar navbar-inverse"  style="border-radius:0" data-spy="affix" data-offset-top="197" >
<div class="container-fluid">
<div class="navbar-header"> <a href="index.php?page=home" class="navbar-brand">IKalu Meat Shop </a>
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#toggles"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
</div>
<div class="collapse navbar-collapse" id ="toggles">
  <ul class="nav navbar-nav">
    <li><a href="index.php?page=home"><span class="glyphicon glyphicon-home"> Home </span></a></li>
    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-th-list"> MeatProducts <span class="caret"></span></span></a>
      <ul class="dropdown-menu" id="dropdown" style="background-color:#000000;">
        <li><a href="#">Fresh</a></li>
        <li><a href="#">Pure</a></li>
        <li><a href="#">Drumsticks</a></li>
        <li><a href="#">Rato Bhale</a></li>
        <li><a href="#">Sussage</a></li>
        <li><a href="#">Legs</a></li>
      </ul>
    </li>
    <li><a href="index.php?page=order"><span class="glyphicon glyphicon-bookmark"> Feeds</span></a> </li>
    <li><a href="#"><span class="glyphicon glyphicon-earphone"> ContactUs</span></a></li>
    <li><a href="#"><span class="glyphicon glyphicon-info-sign"> AboutUs</span></a></li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="pages/login.php"><span class="glyphicon glyphicon-user"> Login</span></a></li>
  </ul>
</div>
<!--End div collapse navbar-collapse-->
</nav>
<!--End Nav 2nd-->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
