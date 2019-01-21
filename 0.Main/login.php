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
	

	<div class="container">
		<img src="login_icon.png"/>
		<form method="POST" action="#">
			<div class="form_input">
				<input type="text" name="username" placeholder="Username"/>
			</div>
			<div class="form_input">
				<input type="password" name="password" placeholder="Password"/>
			</div>
			<input type="submit" name="submit" value="Login" class="btn-login"/>
		</form>
	</div>
</body>
<?php
if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	if($user=="admin"&& $pass=="pass"){
		echo "<p align='center'> <font color=white size='7pt'><b>Welcome Admin</b></font> </p>";
		header("Refresh: 1.5; index.html");
		
	 
}
else{
	echo "<p align='center'> <font color=red size='6pt'><br><b>Invalid Username or Password</font> </p>";
	echo "<p align='center'> <font color=white size='6pt'><b>Try again</b></font> </p>";
	header("Refresh:2");
}
}
?>

</html>
