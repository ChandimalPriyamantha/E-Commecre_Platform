<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM consumer WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: Login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <h1>Welcome <?php echo $row["First_Name"]; ?></h1>
    <select>
      <option><img src="setting.png"></option>
      <option value="Update">Update Profile</option>
      <option value="Delete">Delete Account</option>
    </select>
    <a href="UpdateAcc.php">Update Profile</a>
    <a href="Delete Account">Delete  Account</a>
    <a href="Post.php">Continue</a>
    <a href="Logout.php">Logout</a>
  </body>
</html>
