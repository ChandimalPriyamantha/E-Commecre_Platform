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
            #gender{
                width:150px;
                margin-left:15px;
                height:35px;

            }
            

        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });

            function showPassword() {
                var x = document.getElementById("pass1");
                var y = document.getElementById("pass2");
                
                if ((x.type === "password")&&(y.type === "password")) {
                    x.type = "text";
                    y.type = "text";
                } else {
                    x.type = "password";
                    y.type = "password";
                }
            }
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
                

            <div class="container py-3">
                <div class="card text-center" style="border-radius: 1rem;margin-left:10%;margin-right:10%">
                    <div class="card-body p-lg-5 ">

                        <form action="update_profile.php" method="POST" enctype="multipart/form-data" >
                            <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;"><b>Update Profile</b></h5>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> Admin ID :</label>
                                <input type="number" class="form-control" name="inputID" style="text-align:center;width:220pt;" readonly value="<?php echo $_SESSION['id']; ?>"><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> First name :</label>
                                <input type="text" class="form-control" name="inputFName" style="text-align:center;width:220pt;" ><br>
                            </div><br>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> Last name :</label>
                                <input type="text" class="form-control" name="inputLName" style="text-align:center;width:220pt;" ><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%;"> Phone number : </label>
                                <input type="text" class="form-control" name="inputPhoneNumber" style="text-align:center;width:220pt;" ><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%;"> Address :</label>
                                <textarea class="form-control" name="inputAddress" style="text-align:left;width:220pt;" ></textarea><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> Gender :</label>
                                <select name="inputGender" id="gender">
                                    <option value="" selected>Choose</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> DOB :</label>
                                <input type="date" class="form-control" name="inputDOB" style="text-align:center;width:220pt;" ><br>
                            </div><br><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%;"> Profile picture (jpg and png only)</label>
                                <input type="file" name="inputProfilePicture" style="width:400px;" accept=".jpeg,.png" ><br>
                            </div><br>


                            <div class="pt-1 mb-4">
                                <input type="submit" name="submit" value="Update" class="btn btn-success  btn-block" >&emsp;
                                <a href="myProfile.php" ><input type="button" name="cancel" value="Cancel" class="btn btn-danger  btn-block" ></a>
                            </div>
                        </form> 
                
                    </div>
                </div>
            </div>



            </div>
        </div>

    </body>

    </html>

