

<?php
include("connection.php");

if (isset($_POST['Place_Bid'])) {
    $worker_id = $_POST['worker-id'];
    $project_id = $_POST['project-id'];
    $bid_id = $_POST['bid-id'];
    $project_consumer_id = $_POST['project-consumer-id'];
    $bid_amount = $_POST['bid-amount'];
    $delivery_time = $_POST['delivery-time'];
    $description = $_POST['Description'];

    $sql = "INSERT INTO bid (Worker_ID, Project_ID, ID, Project_Consumer_ID, Price_Range, Date_Time, Discription)
            VALUES ('$worker_id', '$project_id', '$bid_id', '$project_consumer_id', '$bid_amount', '$delivery_time', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Data Inserted into Database");</script>';
    } else {
        echo '<script>alert("Failed: ' . mysqli_error($conn) . '");</script>';
    }
}

mysqli_close($conn);
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
    <link rel="stylesheet" href="style1.css" />
    <title>Online Clothing Management System</title>
    <style>

        .project-details {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: papayawhip;
  border-radius: 10px;
}

.project-details h1 {
  text-align: center;
  margin-bottom: 20px;
  position: relative;
}

.project-details h1:before {
  content: "";
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 50px;
  height: 2px;
  background-color: blueviolet;
}

.project-details p {
  margin-bottom: 10px;
}

.project-details .btn {
  display: block;
  width: 100%;
  max-width: 200px;
  margin: 0 auto;
  margin-top: 20px;
  text-align: center;
}

    </style>
</head>

<body>
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
                            Hi, <?php //echo $_SESSION['name'] 
                                ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Aboute</a></li>
                            <li>
                                <a class="dropdown-item" href="../check-php/logout.php">Log out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <main>
    <div class="project-details">
        <h1>Project Details</h1>

        <?php
        $id = $_GET['id'];
        $name = $_GET['name'];
        $description = $_GET['description'];
        $budget = $_GET['budget'];
        $date = $_GET['date'];
        $time = $_GET['time'];
        $skil = $_GET['skil'];

        echo "<p><strong>Project ID:</strong> " . $id . "</p>";
        echo "<p><strong>Project Name:</strong> " . $name . "</p>";
        echo "<p><strong>Project Description:</strong> " . $description . "</p>";
        echo "<p><strong>Project Budget:</strong> " . $budget . "</p>";
        echo "<p><strong>Project Date:</strong> " . $date . "</p>";
        echo "<p><strong>Project Time:</strong> " . $time . "</p>";
        echo "<p><strong>Project Skills:</strong> " . $skil . "</p>";
        ?>

        <form action="#" method="POST">
           
            <div class="input-box">
                <h1>Place a Bid on this Project</h1>
                <label for="worker-id">Worker ID</label>
                <input type="text" name="worker-id" placeholder="Worker ID" required>
            </div>
            <div class="input-box">
                <label for="project-id">Project ID</label>
                <input type="text" name="project-id" placeholder="Project ID" required>
            </div>
            <div class="input-box">
                <label for="bid-id">Bid ID</label>
                <input type="text" name="bid-id" placeholder="Bid ID" required>
            </div>
            <div class="input-box">
                <label for="project-consumer-id">Project Consumer ID</label>
                <input type="text" name="project-consumer-id" placeholder="Project Consumer ID" required>
            </div>
            <div class="input-box">
                <label for="bid-amount">Bid Amount</label>
                <div class="input-group">
                    <span class="dollar-sign">$</span>
                    <input type="number" name="bid-amount" placeholder="Enter your Bid Amount" required>
                </div>
            </div>
            <div class="input-box">
                <label for="delivery-time">Project Delivery Time</label>
                <input type="datetime-local" name="delivery-time" placeholder="Date and Time" required>
            </div>
            <div class="input-box">
                <label for="proposal-description">Describe your proposal</label>
                <textarea id="proposal-description" rows="5" cols="50" name="Description" placeholder="What makes you the best candidate for this project?" required></textarea>
            </div>
            <div class="section">
                <div class="button">
                    <input type="submit" value="Place Bid" name="Place_Bid">
                </div>
            </div>
        </form>
    </div>
    </main>
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>
