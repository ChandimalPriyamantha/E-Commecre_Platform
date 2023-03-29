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
                $workerID=$_GET['delete'];

                $worker_payment_query=mysqli_query($conn,"select Worker_ID from payment");
                while ($row=mysqli_fetch_row($worker_payment_query)){
                    if ($row[0]==$workerID){
                        die ('<div class="alert alert-danger" role="alert">
                        Could not delete this worker because he has bought a subscription...!<br>Click ok to delete anyway with payment details.Payment details will be lost <br><br>
                        <a href="delete_anyway.php? workerID='.$workerID.'"><button class="btn btn-primary" name="delete_anyway">Ok</button></a>
                        <a href="worker.php"><button class="btn btn-danger" id="cancel">Cancel</button></a>
                        </div>');
                    }
                }


                $delete_address_query=mysqli_query($conn,"delete from address_of_worker where Worker_ID=$workerID");
                if(!$delete_address_query){
                    die ('<div class="alert alert-danger" role="alert">
                            Could not delete address of this worker...!<br><br>
                            <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                }

                $delete_query = mysqli_query($conn,"delete from worker where ID=$workerID");
                if(!$delete_query){
                    die ('<div class="alert alert-danger" role="alert">
                        Could not delete this worker...!<br><br>
                        <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
                else if($delete_query){
                    header("Location: worker.php");
                }
            ?>
            


    </body>
</html>
