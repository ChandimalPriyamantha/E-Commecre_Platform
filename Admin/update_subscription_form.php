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

            function update(id,name,description){
                document.getElementById("currentID").innerHTML=id;
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
            <div class="card-header alert-danger">
                UPDATE SUBSCRIPTION
            </div>


            <div class="card-body">
                <form action="update_subscription.php" method="post">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><b>Subscription ID :</b> </label>
                        <input type="text" class="form-control" readonly name="inputID" value="<?php echo $_GET['SubID']?>" style="text-align:center;width:220pt;"><br>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="inputName" placeholder="Enter new subscription name"><br>
                        <input type="text" class="form-control" name="inputDescription" placeholder="Enter new description"><br>
                        <input type="text" class="form-control" name="inputCost" placeholder="Enter new Cost">
                        </div>
                    </div><br>

                    

                    <div class="form-group row">
                        <div class="col-sm-10">
                        <input type="submit" class=" btn btn-success"style="height:40px;width:100px;">
                        <a href='subscription.php'><button type='button' class='btn btn-danger'style="height:40px;width:100px;"><lable>Cancel</lable></button></a>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>






    </body>

    </html>
<?php
?>
