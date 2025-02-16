<?php
$page_title = "Places";
include 'partials/header.php';
include 'config/loggedin.php';
include 'controllers/places.php';
?>
<div class="grid-container">
  <div class="grid-item1">
    <?php include 'partials/nav.php'; ?>
  </div>
  <div class="grid-item2">
  <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <h2 class="text-center mb-4">Tourist Places Details</h2>

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" placeholder="Enter place name" />
  </div>

  <div class="form-group">
    <label for="type">Type:</label>
    <input type="text" class="form-control" name="type" id="type" value="<?php echo $type; ?>" placeholder="Enter place type" />
  </div>

  <div class="form-group">
    <label for="district">District:</label>
    <input type="text" class="form-control" name="district" id="district" value="<?php echo $district; ?>" placeholder="Enter district" />
  </div>

  <div class="form-group">
    <label for="popular-for">Popular For:</label>
    <div class="row">
      <div class="col-md-4">
        <input type="text" class="form-control" name="pop1" id="pop1" value="<?php echo $pop1; ?>" placeholder="Popular for 1" />
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" name="pop2" id="pop2" value="<?php echo $pop2; ?>" placeholder="Popular for 2" />
      </div>
      <div class="col-md-4">
        <input type="text" class="form-control" name="pop3" id="pop3" value="<?php echo $pop3; ?>" placeholder="Popular for 3" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="distance">Distance:</label>
    <input type="text" class="form-control" name="distance" id="distance" value="<?php echo $distance; ?>" placeholder="Enter distance" />
  </div>

  <div class="form-group">
    <label for="detail">Description:</label>
    <textarea class="form-control" name="detail" id="detail" cols="30" rows="5" placeholder="Description of Place"><?php echo $detail; ?></textarea>
  </div>

  <div class="form-group">
    <label for="pictures">Pictures:</label>
    <div class="custom-file mb-2">
      <input type="file" class="custom-file-input" name="pic1" id="pic1">
      <label class="custom-file-label" for="pic1">Choose first picture</label>
    </div>
    <div class="custom-file mb-2">
      <input type="file" class="custom-file-input" name="pic2" id="pic2">
      <label class="custom-file-label" for="pic2">Choose second picture</label>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="pic3" id="pic3">
      <label class="custom-file-label" for="pic3">Choose third picture</label>
    </div>
  </div>

  <div class="form-group text-center">
    <button type="submit" class="btn btn-primary" name="save" id="save">Save</button>
    <button type="submit" class="btn btn-secondary" name="search" id="search">Search</button>
    <button type="submit" class="btn btn-danger" name="delete" id="delete">Delete</button>
    <button type="submit" class="btn btn-warning" name="update" id="update">Update</button>
    <button type="reset" class="btn btn-info" name="clear" id="clear">Clear</button>
  </div>
</form>

  </div>
</div>