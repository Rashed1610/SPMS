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
    <br><h1>Berth Allocation</h1>
  </div>

  <div id="nav">

         <?php

$con = new mysqli("localhost","root",'',"bb_spms");
$sql = "SELECT * FROM `berth_allocation`;";

$result = $con->query($sql);

?>
<head>
  <title>Show</title>
</head>

<body>
  <h1>
  <center>
      <h2>Berth Allocation Information</h2><br>
      <div align="center">
        <table border = "1" cellpadding="0" cellspacing="0">
          <tr>
            <th> Berth_Alloc_Id</th>
            <th> Visit_Id </th>
            <th>  Berth_Id</th>
            <th> Alloc_S_Time </th>
            <th> Alloc_E_Time </th>
            <th> State </th>
          </tr>
<?php
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {

  echo "<tr><td>" . $row['Berth_Alloc_Id'] . "</td><td>" . $row['Visit_Id'] . "</td><td>". $row['Berth_Id'] . "</td><td>". $row['Alloc_S_Time'] . "</td><td>". $row['Alloc_E_Time'] ."</td><td>" . $row['State']. "</td></tr>";
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




