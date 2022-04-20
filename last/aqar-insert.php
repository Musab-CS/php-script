<?php
$servername = "fdb25.awardspace.net";
$username = "3451888_deom";
$password = "mr.root.exe2248";
$dbname = "3451888_deom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO app (oner, data,type ,price , stat, area, bednum, bathnum, udi)
VALUES ('".$_GET['oner']."','".$_GET['data']."','".$_GET['type']."','".$_GET['price']."','".$_GET['stat']."','".$_GET['area']."'
,'".$_GET['bednum']."', '".$_GET['bathnum']."','".$_GET['udi']."')";

if ($conn->query($sql) === TRUE) {
$sql="SELECT MAX(id) FROM where udi='".$_GET['udi']."'"; 
$jason="New record created successfully";
print(json_encode($json));
} else {
$json_ar="Error";
print(json_encode($json_ay));
}
$conn->close();

?>