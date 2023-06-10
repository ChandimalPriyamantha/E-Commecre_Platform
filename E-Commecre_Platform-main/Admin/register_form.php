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
            #gender{
                width:150px;
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

            function update(id,name,description){
                document.getElementById("currentID").innerHTML=id;
            }

            function showPassword() {
                var x = document.getElementById("pass1");
                var y = document.getElementById("pass2");
                var z = document.getElementById("inputSecretCode");
                
                if ((x.type === "password")&&(y.type === "password")) {
                    x.type = "text";
                    y.type = "text";
                    z.type = "text";
                } else {
                    x.type = "password";
                    y.type = "password";
                    z.type = "password";
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
                        
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link  ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-fill"></i>
                            Welcome, Admin
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- top navigation bar -->
    
            <div class="container py-3" style="margin-top:70px">
                <div class="card text-center" style="border-radius: 1rem;background-color:rgb(150,0,60,0.2);margin-left:10%;margin-right:10%">
                    <div class="card-body p-lg-5 ">

                        <form action="registerAdmin.php" method="POST" enctype="multipart/form-data" >
                            <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;"><b>Register as an admin</b></h5>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%">Admin ID :</label>
                                <input type="number" class="form-control" name="inputID" style="text-align:center;width:220pt;" placeholder="Admin ID (Numbers only)" required readonly value="<?php echo rand(1,999999999); ?>"><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> NIC :</label>
                                <input type="text" class="form-control" name="inputNIC" style="text-align:center;width:220pt;" required ><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> First name :</label>
                                <input type="text" class="form-control" name="inputFName" style="text-align:center;width:220pt;" required><br>
                            </div><br>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> Last name :</label>
                                <input type="text" class="form-control" name="inputLName" style="text-align:center;width:220pt;" required><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> Email :</label>
                                <input type="email" class="form-control" name="inputEmail" style="text-align:center;width:220pt;"required ><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"><b> Admin secret code (given by the companny) :</b></label>
                                <input type="password" class="form-control" id="inputSecretCode" name="inputSecretCode" style="text-align:center;width:220pt;"required ><br>
                            </div><br>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> Password :</label>
                                <input type="password" class="form-control" id="pass1" name="inputPassword1" style="text-align:center;width:220pt;" required><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%;"> Re enter password :</label>
                                <input type="password" class="form-control" id="pass2" name="inputPassword2" style="text-align:center;width:220pt;" required><br>
                            </div>

                            <div class="form-group row">
                            <label class="col-sm-2 col-form-label" style="width:200px;margin-left:auto;margin-right:25%" > Show password
                            <input type="checkbox" style="text-align:center;" onclick="showPassword()"> </label>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%;"> Phone number : </label>
                                <input type="text" class="form-control" name="inputPhoneNumber" style="text-align:center;width:220pt;" required><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%;"> Address :</label>
                                <textarea class="form-control" name="inputAddress" style="text-align:left;width:220pt;" required></textarea><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> Gender :</label>
                                <select name="inputGender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select><br>
                            </div><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%"> DOB :</label>
                                <input type="date" class="form-control" name="inputDOB" style="text-align:center;width:220pt;" required><br>
                            </div><br><br>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" style="width:50%;"> Profile picture (jpg and png only)</label>
                                <input type="file" name="inputProfilePicture" style="width:400px;" accept=".jpeg,.png" required><br>
                            </div><br>


                            <div class="pt-1 mb-4">
                                <input type="submit" name="submit" value="Register" class="btn btn-success  btn-block" >&emsp;
                                <input type="reset" name="reset" value="Clear" class="btn btn-danger  btn-block" >
                            </div>

                            <p style="color: #393f81;">Already have an account? <a href="login_form.php" style="color: #393f81;"><b>Login here</b></a> (admin only)</p>
                        </form> 
                
                    </div>
                </div>
            </div>

    </body>
</html>

