<?php  
include "identify_admin.php";
?>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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
            $projectID=$_GET['delete'];

            $delete_bid_query=mysqli_query($conn,"delete from bid where Project_ID=$projectID");      //delete bid details
            if(!$delete_bid_query){
                die ('<div class="alert alert-danger" role="alert">
                Could not delete bid details related to this project...!<br><br>
                <a href="project.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
            }

            $delete_project_query=mysqli_query($conn,"delete from project where ID=$projectID");      //delete project details
            if(!$delete_project_query){
                die ('<div class="alert alert-danger" role="alert">
                Could not delete this project...!<br><br>
                <a href="project.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
            }

            header("Location: project.php");

        ?>
    </body>
</html>