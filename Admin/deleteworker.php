<?php
    include "Connection/connection.php";
    $workerID=$_GET['delete'];
    $delete_query = mysqli_query($conn,"delete from worker where ID=$workerID");
    if($delete_query){
        header("Location: worker.php");
    }
?>