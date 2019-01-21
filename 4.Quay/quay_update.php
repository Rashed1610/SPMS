<!DOCTYPE html>
<html>
<head>
<style>

</style>
	<title>Update</title>
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
		<br><h1>Berth</h1>
	</div>

	<div id="nav">
		
 <?php

$con = new MYSQLi("localhost","root","" ,"bb_spms" );

$sql = "UPDATE `quay` SET `Port_Id`='$_POST[P_Id]',`Quay_Name`='$_POST[Q_Name]',`Quay_Length`='$_POST[Q_Length]',`Quay_Description`='$_POST[Q_Description]'
 WHERE `Quay_Id`='$_POST[Q_Id]'";



if(mysqli_query($con,$sql))
	echo "<p> <font color=green  size='7pt'>Data Updated</font> </p>";
else{
	echo "<p align='center'> <font color=red  size='10pt'>Something is Wrong</font> </p>";

}

$con->close();
?>

</body>
</html>


