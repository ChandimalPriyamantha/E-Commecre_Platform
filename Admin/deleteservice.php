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
        echo"<script>alert('Could no delete complete')</script>";
    }

?>