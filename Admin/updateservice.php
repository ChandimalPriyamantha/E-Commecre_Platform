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
    $currentSID= $_POST['currentSID'];
    $newName=$_POST['inputName'];
    $newDetails=$_POST['inputDetails'];
    $newCategoryID=$_POST['newCategoryID'];
    $file_name=$_FILES['serviceImage']['name'];
    $file_type=$_FILES['serviceImage']['type'];
    $file_temp_name=$_FILES['serviceImage']['tmp_name'];
    $file_upload_to='ServiceImages/';

    $serviceImage=mysqli_fetch_row(mysqli_query($conn,"select Image from service where ID=$currentSID"));

    
    if($newName==NULL &&$newDetails==NULL &&$newCategoryID==NULL&&$file_name==NULL){
        echo '<div class="alert alert-danger" role="alert">
                Please fill details<br><br>
                <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                </div>';
    }
    else {
        if ($newName){
            $update_query=mysqli_query($conn,"update service set Name='$newName' where ID='$currentSID'");
            if(!$update_query){
                echo '<div class="alert alert-danger" role="alert">
                Could not update Service name<br><br>
                <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                </div>';
            }
        }

        if ($newDetails){
            $update_query=mysqli_query($conn,"update service set Detailse='$newDetails' where ID='$currentSID'");
            if(!$update_query){
                echo '<div class="alert alert-danger" role="alert">
                Could not update service details<br><br>
                <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                </div>';
            }
        }

        if($newCategoryID!=="Choose"){
            $update_query=mysqli_query($conn,"update service set Catogery_ID='$newCategoryID' where ID='$currentSID'");
            if(!$update_query){
                echo '<div class="alert alert-danger" role="alert">
                Could not update category ID<br><br>
                <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                </div>';
            }
        }

        if($file_name){
            if($file_type=='image/jpeg'){
                if($serviceImage!=null){
                    unlink($serviceImage[0]);
                }
                $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$currentSID.'.jpeg');
                if(!$file_uploaded){
                    echo '<div class="alert alert-danger" role="alert">
                    Could not upload service image<br><br>
                    <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                    </div>';
                }
               $file_upload_query=mysqli_query($conn,"update service set Image='$file_upload_to$currentSID.jpeg' where ID=$currentSID");
               if(!$file_upload_query){
                    echo '<div class="alert alert-danger" role="alert">
                    Could not add image path to the data base<br><br>
                    <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                    </div>';
               }
            }

            else if($file_type=='image/png'){
                if($serviceImage!=null){
                    unlink($serviceImage[0]);
                }
                $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$currentSID.'.png');
                if(!$file_uploaded){
                    echo '<div class="alert alert-danger" role="alert">
                    Could not upload service image<br><br>
                    <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                    </div>';
                }

               $file_upload_query=mysqli_query($conn,"update service set Image='$file_upload_to$currentSID.png' where ID=$currentSID");
               if(!$file_upload_query){
                    echo '<div class="alert alert-danger" role="alert">
                    Could not add image path to the data base<br><br>
                    <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                    </div>';
               }
            }

            else{
                die ('<div class="alert alert-danger" role="alert">
                    Invaid image type. Please check again!<br><br>
                    <a href="updateservice_form.php?currentSID='.$currentSID.'"><button class="btn btn-primary">Ok</button></a>
                    </div>');
            }
        }
        header("Location: service.php");
    }
    

?>
</body>
</html>