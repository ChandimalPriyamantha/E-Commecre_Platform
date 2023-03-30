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
                $id=$_POST['inputID'];
                $nic=$_POST['inputNIC'];
                $fName=$_POST['inputFName'];
                $lName=$_POST['inputLName'];
                $gender=$_POST['inputGender'];
                $email=$_POST['inputEmail'];
                $dob=$_POST['inputDOB'];
                $pass1=md5($_POST['inputPassword1']);
                $pass2=md5($_POST['inputPassword2']);
                $address=$_POST['inputAddress'];
                $phoneNo=$_POST['inputPhoneNumber'];
                $secretCode=$_POST['inputSecretCode'];
                $defined_secret_code="karmikayaadmin";
                
                $file_name=$_FILES['inputProfilePicture']['name'];
                $file_type=$_FILES['inputProfilePicture']['type'];
                $file_temp_name=$_FILES['inputProfilePicture']['tmp_name'];
                $file_upload_to='AdminProfilePictures/';

                $readQuery=mysqli_query($conn,"select ID,NIC,Email from admin");        //check whether id , email, or Nic is existing or not
                while($row=mysqli_fetch_row($readQuery)){
                    if($row[0]==$id){
                        die ('<div class="alert alert-danger" role="alert">
                        ID is existing...<br><br>
                        <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                    }
                    if($row[1]==$nic){
                        die ('<div class="alert alert-danger" role="alert">
                        NIC is existing...<br><br>
                        <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                    }
                    if($row[2]==$email){
                        die ('<div class="alert alert-danger" role="alert">
                        Email is existing...<br><br>
                        <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                    }
                    
                }

                if (!$id || !$nic || !$fName || !$lName || !$gender || !$email || !$dob || !$pass1 || !$pass2 || !$address || !$phoneNo || !$secretCode){
                    die( '<div class="alert alert-danger" role="alert">
                        Please fill all fields <br><br>
                        <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
                else{
                    if ($pass1!=$pass2){
                        die( '<div class="alert alert-danger" role="alert">
                        Passwords are not matched <br><br>
                        <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                    }
                    if($secretCode!=$defined_secret_code){
                        die( '<div class="alert alert-danger" role="alert">
                        Admin secret code is wrong... Get the correct one from the head office...!<br><br>
                        <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                    }

                    if($file_type=='image/jpeg'){
                        $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$id.'.jpeg');
                        if(!$file_uploaded){
                            die ( '<div class="alert alert-danger" role="alert">
                                Could not upload profile picture<br><br>
                                <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                                </div>');
                        }
                        
                        $register_profile_query=mysqli_query($conn,"insert into admin values($id,'$nic','$fName','$lName','$gender','$email','$dob','$pass1','$file_upload_to$id.jpeg','$address','$phoneNo')");
                        if(!$register_profile_query){
                            die( '<div class="alert alert-danger" role="alert">
                                Could not add details to the data base<br><br>
                                <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                                </div>');
                        }
                        else{
                            die( '<div class="alert alert-success" role="alert">
                                Successfully registered...<br><br>
                                <a href="login_form.php"><button class="btn btn-primary">Ok</button></a>
                                </div>');
                        }
                    }
                    else if($file_type=='image/png'){
                        $file_uploaded=move_uploaded_file($file_temp_name,$file_upload_to.$id.'.png');
                        if(!$file_uploaded){
                            die ( '<div class="alert alert-danger" role="alert">
                                Could not upload profile picture<br><br>
                                <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                                </div>');
                        }
                        
                        $register_profile_query=mysqli_query($conn,"insert into admin values($id,'$nic','$fName','$lName','$gender','$email','$dob','$pass1','$file_upload_to$id.png','$address','$phoneNo')");
                        if(!$register_profile_query){
                            echo mysqli_error($conn);
                            die( '<div class="alert alert-danger" role="alert">
                                Could not add details to the data base<br><br>
                                <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                                </div>');
                        }
                        else{
                            die( '<div class="alert alert-success" role="alert">
                                Successfully registered...<br><br>
                                <a href="login_form.php"><button class="btn btn-primary">Ok</button></a>
                                </div>');
                        }
                    }
                    else{
                        die ('<div class="alert alert-danger" role="alert">
                            Invaid image type. Please try again!<br><br>
                            <a href="register_form.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                    }

                }



            }
        ?>

    </body>
</html>