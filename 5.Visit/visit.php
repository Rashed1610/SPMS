<!DOCTYPE html>
<html>
<head>
<style>

</style>
	<title>Insert</title>
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

 $sql = "INSERT INTO `visit`(`Visit_Id`, `Vessel_Id`, `ETA`, `ETD`, `ATA`, `ATD`, `Visit_Note`)
VALUES ('$_POST[Vi_Id]','$_POST[V_Id]','$_POST[EA]','$_POST[ED]', '$_POST[AA]', '$_POST[AD]','$_POST[Vi_Note]')";

if(mysqli_query($con,$sql))
	echo "<p> <font color=green  size='7pt'>Data Inserted</font> </p>";
else{
	echo "<p align='center'> <font color=red  size='10pt'>Something is Wrong</font> </p>";

}
$con->close();
?>

</body>
</html>

