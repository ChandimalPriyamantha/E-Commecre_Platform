<?php

    include "Connection/connection.php";

    $workerID=$_GET['workerID'];
    $delete_payment_query=mysqli_query($conn,"delete from payment where Worker_ID=$workerID");
    if(!$delete_payment_query){
        die ('<div class="alert alert-danger" role="alert">
        Could not delete payment details...!<br><br>
        <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
        </div>');
    }

    $delete_address_query=mysqli_query($conn,"delete from address_of_worker where Worker_ID=$workerID");
    if(!$delete_address_query){
        die ('<div class="alert alert-danger" role="alert">
                Could not delete address of this worker...!<br><br>
                <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
    }



    $delete_worker_query=mysqli_query($conn,"delete from worker where ID=$workerID");
    if(!$delete_worker_query){
        die ('<div class="alert alert-danger" role="alert">
        Deleted payment details bus could not delete worker...!<br><br>
        <a href="worker.php"><button class="btn btn-primary">Ok</button></a>
        </div>');
    }
    header("Location: worker.php");

?>