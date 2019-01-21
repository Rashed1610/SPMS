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
    <br><h1>Berth</h1>
  </div>

  <div id="nav">

         <?php

$con = new mysqli("localhost","root",'',"bb_spms");
$sql = "SELECT * FROM `berth`;";

$result = $con->query($sql);

?>
<head>
  <title>Show</title>
</head>

<body>
  <h1>
  <center>
      <h2>Berth</h2><br>
      <div align="center">
        <table border = "1" cellpadding="0" cellspacing="0">
          <tr>
            <th> Berth_Id</th>
            <th> Quay_Id </th>
            <th>  Berth_Name</th>
            <th> Berth_Length </th>
            <th> Berth_Depth </th>
            <th> Berth_S_Pos </th>
            <th> Berth_E_Pos </th>

          </tr>
<?php
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {

  echo "<tr><td>" . $row['Berth_Id'] . "</td><td>" . $row['Quay_Id'] . "</td><td>". $row['Berth_Name'] . "</td><td>". $row['Berth_Length'] . "</td><td>". $row['Berth_Depth'] ."</td><td>" . $row['Berth_S_Pos']."</td><td>" . $row['Berth_E_Pos']."</td></tr>";
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

