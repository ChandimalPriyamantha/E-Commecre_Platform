<?php
require 'connection.php';

$consumerId = $_SESSION['id'];

        // User confirmed the deletion, perform the delete operation
        $query = "DELETE FROM consumer WHERE ID='$consumerId'";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            echo
      "<script> alert('Account Deleted Succesfully...'); </script>";
      header("Location: Login.php");
        } else {
            // Deletion failed, handle the error
            echo "<script> alert('Failed to delete the account: ')</script>" . mysqli_error($conn);
            
        }
?>