<?php
include("connection.php");

if (isset($_POST['Place_Bid'])) {
    $worker_id = $_POST['worker-id'];
    $project_id = $_POST['project-id'];
    $bid_id = $_POST['bid-id'];
    $project_consumer_id = $_POST['project-consumer-id'];
    $bid_amount = $_POST['bid-amount'];
    $delivery_time = $_POST['delivery-time'];
    $description = $_POST['Description'];

    $sql = "INSERT INTO bid (Worker_ID, Project_ID, ID, Project_Consumer_ID, Price_Range, Date_Time, Discription)
            VALUES ('$worker_id', '$project_id', '$bid_id', '$project_consumer_id', '$bid_amount', '$delivery_time', '$description')";

    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Data Inserted into Database");</script>';
    } else {
        echo '<script>alert("Failed: ' . mysqli_error($conn) . '");</script>';
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>KARMIKAYA.LK Bidding Page</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>

    <div class="container">
        <div class="section">
            <div class="title">Place a Bid on this Project</div>
            <div class="sub-title">You will be able to edit your bid until the project is awarded to someone.</div>
        </div>
        <div class="section">
            <form action="#" method="POST">
                <div class="input-box">
                    <label for="worker-id">Worker ID</label>
                    <input type="text" name="worker-id" placeholder="Worker ID" required>
                </div>
                <div class="input-box">
                    <label for="project-id">Project ID</label>
                    <input type="text" name="project-id" placeholder="Project ID" required>
                </div>
                <div class="input-box">
                    <label for="bid-id">Bid ID</label>
                    <input type="text" name="bid-id" placeholder="Bid ID" required>
                </div>
                <div class="input-box">
                    <label for="project-consumer-id">Project Consumer ID</label>
                    <input type="text" name="project-consumer-id" placeholder="Project Consumer ID" required>
                </div>
                <div class="input-box">
                    <label for="bid-amount">Bid Amount</label>
                    <div class="input-group">
                        <span class="dollar-sign">$</span>
                        <input type="number" name="bid-amount" placeholder="Enter your Bid Amount" required>
                    </div>
                </div>
                <div class="input-box">
                    <label for="delivery-time">Project Delivery Time</label>
                    <input type="datetime-local" name="delivery-time" placeholder="Date and Time" required>
                </div>
                <div class="input-box">
                    <label for="proposal-description">Describe your proposal</label>
                    <textarea id="proposal-description" rows="5" cols="50" name="Description" placeholder="What makes you the best candidate for this project?" required></textarea>
                </div>
                <div class="section">
                    <div class="button">
                        <input type="submit" value="Place Bid" name="Place_Bid">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="../BootstrapStyle/js/bootstrap.bundle.min.js"></script>
</body>

</html>
