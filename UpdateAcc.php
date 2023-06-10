<?php
    require 'connection.php';
    if(!empty($_SESSION["id"])){
        $id = $_SESSION["id"];
        $result = mysqli_query($conn, "SELECT * FROM consumer WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
    if(isset($_POST["submit"])){
        $nic=$_POST["nic"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $sex=$_POST["sex"];
        $email = $_POST["email"];
        $dob=$_POST["dob"];
        $password = $_POST["pwd"];
        $confirmpassword = $_POST["cpwd"];
        //$duplicate = mysqli_query($conn, "SELECT * FROM consumer WHERE email = '$email'");
        if($row > 0){
          echo
          "<script> alert('Email Has Already Taken'); </script>";
        }
        else{
            if ($password == $confirmpassword) {
                $query = "Update `Consumer` set `NIC`='$nic',`First_Name`='$fname',`Lat_Name`='$lname', `Sex`='$sex', `Email`='$email', `DOB`='$dob', `Password`='$password' where id=$id)";
                if (mysqli_query($conn, $query)) {
                    echo "<script> alert('Updated Successfully'); </script>";
                } else {
                    echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
                }
            } else {
                echo "<script> alert('Password Does Not Match'); </script>";
            }
      }
    }
}
    if(isset($_POST["reset"])){
        header("Location: Welcome.php");
    }
?>
<html>
    <head>
        <title>UpdateDetails</title>
    </head>
    <body>
        <div>
            <h1>Update Your Details</h1>
        </div>
        <div>
            <form class="" action="" method="post" autocomplete="on">
                <table>
                    <tr>
                        <td>NIC:</td>
                        <td><input type="text" name="nic" placeholder="NIC"></td>
                    </tr>
                    <tr>
                        <td>First Name:</td>
                        <td><input type="text" name="fname" placeholder="First_Name"></td>
                    </tr>
                    <tr>
                        <td>Last Name:</td>
                        <td><input type="text" name="lname" placeholder="Last Name"></td>
                    </tr>
                     <tr>
                        <td>Sex:</td>
                        <td><input type="text" name="sex" placeholder="Sex"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" name="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>DOB:</td>
                        <td><input type="text" name="dob" placeholder="DOB"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="text" name="pwd" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="cpwd" placeholder="Confirm Password"></td>
                    </tr>
                </table>
                <button type="submit" name="submit">Update</button>
                <button type="reset" name="reset"><a href="Welcome.php">Cancel</a></button>
            </form>
        </div>
    </body>
</html>

