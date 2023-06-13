<?php session_start();?>
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
<div class="mt-5 pt-1">
            <div class="card ">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="../Home/homepahe001.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../ChatBox/chatBox.php">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
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
                            <li><a class="dropdown-item" href="../ConsumerAccount/ConsumerAccount.php">Profile</a></li>
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
    <h1> Create Project</h1>
    
    <form action="projectCreateFunction.php" method="post">
    
		<table>
       
            <tr><th>
			    <label>ID</label>
			    </th>
				
			    <td><input type="text" id="identity" name="identity" class="input" value="<?php echo rand(1,999999999); ?>" placeholder="Enter your ID" readonly required>
			    </td>
			</tr><br>
        
            <tr>
                <th>	
			        <label> Name</label>
			    </th>
				
			    <td>
                    <input type="text" id="name"  name="name" class="input" value="" placeholder="Enter your name" required>
			    </td>
			</tr><br>
			
			<tr><th>
			    <label>Description</label>
			    </th>
				
			    <td>
                    <input type="text" id="description"  name="description" class="input" value="" placeholder="Enter the description here" required>
			    </td>

            </tr><br>
				
			<tr><th>
				<label>Budget</label>
            </th>
            <td>
				<input type="text" id="budget" name="budget" class="input" value="" placeholder="Enter the budget" required>
			</td>
            </tr><br>
			
			<tr><th>
				<label>Date</label>
            </th>
            <td>
				<input type="text" id="date" name="date" class="input" value="<?php echo(date("Y-m-d"))?>" placeholder="Enter date" required>
			</td>
             </tr><br>
			
			<tr><th>
				<label>Time</label></th>
                <td>
				<input type="text" id="time"  name="time" value="<?php echo(date("H:i:s"))?>" placeholder="Enter time" required>
			</td>
            </tr><b>

            <tr><th>
				<label>Skils</label>
                </th>
                <td>
				<input type="text" id="skils" name="skils" class="input" value=""  placeholder="Enter your skils" required>
			</td></tr><br>

          <tr>  <th>
				<label>Image path</label>
                </th>
                <td>
				<input type="text" id="image" name="image" class="input" value=""  placeholder="Enter image path" required>
			</td>
    </tr><br>

    <tr><th>
			    <label>Consumer ID</label>
			    </th>
				
			    <td><input type="text" id="consumer" name="consumer" class="input" value="<?php echo($_SESSION['id']) ?>" placeholder="Consumer ID" readonly required>
			    </td>
			</tr>
                <br>
                 <tr> <td>
                 
		        <input type="submit" value="Clear"></td>
                <td>
				    <input type="submit" value="Submit">
                </td>
                </tr>
</table>
</form>




    
    </main>
  
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>