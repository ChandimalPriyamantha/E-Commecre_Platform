
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
            $categoryID=$_GET['delete'];

            $currentCategoryName=mysqli_fetch_row(mysqli_query($conn,"select Name from catogery where ID=$categoryID"));
            $workerCategoryList=mysqli_query($conn,"select Jobe_Category from worker");
            while ( $workerCategoryName=mysqli_fetch_row($workerCategoryList)){
                if ($workerCategoryName[0]==$currentCategoryName[0]){           //check whether category has workers
                    die ('<div class="alert alert-danger" role="alert">
                        Could not delete this category because there are some workers related to this category...!<br><br>
                        <a href="category.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
            }
            
            
            $serviceImage_query=mysqli_query($conn,"select Image from service where Catogery_ID=$categoryID");      //delete serice images related to the category
            while($row=mysqli_fetch_row($serviceImage_query)){
                if($row[0]!=null){
                unlink($row[0]);
                }
            }

            $delete_service_query = mysqli_query($conn,"delete from service where Catogery_ID=$categoryID");        //delete serices related to the category
            $delete_category_query = mysqli_query($conn,"delete from catogery where ID=$categoryID");               //delete category
                if($delete_category_query&&$delete_service_query){
                    header("Location: category.php");
                }
                else{
                    die ('<div class="alert alert-danger" role="alert">
                        Could not delete this category...!<br><br>
                        <a href="category.php"><button class="btn btn-primary">Ok</button></a>
                        </div>');
                }
        ?>
    </body>
</html>