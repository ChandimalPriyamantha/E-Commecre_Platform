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

                $worker_payment_query=mysqli_query($conn,"select Worker_ID from payment");          //check worker wether worker has payments
                while ($row=mysqli_fetch_row($worker_payment_query)){
                    if ($row[0]==$workerID){
                        die ('<div class="alert alert-danger" role="alert">
                        Could not delete this worker because he has bought a subscription...!<br>Click ok to delete anyway with payment details.Payment details will be lost <br><br>
                        <a href="delete_anyway.php? workerID='.$workerID.'"><button class="btn btn-primary" name="delete_anyway">Ok</button></a>
                        <a href="worker.php"><button class="btn btn-danger" id="cancel">Cancel</button></a>
                        </div>');
                    }
                }


                $delete_address_query=mysqli_query($conn,"delete from address_of_worker where Worker_ID=$workerID");        //delete address of worker
                if(!$delete_address_query){
                    die ('<div class="alert alert-danger" role="alert">
                            Could not delete address of this worker...!<br><br>
                            <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                }

                $delete_contact_query=mysqli_query($conn,"delete from phone_number_of_worker where Worker_ID=$workerID");        //delete contacts of worker
                if(!$delete_contact_query){
                    die ('<div class="alert alert-danger" role="alert">
                            Could not delete contacts of this worker...!<br><br>
                            <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                }

                $delete_experince_query=mysqli_query($conn,"delete from experince where Worker_ID=$workerID");        //delete experience of worker
                if(!$delete_experince_query){
                    die ('<div class="alert alert-danger" role="alert">
                            Could not delete experience of this worker...!<br><br>
                            <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                }

                $delete_bid_query=mysqli_query($conn,"delete from bid where Worker_ID=$workerID");        //delete bid details of worker
                if(!$delete_bid_query){
                    die ('<div class="alert alert-danger" role="alert">
                            Could not delete bid details of this worker...!<br><br>
                            <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                }

                $delete_education_query=mysqli_query($conn,"delete from education where Worker_ID=$workerID");        //delete education of worker
                if(!$delete_education_query){
                    die ('<div class="alert alert-danger" role="alert">
                            Could not delete education of this worker...!<br><br>
                            <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                            </div>');
                }

                $delete_query = mysqli_query($conn,"delete from worker where ID=$workerID");        //delete worker
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
