<?php include 'header.php' ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Shikara</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Shikara</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
       <table class="table table-hover"> 
        <tr>
          <th>Sr. No</th>
          <th>Shikara Name</th>
          <th>Mobile No</th>
          <th>City</th>
          <th>Operations</th>
        </tr>
        <?php  
              $query=mysqli_query($dbc,"SELECT * FROM shik");
              $count=1;
              while($r=mysqli_fetch_array($query))
                {
         ?>
        <tr>
          <td><?php echo($count); ?></td>
          <td><?php echo htmlentities($r['name']); ?></td>
          <td><?php echo htmlentities($r['mobile']);  ?></td>
          <td><?php echo htmlentities($r['city']); ?></td>
          <td><a href="shikaradetail.php?id=<?php echo $r['email'] ?>"><input type="submit" value="Select" class="btn btn-primary"></a>
          </td>
  <?php  
$count++;
} ?>
    </table>
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'footer.php' ?>