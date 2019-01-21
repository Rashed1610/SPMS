<?php

$con = new MYSQLi("localhost","root","" ,"bb_spms" );

 $sql = "DELETE FROM `em_info` WHERE `Em_ID` = '$_POST[Em_ID]'";

if(mysqli_query($con,$sql))
	echo "Deleted from Employee Info";

$con->close();