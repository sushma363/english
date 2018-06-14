<?php
$conn = mysqli_connect("localhost","root","") or die("Error Connecting to Database");
mysqli_select_db($conn, "ikalu") or die(mysqli_error($conn));


?> 