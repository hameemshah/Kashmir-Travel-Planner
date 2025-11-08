<?php
include 'partials/header.php';
include 'config/loggedin.php';

$upload_dir = "../assets/img/shikara/";

// Check if email is set in URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($dbc, $_GET['id']);

    // Fetch the place record to get image file names
    $query = "SELECT pic1, pic2, pic3 FROM shik WHERE id = '$id'";
    $result = mysqli_query($dbc, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $shik = mysqli_fetch_assoc($result);

        // Delete images from the server
        deleteImages($shik, $upload_dir);

        // Delete query
        $query = "DELETE FROM shik WHERE id = '$id'";

        if (mysqli_query($dbc, $query)) {
            echo "<script>alert('Shikara record deleted successfully!'); window.location.href='manage_shikara.php';</script>";
        } else {
            echo "<script>alert('Error deleting record: " . mysqli_error($dbc) . "'); window.location.href='manage_shikara.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid request!'); window.location.href='manage_shikara.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='manage_shikara.php';</script>";
}

// Function to delete all the images
function deleteImages($shik, $upload_dir)
{
    $image_fields = ['pic1', 'pic2', 'pic3'];

    foreach ($image_fields as $field) {
        if (!empty($shik[$field])) {
            $file_path = $upload_dir . basename($shik[$field]);

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
