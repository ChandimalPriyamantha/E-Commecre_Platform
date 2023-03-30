<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <style>
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
    </head>

    <body>
        <?php
            include "Connection/connection.php";
            $serviceID=$_POST['inputID'];
            $serviceName=$_POST['inputName'];
            $serviceDetails=$_POST['inputDetails'];
            $categoryID=$_POST['CategoryID'];

            $file_name=$_FILES['serviceImage']['name'];
            $file_type=$_FILES['serviceImage']['type'];
            $file_temp_name=$_FILES['serviceImage']['tmp_name'];
            $file_upload_to='ServiceImages/';

            $readQuery=mysqli_query($conn,"select ID,Name from Service");
            while($row=mysqli_fetch_row($readQuery)){
                if(($row[0]==$serviceID)||($row[1]==$serviceName)){
                    die ('<div class="alert alert-danger" role="alert">
                    Service ID or Name is existing...<br><br>
                    <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
                    </div>');
                }
                
            }
            

            if($serviceID && $serviceName && $serviceDetails && $categoryID!="" && $file_name){
                

                if($file_type=='image/jpeg'){
                    
                    $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$serviceID.'.jpeg');
                    if(!$file_uploaded){
                        die ( '<div class="alert alert-danger" role="alert">
                        Could not upload service image<br><br>
                        <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                    }
                   $add_service_query=mysqli_query($conn,"insert into service values($serviceID,'$serviceName','$serviceDetails','$file_upload_to$serviceID.jpeg','$categoryID')");
                   if(!$add_service_query){
                        echo mysqli_error($conn);
                        die( '<div class="alert alert-danger" role="alert">
                        Could not add new service to the data base<br><br>
                        <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                   }
                   else{
                    header("Location: service.php");
                   }
                }
                else if($file_type=='image/png'){
                    
                    $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$serviceID.'.png');
                    if(!$file_uploaded){
                        die( '<div class="alert alert-danger" role="alert">
                        Could not upload service image<br><br>
                        <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                    }
                   $add_service_query=mysqli_query($conn,"insert into service values($serviceID,'$serviceName','$serviceDetails','$file_upload_to$serviceID.png','$categoryID')");
                   if(!$add_service_query){
                        echo mysqli_error($conn);
                        echo die( '<div class="alert alert-danger" role="alert">
                        Could not add new service to the data base<br><br>
                        <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                   }
                   else{
                    header("Location: service.php");
                   }
                }
                else{
                    die ('<div class="alert alert-danger" role="alert">
                        Invaid image type. Please try again!<br><br>
                        <a href="add_service.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
                



            }
            else if($serviceID==null || $serviceName==null || $serviceDetails==null || $categoryID=="" || $file_name==null) {
                die( '<div class="alert alert-danger" role="alert">
                        Please fill all fields <br><br>
                        <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }

        

        
        ?>
    </body>
</html>