<?php
$page_title = "Edit Food";
include 'partials/header.php';
include 'config/loggedin.php';

// Check if email is set in URL
if (isset($_GET['email'])) {
    $email = mysqli_real_escape_string($dbc, $_GET['email']);
    $query = "SELECT * FROM foods WHERE Email = '$email'";
    $result = mysqli_query($dbc, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Food record not found!'); window.location.href='manage_food.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='manage_food.php';</script>";
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $prop = mysqli_real_escape_string($dbc, $_POST['prop']);
    $mob = mysqli_real_escape_string($dbc, $_POST['mob']);
    $city = mysqli_real_escape_string($dbc, $_POST['city']);
    $address = mysqli_real_escape_string($dbc, $_POST['address']);
    $type = mysqli_real_escape_string($dbc, $_POST['type']);
    
    $updateQuery = "UPDATE foods SET Name='$name', Property='$prop', Mobile_No='$mob', City='$city', Address='$address', Type='$type' WHERE Email='$email'";
    
    if (mysqli_query($dbc, $updateQuery)) {
        echo "<script>alert('Food record updated successfully!'); window.location.href='manage_food.php';</script>";
    } else {
        echo "<script>alert('Error updating record: " . mysqli_error($dbc) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Food</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Food</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($row['Name']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Property</label>
                <input type="text" name="prop" class="form-control" value="<?= htmlspecialchars($row['Property']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile No</label>
                <input type="text" name="mob" class="form-control" value="<?= htmlspecialchars($row['Mobile_No']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" value="<?= htmlspecialchars($row['City']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($row['Address']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control" value="<?= htmlspecialchars($row['Type']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="manage_food.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>