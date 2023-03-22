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
    $serviceID= $_POST['inputID'];
    $serviceName=$_POST['inputName'];
    $serviceDetails=$_POST['inputDetails'];
    $categoryID=$_POST['serviceCategoryID'];
    $file_name=$_FILES['Image']['name'];


    $readQuery=mysqli_query($conn,"select ID,Name from service");
    while($row=mysqli_fetch_assoc($readQuery)){
        if(($row['ID']==$serviceID)||($row['Name']==$serviceName)){
            echo '<div class="alert alert-danger" role="alert">
                Service ID or Name is existing...<br><br>
                <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>';
        }
    }

    if($serviceID && $serviceName && $serviceDetails && $categoryID && $file_name){
        
    }
    else {
        echo '<div class="alert alert-danger" role="alert">
            Please fill all fields<br><br>
            <a href="add_service_form.php"><button class="btn btn-primary">Ok</button></a>
            </div>';
        
    }
    

?>
</body>
</html>