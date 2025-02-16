<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Define upload directory
$upload_dir = "../assets/img/shikara/";

if (isset($_POST['save'])) {
    // Sanitize user input
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $prop = mysqli_real_escape_string($dbc, $_POST['prop']);
    $eid = mysqli_real_escape_string($dbc, $_POST['eid']);
    $mob = mysqli_real_escape_string($dbc, $_POST['mob']);
    $city = mysqli_real_escape_string($dbc, $_POST['city']);
    // Handle file uploads
    $pic1 = !empty($_FILES['pic1']['name']) ? uploadImage($_FILES['pic1'], $upload_dir) : "";
    $pic2 = !empty($_FILES['pic2']['name']) ? uploadImage($_FILES['pic2'], $upload_dir) : "";
    $pic3 = !empty($_FILES['pic3']['name']) ? uploadImage($_FILES['pic3'], $upload_dir) : "";

    // Insert data into the database
    $query = "INSERT INTO shik (Name,  Email, Mobile_No, City,  Pic1, Pic2, Pic3) 
              VALUES ('$name', '$eid', '$mob', '$city', '$pic1', '$pic2', '$pic3')";

    if (mysqli_query($dbc, $query)) {
        echo "<script>alert('Shikara service added successfully!'); window.location.href='manage_shikaras.php';</script>";
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
