<?php  
include "identify_admin.php";
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
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
    $updateID= $_POST['inputID'];
    $newName=$_POST['inputName'];
    $newDescription=$_POST['inputDescription'];
    $newCost=$_POST['inputCost'];

    if($newName==NULL && $newDescription==NULL && $newCost==null){
        die ( '<div class="alert alert-danger" role="alert">
                Please fill details<br><br>
                <a href="update_subscription_form.php? SubID='.$updateID.'"><button class="btn btn-primary">Ok</button></a>
                </div>');
    }
    else {
        if ($newName){
            $update_query=mysqli_query($conn,"update subscription set Name='$newName' where ID='$updateID'");
            if(!$update_query){
                die ('<div class="alert alert-danger" role="alert">
                Could not update subscription name<br><br>
                <a href="update_subscription_form.php?SubID='.$updateID.'"><button class="btn btn-primary">Ok</button></a>
                </div>');
            }
        }

        if ($newDescription){
            $update_query=mysqli_query($conn,"update subscription set Discription='$newDescription' where ID='$updateID'");
            if(!$update_query){
                die ('<div class="alert alert-danger" role="alert">
                Could not update subscription description<br><br>
                <a href="update_subscription_form.php?SubID='.$updateID.'"><button class="btn btn-primary">Ok</button></a>
                </div>');
            }
        }
        if ($newCost){
            $update_query=mysqli_query($conn,"update subscription set Cost='$newCost' where ID='$updateID'");
            if(!$update_query){
                die ('<div class="alert alert-danger" role="alert">
                Could not update subscription cost<br><br>
                <a href="update_subscription_form.php?SubID='.$updateID.'"><button class="btn btn-primary">Ok</button></a>
                </div>');
            }
        }

        header("Location: subscription.php");
    }
    

?>
</body>
</html>