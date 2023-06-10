<?php
require 'connection.php';
// Retrieve consumer details from the database
$consumerId = $_SESSION['id']; // Assuming you have stored the consumer ID in the session
$query = "SELECT NIC, First_Name, Lat_Name, Sex, Email, DOB,Image_Path FROM consumer WHERE ID =$consumerId ";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $nic = $row['NIC'];
    $firstName = $row['First_Name'];
    $lastName = $row['Lat_Name'];
    $sex = $row['Sex'];
    $email = $row['Email'];
    $dob = $row['DOB'];
    $imageData = $row['Image_Path'];
    
} else {
    echo "No consumer details found.";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['newProfilePic']) && $_FILES['newProfilePic']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['newProfilePic']['tmp_name'];
        $fileName = $_FILES['newProfilePic']['name'];

        // Specify the upload directory
        $uploadDirectory = 'uploads/';

        // Move the uploaded file to the specified directory
        $newFilePath = $uploadDirectory . $fileName;
        if (move_uploaded_file($fileTmpPath, $newFilePath)) {
            // Update the profile picture path in the database
            $updateQuery = "UPDATE consumer SET Image_Path = '$newFilePath' WHERE ID = $consumerId";
            if (mysqli_query($conn, $updateQuery)) {
                // Return a success response with the new image URL
                $response = array(
                    'success' => true,
                    'imageUrl' => $newFilePath
                );
                echo json_encode($response);
                exit; // Exit after sending the JSON response
            } else {
                // Return an error response if the database update fails
                $response = array(
                    'success' => false,
                    'error' => 'Failed to update profile picture in the database.'
                );
                echo json_encode($response);
                exit; // Exit after sending the JSON response
            }
        } else {
            // Return an error response if the file move operation fails
            $response = array(
                'success' => false,
                'error' => 'Failed to move the uploaded file.'
            );
            echo json_encode($response);
            exit; // Exit after sending the JSON response
        }
    } else {
        // Return an error response if the file upload fails
        $response = array(
            'success' => false,
            'error' => 'Failed to upload the file.'
        );
        echo json_encode($response);
        exit; // Exit after sending the JSON response
    }
}
?>



        