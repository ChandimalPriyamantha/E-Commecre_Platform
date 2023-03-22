<?php
    include "Connection/connection.php";
    $consumerID=$_GET['delete'];
    $delete_query = mysqli_query($conn,"delete from consumer where ID=$consumerID");
    if($delete_query){
        header("Location: consumer.php");
    }
?>