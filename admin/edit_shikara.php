<?php
$page_title = "Update Shikara";
include 'partials/header.php';
include 'config/loggedin.php';
include 'config/db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['id'])) {
    echo "Invalid Request!";
    exit;
}

$id = $_GET['id'];

// Fetch existing record
$query = "SELECT * FROM shik WHERE id = ?";
$stmt = $dbc->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows === 0) {
    echo "Shikara not found!";
    exit;
}
$shikara = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $eid = $_POST['email'];
    $mob = $_POST['mobile'];
    $city = $_POST['city'];

    // Update query
    $update_query = "UPDATE shik SET name=?, email=?, mobile=?, city=? WHERE id=?";
    $stmt = $dbc->prepare($update_query);
    $stmt->bind_param("ssssi", $name, $eid, $mob, $city, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Shikara updated successfully!'); window.location.href='manage_shikara.php';</script>";
    } else {
        echo "<script>alert('Update failed. Try again!');</script>";
    }
}
?>

<div class="grid-container">
  <div class="grid-item1">
    <?php include 'partials/nav.php'; ?>
  </div>
  <div class="grid-item2">

<form action="" method="post" enctype="multipart/form-data" class="container my-4 p-4 border rounded">
    <h2 class="mb-4 text-center">UPDATE SHIKARA</h2>

    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Name:</label>
        <div class="col-sm-9">
            <input type="text" name="name" id="name" class="form-control" required value="<?php echo htmlspecialchars($shikara['name']); ?>" />
        </div>
    </div>

    <div class="form-group row">
        <label for="eid" class="col-sm-3 col-form-label">Email:</label>
        <div class="col-sm-9">
            <input type="email" name="email" id="email" class="form-control" required value="<?php echo htmlspecialchars($shikara['email']); ?>" />
        </div>
    </div>

    <div class="form-group row">
        <label for="mob" class="col-sm-3 col-form-label">Contact No.:</label>
        <div class="col-sm-9">
            <input type="number" name="mobile" id="mobile" class="form-control" required value="<?php echo htmlspecialchars($shikara['mobile']); ?>" />
        </div>
    </div>

    <div class="form-group row">
        <label for="city" class="col-sm-3 col-form-label">City:</label>
        <div class="col-sm-9">
            <input type="text" name="city" id="city" class="form-control" required value="<?php echo htmlspecialchars($shikara['city']); ?>" />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 text-center">
            <button type="submit" name="update" class="btn btn-primary mx-1">Update</button>
            <a href="manage_shikara.php" class="btn btn-secondary mx-1">Cancel</a>
        </div>
    </div>
</form>

  </div>
</div>
