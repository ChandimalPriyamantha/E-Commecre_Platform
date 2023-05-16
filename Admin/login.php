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
            $enteredEmail=$_POST['email'];
            $enteredPassword=md5($_POST['password']);


            $readQuery=mysqli_query($conn,"select ID,Email,Password,First_Name from admin");
                while($row=mysqli_fetch_row($readQuery)){
                    if(($row[1]==$enteredEmail)&&($row[2]==$enteredPassword)){
                        session_start();
                        $_SESSION["id"]=$row[0];
                        $_SESSION["email"]=$row[1];
                        $_SESSION["password"]=$row[2];
                        $_SESSION["name"]=$row[3];
                        header("Location: worker.php");
                    }
                    
                    
                    
                }
                die( '<div class="alert alert-danger" role="alert">
                Email or password is incorrect<br><br>
                <a href="login_form.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
        ?>





    </body>
</html>