<?php include 'header.php' ?>
<main id="main">
  <style type="text/css">
    .pics-3 {
      width: 28%;
      float: left;
      border: 1px solid aquamarine;
      margin: 2%;
      position: relative;
    }

    .clearfix {
      clear: both;
      float: none;
    }

    .wrapper {
      width: 80%;
      padding-right: 3.5%;
      margin: 0 auto;
    }
  </style>
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Hotel Details</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Hotel Detail</li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="inner-page">
    <div class="container">
      <?php
      ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);
      $id = ($_GET['id']);
      $query = mysqli_query($dbc, "SELECT * FROM hotels WHERE id='$id'");
      $count = 1;
      while ($r = mysqli_fetch_array($query)) {
        $name = htmlentities($r['name']);
        $prop = htmlentities($r['owner']);
        $eid = htmlentities($r['email']);
        $mob = htmlentities($r['mobile']);
        $city = htmlentities($r['city']);
        $amount = htmlentities($r['amount']);
        $address = htmlentities($r['address']);
        $type = htmlentities($r['type']);
        $breakfast = htmlentities($r['breakfast']);
        $lunch = htmlentities($r['lunch']);
        $dinner = htmlentities($r['dinner']);
        $wifi = htmlentities($r['wifi']);
        $kitchen = htmlentities($r['kitchen']);
        $ac = htmlentities($r['ac']);
      ?>

        <h2><?php echo $name; ?></h2>
        <div class="pics-3">
          <img src="assets/img/hotels/<?php echo !empty($r['Pic1']) ? htmlentities($r['Pic1']) : 'default.jpg'; ?>" width="100%">
        </div>
        <div class="pics-3">
          <img src="assets/img/hotels/<?php echo !empty($r['Pic1']) ? htmlentities($r['Pic2']) : 'default.jpg'; ?>" width="100%">
        </div>
        <div class="pics-3">
          <img src="assets/img/hotels/<?php echo !empty($r['Pic3']) ? htmlentities($r['Pic1']) : 'default.jpg'; ?>" width="100%">
        </div>
    </div>
    <div class="clearfix"></div>

    <br />
    <div class="wrapper">
      <table class="table table-hover">
        <tr class="table-primary">
          <th>Facilities:</th>
          <th>Availiability</th>
        </tr>
        <tr>
          <td>Name</td>
          <td><?php echo $name; ?></td>
        </tr>
        <tr>
          <td>Proprietor</td>
          <td><?php echo $prop; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $eid; ?></td>
        </tr>
        <tr>
          <td>Mobile Number</td>
          <td><?php echo $mob; ?></td>
        </tr>
        <tr>
          <td>City</td>
          <td><?php echo $city; ?></td>
        </tr>
        <tr>
          <td>Amount</td>
          <td><?php echo $amount; ?></td>
        </tr>
        <tr>
          <td>Type</td>
          <td><?php echo $type; ?></td>
        </tr>
        <tr>
          <td>Breakfast</td>
          <td><?php echo $breakfast; ?></td>
        </tr>
        <tr>
          <td>Lunch</td>
          <td><?php echo $lunch; ?></td>
        </tr>
        <tr>
          <td>Dinner</td>
          <td><?php echo $dinner; ?></td>
        </tr>
        <tr>
          <td>Wi-Fi</td>
          <td><?php echo $wifi; ?></td>
        </tr>
        <tr>
          <td>AC.</td>
          <td><?php echo $ac; ?></td>
        </tr>
        <tr>
          <td>Kitchen</td>
          <td><?php echo $kitchen; ?></td>
        </tr>
      </table>
      <a href="bookhotel.php?id=<?php echo $r['id'] ?>"><input type="submit" name="book" value="Book" class="btn btn-primary"></a>
    </div>
    </div>
  <?php
      }
  ?>
  </section>

</main><!-- End #main -->

<?php include 'footer.php' ?>