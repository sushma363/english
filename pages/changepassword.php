<!DOCTYPE html>
<html lang="en">
<head>
  <title>View item</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form action="change_password.php" method="post" >
<div class="form-group">
<div><label for="oldpass">Old password:<input type="text"class="form-control" id="oldpass" name="old" required /></div>
</div>

<div>
<div class="form-group">
<div><label for="newpass"> New pasword: <input type="text" class="form-control" id="newpass" name="new" required/> </div>
</div>

<div>
<div class="form-group">
<div><label for="conpass"> Confirm password:<input type="text" class="form-control" id="conpass" name="confirmpassword" required /></div>
</div>
</div>
<input type="submit" name="submit" value="Save" /> 

</form>


