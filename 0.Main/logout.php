<!DOCTYPE html>
<html>
<head>
<style>

</style>
	<title>Login</title>
	<link rel = "stylesheet" type = "text/css" href = "style3.css">
	<link rel = "stylesheet" type = "text/css" href = "css/font-awesome.min.css">

</head>

	<div class="header">
		<br><h1>Admin Login</h1>
	</div>

<?
session_start();
session_unset();
session_destroy();
echo "<p align='center'> <font color=white size='7pt'><b>Logging Out</b></font> </p>";
header("Refresh: 5; login.php");
exit();
?>

</body>


</html>



