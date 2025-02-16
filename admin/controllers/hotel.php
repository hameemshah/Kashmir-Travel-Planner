<?php

// Define upload directory
$upload_dir = "../assets/img/hotels/";

if (isset($_POST['save'])) {

    // Sanitize user input
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $owner = mysqli_real_escape_string($dbc, $_POST['owner']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $contact = mysqli_real_escape_string($dbc, $_POST['contact']);
    $address = mysqli_real_escape_string($dbc, $_POST['address']);
    $city = mysqli_real_escape_string($dbc, $_POST['city']);
    $type = mysqli_real_escape_string($dbc, $_POST['type']);
    $amount = mysqli_real_escape_string($dbc, $_POST['amount']);

    // Amenities & Additional Features
    $breakfast = mysqli_real_escape_string($dbc, $_POST['breakfast']);
    $lunch = mysqli_real_escape_string($dbc, $_POST['lunch']);
    $dinner = mysqli_real_escape_string($dbc, $_POST['dinner']);
    $wifi = mysqli_real_escape_string($dbc, $_POST['wifi']);
    $ac = mysqli_real_escape_string($dbc, $_POST['ac']);
    $kitchen = mysqli_real_escape_string($dbc, $_POST['kitchen']);

    // Handle file uploads
    $pic1 = !empty($_FILES['pic1']['name']) ? uploadImage($_FILES['pic1'], $upload_dir) : "";
    $pic2 = !empty($_FILES['pic2']['name']) ? uploadImage($_FILES['pic2'], $upload_dir) : "";
    $pic3 = !empty($_FILES['pic3']['name']) ? uploadImage($_FILES['pic3'], $upload_dir) : "";

    // Insert data into the database
    $query = "INSERT INTO hotels (name, owner, email, mobile, address, city, type, amount, 
                breakfast, lunch, dinner, wifi, ac, kitchen, pic1, pic2, pic3) 
              VALUES ('$name', '$owner', '$email', '$contact', '$address', '$city', '$type', '$amount', 
                      '$breakfast', '$lunch', '$dinner', '$wifi', '$ac', '$kitchen', '$pic1', '$pic2', '$pic3')";

    if (mysqli_query($dbc, $query)) {
        echo "<script>alert('Hotel added successfully!'); window.location.href='manage_hotels.php';</script>";
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