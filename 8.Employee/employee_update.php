<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bb_spms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `em_info` SET `Em_Name`='$_POST[Em_Name]',`Em_Sex`='$_POST[Em_Sex]',`Em_Con_no`='$_POST[Em_Con_no]',`Em_Email`='$_POST[Em_Email]',`Em_Add`='$_POST[Em_Add]',`Em_Dept`='$_POST[Em_Dept]'
 WHERE `Em_ID`='$_POST[Em_ID]'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
