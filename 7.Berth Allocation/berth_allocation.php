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
		<br><h1>Berth Allocation</h1>
	</div>

	<div id="nav">
		
 <?php

$con = new MYSQLi("localhost","root","" ,"bb_spms" );

 $sql = "INSERT INTO berth_allocation(Berth_Alloc_Id, Visit_Id, Berth_Id, Alloc_S_Time, Alloc_E_Time, State)
VALUES ('$_POST[B_A_Id]','$_POST[Vi_Id]','$_POST[B_Id]','$_POST[A_S_Time]', '$_POST[A_E_Time]', '$_POST[Sta]')";


if(mysqli_query($con,$sql))
	echo "<p> <font color=green  size='7pt'>Data Inserted</font> </p>";
else{
	echo "<p align='center'> <font color=red  size='10pt'>Something is Wrong</font> </p>";

}

$con->close();
?>

</body>
</html>

