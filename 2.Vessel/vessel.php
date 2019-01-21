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
		<br><h1>Vessel</h1>
	</div>

	<div id="nav">
		
 <?php

$con = new MYSQLi("localhost","root","" ,"bb_spms" );

$sql = "INSERT INTO `vessel_info`(`Vessel_Id`, `Vessel_Name`, `Vessel_Call_sign`, `Vessel_Length`, `Vessel_flag`, `Vessel_Type`, `Vessel_Beam`, `Vessel_Depth`) VALUES ('$_POST[V_Id]','$_POST[V_Name]','$_POST[V_Call_Sign]','$_POST[V_Length]','$_POST[V_Flag]','$_POST[V_Type]','$_POST[V_Beam]','$_POST[V_Depth]')";


if(mysqli_query($con,$sql))
	echo "<p> <font color=green  size='7pt'>Data Inserted</font> </p>";
else{
	echo "<p align='center'> <font color=red  size='10pt'>Something is Wrong</font> </p>";

}
$con->close();
?>

</body>
</html>


