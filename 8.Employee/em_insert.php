<!DOCTYPE html>
<html>
<head>
<style>

</style>
	<title>New Employee</title>
	<link rel = "stylesheet" type = "text/css" href = "php.css">
	<link rel = "stylesheet" type = "text/css" href = "css/font-awesome.min.css">
	
	
	
</head>
<body>
	
		
	<div class="top_area">
			<ul>
				<li><a href="http://localhost/BB_SPMS/0.Main/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="header">
		<br><h1>Employee</h1>
	</div>

	<div id="nav">
		
 <?php

$con = new MYSQLi("localhost","root","" ,"bb_spms" );

 $sql = "INSERT INTO em_info(Em_ID, Em_Name, Em_Sex, Em_Con_no, Em_Email, Em_Add, Em_Dept)VALUES ('$_POST[Em_ID]','$_POST[Em_Name]','$_POST[Em_Sex]','$_POST[Em_Con_no]', '$_POST[Em_Email]', '$_POST[Em_Add]','$_POST[Em_Dept]')";

if(mysqli_query($con,$sql))
	echo "<p> <font color=green  size='7pt'>Data Inserted</font> </p>";
else{
	echo "<p align='center'> <font color=red  size='10pt'>Something is Wrong</font> </p>";

}

$con->close();
?>

</body>
</html>

