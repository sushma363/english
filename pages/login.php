<?php
session_start();
$err = "Username or Password is invalid";

?>
<!DOCTYPE html>
<html>
<meta charset = "utf-8"/>
<link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="../css/mycss.css">
<script src="../js/bootstrap.js"></script>





<body>

<div class="container" style="color:#000000;">

  <h3>Authentication Require</h3>
  <form class="form-horizontal" role="form" action="login_check.php" method="post">
  <div><?php echo "<font color='red'>$err</font>";?></div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtUsername">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Enter Username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="txtPwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="txtPwd" name="txtPwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="btnLogin" class="btn btn-default">Login</button>
      </div>
    </div>
  </form>
</div>



<!-- jQuery -->
<script src="../js/jquery.js"></script>
<!-- IKalu Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<!-- Morris Charts JavaScript -->
<script src="../js/plugins/morris/raphael.min.js"></script>
<script src="../js/plugins/morris/morris.min.js"></script>
<script src="../js/plugins/morris/morris-data.js"></script>
</body>
</html>
