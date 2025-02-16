<?php include 'header.php'; ?>

<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Hotels</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Hotels</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="inner-page">
    <div class="container">

      <table class="table table-hover">
        <tr class="table-primary">
          <th>Sr. No</th>
          <th>Hotel Name</th>
          <th>Mobile No</th>
          <th>Address</th>
          <th>Operations</th>
        </tr>
        <?php
        $query = mysqli_query($dbc, "SELECT * FROM hotels");
        $count = 1;
        while ($r = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo ($count); ?></td>
            <td><?php echo htmlentities($r['name']); ?></td>
            <td><?php echo htmlentities($r['mobile']);  ?></td>
            <td><?php echo htmlentities($r['city']); ?></td>
            <td><a href="hoteldetail.php?id=<?php echo $r['id'] ?>"><input type="submit" value="Select" class="btn btn-primary"></a></td>

          <?php
          $count++;
        } ?>
      </table>
    </div>
  </section>

</main><!-- End #main -->
<?php include 'footer.php' ?>