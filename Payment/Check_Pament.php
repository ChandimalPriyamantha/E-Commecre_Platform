<?php 
session_start();
include 'connection.php';

if(isset($_POST['card_number']) && isset($_POST['CVV'])){

   
    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    $CardName = test_input($_POST['card_name']);
    $CardNumber = test_input($_POST['card_number']);
    $expiry = test_input($_POST['Expiry']);
    $cvv = test_input($_POST['CVV']);
    $street_address = test_input($_POST['Street_Address']);
    $city = test_input($_POST['City']);
    $state = test_input($_POST['State']);
    $zip_code = test_input($_POST['Zip_code']);


    if (empty($CardNumber)){
      header("Location: Payment.php?error=Email is Required");
      exit();
    }else if(empty($cvv)){
      header("Location: Payment.php?error=Password is Required");
      exit();
    }else{
      // hashing the password
      //$pass = md5($password);

      $sql = "SELECT * FROM bank WHERE card_number='$CardNumber' AND expiry='$expiry' AND cvv='$cvv'";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
              if ($row['card_number'] === $CardNumber && $row['expiry'] === $expiry && $row['cvv'] === $cvv) {
                
                $id = $_SESSION['id'];
                $sql2 = "UPDATE worker SET State='Active' WHERE ID = $id";
                mysqli_query($conn, $sql2);
                header("Location: ../ProjectView/projectView.php");
                
              }else{
          header("Location: Payment.php?error=Payment is not scuccess...!");
              exit();
        }
      }else{
        header("Location: Payment.php?error=Payment is not scuccess...!");
            exit();
      }
    }

 }else{

    header("Location: ./Home/home.php");
 }
