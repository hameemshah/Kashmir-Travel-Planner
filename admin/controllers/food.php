<?php

// Define upload directory
$upload_dir = "../assets/img/foods/";

if (isset($_POST['save'])) {
    
    // Sanitize user input
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $prop = mysqli_real_escape_string($dbc, $_POST['prop']);
    $eid = mysqli_real_escape_string($dbc, $_POST['eid']);
    $mob = mysqli_real_escape_string($dbc, $_POST['mob']);
    $city = mysqli_real_escape_string($dbc, $_POST['city']);
    $address = mysqli_real_escape_string($dbc, $_POST['address']);
    $type = mysqli_real_escape_string($dbc, $_POST['type']);

    // Handle file uploads
    $pic1 = uploadImage($_FILES['pic1'], $upload_dir);
    $pic2 = uploadImage($_FILES['pic2'], $upload_dir);
    $pic3 = uploadImage($_FILES['pic3'], $upload_dir);

    // Insert data into database
    $query = "INSERT INTO foods (Name, Property, Email, Mobile_No, City, Address, Type, Pic1, Pic2, Pic3) 
              VALUES ('$name', '$prop', '$eid', '$mob', '$city', '$address', '$type', '$pic1', '$pic2', '$pic3')";
    
    if (mysqli_query($dbc, $query)) {
        echo "<script> alert('Food service added successfully!');  window.location.href='manage_food.php'; </script>";

    } else {
        echo "Error: " . mysqli_error($dbc);
    }
}


/**
 * Function to handle file uploads
 * @param array $file Uploaded file data
 * @param string $upload_dir Target directory
 * @return string Filename if uploaded successfully, empty string otherwise
 */
function uploadImage($file, $upload_dir) {
    if ($file['error'] == UPLOAD_ERR_OK) {
        $filename = basename($file['name']);
        $target_path = $upload_dir . $filename;
        
        if (move_uploaded_file($file['tmp_name'], $target_path)) {
            return $filename; // Store only the filename in DB
        } else {
            echo "Error uploading file: $filename";
        }
    }
    return "";
}
?>