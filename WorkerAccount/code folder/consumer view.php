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

<?php 

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


$searchedu=mysqli_query($conn,"select discription from education where Worker_ID='696'");
$searchexp=mysqli_query($conn,"select Description from experince where Worker_ID='696'");







?>

  







<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <div class="col-md-12" style="background: var(--bs-teal);">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#">Karmikaya</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav">
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card" style="margin-top: 120px;">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <!-- methan thamai workerge poto eka daana thena hrithe ????????????-->
                    <img src="<?php echo $Dimage; ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4> <?php echo $Dfname ." " . $Dlname;   ?> </h4>
                      <p class="text-secondary mb-1"><?php  echo $Dcategory;  ?> </p>
                      <p class="text-muted font-size-sm"><?php echo $DCity; ?> </p></p>
                      <button class="btn btn-primary">Follow</button> 
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
                <div class="card mt-3">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <h4 class="mb-0">Educations</h4>
                    </li>
              
                    <?php if($searchedu)
                    {
                      while ($edurow= mysqli_fetch_assoc($searchedu)) 
                    { ?>

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"> 
                      <h6 ><?php  echo $edurow['discription'];?></h6>
                    </li>
               
                  <?php } 
                  }?>             
            
              

                </ul>


              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h4 class="mb-0">Experiences</h4>
                  </li>

                  <?php if($searchexp)
                  {
                    while ($exprow= mysqli_fetch_assoc($searchexp)) 
                    { ?>

                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap"> 
                    <h6><?php  echo $exprow['Description'];?></h6>
                  </li>

                  <?php  } 
                  }?> 
                </ul>
              </div>

            </div>

              

            <div class="col-md-8" style="margin-top: 50px;">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php  echo $Dfname ." " . $Dlname;  ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php  echo $Demail; ?>
                    </div>
                  </div>
                  <hr>
        
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php  echo $Dmobile; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php  echo $DCity; ?>
                    </div>
                  </div>
                  <hr>
                  
                </div>
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
                <?php  
                  $reviewResult=mysqli_query($conn,"select name,description from review where worker_id=696");
                  if($reviewResult){
                  while ($reviewrow= mysqli_fetch_assoc($reviewResult)) 
                  {
                ?>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2"></i><?php echo $reviewrow["name"];?> </h6>
                      <small><?php  echo $reviewrow["description"];  ?></small>
                      <!-- <div class="progress mb-3" style="height: 10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div> 
                      </div> -->
                    </div>
                  </div>
                </div>
                <?php  }} ?>
                
              </div>

            </div>
          </div>

        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    




</body>
</html>