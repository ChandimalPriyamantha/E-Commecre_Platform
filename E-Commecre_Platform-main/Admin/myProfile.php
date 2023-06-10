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
        <title>Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>
        <style>
            a{text-decoration:none;color:black;}
            th,td{padding-bottom:15px;}
            .alert{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width:50%;
            text-align:center;
            font-weight:bold;
            margin-top:3%;
        }

        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
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
                    <a class="nav-link" href="worker.php">Workers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="consumer.php">Consumers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="category.php">Categories</a>
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
                    <a class="nav-link active" href="myProfile.php">My profile</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                
            
                <?php
                    include "Connection/connection.php";
                    $id=$_SESSION['id'];
                    $nic="No NIC proided";
                    $fName=" ";
                    $lName=" ";
                    $sex="gender";
                    $email="No email proided";
                    $dob="No DOB proided";
                    $imagePath=" ";
                    $address="No address proided";
                    $phoneNo="No phone number proided";

                    $read_query=mysqli_query($conn,"select NIC,First_Name,Lat_Name,Sex,Email,DOB,Image_Path,Adress,Phone_number from admin where ID=$id");
                    $row=mysqli_fetch_row($read_query);
                        $nic=$row[0];
                        $fName=$row[1];
                        $lName=$row[2];
                        $sex=$row[3];
                        $email=$row[4];
                        $dob=$row[5];
                        $imagePath=$row[6];
                        $address=$row[7];
                        $phoneNo=$row[8];

                    
                    

                echo '

                <div class="container rounded bg-white mb-5">
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="float:right;"><img class="rounded-circle mt-5" width="150px" height="150px" src="'.$imagePath.'" ><br><span class="font-weight-bold">'.$fName.'</span><span class="text-black-50">'.$email.'</span><span> Admin ID : '."$id".'</span></div>
                        </div>
                        <div class="col-md-5 border-right item-right" >
                            <div class="p-3 py-3">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="text-right">My Profile</h4>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6"><label class="labels">First name</label><input type="text" class="form-control" placeholder="no first name" value="'.$fName.'" readonly ></div>
                                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" class="form-control" value="'.$lName.'" placeholder=" no last name" readonly></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">National identity card number</label><input type="text" class="form-control" placeholder="no NIC number" value="'.$nic.'" readonly></div>
                                    <div class="col-md-12"><label class="labels">Gender</label><input type="text" class="form-control" placeholder="sex" value="'.$sex.'" readonly></div>
                                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="text" class="form-control" placeholder="no DOB" value="'.$dob.'" readonly></div>

                                    <div class="col-md-12"><label class="labels">Mobile number</label><input type="text" class="form-control" placeholder="no phone number" value="'.$phoneNo.'" readonly></div>
                                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="no address" value="'.$address.'" readonly></div>
                                </div>
                                
                                <div class="mt-5 text-center"><a href="update_profile_form.php"><button class="btn btn-primary" type="button">Update Profile</button></a>
                                <a href="delete_profile_alert.php"><button class="btn btn-danger " type="button">Delete Profile</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>


                ';
                ?>


            </div>
        </div>
    </body>

    </html>

