<?php  
include "identify_admin.php";
?>
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
            $subID=$_GET['delete'];

            $workerSubscriptions=mysqli_query($conn,"select Subscription_ID from payment");         //check whether this subsription has bought by any worker
            while ( $row=mysqli_fetch_row($workerSubscriptions)){
                if ($row[0]==$subID){
                    die ('<div class="alert alert-danger" role="alert">
                        Could not delete this subscription because there are some workers have purchesed this Package...!<br><br>
                        <a href="subscription.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
            }

            $delete_subscription_query = mysqli_query($conn,"delete from subscription where ID=$subID");            //delete subscription 
            if($delete_subscription_query){
                header("Location: subscription.php");
            }
            else{
                die ('<div class="alert alert-danger" role="alert">
                                Could not deleted...!<br><br>
                                <a href="subscription.php"><button class="btn btn-primary">Ok</button></a>
                                </div>');
            }
            
            
        
        ?>
    </body>
</html>