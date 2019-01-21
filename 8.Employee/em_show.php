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
    <br><h1>Employee</h1>
  </div>

  <div id="nav">

         <?php

$con = new mysqli("localhost","root",'',"bb_spms");
$sql = "SELECT * FROM `em_info`;";

$result = $con->query($sql);

?>
<head>
  <title>Show</title>
</head>

<body>
  <h1>
  <center>
      <h2>Employee Information</h2><br>
      <div align="center">
        <table border = "1" cellpadding="0" cellspacing="0">
          <tr>
            <th> Employee ID </th>
            <th> Name  </th>
            <th>  Sex </th>
            <th> Contact Number </th>
            <th> Email </th>
            <th> Address </th>
            <th> Department </th>
          </tr>
<?php
if($result->num_rows > 0){
  while($row = $result->fetch_assoc()) {

  echo "<tr><td>" . $row['Em_ID'] . "</td><td>" . $row['Em_Name'] . "</td><td>". $row['Em_Sex'] . "</td><td>". $row['Em_Con_no'] . "</td><td>". $row['Em_Email'] ."</td><td>" . $row['Em_Add'] ."</td><td>". $row['Em_Dept'] ."</td></tr>";
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



