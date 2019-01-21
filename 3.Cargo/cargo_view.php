<!DOCTYPE html>
<html>
<head>
<style>

</style>
  <title>Show</title>
  <link rel = "stylesheet" type = "text/css" href = "show1.css">
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
    <br><h1>Cargo</h1>
  </div>

  <div id="nav">

         <?php

$con = new mysqli("localhost","root",'',"bb_spms");
$sql = "SELECT * FROM `cargo`;";

$result = $con->query($sql);

?>
<head>
  <title>Show</title>
</head>

<body>
  <h1>
  <center>
      <h2>Cargo</h2><br>
      <div align="center">
        <table border = "1" cellpadding="0" cellspacing="0">
          <tr>
            <th> Cargo_Id</th>
            <th> Vessel_Id </th>
            <th>  Cargo_Name</th>
            <th> Cargo_Type </th>
            <th> Cargo_Size </th>
            
          </tr>
<?php
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {

  echo "<tr><td>" . $row['Cargo_Id'] . "</td><td>" . $row['Vessel_Id'] . "</td><td>". $row['Cargo_Name'] . "</td><td>". $row['Cargo_Type'] . "</td><td>". $row['Cargo_Size'] ."</td></tr>";
  }

}else{
  echo "0 result";
}
?>
        </table>
      </fieldset>
    </center>

  </body>

</body>
</html>

