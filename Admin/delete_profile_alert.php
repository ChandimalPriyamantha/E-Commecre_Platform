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
                    echo '<div class="alert alert-danger" role="alert">
                        Do you realy want to delete the account...! <br><br>
                        
                        <a href="delete_profile.php"><button class="btn btn-danger btn-sm" style="width:70px">Yes</button></a>
                        <a href="myProfile.php"><button class="btn btn-primary btn-sm" style="width:70px">No</button></a>
                        </div>';

                ?>
            
    </body>
</html>
