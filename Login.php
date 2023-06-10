<?php
require 'connection.php';
if(!empty($_SESSION["id"])){
  header("Location: ConsumerAccount.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM consumer WHERE email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['Password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["ID"];
      header("Location: ConsumerAccount.php");
      exit();
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
        <h1>Login</h1>
        <form class="" action="" method="post" autocomplete="off">
          <span>
            <label for="usernameemail">Email : </label><br>
            <input type="text" name="usernameemail" id = "usernameemail"  required/> 
          </span><br>
          <span>
            <label for="Password">Password : </label><br>
            <input type="password" name="password" id = "password" required value=""> 
          </span><br>
              <button type="submit" name="submit">Login</button><br>
              <a href="AccountCreation.php">Create an account</a>
        </form> 
      </div>
    </div>
  </body>
</html>
