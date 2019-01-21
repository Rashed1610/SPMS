<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bb_spms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
 
$sql = "SELECT `Em_ID`, `Em_Name`, `Em_Sex`, `Em_Con_no`, `Em_Email`, `Em_Add`, `Em_Dept` FROM `em_info`" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table><tr><th>Em_ID</th><th>Em_Name</th><th>Em_Sex</th><th>Em_Con_no</th><th>Em_Email</th><th>Em_Add</th><th>Em_Dept</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
		echo "<tr><td>" . $row['Em_ID'] . "</td><td>" . $row['Em_Name'] . "</td><td>". $row['Em_Sex'] . "</td><td>".$row['Em_Con_no'] . "</td><td>".$row['Em_Email'] . "</td><td>".$row['Em_Add'] . "</td><td>". $row['Em_Dept'] . "</td></tr>";
    }
	echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
