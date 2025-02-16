<?php
$page_title = "Add Food";
include 'partials/header.php';
include 'config/loggedin.php';
include 'controllers/food.php';
?>
<div class="grid-container">
    <div class="grid-item1">
        <?php include 'partials/nav.php'; ?>
    </div>
    <div class="grid-item2">
        <form action="" method="post" enctype="multipart/form-data" class="container my-4 p-4 border rounded">
            <h2 class="mb-4 text-center">ADD FOOD</h2>

            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Name:</label>
                <div class="col-sm-9">
                    <input type="text" name="name" id="name" class="form-control" required />
                </div>
            </div>

            <div class="form-group row">
                <label for="prop" class="col-sm-3 col-form-label">Shop:</label>
                <div class="col-sm-9">
                    <input type="text" name="prop" id="prop" class="form-control" required />
                </div>
            </div>

            <div class="form-group row">
                <label for="eid" class="col-sm-3 col-form-label">Email:</label>
                <div class="col-sm-9">
                    <input type="email" name="eid" id="eid" class="form-control" required />
                </div>
            </div>

            <div class="form-group row">
                <label for="mob" class="col-sm-3 col-form-label">Contact No.:</label>
                <div class="col-sm-9">
                    <input type="number" name="mob" id="mob" class="form-control" required />
                </div>
            </div>

            <div class="form-group row">
                <label for="city" class="col-sm-3 col-form-label">City:</label>
                <div class="col-sm-9">
                    <input type="text" name="city" id="city" class="form-control" required />
                </div>
            </div>

            <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label">Address:</label>
                <div class="col-sm-9">
                    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="type" class="col-sm-3 col-form-label">Type:</label>
                <div class="col-sm-9">
                    <select name="type" id="type" class="form-control" required>
                        <option value="">--Select Choice--</option>
                        <option value="Veg">Veg</option>
                        <option value="Non-Veg">Non-Veg</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pictures:</label>
                <div class="col-sm-9">
                    <input type="file" name="pic1" id="pic1" class="form-control-file mb-2" required />
                    <input type="file" name="pic2" id="pic2" class="form-control-file mb-2" />
                    <input type="file" name="pic3" id="pic3" class="form-control-file mb-2" />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <button type="submit" name="save" class="btn btn-primary">Add Food</button>
                    <a href="manage_food.php" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>
