<?php
require 'connection.php';

if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $budget = $_POST["budget"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $skils = $_POST["skils"];
    $conid = $_POST["conid"];

    $query = "INSERT INTO `project` (`pid`, `Name`, `Description`, `Budget`, `Date`, `Time`, `Skils`, `CONSUMER_ID`) VALUES ('$id', '$name', '$description', '$budget', '$date', '$time', '$skils', '$conid')";
    if (mysqli_query($conn, $query)) {
        echo "<script> alert('Project uploaded Successfully'); </script>";
    } else {
        echo "<script> alert('Error: " . mysqli_error($conn) . "'); </script>";
    }
} 
if(isset($_POST["reset"])){
    // Clear the form fields by assigning empty values
    $id = "";
    $name = "";
    $description = "";
    $budget = "";
    $date = "";
    $time = "";
    $skils="";
    $conid = "";

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
    <h1>Upload Here</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>ID: </td>
                    <td><input type="text" name="id" placeholder="ID"></td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>Description: </td>
                    <td><textarea id="txtar" name="description" rows="4" cols="50"></textarea></td>
                </tr>
                <tr>
                    <td>Budget: </td>
                    <td><input type="text" name="budget" placeholder="Budget"></td>
                </tr>
                <tr>
                    <td>Date: </td>
                    <td><input type="text" name="date" placeholder="Date"></td>
                </tr>
                <tr>
                    <td>Time: </td>
                    <td><input type="text" name="time" placeholder="Time"></td>
                </tr>
                <tr>
                    <td>Skill: </td>
                    <td><input type="text" name="skils" placeholder="Skill"></td>
                </tr>
                <tr>
                    <td>Consumer ID: </td>
                    <td><input type="text" name="conid" placeholder="Consumer ID"></td>
                </tr>
            </table>

            <button type="submit" name="submit">Create</button>
            <button type="reset" name="reset">Clear</button>
        </form>
        <a href="ProjectUpdation.php">Project Updation</a>
    </main>
  
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>
</html>

