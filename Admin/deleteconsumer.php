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
            $consumerID=$_GET['delete'];

            $delete_address_query=mysqli_query($conn,"delete from address_of_consumer where Consumer_ID=$consumerID");
            if($delete_address_query){
                header("Location: consumer.php");
            }
            else if(!$delete_address_query){
                die ('<div class="alert alert-danger" role="alert">
                        Could not delete address of this consumer...!<br><br>
                        <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }

            $delete_query = mysqli_query($conn,"delete from consumer where ID=$consumerID");
            if($delete_query){
                header("Location: consumer.php");
            }
            else if(!$delete_query){
                die ('<div class="alert alert-danger" role="alert">
                        Could not delete this consumer...!<br><br>
                        <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }
        ?>
    </body>
</html>