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

$sql = "INSERT INTO Image (Udi, User_name, image_path)
VALUES ('".$_GET['Udi']."','".$_GET['User_name']."', '".$_GET['image_path']."')";

if ($conn->query($sql) === TRUE) {
 
$jason="New record created successfully";
print(json_encode($json));
} else {
$json_ar="Error";
print(json_encode($json_ay));
}
$conn->close();
?>