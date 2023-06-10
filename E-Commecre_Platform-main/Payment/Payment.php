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

        <div class="container mt-5 mb-5 d-flex justify-content-center">
          <div class="card p-5">
            <div>
              <h4 class="heading">Upgrade your plan</h4>
              <p class="text">Please make the payment to start enjoying all the features of our premium plan as soon as possible</p>
            </div>
            <div class="pricing p-3 rounded mt-4 d-flex justify-content-between">
              <div class="images d-flex flex-row align-items-center"> <img src="https://i.imgur.com/S17BrTx.png" class="rounded" width="60">
                <div class="d-flex flex-column ml-4"> <span class="business">Small Business</span> <span class="plan">CHANGE PLAN</span> </div>
              </div> <!--pricing table-->
              <div class="d-flex flex-row align-items-center"> <sup class="dollar font-weight-bold">$</sup> <span class="amount ml-1 mr-1">8,350</span> <span class="year font-weight-bold">/ year</span> </div> <!-- /pricing table-->
            </div> <span class="detail mt-5">Payment details</span>
            <div class="credit rounded mt-4 d-flex justify-content-between align-items-center">
              <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/qHX7vY1.png" class="rounded" width="70">
                <div class="d-flex flex-column ml-3"> <span class="business">Credit Card</span> <span class="plan">1234 XXXX XXXX 2570</span> </div>
              </div>
              <div> <input type="text" class="form-control cvv" placeholder="CVC"> </div>
            </div>
            <div class="credit rounded mt-2 d-flex justify-content-between align-items-center">
              <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/qHX7vY1.png" class="rounded" width="70">
                <div class="d-flex flex-column ml-3"> <span class="business">Credit Card</span> <input type="text" class="plan">2344 XXXX XXXX 8880> </div>
              </div>
              <div> <input type="text" class="form-control cvv" placeholder="CVC"> </div>
            </div>
            <h6 class="mt-4 text-primary">ADD PAYMENT METHOD</h6>
            <div class="email mt-2"> <input type="text" class="form-control email-text" placeholder="Email Address"> </div>
            <div class="mt-3"> <button class="btn btn-primary btn-block payment-button">Proceed to payment <i class="fa fa-long-arrow-right"></i></button> </div>
          </div>
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

  </main>

  <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
  <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
  <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
  <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>