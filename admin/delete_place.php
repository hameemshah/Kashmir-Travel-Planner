<?php
include 'partials/header.php';
include 'config/loggedin.php';

// Check if email is set in URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($dbc, $_GET['id']);

    // Delete query
    $query = "DELETE FROM places WHERE id = '$id'";

    if (mysqli_query($dbc, $query)) {
        echo "<script>alert('Place record deleted successfully!'); window.location.href='manage_place.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($dbc) . "'); window.location.href='manage_place.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='manage_place.php';</script>";
}
?>
