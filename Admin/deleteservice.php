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
    $serviceID=$_GET['delete'];
    $ImagePath=$_GET['ImagePath'];


    $deleteImage=unlink($ImagePath);
    $delete_service_query = mysqli_query($conn,"delete from service where ID=$serviceID");
        if($delete_service_query){
            header("Location: service.php");
        }
        else{
            die ('<div class="alert alert-danger" role="alert">
                            Could not delete this service...!<br><br>
                            <a href="service.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
        }
    ?>


    </body>
</html>