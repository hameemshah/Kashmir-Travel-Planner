<?php
include 'partials/header.php';
include 'config/loggedin.php';

$upload_dir = "../assets/img/hotels/";

// Check if 'id' is set in URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($dbc, $_GET['id']);

    // Fetch the hotel record to get image file names
    $query = "SELECT pic1, pic2, pic3 FROM hotels WHERE id = '$id'";
    $result = mysqli_query($dbc, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $hotel = mysqli_fetch_assoc($result);

        // Delete images from the server
        deleteImages($hotel, $upload_dir);

        // Delete hotel record from database
        $delete_query = "DELETE FROM hotels WHERE id = '$id'";
        
        if (mysqli_query($dbc, $delete_query)) {
            echo "<script>alert('Hotel record and images deleted successfully!'); window.location.href='manage_hotel.php';</script>";
        } else {
            echo "<script>alert('Error deleting record: " . mysqli_error($dbc) . "'); window.location.href='manage_hotel.php';</script>";
        }
    } else {
        echo "<script>alert('Hotel record not found!'); window.location.href='manage_hotel.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='manage_hotel.php';</script>";
}


// Function to delete all hotel images
function deleteImages($hotel, $upload_dir)
{
    $image_fields = ['pic1', 'pic2', 'pic3'];

    foreach ($image_fields as $field) {
        if (!empty($hotel[$field])) {
            $file_path = $upload_dir . basename($hotel[$field]);

            if (file_exists($file_path)) {
                if (unlink($file_path)) {
                    // Successfully deleted
                } else {
                    echo "<script>console.warn('Could not delete file: {$file_path}');</script>";
                }
            }
        }
    }
}
