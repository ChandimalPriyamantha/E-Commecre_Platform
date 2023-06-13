<?php
// DB connection parameters
  //   $dbServer = "localhost";
	// $dbUser = "root";
	// $dbPassword = "";
	// $database = "karmikayadb";
	
// Connect
    $conn = mysqli_connect('localhost', 'root', '1234');

   mysqli_query($conn,"use Karmikayadb");

	   if(!$conn){
		   die("Connection Failed : ".mysqli_connect_error());
	   }
     else{
      //echo"file is successfully saved into the database.";

     }
?>