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

    if($newName==NULL && $newDescription==NULL){
        echo '<div class="alert alert-danger" role="alert">
                Please fill details<br><br>
                <a href="updatecategory_form.php?updateID='.$updateID.'"><button class="btn btn-primary">Ok</button></a>
                </div>';
    }
    else {
        if ($newName){
            $update_query=mysqli_query($conn,"update catogery set Name='$newName' where ID='$updateID'");
            if(!$update_query){
                echo '<div class="alert alert-danger" role="alert">
                Could not update category name<br><br>
                <a href="updatecategory_form.php?updateID='.$updateID.'"><button class="btn btn-primary">Ok</button></a>
                </div>';
            }
        }

        if ($newDescription){
            $update_query=mysqli_query($conn,"update catogery set Description='$newDescription' where ID='$updateID'");
            if(!$update_query){
                echo '<div class="alert alert-danger" role="alert">
                Could not update category description<br><br>
                <a href="updatecategory_form.php?updateID='.$updateID.'"><button class="btn btn-primary">Ok</button></a>
                </div>';
            }
        }

        header("Location: category.php");
    }
    

?>
</body>
</html>