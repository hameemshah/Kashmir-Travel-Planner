<?php
include 'partials/header.php';
include 'config/loggedin.php';

// Check if email is set in URL
if (isset($_GET['email'])) {
    $email = mysqli_real_escape_string($dbc, $_GET['email']);

    // Delete query
    $query = "DELETE FROM foods WHERE Email = '$email'";

    if (mysqli_query($dbc, $query)) {
        echo "<script>alert('Food record deleted successfully!'); window.location.href='manage_food.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . mysqli_error($dbc) . "'); window.location.href='manage_food.php';</script>";
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='manage_food.php';</script>";
}
?>
