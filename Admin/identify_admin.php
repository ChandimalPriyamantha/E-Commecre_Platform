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
            session_start();
            $identity=false;


            $readQuery=mysqli_query($conn,"select ID from admin");
                while($row=mysqli_fetch_row($readQuery)){
                    if($row[0]==$_SESSION["id"]){
                        $identity=true;
                    }
                }
                if($identity==false){
                    die( '<div class="alert alert-danger" role="alert">
                    Session expired login again...<br><br>
                    <a href="login_form.php"><button class="btn btn-primary">Ok</button></a>
                    </div>');
                }
        ?>





    </body>
</html>