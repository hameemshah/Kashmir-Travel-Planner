<?php include 'header.php' ?>;
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Foods</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Foods</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <p>Just like its picturesque beauty, the food in Kashmir is heavenly. The rich, redolent dishes steeped in traditions have evolved through many generations and are known to be a blend of three different cooking styles - that of Kashmiri Pandits, Muslims and Mughals.</p>
        <br/>
        <table class="table table-hover"> 
        <tr class="table-primary">
          <th>Sr. No</th>
          <th>Food Name</th>
          <th>Mobile No</th>
          <th>Address</th>
          <th>Operations</th>
        </tr>
        <?php  
              $query=mysqli_query($dbc,"SELECT * FROM foods");
              $count=1;
              while($r=mysqli_fetch_array($query))
                {
         ?>
        <tr>
          <td><?php echo($count); ?></td>
          <td><?php echo htmlentities($r['Name']); ?></td>
          <td><?php echo htmlentities($r['Mobile_No']);  ?></td>
          <td><?php echo htmlentities($r['Address']); ?></td>
          <td><a href="fooddetail.php?id=<?php echo $r['Email'] ?>"><input type="submit" value="Select" class="btn btn-primary"></a>
          </td>
  <?php  
$count++;
} ?>
    </table>
      </div>
    </section>

  </main><!-- End #main -->
<?php include 'footer.php' ?>