<?php
$page_title = "Home";
include 'partials/header.php';
include 'config/loggedin.php';
include 'controllers/hotel.php';
?>
<div class="grid-container">
    <div class="grid-item1">
        <?php include 'partials/nav.php'; ?>
    </div>
    <div class="grid-item2">
        <div class="container mt-5">
            <h2 class="text-center">Add New Hotel</h2>
            <div class="card shadow-lg p-4">
                <form action="" method="post" enctype="multipart/form-data" id="hotelForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Hotel Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Owner Name</label>
                            <input type="text" class="form-control" name="owner" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact No.</label>
                            <input type="tel" class="form-control" name="contact" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="2" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="form-control" name="city" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Hotel Type</label>
                            <input type="text" class="form-control" name="type" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Amount per Night</label>
                            <input type="number" class="form-control" name="amount" required>
                        </div>
                    </div>

                    <h5 class="mt-3">Amenities</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">Breakfast</label>
                            <div>
                                <input type="radio" name="breakfast" value="Yes" required> Yes
                                <input type="radio" name="breakfast" value="No" required> No
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Lunch</label>
                            <div>
                                <input type="radio" name="lunch" value="Yes" required> Yes
                                <input type="radio" name="lunch" value="No" required> No
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="form-label">Dinner</label>
                            <div>
                                <input type="radio" name="dinner" value="Yes" required> Yes
                                <input type="radio" name="dinner" value="No" required> No
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">WiFi</label>
                            <div>
                                <input type="radio" name="wifi" value="Yes" required> Yes
                                <input type="radio" name="wifi" value="No" required> No
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-3">Additional Features</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">AC</label>
                            <div>
                                <input type="radio" name="ac" value="Yes" required> Yes
                                <input type="radio" name="ac" value="No" required> No
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Kitchen</label>
                            <div>
                                <input type="radio" name="kitchen" value="Yes" required> Yes
                                <input type="radio" name="kitchen" value="No" required> No
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-3">Images</h5>
                    <div class="mb-3">
                        <label class="form-label">Upload Images</label>
                        <input type="file" name="pic1" class="form-control mb-2" required>
                        <input type="file" name="pic2" class="form-control mb-2">
                        <input type="file" name="pic3" class="form-control mb-2">
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" name="save" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>