

<?PHP session_start();

$_SESSION['id'] = "";
$_SESSION['name'] = "";

session_destroy(); 

header("Location: login.php");?> 