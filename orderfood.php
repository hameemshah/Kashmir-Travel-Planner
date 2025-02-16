<?php include 'header.php' ?>

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Order Food</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Order Food</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <?php  
        $eid='';
        $eid=($_GET['id']);
        ?>
         <form action="" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" id="form1">
  <div class="form-group">
    
    <label for="exampleFormControlInput1">Food</label>
    <input type="text" name="food" class="form-control" id="exampleFormControlInput1" placeholder="ID" value="<?php echo $eid; ?>" readonly>
  </div>
  <br/>
  <div class="form-group">
    <label for="exampleFormControlInput1">Customer Name</label>
    <input type="text" name="cname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Full Name">
  </div>
  <br/>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="ceid" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <br/>
  <label for="exampleFormControlInput1">Address</label>
   <textarea name="address" cols="30" rows="5"  class="form-control" placeholder="Enter address"></textarea>
   <br/>
   <input type="submit" name="Order" class="btn btn-primary btn-lg btn-block" value="Pay & Order">
      </div>
    </section>

  </main><!-- End #main -->
  <?php 
  if (isset($_POST['Order'])) 
  {
   $food=$_POST['food'];
   $cname=$_POST['cname'];
   $ceid=$_POST['ceid'];
   $address=$_POST['address'];
   $data="INSERT INTO 
   foodorder(id,food,cname,ceid,address)
    VALUES 
    ('$eid','$food','$cname','$ceid','$address')";
  mysqli_query($dbc,$data);
?>
<script type="text/javascript">
alert("Food Order Successful");

window.location.replace("http://localhost/project/");
</script>
<?php } include 'footer.php' ?>