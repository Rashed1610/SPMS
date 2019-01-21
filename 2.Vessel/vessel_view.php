<!DOCTYPE html>
<html>
<head>
<style>

</style>
  <title>Show</title>
  <link rel = "stylesheet" type = "text/css" href = "show.css">
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

$con = new mysqli("localhost","root",'',"bb_spms");
$sql = "SELECT * FROM `vessel_info`;";

$result = $con->query($sql);

?>
<head>
  <title>Show</title>
</head>

<body>
  <h1>
  <center>
      <h2>Vessel Information</h2><br>
      <div align="center">
        <table border = "1" cellpadding="0" cellspacing="0">
          <tr>
               <th> Vessel ID </th>
    <th> Vessel Name  </th>
    <th> Vessel Call Sign </th>
    <th> Vessel Length </th>
    <th> Vessel Flag </th>
    <th> Vessel Type </th>
    <th> Vessel Beam </th>
    <th> Vessel Depth </th>
  </tr>"
<?php
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {

    echo "<tr><td>" . $row['Vessel_Id'] . "</td><td>" . $row['Vessel_Name'] . "</td><td>". $row['Vessel_Call_sign'] . "</td><td>". $row['Vessel_Length'] . "</td><td>". $row['Vessel_flag'] . "</td><td>". $row['Vessel_Type'] . "</td>
    <td>". $row['Vessel_Beam'] . "</td><td>". $row['Vessel_Depth'] . "</td></tr>";
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





