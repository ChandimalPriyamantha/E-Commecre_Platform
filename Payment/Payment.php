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
    <link rel="stylesheet" href="style.css" />
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


        <form method="POST" action="Check_Pament.php">

            <div class="container mt-5 px-2">

                <div class="mb-4">

                    <h2>Confirm order and pay</h2>
                    <span>please make the payment, after that you can enjoy all the features and benefits.</span>

                </div>

                <div class="row">

                    <div class="col-sm-7">


                        <div class="card p-5">

                            <h6 class="text-uppercase">Payment details</h6>
                            <!-- ======================== Display error message and success message  ================================== -->
                            <?php if (isset($_GET['error'])) { ?>

                                <div class="alert alert-danger">
                                    <p><?php echo $_GET['error']; ?></p>
                                </div>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>

                                <div class="alert alert-success">
                                    <p><?php echo $_GET['success']; ?></p>
                                </div>


                            <?php } ?>
                            <!-- ======================== Display error message and success message  ================================== -->
                            <div class="inputbox mt-3">
                                <input type="text" name="card_name" class="form-control" required="required">
                                <span>Name on card</span>
                            </div>


                            <div class="row">

                                <div class="col-md-6">

                                    <div class="inputbox mt-3 mr-2">
                                        <input type="text" name="card_number" class="form-control" required="required"> <i class="fa fa-credit-card"></i> <span>Card Number</span>


                                    </div>


                                </div>

                                <div class="col-md-6">

                                    <div class="d-flex flex-row">


                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="Expiry" class="form-control" required="required"> <span>Expiry</span> </div>

                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="CVV" class="form-control" required="required"> <span>CVV</span> </div>


                                    </div>


                                </div>


                            </div>



                            <div class="mt-4 mb-4">

                                <h6 class="text-uppercase">Billing Address</h6>


                                <div class="row mt-3">

                                    <div class="col-md-6">

                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="Street_Address" class="form-control" required="required"> <span>Street Address</span> </div>


                                    </div>


                                    <div class="col-md-6">

                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="City" class="form-control" required="required"> <span>City</span> </div>


                                    </div>




                                </div>


                                <div class="row mt-2">

                                    <div class="col-md-6">

                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="State" class="form-control" required="required"> <span>State/Province</span> </div>


                                    </div>


                                    <div class="col-md-6">

                                        <div class="inputbox mt-3 mr-2"> <input type="text" name="Zip_code" class="form-control" required="required"> <span>Zip code</span> </div>


                                    </div>




                                </div>
                                <div class="mt-4 mb-4 d-flex justify-content-between">


                                    <span>Previous step</span>


                                    <button class="btn btn-success px-3" type="submit">Pay $840</button>



                                </div>

                            </div>
                           

                        </div>




                    </div>

                    <div class="col-md-4">

                        <div class="card card-blue p-3 text-white mb-3">

                            <span>You have to pay</span>
                            <div class="d-flex flex-row align-items-end mb-3">
                                <h1 class="mb-0 yellow">$549</h1> <span>.99</span>
                            </div>

                            <span>Enjoy all the features and perk after you complete the payment</span>
                            <a href="#" class="yellow decoration">Know all the features</a>

                            <div class="hightlight">

                                <span>100% Guaranteed support and update for the next 5 years.</span>


                            </div>

                        </div>

                    </div>




                </div>
        </form>

        </div>

    </main>

    <footer>
        <!-- place footer here -->

        <div class="fixed-bottom">
            <div class="text-center p-3 bg-success text-white">
                © 2020 Copyright:
                <a class="text-white" href="#">Chandimal Priyamantha</a>
            </div>
        </div>
    </footer>

    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>