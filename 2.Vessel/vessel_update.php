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
		<br><h1>Vessel</h1>
	</div>

	<div id="nav">
		
 <?php

$con = new MYSQLi("localhost","root","" ,"bb_spms" );

 $sql = "UPDATE `vessel_info` SET `Vessel_Name`='$_POST[V_Name]',`Vessel_Call_sign`='$_POST[V_Call_Sign]',`Vessel_Length`='$_POST[V_Length]',`Vessel_flag`='$_POST[V_Flag]',`Vessel_Type`='$_POST[V_Type]',`Vessel_Beam`='$_POST[V_Beam]',`Vessel_Depth`='$_POST[V_Depth]'
  WHERE `Vessel_Id`='$_POST[V_Id]'";


if(mysqli_query($con,$sql))
	echo "<p> <font color=green  size='7pt'>Data Updated</font> </p>";
else{
	echo "<p align='center'> <font color=red  size='10pt'>Something is Wrong</font> </p>";

}

$con->close();
?>

</body>
</html>


