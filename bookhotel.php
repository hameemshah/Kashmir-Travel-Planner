<?php include 'header.php' ?>
<main id="main">
  <?php
  $eid = ($_GET['id']);
  ?>
  <?php $con = mysqli_connect("localhost", "root", "", "kashmir") or die(mysqli_error());
  $query = mysqli_query($con, "SELECT * FROM hotel WHERE Email='$eid'");
  $count = 1;
  while ($r = mysqli_fetch_array($query)) {
    $amnt = htmlentities($r['Amount']);
  }
  ?>
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Book Hotel</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Book Hotel</li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs Section -->

  <section class="inner-page">
    <div class="container">
      <form action="" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return validateForm()" id="form1">
        <div class="form-group">

          <label for="exampleFormControlInput1">Hotel ID</label>
          <input type="text" name="hid" class="form-control" id="exampleFormControlInput1" placeholder="ID" value="<?php echo $eid; ?>" readonly>
        </div>
        <br />
        <div class="form-group">
          <label for="exampleFormControlInput1">Customer Name</label>
          <input type="text" name="cname" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Full Name">
        </div>
        <br />
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" name="ceid" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <br />
        <div class="form-group">
          <label for="exampleFormControlSelect1">Room Type</label>
          <select class="form-control" name="rtype" id="exampleFormControlSelect1">
            <option>Single Room</option>
            <option>Double Room</option>
            <option>Quad Room</option>
            <option>Queen Size Room</option>
            <option>King Size Room</option>
            <option>Deluxe Room</option>
            <option>Super Deluxe Room</option>
          </select>
        </div>
        <br />
        <div class="form-group">
          <label for="exampleFormControlInput1">Customer Contact Number</label>
          <input type="number" name="ccnum" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Mobile Number">
        </div>
        <br />
        <div class="form-group">
          <label for="exampleFormControlInput1">Check In</label>
          <input type="date" name="cin" class="form-control" id="exampleFormControlInput1" placeholder="ID">
        </div>
        <br />
        <div class="form-group">
          <label for="exampleFormControlInput1">Check Out</label>
          <input type="date" name="cout" class="form-control" id="exampleFormControlInput1" placeholder="ID">
        </div>
        <br />
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Enter the Number of Rooms</label>
            <select name="room" class="custom-select mr-sm-2" id="inlineFormCustomSelect" style="width:100%; padding: 0.5%;">
              <option selected>Choose...</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <br />
          <div class="form-group">
            <label for="exampleFormControlInput1">Credit/Debit Card Number</label>
            <input name="crcnum" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Card Details">
          </div>
          <br />
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
          <br />
          <div class="form-group">
            <label for="exampleFormControlInput1">Card Pin</label>
            <input name="cpin" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Card CVV">
          </div>
          <br />
          <div class="form-group">
            <label for="exampleFormControlInput1">Amount</label>
            <input name="amount" type="number" class="form-control" id="exampleFormControlInput1" value="<?php echo $amnt; ?>">
          </div>
      </form>
      <br /><br />
      <input name="submit" type="submit" value="Submit" class="btn btn-primary">
      <a href="bookhotel.php"><input type="submit" value="Reset" class="btn btn-danger"></a>
    </div>
  </section>

</main><!-- End #main -->
<?php
$con = mysqli_connect("localhost", "root", "", "kashmir") or die(mysqli_error());
if (isset($_POST['submit'])) {
  $cname = $_POST['cname'];
  $ceid = $_POST['ceid'];
  $rtype = $_POST['rtype'];
  $ccnum = $_POST['ccnum'];
  $cin = $_POST['cin'];
  $cout = $_POST['cout'];
  $room = $_POST['room'];
  $crcnum = $_POST['crcnum'];
  $bank = $_POST['bank'];
  $cpin = $_POST['cpin'];
  $amount = $_POST['amount'];
  $data = "INSERT INTO bookhotel(id,cname,ceid,rtype,ccnum,cin,cout,room,crcnum,bank,cpin,amount) VALUES ('$eid','$cname','$ceid','$rtype','$ccnum','$cin','$cout','$room','$crcnum','$bank','$cpin','$amount')";
  mysqli_query($con, $data);
?>
  <script type="text/javascript">
    alert("Hotel Booking Successful");

    window.location.replace("http://localhost/project/");
  </script>
<?php }
include 'footer.php' ?>