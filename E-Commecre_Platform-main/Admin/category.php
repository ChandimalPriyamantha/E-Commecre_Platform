<?php  
include "identify_admin.php";
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/Button-Ripple-Effect-Animation-Wave-Pulse.css">
        <link rel="stylesheet" href="css/Features-Cards-icons.css">
        <link rel="stylesheet" href="css/responsive-blog-card-slider.css">
        <style>
            a{text-decoration:none;color:black;}
            th,td{padding-bottom:15px;}

        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });
        </script>

    <body>
        <!-- top navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
                </button>
                <a class="navbar-brand me-auto ms-lg-0 ms-3  fw-bold" href="#"><i class="bi bi-circle me-3"></i>Karmikaya.lk - Admin Panel</a>
                
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="topNavBar">
                    <form class="d-flex ms-auto my-3 my-lg-0">
                        <div class="input-group">
                        <a href="logOut.php" ><button type='button' class='btn btn-danger btn-sm' style="float:right;"><lable style='color:white' >Log Out</lable></button></a> 
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link  ms-2" href="myProfile.php" role="button">
                                <i class="bi bi-person-fill"></i>
                            Hi, <?php echo $_SESSION['name'] ?>
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- top navigation bar -->
        

        <div class="card text-center" style="margin-top:70px">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="worker.php">Workers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="consumer.php">Consumers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="category.php">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="subscription.php">Subscriptions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../ChatBox/chatBox.php" target="_blank" >Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="myProfile.php">My profile</a>
                </li>
                </ul>
            </div>
            <div class="card-body">

                <a href="add_category_form.php" ><button type='button' class='btn btn-success btn-sm' style="float:right;"><lable style='color:white' >Add category</lable></button></a>
                <table id="example" class="table table-striped " style="width:100%">
                    <thead>
                        <tr class="table-primary">
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "Connection/connection.php";
                            $query=mysqli_query($conn,'select * from catogery');

                            while($row=mysqli_fetch_row($query)){
                                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
                                <td>
                                <a href='updatecategory_form.php?updateID=$row[0]'><button type='button' class='btn btn-success btn-sm'><lable style='color:white' >Update</lable></button></a>
                                <a href='deletecategory.php?delete=$row[0]'><button type='button' class='btn btn-danger btn-sm' name='delete'><lable style='color:white' >Remove</lable></button></a>
                                </td></tr>";
                                
                            }


                        ?>
            
                    </tbody>
                </table>
            </div>
        </div>






    </body>

    </html>

