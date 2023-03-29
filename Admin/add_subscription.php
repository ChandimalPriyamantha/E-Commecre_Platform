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
    $subID=$_POST['inputID'];
    $subName=$_POST['inputName'];
    $subDescription=$_POST['inputDescription'];
    $subCost=$_POST['inputCost'];

    $readQuery=mysqli_query($conn,"select ID from subscription");
    while($row=mysqli_fetch_assoc($readQuery)){
        if($row['ID']==$subID){
            die ('<div class="alert alert-danger" role="alert">
                Subscription ID is existing...<br><br>
                <a href="add_subscription_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
        }
    }

    if($subID && $subName && $subDescription && $subCost){
        $add_subscription_query=mysqli_query($conn,"insert into subscription values ($subID , '$subName' , '$subDescription' , '$subCost')");
        if(!$add_category_query){
            echo '<div class="alert alert-danger" role="alert">
                Could not add new subscription...<br><br>
                <a href="add_subscription_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>';
        }
        header("Location: subscription.php");
    }
    else if($subID==null || $subName==null || $subDescription==null || $subCost==null) {
        echo '<div class="alert alert-danger" role="alert">
                Please fill all fields <br><br>
                <a href="add_subscription_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>';
    }

    



?>

</body>
</html>