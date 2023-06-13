<?php
session_start();
// Create connection
$conn = mysqli_connect("localhost","root","1234","KarmikayaDB");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
/*else{
  echo "Connected successfully";
}*/
?>



