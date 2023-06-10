<?php
    require 'connection.php';
    if(isset($_POST["submit"])){
        $nic=$_POST["nic"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $sex=$_POST["sex"];
        $email = $_POST["email"];
        $dob=$_POST["dob"];
        $password = $_POST["pwd"];
        $confirmpassword = $_POST["cpwd"];
        $duplicate = mysqli_query($conn, "SELECT * FROM consumer WHERE email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
          echo
          "<script> alert('Email Has Already Taken'); </script>";
        }
        else{
            if ($password == $confirmpassword) {
                $query = "INSERT INTO `Consumer` (`NIC`, `First_Name`, `Lat_Name`, `Sex`, `Email`, `DOB`, `Password`) VALUES ('$nic', '$fname', '$lname', '$sex', '$email', '$dob', '$password')";
                if (mysqli_query($conn, $query)) {
                    echo "<script> alert('Account Created Successfully'); </script>";
                } else {
                    echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
                }
            } else {
                echo "<script> alert('Password Does Not Match'); </script>";
            }
      }
    }
    if(isset($_POST["reset"])){
        $nic=$_POST[""];
        $fname = $_POST[""];
        $lname = $_POST[""];
        $sex=$_POST[""];
        $email = $_POST[""];
        $dob=$_POST[""];
        $password = $_POST[""];
        $confirmpassword = $_POST[""];
        
    }
?>
<html>
    <head>
        <title>
            Create Account
        </title>
    </head>
    <body>
        Create Your Account
            <form class="" action="" method="post" enctype="multipart/form-data" autocomplete="on">
                
                <table>
                    <tr>
                        <td>NIC: </td>
                        <td><input type="text" name="nic" placeholder="NIC"></td>
                    <tr>
                        <td>First Name: </td>
                        <td><input type="text" name="fname" placeholder="First name"></td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="lname" placeholder="Last name"></td>
                    </tr>
                    <tr>
                        <td>Sex: </td>
                        <td><input type="text" name="sex" placeholder="sex"></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" name="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>DOB: </td>
                        <td><input type="text" name="dob" placeholder="DOB"></td>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="pwd" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="cpwd" placeholder="Confirm Password"></td>
                    </tr>
                </table>

                <button type="submit" name="submit">Create</button>
                <button type="reset" name="reset">Clear</button>
            </form>
            <div><a href="Login.php">Login</a></div>
        </body>
</html>
