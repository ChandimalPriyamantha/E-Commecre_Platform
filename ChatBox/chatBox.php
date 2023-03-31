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
        table, td, th {  
                    
                    text-align: left;
                }

                table {
                    
                    width: 100%;
                }

                th, td {
                    padding: 15px;
                }
    </style>   
</head>

<body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3  fw-bold" href="#"><i class="bi bi-circle me-3"></i>Karmika.lk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-success" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                            Hi, <?php //echo $_SESSION['name'] 
                                ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Aboute</a></li>
                            <li>
                                <a class="dropdown-item" href="../check-php/logout.php">Log out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    
    <main>


        <form action ="" method="post">
            
        <br><br><br><br><br><br>
                <table >
                    <tr>
                        <td>
                            <label for="senderid">Sender ID:</label>
                        </td>
                        <td>
                            <textarea id="senderid" name="senderid" rows="1" cols="60">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="receiverid">Receiver ID:</label>
                        </td>
                        <td>
                            <textarea id="receiverid" name="receiverid" rows="1" cols="60">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Subject"> Subject: </label>
                        </td>
                        <td>
                            <textarea id="subject" name="subject" rows="1" cols="60"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Message">Message: </label>
                        </td>
                        <td>
                            <textarea id="message" name="message" rows="5" cols="60">
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" value="Submit">Send message</button>
                        </td>
                        <td>
                            <button type="reset" value="Reset">Clear message</button>
                        </td>
                    </tr>
                </table>
          
            
           
        
        </form>
    
        <?php

            // Connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "karmikayadb";

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                }

            // Handle form submission
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $senderid = $_POST["senderid"];
                $receiverid= $_POST["receiverid"];
                $subject = $_POST["subject"];
                $message = $_POST["message"];
            
              // Save message in the database
                $sql = "INSERT INTO massage (Sender_iD, Resiver_ID, Subject, Body) VALUES ('$senderid','$receiverid','$subject', '$message')";
            
              if ($conn->query($sql) === TRUE) {
                echo "Message sent successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            }

            // Close database connection
                $conn->close();
        ?>
        


    </main>
  
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>