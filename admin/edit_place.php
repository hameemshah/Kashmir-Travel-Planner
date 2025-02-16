<?php
$page_title = "Edit Place";
include 'partials/header.php';
include 'config/loggedin.php';

// Get place ID from URL
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($dbc, $_GET['id']);

    // Fetch place details
    $query = "SELECT * FROM places WHERE id='$id'";
    $result = mysqli_query($dbc, $query);
    $place = mysqli_fetch_assoc($result);

    if (!$place) {
        echo "<script>alert('Place not found!'); window.location.href='manage_place.php';</script>";
        exit;
    }
} else {
    echo "<script>alert('Invalid request!'); window.location.href='manage_place.php';</script>";
    exit;
}
?>
    <div class="container mt-5">
        <h2>Edit Place</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $place['id']; ?>">

            <div class="form-group">
                <label>Place Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $place['name']; ?>" required>
            </div>

            <div class="form-group">
                <label>District:</label>
                <input type="text" class="form-control" name="district" value="<?php echo $place['district']; ?>" required>
            </div>

            <div class="form-group">
                <label>Type:</label>
                <input type="text" class="form-control" name="type" value="<?php echo $place['type']; ?>" required>
            </div>

            <div class="form-group">
                <label>Popularity 1:</label>
                <input type="text" class="form-control" name="pop1" value="<?php echo $place['pop1']; ?>">
            </div>

            <div class="form-group">
                <label>Popularity 2:</label>
                <input type="text" class="form-control" name="pop2" value="<?php echo $place['pop2']; ?>">
            </div>

            <div class="form-group">
                <label>Popularity 3:</label>
                <input type="text" class="form-control" name="pop3" value="<?php echo $place['pop3']; ?>">
            </div>

            <div class="form-group">
                <label>Distance:</label>
                <input type="text" class="form-control" name="distance" value="<?php echo $place['distance']; ?>">
            </div>

            <div class="form-group">
                <label>Detail:</label>
                <textarea class="form-control" name="detail" rows="3"><?php echo $place['detail']; ?></textarea>
            </div>

            <div class="form-group">
                <label>Current Image 1:</label><br>
                <?php if (!empty($place['pic1'])): ?>
                    <img src="../assets/img/places/<?php echo $place['pic1']; ?>" width="100">
                <?php else: ?>
                    <p>No Image</p>
                <?php endif; ?>
                <input type="file" class="form-control mt-2" name="pic1">
            </div>

            <div class="form-group">
                <label>Current Image 2:</label><br>
                <?php if (!empty($place['pic2'])): ?>
                    <img src="../assets/img/places/<?php echo $place['pic2']; ?>" width="100">
                <?php else: ?>
                    <p>No Image</p>
                <?php endif; ?>
                <input type="file" class="form-control mt-2" name="pic2">
            </div>

            <div class="form-group">
                <label>Current Image 3:</label><br>
                <?php if (!empty($place['pic3'])): ?>
                    <img src="../assets/img/places/<?php echo $place['pic3']; ?>" width="100">
                <?php else: ?>
                    <p>No Image</p>
                <?php endif; ?>
                <input type="file" class="form-control mt-2" name="pic3">
            </div>

            <button type="submit" class="btn btn-primary">Update Place</button>
            <!-- <a href="manage_place.php" class="btn btn-secondary">Cancel</a> -->
        </form>
    </div>
<?php
include '../config/db.php'; // Ensure your database connection is included

// Define upload directory
$upload_dir = "../assets/img/places/";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($dbc, $_POST['id']);
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $district = mysqli_real_escape_string($dbc, $_POST['district']);
    $type = mysqli_real_escape_string($dbc, $_POST['type']);
    $pop1 = mysqli_real_escape_string($dbc, $_POST['pop1']);
    $pop2 = mysqli_real_escape_string($dbc, $_POST['pop2']);
    $pop3 = mysqli_real_escape_string($dbc, $_POST['pop3']);
    $distance = mysqli_real_escape_string($dbc, $_POST['distance']);
    $detail = mysqli_real_escape_string($dbc, $_POST['detail']);

    // Fetch existing images from DB
    $result = mysqli_query($dbc, "SELECT pic1, pic2, pic3 FROM places WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);
    $existing_pic1 = $row['pic1'];
    $existing_pic2 = $row['pic2'];
    $existing_pic3 = $row['pic3'];

    // Handle file uploads (keep old images if no new ones are uploaded)
    $pic1 = !empty($_FILES['pic1']['name']) ? uploadImage($_FILES['pic1'], $upload_dir) : $existing_pic1;
    $pic2 = !empty($_FILES['pic2']['name']) ? uploadImage($_FILES['pic2'], $upload_dir) : $existing_pic2;
    $pic3 = !empty($_FILES['pic3']['name']) ? uploadImage($_FILES['pic3'], $upload_dir) : $existing_pic3;

    // Update query
    $query = "UPDATE places SET 
                name='$name',
                type='$type',
                district='$district',
                pop1='$pop1',
                pop2='$pop2',
                pop3='$pop3',
                distance='$distance',
                detail='$detail',
                pic1='$pic1',
                pic2='$pic2',
                pic3='$pic3' 
              WHERE id='$id'";

    if (mysqli_query($dbc, $query)) {
        echo "<script>alert('Place updated successfully!'); window.location.href='manage_place.php';</script>";
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
