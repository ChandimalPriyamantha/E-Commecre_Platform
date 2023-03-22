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
    $categoryID=$_POST['inputID'];
    $categoryName=$_POST['inputName'];
    $categoryDescription=$_POST['inputDescription'];

    $readQuery=mysqli_query($conn,"select ID,Name from Catogery");
    while($row=mysqli_fetch_assoc($readQuery)){
        if(($row['ID']==$categoryID)||($row['Name']==$categoryName)){
            echo '<div class="alert alert-danger" role="alert">
                Category ID or Name is existing...<br><br>
                <a href="add_category_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>';
        }
    }

    if($categoryID && $categoryName && $categoryDescription){
        $add_category_query=mysqli_query($conn,"insert into catogery values ($categoryID,'$categoryName','$categoryDescription')");
        if(!$add_category_query){
            echo '<div class="alert alert-danger" role="alert">
                Could not add new category...<br><br>
                <a href="add_category_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>';
        }
    }
    else if($categoryID==null || $categoryName==null || $categoryDescription==null) {
        echo '<div class="alert alert-danger" role="alert">
                Please fill all fields <br><br>
                <a href="add_category_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>';
    }

    



?>

</body>
</html>