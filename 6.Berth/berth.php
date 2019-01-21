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

 $sql = "INSERT INTO berth(Berth_Id, Quay_Id,Berth_Name, Berth_Length, Berth_Depth, Berth_S_Pos,Berth_E_Pos)
 VALUES ('$_POST[B_Id]','$_POST[Q_Id]','$_POST[B_Name]','$_POST[B_Length]', '$_POST[B_Depth]', '$_POST[B_S_Pos]','$_POST[B_E_Pos]')";


if(mysqli_query($con,$sql))
	echo "<p> <font color=green  size='7pt'>Data Inserted</font> </p>";
else{
	echo "<p align='center'> <font color=red  size='10pt'>Something is Wrong</font> </p>";

}
$con->close();
?>

</body>
</html>
