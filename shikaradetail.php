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
       float:none;
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
          <h2>Shikara Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Shikara Details</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
          <?php 
           $eid=($_GET['id']);
$query=mysqli_query($dbc,"SELECT * FROM shik WHERE Email='$eid'");
$count=1;
while($r=mysqli_fetch_array($query))
{ 
 $name=htmlentities($r['Name']);
 $prop=htmlentities($r['Property']);
 $eid=htmlentities($r['Email']);
 $mob=htmlentities($r['Mobile_No']);
 $city=htmlentities($r['City']);
 $address=htmlentities($r['Address']);
  ?>  

      <h2><?php echo $name;?></h2>
<div class="pics-3">
  <img src="assets/img/shikara/<?php  echo htmlentities($r['Pic1']); ?>" width="100%">
</div>
<div class="pics-3">
  <img src="assets/img/shikara/<?php  echo htmlentities($r['Pic2']); ?>" width="100%">
</div>
  <div class="pics-3">
  <img src="assets/img/shikara/<?php  echo htmlentities($r['Pic3']); ?>" width="100%">
</div>
</div>
<div class="clearfix"></div>

 <br/>
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
 </table>
 <a href="bookshikara.php?id=<?php echo $r['Email'] ?>"><input type="submit" name="book" value="Book" class="btn btn-primary"></a>
 <?php 
} ?>
      </div>
    </section>

  </main><!-- End #main -->

<?php include 'footer.php' ?>