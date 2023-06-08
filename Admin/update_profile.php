<?php  
include "identify_admin.php";
?>
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
            if(isset($_POST['submit'])){
                $id=$_SESSION['id'];
                $fName=$_POST['inputFName'];
                $lName=$_POST['inputLName'];
                $gender=$_POST['inputGender'];
                $dob=$_POST['inputDOB'];
                $address=$_POST['inputAddress'];
                $phoneNo=$_POST['inputPhoneNumber'];
                
                $file_name=$_FILES['inputProfilePicture']['name'];
                $file_type=$_FILES['inputProfilePicture']['type'];
                $file_temp_name=$_FILES['inputProfilePicture']['tmp_name'];
                $file_upload_to='AdminProfilePictures/';

                
                if ( $fName==null && $lName==null && $dob==null && $address==null && $phoneNo==null && $gender=="" && !$file_name){
                    die( '<div class="alert alert-danger" role="alert">
                        Please fill atleast one field <br><br>
                        <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
                else{
                    if ($fName){
                        $insert_fname_query=mysqli_query($conn,"update admin set First_Name='$fName' where ID=$id");
                        if(!$insert_fname_query){
                            die ('<div class="alert alert-danger" role="alert">
                            Could not update first name <br><br>
                            <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                        }
                    }
                    if ($lName){
                        $insert_lname_query=mysqli_query($conn,"update admin set Lat_Name='$lName' where ID=$id");
                        if(!$insert_lname_query){
                            die ('<div class="alert alert-danger" role="alert">
                            Could not update last name <br><br>
                            <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                        }
                    }
                    if ($gender){
                        $insert_gender_query=mysqli_query($conn,"update admin set Sex='$gender' where ID=$id");
                        if(!$insert_gender_query){
                            die ('<div class="alert alert-danger" role="alert">
                            Could not update gender <br><br>
                            <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                        }
                    }
                    if ($dob){
                        $insert_dob_query=mysqli_query($conn,"update admin set DOB='$dob' where ID=$id");
                        if(!$insert_dob_query){
                            die ('<div class="alert alert-danger" role="alert">
                            Could not update DOB <br><br>
                            <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                        }
                    }
                    if ($address){
                        $insert_address_query=mysqli_query($conn,"update admin set Adress='$address' where ID=$id");
                        if(!$insert_address_query){
                            die ('<div class="alert alert-danger" role="alert">
                            Could not update address <br><br>
                            <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                        }
                    }
                    if ($phoneNo){
                        $insert_contact_query=mysqli_query($conn,"update admin set Phone_number='$phoneNo' where ID=$id");
                        if(!$insert_contact_query){
                            die ('<div class="alert alert-danger" role="alert">
                            Could not update phone number <br><br>
                            <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                        }
                    }

                    if ($file_name){
                        if($file_type=='image/jpeg'){
                            $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$id.'.jpeg');
                            if(!$file_uploaded){
                                die ( '<div class="alert alert-danger" role="alert">
                                    Could not update profile picture<br><br>
                                    <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                                    </div>');
                            }
                            $insert_image_path_query=mysqli_query($conn,"update admin set Image_Path='$file_upload_to$id.jpeg' where ID=$id");
                            if(!$insert_image_path_query){
                                die ( '<div class="alert alert-danger" role="alert">
                                    Could not update profile picture path in database<br><br>
                                    <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                                    </div>');
                            }
                        }

                        else if($file_type=='image/png'){
                            $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$id.'.png');
                            if(!$file_uploaded){
                                die ( '<div class="alert alert-danger" role="alert">
                                    Could not update profile picture<br><br>
                                    <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                                    </div>');
                            }
                            $insert_image_path_query=mysqli_query($conn,"update admin set Image_Path='$file_upload_to$id.png' where ID=$id");
                            if(!$insert_image_path_query){
                                die ( '<div class="alert alert-danger" role="alert">
                                    Could not update profile picture path in database<br><br>
                                    <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                                    </div>');
                            }
                        }
                        else{
                            die ( '<div class="alert alert-danger" role="alert">
                                    Invalid image type<br><br>
                                    <a href="update_profile_form.php"><button class="btn btn-primary">Ok</button></a>
                                    </div>');
                        }
                    }




                    header("Location: myProfile.php");
                }

            }
        ?>






    </body>
</html>