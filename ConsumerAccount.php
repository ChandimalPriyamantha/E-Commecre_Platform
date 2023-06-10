<?php
require 'connection.php';
require 'profile.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM consumer WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: Login.php");
}
?>
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
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
        }
        .profile-pic img {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var profilePic = document.getElementById('profile-pic');
            var newProfilePicInput = document.getElementById('newProfilePic');

            profilePic.addEventListener('click', function() {
                // Trigger the click event on the hidden file input field
                newProfilePicInput.click();
            });

            // Listen for changes in the file input field
            newProfilePicInput.addEventListener('change', function() {
                // Update the profile picture when a new file is selected
                var file = newProfilePicInput.files[0];
                var formData = new FormData();
                formData.append('newProfilePic', file);

                // Send an AJAX request to the server to update the profile picture
                $.ajax({
                    url: 'profile.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                            // Update the profile picture on the page
                            profilePic.src = response.imageUrl;
                        } else {
                            console.error('Profile picture update failed:', response.error);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error:', error);
                    }
                });
            });
        });
    </script>
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
                            Hi, <?php echo $row["First_Name"]; ?>
                                
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Aboute</a></li>
                            <li>
                                <a class="dropdown-item" href="Logout.php">Log out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    
    <main>
<h1>Your Profile</h1>
<div class="profile-pic">
    <img id="profile-pic" src="data:image/jpeg;base64,<?php echo base64_encode($imageData); ?>"
         alt="Profile Picture"><br>
    <input type="file" name="newProfilePic" id="newProfilePic" style="display: none;">
</div>
<form action="profile.php" method="POST">
    <table>
        <tr>
            <td><label for="nic">NIC:</label></td>
            <td><input type="text" name="nic" id="nic" value="<?php echo $nic; ?>" disabled></td>
        </tr>
        <tr>
            <td><label for="firstName">First Name:</label></td>
            <td><input type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>" disabled></td>
        </tr>
        <tr>
            <td><label for="lastName">Last Name:</label></td>
            <td><input type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>" disabled></td>
        </tr>
        <tr>
            <td><label for="sex">Sex:</label></td>
            <td><input type="text" name="sex" value="<?php echo $sex; ?>" disabled></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="email" id="email" value="<?php echo $email; ?>" disabled></td>
        </tr>
        <tr>
            <td><label for="dob">Date of Birth:</label></td>
            <td><input type="date" name="dob" id="dob" value="<?php echo $dob; ?>" disabled></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Update">
    <input type="button" name="back" value="Back">
</form>
<a href="Logout.php">Logout</a>


    
    </main>
  
    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../BootstrapStyle/js/jquery-3.5.1.js"></script>
    <script src="../BootstrapStyle/js/jquery.dataTables.min.js"></script>
    <script src="../BootstrapStyle/js/dataTables.bootstrap5.min.js"></script>
    <script src="../BootstrapStyle/js/script.js"></script>
</body>

</html>