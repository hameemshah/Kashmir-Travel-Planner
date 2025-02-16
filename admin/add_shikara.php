<?php
$page_title = "Shikara";
include 'partials/header.php';
include 'config/loggedin.php';
include 'controllers/shikara.php';
?>
<div class="grid-container">
  <div class="grid-item1">
    <?php include 'partials/nav.php'; ?>
  </div>
  <div class="grid-item2">

<form action="" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" id="form1" class="container my-4 p-4 border rounded">
    <h2 class="mb-4 text-center">SHIKARA DETAIL</h2>

    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Name:</label>
        <div class="col-sm-9">
            <input type="text" name="name" id="name" class="form-control" required />
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
        <label class="col-sm-3 col-form-label">Pictures:</label>
        <div class="col-sm-9">
            <input type="file" name="pic1" id="pic1" class="form-control-file mb-2" required />
            <input type="file" name="pic2" id="pic2" class="form-control-file mb-2" required />
            <input type="file" name="pic3" id="pic3" class="form-control-file mb-2" required />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-12 text-center">
            <button type="submit" name="save" id="save" class="btn btn-primary mx-1">Save</button>
        </div>
    </div>
</form>

  </div>
</div>