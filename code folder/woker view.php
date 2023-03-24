<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile with data and Reviews</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Profile-with-data-and-skills.css">
</head>

<body>

<?PHP  

    include("conn.php");

    $id="";
    $Dfname="";
    $Dlname="";
    $Demail="";
    $Dmobile="";
    $DCity="";
    $Dimage="";
    $Dcategory="";

   $search= mysqli_query($conn,"SELECT First_Name,Lat_Name,Email,Image_Path,Jobe_Category FROM worker WHERE ID='696' ");


    while ($row = mysqli_fetch_assoc($search)) 
    {
      $Dfname= $row['First_Name'];
      $Dlname = $row['Lat_Name'];
      $Demail = $row['Email'];
      $Dimage= $row['Image_Path'];
      $Dcategory=$row['Jobe_Category'];
    }

    $searchAddress= mysqli_query($conn,"SELECT Street_address,City,Country FROM Address_of_worker WHERE Worker_ID='696' ");


    while ($address = mysqli_fetch_assoc($searchAddress)) 
    {
      $DStreet_address= $address['Street_address'];
      $DCity =$address['City'];
      $DCountry = $address['Country'];
    
    }


   $searchMobile=mysqli_query($conn,"SELECT  Mobile_Number FROM Phone_Number_of_worker WHERE Worker_ID='696'");


    while ($mobile_no = mysqli_fetch_assoc($searchMobile)) 
    {
      $Dmobile= $mobile_no['Mobile_Number'];
    } 

    

    if(isset($_POST['Save']))
    {
      $Dfname=$_POST['fullname'];
      $Demail=$_POST['email'];
      $Dmobile=$_POST['mobile'];
      $DCity=$_POST['address'];

      mysqli_query($conn,"UPDATE worker Set First_Name='$Dfname' where ID='696' ");
      mysqli_query($conn,"UPDATE worker Set Email='$Demail' where ID='696' ");
      mysqli_query($conn,"UPDATE Phone_Number_of_worker Set Mobile='$Dmobile' where ID='696'");
      mysqli_query($conn,"UPDATE Address_of_worker Set City='$DCity' where Worker_ID='696'");


    }

?>




  <div class="container">
    <div class="main-body">
      <div class="col-md-12" style="background: var(--bs-teal);">
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><a class="navbar-brand" href="#">Karmikaya</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <li class="nav-item"></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="transform: translate(426px);">Chats</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="transform: translate(451px);">Notifications&nbsp;</a>
                            <div class="dropdown-menu notification-menu" style="overflow: visible;position: absolute;overflow-x: visible;overflow-y: visible;transform: translate(378px);"><a class="dropdown-item notification-item" href="#"><img src="assets/img/avatar.jpg">
                                    <div>
                                        <p>Josue ha publicado un nuevo Video, puedes observarlo<br>en el siguiente enlace</p><span>5 minutes ago...</span>
                                    </div>
                                </a><a class="dropdown-item notification-item" href="#"><img src="assets/img/avatar.jpg">
                                    <div>
                                        <p>Josue ha publicado un nuevo Video, puedes observarlo en el siguiente link.</p><span>5 minutes ago...</span>
                                    </div>
                                </a><a class="dropdown-item notification-item" href="#"><img src="assets/img/avatar.jpg">
                                    <div>
                                        <p>Josue ha publicado un nuevo Video, puedes observarlo en el siguiente link.</p><span>5 minutes ago...</span>
                                    </div>
                                </a>
                             </div>
                        </li>
                        <li class="nav-item" style="transform: translate(685px);"><a class="nav-link" href="#">Log out</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="transform: translate(396px);">FIND job</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" style="transform: translate(409px);">Subscription</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card" style="margin-top: 120px;">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <!-- Worker image-->
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $Dfname;   ?></h4>
                      <p class="text-secondary mb-1"><?php  echo $Dcategory;  ?></p>
                      <p class="text-muted font-size-sm"><?php echo $DCity; ?></p>
                      <!-- <button class="btn btn-primary">Follow</button> -->
                      <!-- <button class="btn btn-outline-primary">Message</button> -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h4>Educations</h4>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                    <a href="#" class="btn btn-info" style="background-color:aliceblue; border-color: aliceblue;">Edit</a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a class="custom-btn light-btn" href="#" role="button" style="transform: translate(177px);margin-top: -3px;"><i class="material-icons">delete_forever</i></a>
                  </li>
                  
                </ul>
              </div>

              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h4>Experiences</h4>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                    <a href="#" class="btn btn-info" style="background-color:aliceblue; border-color: aliceblue;">Edit</a>
                  </li>
                </ul>
              </div>
            </div>
            
            
            <div class="col-md-8" style="margin-top: 50px;">
              <div class="card mb-3">
                <form method="POST">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="fullname" value="<?php  echo $Dfname ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text"  name="email" value="<?php  echo $Demail ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text"  name="mobile" value="<?php  echo $Dmobile ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <input type="text"   name="address" value="<?php  echo $DCity ?>">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- edit button  -->

                      <input type="submit" name="Save" value="Save" class="btn btn-info " >
                     
                    </div>
                  </div>
                </div>
            </form>
              </div>
            
              <div class="row gutters-sm">
               <!-- <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%;" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div> -->
                <div class="col-sm-6 mb-3" style="height: 50px; width: 110px;">
                  <div class="card h-100">
                    <div class="card-body" style="background-color: aquamarine;">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Reviews</h6>
                      
                      <!-- <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> 
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3" style="height: 0px; width: none;">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i></h6>
                      <small></small>
                      <!-- <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> 
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Asama </h6>
                      <small>very good worker</small>
                      <!-- <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> 
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Asama</h6>
                      <small>very good worker</small>
                      <!-- <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> 
                      </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i>Asama </h6>
                      <small>very good worker</small>
                      <!-- <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> 
                      </div> -->
                    </div>
                  </div>
                </div>
                
              </div>



            </div>
          </div>

        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>