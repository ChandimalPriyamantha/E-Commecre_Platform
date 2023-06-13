<?php
require 'connection.php';

$consumerId = $_SESSION['id'];
$query = "SELECT * FROM project where CONSUMER_ID='$consumerId'";
$result = mysqli_query($conn, $query);


if(isset($_POST["submit"])){
    // Get the updated values from the text fields
    if(isset($_POST["pid"])){
        $pid = $_POST["pid"];
    }
     // Assuming you pass the ID of the record via POST
    $name = $_POST['name'];
    $description = $_POST['description'];
    $budget = $_POST['budget'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $skils = $_POST['skils'];

    // Prepare the UPDATE statementS
    $query = "UPDATE project SET Name='$name', Description='$description', Budget='$budget', Date='$date', Time='$time', Skils='$skils' WHERE ID='$pid'";

    // Create a prepared statement
    $stmt = mysqli_query($conn, $query);

    // Check if the update was successful
    if ($stmt) {
        echo "<script> alert('Record updated successfully'); </script>";
    } else {
        echo "<script> alert('Not updated'); </script>";
    }

}
if (isset($_POST["submit1"])) {
    $pid = $_POST["pid"];

    // Remove the record from the database
    $query = "DELETE FROM project WHERE ID='$pid'";
    $stmt = mysqli_query($conn, $query);

    if ($stmt) {
        echo "<script> alert('Record removed successfully'); </script>";
        header("Location: ProjectCreation.php");
    } else {
        echo "<script> alert('Not removed'); </script>";
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
    <style>
        table, th, td {
            border: 1px solid black;
            
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).on("click", ".edit-btn", function() {
    var row = $(this).closest("tr");
    var idValue = row.find("td:eq(0)").text();
    var nameValue = row.find("td:eq(1)").text();
    var descriptionValue = row.find("td:eq(2)").text();
    var budgetValue = row.find("td:eq(3)").text();
    var dateValue = row.find("td:eq(4)").text();
    var timeValue = row.find("td:eq(5)").text();
    var skillsValue = row.find("td:eq(6)").text();

    $("#pid").val(idValue);
    $("#name").val(nameValue);
    $("#description").val(descriptionValue);
    $("#budget").val(budgetValue);
    $("#date").val(dateValue);
    $("#time").val(timeValue);
    $("#skils").val(skillsValue);
});
    
    </script>
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
                            Hi, <?php //echo $_SESSION['name'] 
                                ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Aboute</a></li>
                            <li>
                                <a class="dropdown-item" href="..ProjectCreation.php">Project Creation</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="..ProjectUpdation.php">Project Updation</a>
                            </li>
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
        <h1>Update project</h1>
            <table id="projectTable" cellpadding="1" cellspacing="3">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Budget</td>
                    <td>Date</td>
                    <td>Time</td>
                    <td>Skills</td>
                    <td>Edit</td>
                </tr>
                <?php
                    // Loop through the result set and display the data in table rows
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["ID"] . "</td>";
                        echo "<td>" . $row["Name"] . "</td>";
                        echo "<td>" . $row["Description"] . "</td>";
                        echo "<td>" . $row["Budget"] . "</td>";
                        echo "<td>" . $row["Date"] . "</td>";
                        echo "<td>" . $row["Time"] . "</td>";
                        echo "<td>" . $row["Skils"] . "</td>";
                        echo "<td><button class='edit-btn'>Edit</button></td>";
                        //echo "<td><button onclick='removeRecord(" . $row["ID"] . ")'>Remove</button></td>";
                        echo "</tr>";
                    }
                 ?>
            </table>
            <h2>Edit Project</h2>
<form action="ProjectUpdation.php" method="POST">
    <label for="ID">ID:</label>
    <input type="text" id="pid" name="pid" disabled ><br><br>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" ><br><br>

    <label for="description">Description:</label>
    <input type="text" id="description" name="description"><br><br>

    <label for="budget">Budget:</label>
    <input type="text" id="budget" name="budget"><br><br>

    <label for="date">Date:</label>
    <input type="text" id="date" name="date"><br><br>

    <label for="time">Time:</label>
    <input type="text" id="time" name="time"><br><br>

    <label for="skils">Skills:</label>
    <input type="text" id="skils" name="skils"><br><br>

    <input type="submit" name="submit" value="Update">
    <input type="submit" name="submit1" value="Delete">
                </form>
    </main>
  
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
    
</body>

</html>