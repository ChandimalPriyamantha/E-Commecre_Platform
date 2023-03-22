<?php
include "Connection/connection.php";
$categoryID=$_GET['delete'];
$serviceImage=mysqli_fetch_row(mysqli_query($conn,"select Image from service where Catogery_ID=$categoryID"));
if($serviceImage!=null){
    unlink($serviceImage[0]);
}

$delete_service_query = mysqli_query($conn,"delete from service where Catogery_ID=$categoryID");
$delete_category_query = mysqli_query($conn,"delete from catogery where ID=$categoryID");
    if($delete_category_query&&$delete_service_query){
        header("Location: category.php");
    }
    else{
        echo"<script>alert('Could not delete complete')</script>";
    }

?>