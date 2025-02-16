<?php
$page_title = "Edit Hotel";
include 'partials/header.php';
include 'config/loggedin.php';

// Check if id is set in URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($dbc, $_GET['id']);
    $query = "SELECT * FROM hotels WHERE id = '$id'";
    $result = mysqli_query($dbc, $query);
    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Hotel record not found!'); window.location.href='manage_hotel.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='manage_hotel.php';</script>";
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $prop = mysqli_real_escape_string($dbc, $_POST['prop']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $mob = mysqli_real_escape_string($dbc, $_POST['mob']);
    $city = mysqli_real_escape_string($dbc, $_POST['city']);
    $address = mysqli_real_escape_string($dbc, $_POST['address']);
    $type = mysqli_real_escape_string($dbc, $_POST['type']);
    $amount = mysqli_real_escape_string($dbc, $_POST['amount']);
    
    $updateQuery = "UPDATE hotels SET name='$name', owner='$prop', email='$email', mobile='$mob', city='$city', address='$address', type='$type', amount='$amount' WHERE id='$id'";
    
    if (mysqli_query($dbc, $updateQuery)) {
        echo "<script>alert('Hotel record updated successfully!'); window.location.href='manage_hotel.php';</script>";
    } else {
        echo "<script>alert('Error updating record: " . mysqli_error($dbc) . "');</script>";
    }
}
?>
        <h2 class="mb-4">Edit Hotel</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($row['name']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Owner</label>
                <input type="text" name="prop" class="form-control" value="<?= htmlspecialchars($row['prop']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($row['email']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile No</label>
                <input type="text" name="mob" class="form-control" value="<?= htmlspecialchars($row['mobile']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">City</label>
                <input type="text" name="city" class="form-control" value="<?= htmlspecialchars($row['city']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" value="<?= htmlspecialchars($row['address']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control" value="<?= htmlspecialchars($row['type']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Amount</label>
                <input type="text" name="amount" class="form-control" value="<?= htmlspecialchars($row['amount']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="manage_hotel.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
