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
            $consumerID=$_GET['delete'];

            /*$check_projects_query=mysqli_query($conn,"select Consumer_ID from project");            //check wether consumer has projects
            while ($row=mysqli_fetch_row($check_projects_query)){
                if($row[0]==$consumerID){
                    die ('<div class="alert alert-danger" role="alert">
                        Could not delete this consumer because he has projects and bids...!<br><br>
                        <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
            }*/

            $delete_bid_query=mysqli_query($conn,"delete from bid where Project_Consumer_ID=$consumerID");      //delete bid details of customer
            if(!$delete_bid_query){
                die ('<div class="alert alert-danger" role="alert">
                Could not delete bid details related to this customer and his projects...!<br><br>
                <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
            }

            $delete_project_query=mysqli_query($conn,"delete from project where Consumer_ID=$consumerID");     //delete projects of consumer
            if(!$delete_project_query){
                die ('<div class="alert alert-danger" role="alert">
                        Could not delete projects of this consumer...!<br><br>
                        <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }

            $delete_contact_query=mysqli_query($conn,"delete from phone_number_of_consumer where Consumer_ID=$consumerID");     //delete contacts of consumer
            if(!$delete_contact_query){
                die ('<div class="alert alert-danger" role="alert">
                        Could not delete contacts of this consumer...!<br><br>
                        <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }

            $delete_address_query=mysqli_query($conn,"delete from address_of_consumer where Consumer_ID=$consumerID");      //delete address of consumer
            if(!$delete_address_query){
                die ('<div class="alert alert-danger" role="alert">
                        Could not delete address of this consumer...!<br><br>
                        <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }

            $delete_query = mysqli_query($conn,"delete from consumer where ID=$consumerID");                //delete consumer
            if($delete_query){
                header("Location: consumer.php");
            }
            else{
                die ('<div class="alert alert-danger" role="alert">
                        Could not delete this consumer...!<br><br>
                        <a href="consumer.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
            }
        ?>
    </body>
</html>