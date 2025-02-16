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
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Food Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Food Details</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
<?php  
$eid=($_GET['id']);
$query=mysqli_query($dbc,"SELECT * FROM foods WHERE Email='$eid'");
$count=1;
 while($r=mysqli_fetch_array($query))
 {
  $name=htmlentities($r['Name']);
 $prop=htmlentities($r['Property']);
 $eid=htmlentities($r['Email']);
 $mob=htmlentities($r['Mobile_No']);
 $city=htmlentities($r['City']);
 $address=htmlentities($r['Address']);
 $type=htmlentities($r['Type']);
  }
?>
      <h2><?php echo $name;?></h2>
          
          <?php 
 
  //$eid=($_GET['id']);
  //echo $eid;
  $query=mysqli_query($dbc,"SELECT * FROM foods where Email='$eid'");
  while($r=mysqli_fetch_array($query))
 {

  ?> 
        <div class="pics-3">
        <img src="assets/img/foods/<?php echo htmlentities($r['Pic1']);?>" width="100%">
      </div>
      <div class="pics-3">
        <img src="assets/img/foods/<?php echo htmlentities($r['Pic2']);?>" width="100%">
      </div>
      <div class="pics-3">
        <img src="assets/img/foods/<?php echo htmlentities($r['Pic3']);?>" width="100%">
      </div>
 <?php 
} ?>
  <br/> <br/>
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
     <td>Address</td>
     <td><?php echo $address; ?></td>
   </tr>
     <tr>
     <td>Type</td>
     <td><?php echo $type; ?></td>
   </tr>
 </table>
 <a href="orderfood.php?id=<?php echo $eid ?>"><input type="submit" name="Order" class="btn btn-primary btn-lg btn-block" value="Order"></a>
    </div>
    </section>

  </main><!-- End #main -->
<?php include 'footer.php' ?>