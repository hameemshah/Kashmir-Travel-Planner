<?php include 'header.php' ?>
<?php  
$name=($_GET['id']);
$query=mysqli_query($dbc,"SELECT * FROM places WHERE name='$name'");
$count=1;
 while($r=mysqli_fetch_array($query))
 {
  $name=htmlentities($r['name']);
  $type=htmlentities($r['type']);
  $district=htmlentities($r['distance']);
  $pop1=htmlentities($r['pop1']);
  $pop2=htmlentities($r['pop2']);
  $pop3=htmlentities($r['pop3']);
  $distance=htmlentities($r['distance']);
  $detail=htmlentities($r['detail']);
  $pic1=htmlentities($r['pic1']);
  $pic2=htmlentities($r['pic2']);
  $pic3=htmlentities($r['pic3']);
}
?>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo $name;?></h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#portfolio">Tourist Places</a></li>
            <li><?php echo $name;?></li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/tourist-places/<?php  echo $pic1; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/tourist-places/<?php  echo $pic2; ?>" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/tourist-places/<?php  echo $pic3; ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Place Information</h3>
              <ul>
                <li><strong>Type</strong>: <?php echo $type;?></li>
                <li><strong>District</strong>: <?php echo $district;?></li>
                <li><strong>Popular For</strong>: <?php echo $pop1;?>, <?php echo $pop2;?>, <?php echo $pop3;?> etc.</li>
                <li><strong>Distance From Bus Stop</strong>: <?php echo $distance;?></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Breif Detail</h2>
              <hr>
              <p>
                <?php echo $detail;?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
<?php include 'footer.php' ?>