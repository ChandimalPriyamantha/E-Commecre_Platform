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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../BootstrapStyle/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../BootstrapStyle/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../BootstrapStyle/css/style.css" />
    <title>Online Clothing Managment System</title>
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3  fw-bold" href="#"><i class="bi bi-circle me-3"></i>Karmika.lk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-success" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                            Hi
                                
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">About</a></li>
                            <li>
                                <a class="dropdown-item" href="#">Log out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    
    <main>
    <h1>Create Your Account</h1>
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
    </main>
  
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>

