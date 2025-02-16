<?php

include 'partials/header.php';
include 'config/loggedin.php';

echo "<script> alert('hi'); </script>";

$eid = "reservation@hotelzamrud.com";
$query = "SELECT * FROM hotel WHERE Email='$eid'";
$val = mysqli_query($dbc, $query);

echo $eid;
echo $val;
echo $dbc;

    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $prop = mysqli_real_escape_string($dbc, $_POST['prop']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $mobile = mysqli_real_escape_string($dbc, $_POST['mobile']);
    $city = mysqli_real_escape_string($dbc, $_POST['city']);
    $address = mysqli_real_escape_string($dbc, $_POST['address']);
    $meals = isset($_POST['meals']) ? 1 : 0;
    $wifi = isset($_POST['wifi']) ? 1 : 0;
    $ac = isset($_POST['ac']) ? 1 : 0;
    $amount = mysqli_real_escape_string($dbc, $_POST['amount']);

    $uploadDir = "../assets/img/hotels/";
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    
    // Function to handle image upload
    function uploadImage($file, $uploadDir, $allowedTypes) {
        if (isset($file) && $file['error'] === 0) {
            $fileExt = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if (in_array($fileExt, $allowedTypes)) {
                $fileName = uniqid("hotel_", true) . "." . $fileExt;
                $filePath = $uploadDir . $fileName;
                if (move_uploaded_file($file['tmp_name'], $filePath)) {
                    return $fileName; // Return only the filename to store in DB
                }
            }
        }
        return null;
    }

    // Upload images
    $pic1 = "gaga";
    $pic2 = "gaga";
    $pic3 = "gaga";

    // Ensure at least one image is uploaded
    if (!$pic1 && !$pic2 && !$pic3) {
        echo "At least one image must be uploaded.";
        exit;
    }

    // Insert data into database
    $query = "INSERT INTO hotels (name, prop, email, mobile, city, address, pic1, pic2, pic3, meals, wifi, ac, amount)
              VALUES ('$name', '$prop', '$email', '$mobile', '$city', '$address', '$pic1', '$pic2', '$pic3', '$meals', '$wifi', '$ac', '$amount')";

    if (mysqli_query($dbc, $query)) {
        echo "Hotel added successfully!";
    } else {
        echo "Error: " . mysqli_error($dbc);
    }

?>
