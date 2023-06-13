<?php
require 'connection.php';

$consumerId = $_SESSION['id']; // Assuming you have stored the consumer ID in the session
$query = "SELECT NIC, First_Name, Lat_Name, Sex, Email, DOB FROM consumer WHERE ID =$consumerId ";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $nic = $row['NIC'];
    $firstName = $row['First_Name'];
    $lastName = $row['Lat_Name'];
    $sex = $row['Sex'];
    $email = $row['Email'];
    $dob = $row['DOB'];
    
    
} else {
    echo "No consumer details found.";
}

if(isset($_POST["submit"])){
    $nic = $_POST['nic'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    $query="update consumer set NIC='$nic', First_Name='$firstName', Lat_Name='$lastName',Sex='$sex',Email='$email',DOB='$dob' where ID='$consumerId'";
    $result=mysqli_query($conn,$query);
    if($result){
        echo
      "<script> alert('Updated'); </script>";
    }
    else{
        echo
      "<script> alert('Not updated'); </script>";
    }
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
                            Hi, <?php echo $row["First_Name"]; ?>
                                
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
<h1>Your Profile</h1>

<form action="update.php" method="POST">
    <table>
        <tr>
            <td><label for="nic">NIC:</label></td>
            <td><input type="text" name="nic" id="nic" value="<?php echo $nic; ?>" ></td>
        </tr>
        <tr>
            <td><label for="firstName">First Name:</label></td>
            <td><input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>" ></td>
        </tr>
        <tr>
            <td><label for="lastName">Last Name:</label></td>
            <td><input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>" ></td>
        </tr>
        <tr>
            <td><label for="sex">Sex:</label></td>
            <td><input type="text" name="sex" value="<?php echo $sex; ?>"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" id="email" value="<?php echo $email; ?>" ></td>
        </tr>
        <tr>
            <td><label for="dob">Date of Birth:</label></td>
            <td><input type="date" name="dob" id="dob" value="<?php echo $dob; ?>" ></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
    <a href="ConsumerAccount.php"><input type="button" name="back" value="Back"></a>
</form>
<a href="Logout.php">Logout</a>


    
    </main>
  
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>