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
            $id=$_SESSION['id'];
            $image_path_query=mysqli_query($conn,"select Image_Path from admin where ID=$id");
            $image_path=mysqli_fetch_row($image_path_query);
            unlink($image_path[0]);

            $delete_query=mysqli_query($conn,"delete from admin where ID=$id");
            if(!$delete_query){
                die( '<div class="alert alert-danger" role="alert">
                        Could not delete the profile <br><br>
                        <a href="myProfile.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }
            
            header("Location: login_form.php");

        ?>
            
    </body>
</html>