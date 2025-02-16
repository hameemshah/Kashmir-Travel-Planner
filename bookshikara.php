<?php include 'header.php' ?>
  <main id="main">
    <?php  
        $eid=($_GET['id']); 
        ?>
<?php
$query=mysqli_query($dbc,"SELECT * FROM shik WHERE Email='$eid'");
$count=1;
?>
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Book Shikara</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Book Shikara</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <form action="" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" id="form1">
  <div class="form-group">
    
    <label for="exampleFormControlInput1">Shikara ID</label>
    <input type="text" name="hid" class="form-control" id="exampleFormControlInput1" placeholder="ID" value="<?php echo $eid; ?>" readonly>
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
   <div class="form-group">
    <label for="exampleFormControlInput1">Customer Contact Number</label>
    <input type="number" name="ccnum" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Mobile Number">
  </div>
  <br/>
   <div class="form-group">
    <label for="exampleFormControlInput1">Check In</label>
    <input type="date" name="cin" class="form-control" id="exampleFormControlInput1" placeholder="ID">
  </div>
  <br/>
   <div class="form-group">
    <label for="exampleFormControlInput1">Check Out</label>
    <input type="date" name="cout" class="form-control" id="exampleFormControlInput1" placeholder="ID">
  </div>
  <br/>
   <div class="form-group">
    <label for="exampleFormControlInput1">Credit/Debit Card Number</label>
    <input name="crcnum" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Card Details">
  </div>
  <br/>
 <div class="form-group">
    <label for="exampleFormControlSelect1">Select Your Bank</label>
    <select name="bank" class="form-control" id="exampleFormControlSelect1">
      <option>State Bank of India</option>
      <option>Punjab National Bank</option>
      <option>ICIC Bank</option>
      <option>Axis Bank</option>
      <option>Bank of Baroda</option>
      <option>HDFC Bank</option>
      <option>Yes Bank</option>
      <option>Allahbad Bank</option>
      <option>Kotak Bank</option>
    </select>
  </div>
  <br/>
   <div class="form-group">
    <label for="exampleFormControlInput1">Card Pin</label>
    <input name="cpin" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Card CVV">
  </div>
  <br/>
   <div class="form-group">
    <label for="exampleFormControlInput1">Amount</label>
    <input name="amount" type="number" class="form-control" id="exampleFormControlInput1" value="200">
  </div>
</form>
<br/><br/>
<input name ="submit" type="submit" value="Submit" class="btn btn-primary">
<a href="bookshikara.php"><input type="submit" value="Reset" class="btn btn-danger"></a>
      </div>
    </section>

  </main><!-- End #main -->
<?php 
  if (isset($_POST['submit'])) 
  {
   $cname=$_POST['cname'];
   $ceid=$_POST['ceid'];
   $ccnum=$_POST['ccnum'];
   $cin=$_POST['cin'];
   $cout=$_POST['cout'];
   $crcnum=$_POST['crcnum'];
   $bank=$_POST['bank'];
   $cpin=$_POST['cpin'];
   $amount=$_POST['amount'];
  $data="INSERT INTO bookshikara(id,cname,ceid,ccnum,cin,cout,crcnum,bank,cpin,amount) VALUES ('$eid','$cname','$ceid','$ccnum','$cin','$cout','$crcnum','$bank','$cpin','$amount')";
  mysqli_query($dbc,$data);
?>
<script type="text/javascript">
alert("Hotel Booking Successful");

window.location.replace("http://localhost/project/");
</script>
<?php } include 'footer.php' ?>