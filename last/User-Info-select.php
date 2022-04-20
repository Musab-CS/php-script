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
$sqli ="select * from MyGuests WHERE udi='" .$_GET['udi']."'";
$result = $conn->query($sqli);
  while($row = $result->fetch_assoc()) 
{$json_array[]=$row;
} 
$conn->close();
print(json_encode($json_array));
?>