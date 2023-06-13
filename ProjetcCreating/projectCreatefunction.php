<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../BootstrapStyle/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../BootstrapStyle/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../BootstrapStyle/css/style.css" />
    <title>Online Clothing Managment System</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        input[type=text] {
         width: 100%;
         padding: 12px 20px;
            margin: 8px 0;
          box-sizing: border-box;
          background-color: #3CBC8D;
  color: white;
        }
        td,th{
          
            text-align: center;
            font-size: 20px;
           
            
           
        }
        table{
            width:60%;
            text-align: center;
            
            
            
        }
        

        input[type="submit"]{
           width: 30%;
           height: 50px;
           border: 1px solid;
           background: MediumSeaGreen;
           border-radius: 25px;
           font-size: 18px;
           color: #e9f4fb;
           font-weight: 700;
           cursor: pointer;
           outline:none;
        }
        h1{
            text-align: center;
            padding-bottom: 15px;
            padding-top: 15px;
            padding-left: 15px;
            padding-right: 15px;
            background-color:MediumSeaGreen;
            color: white;
            
        }

        </style>
</head>

<body>

<?php
//connect db
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "KarmikayaDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

//submit form
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $identity = $_POST["identity"];
        $name = $_POST["name"];
        $description = $_POST["description"];
        $budget = $_POST["budget"];
        $date = $_POST["date"];
        $time = $_POST["time"];
        $skils = $_POST["skils"];
        $image = $_POST["image"];
        $consumer = $_POST["consumer"];
// save in db
        $sql = "INSERT INTO project( ID, Name, Description, Budget, Date, Time, Skils, Image_path,Consumer_ID) VALUES ('$identity', '$name', '$description', '$budget', '$date', '$time', '$skils', '$image', '$consumer')";

        if($conn->query($sql) == TRUE){
            //echo "Successfully inserted";
            die( '<div class="alert alert-success" role="alert">
                Successfully added<br><br>
                <a href="projectCrating.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
            header("projectCrating.php");
        } else{
            //echo "Error: " . $sql . "<br>" . $conn->error;
            die( '<div class="alert alert-danger" role="alert">
                Could not ad the project added<br><br>
                <a href="projectCrating.php"><button class="btn btn-primary">Ok</button></a>
                </div>');
            header("projectCrating.php");
        }
    

    }

    //close connection
     $conn->close();
?>

</body>
</html>