<?php

// Define upload directory
$upload_dir = "../assets/img/places/";

if (isset($_POST['save'])) {
    $name =  mysqli_real_escape_string($dbc, $_POST['name']);
    $district =  mysqli_real_escape_string($dbc, $_POST['district']);
    $type =  mysqli_real_escape_string($dbc, $_POST['type']);
    $pop1 =  mysqli_real_escape_string($dbc, $_POST['pop1']);
    $pop2 =  mysqli_real_escape_string($dbc, $_POST['pop2']);
    $pop3 =  mysqli_real_escape_string($dbc, $_POST['pop3']);
    $distance =  mysqli_real_escape_string($dbc, $_POST['distance']);
    $detail =  mysqli_real_escape_string($dbc, $_POST['detail']);

    // Handle file uploads
    $pic1 = !empty($_FILES['pic1']['name']) ? uploadImage($_FILES['pic1'], $upload_dir) : "";
    $pic2 = !empty($_FILES['pic2']['name']) ? uploadImage($_FILES['pic2'], $upload_dir) : "";
    $pic3 = !empty($_FILES['pic3']['name']) ? uploadImage($_FILES['pic3'], $upload_dir) : "";

    $query = "INSERT INTO places(name,type,district,pop1,pop2,pop3,distance,detail,pic1,pic2,pic3)  VALUES ('$name','$type','$district','$pop1','$pop2','$pop3','$distance','$detail','$pic1','$pic2','$pic3')";

    if (mysqli_query($dbc, $query)) {
        echo "<script>alert('Place added successfully!'); window.location.href='manage_place.php';</script>";
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
function uploadImage($file, $upload_dir)
{
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
