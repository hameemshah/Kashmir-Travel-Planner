<?php
$name = "";
$prop = "";
$eid = "";
$mob = "";
$city = "";
$address = "";
$type = "";
$amount = "";
$breakfast = "";
$lunch = "";
$dinner = "";
$airport = "";
$busstand = "";
$wifi = "";
$gyser = "";
$pick = "";
$balcony = "";
$lake = "";
$ctview = "";
$kitchen = "";
$led = "";
$ac = "";
$mount = "";
$bathroom = "";
$tele = "";
$target_file ="";

if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $prop = $_POST['prop'];
  $eid = $_POST['eid'];
  $mob = $_POST['mob'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
  $pic1 = $target_file;
  $target_file2 = $target_dir . basename($_FILES["pic2"]["name"]);
  $pic2 = $target_file2;
  $target_file3 = $target_dir . basename($_FILES["pic3"]["name"]);
  $pic3 = $target_file3;
  $type = $_POST['type'];
  $amount = $_POST['amount'];
  $breakfast = $_POST['breakfast'];
  $lunch = $_POST['lunch'];
  $dinner = $_POST['dinner'];
  $airport = $_POST['airport'];
  $busstand = $_POST['busstand'];
  $wifi = $_POST['wifi'];
  $gyser = $_POST['gyser'];
  $pick = $_POST['pick'];
  $balcony = $_POST['balcony'];
  $lake = $_POST['lake'];
  $ctview = $_POST['ctview'];
  $kitchen = $_POST['kitchen'];
  $led = $_POST['led'];
  $ac = $_POST['ac'];
  $mount = $_POST['mount'];
  $bathroom = $_POST['bathroom'];
  $tele = $_POST['tele'];
  $data = "INSERT INTO hotel(Name,Property,Email,Mobile_No,City,Address,Pic1,Pic2,Pic3,Type,Amount,Breakfast,Lunch,Dinner,Airport,Bus_Stand,Wifi,Gyser,AC,Mount,LED,Bathroom,Pick_Drop,Balcony,Lake_View,City_View,Kitchen,Telephone)  VALUES ('$name','$prop','$eid','$mob','$city','$address','$pic1','$pic2','$pic3','$type','$amount','$breakfast','$lunch','$dinner','$airport','$busstand','$wifi','$gyser','$ac','$mount','$led','$bathroom','$pick','$balcony','$lake','$ctview','$kitchen','$tele')";
  $res = mysqli_query($dbc, $data);
  $name = "";
  $prop = "";
  $eid = "";
  $mob = "";
  $city = "";
  $address = "";
  $type = "";
  $amount = "";
  $breakfast = "";
  $lunch = "";
  $dinner = "";
  $airport = "";
  $busstand = "";
  $wifi = "";
  $gyser = "";
  $pick = "";
  $balcony = "";
  $lake = "";
  $ctview = "";
  $kitchen = "";
  $led = "";
  $ac = "";
  $mount = "";
  $bathroom = "";
  $tele = "";
}
if (isset($_POST['search'])) {
  $eid = $_POST['eid'];
  $query = "SELECT * FROM hotel WHERE Email='$eid'";
  $val = mysqli_query($dbc, $query);
  while ($r = mysqli_fetch_array($val)) {
    $name = $r['Name'];
    $prop = $r['Property'];
    $mob = $r['Mobile_No'];
    $address = $r['Address'];
    $city = $r['City'];
    $pic1 = $r['Pic1'];
    $pic2 = $r['Pic2'];
    $pic3 = $r['Pic3'];
    $type = $r['Type'];
    $amount = $r['Amount'];
    $breakfast = $r['Breakfast'];
    $lunch = $r['Lunch'];
    $dinner = $r['Dinner'];
    $airport = $r['Airport'];
    $busstand = $r['Bus_Stand'];
    $wifi = $r['Wifi'];
    $gyser = $r['Gyser'];
    $pick = $r['Pick_Drop'];
    $balcony = $r['Balcony'];
    $lake = $r['Lake_View'];
    $ctview = $r['City_View'];
    $kitchen = $r['Kitchen'];
    $led = $r['LED'];
    $ac = $r['AC'];
    $mount = $r['Mount'];
    $bathroom = $r['Bathroom'];
    $tele = $r['Telephone'];
  }
}
if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $prop = $_POST['prop'];
  $eid = $_POST['eid'];
  $mob = $_POST['mob'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $target_file = $target_dir . basename($_FILES["pic1"]["name"]);
  $pic1 = $target_file;
  $target_file2 = $target_dir . basename($_FILES["pic2"]["name"]);
  $pic2 = $target_file2;
  $target_file3 = $target_dir . basename($_FILES["pic3"]["name"]);
  $type = $_POST['type'];
  $amount = $_POST['amount'];
  $breakfast = $_POST['breakfast'];
  $lunch = $_POST['lunch'];
  $dinner = $_POST['dinner'];
  $airport = $_POST['airport'];
  $busstand = $_POST['busstand'];
  $wifi = $_POST['wifi'];
  $gyser = $_POST['gyser'];
  $pick = $_POST['pick'];
  $balcony = $_POST['balcony'];
  $lake = $_POST['lake'];
  $ctview = $_POST['ctview'];
  $kitchen = $_POST['kitchen'];
  $led = $_POST['led'];
  $ac = $_POST['ac'];
  $mount = $_POST['mount'];
  $bathroom = $_POST['bathroom'];
  $tele = $_POST['tele'];
  $query = "UPDATE hotel set Name='$name',Property='$prop',Mobile_No='$mob',City='$city',Address='$address',Pic1='$pic',Pic2='$pic2',Pic3='pic3' WHERE Email='$eid'";
  mysqli_query($dbc, $query);
  $name = "";
  $prop = "";
  $eid = "";
  $mob = "";
  $city = "";
  $address = "";
  $type = "";
  $amount = "";
  $breakfast = "";
  $lunch = "";
  $dinner = "";
  $airport = "";
  $busstand = "";
  $wifi = "";
  $gyser = "";
  $pick = "";
  $balcony = "";
  $lake = "";
  $ctview = "";
  $kitchen = "";
  $led = "";
  $ac = "";
  $mount = "";
  $bathroom = "";
  $tele = "";
}
if (isset($_POST['delete'])) {
  $eid = $_POST['eid'];
  $query = "DELETE from hotel WHERE Email='$eid'";
  mysqli_query($dbc, $query);
  $name = "";
  $prop = "";
  $mob = "";
  $city = "";
  $address = "";
  $type = "";
  $amount = "";
  $breakfast = "";
  $lunch = "";
  $dinner = "";
  $airport = "";
  $busstand = "";
  $wifi = "";
  $gyser = "";
  $pick = "";
  $balcony = "";
  $lake = "";
  $ctview = "";
  $kitchen = "";
  $led = "";
  $ac = "";
  $mount = "";
  $bathroom = "";
  $tele = "";
}
if (isset($_POST['clear'])) {
  $name = "";
  $prop = "";
  $eid = "";
  $mob = "";
  $city = "";
  $address = "";
  $type = "";
  $amount = "";
  $breakfast = "";
  $lunch = "";
  $dinner = "";
  $airport = "";
  $busstand = "";
  $wifi = "";
  $gyser = "";
  $pick = "";
  $balcony = "";
  $lake = "";
  $ctview = "";
  $kitchen = "";
  $led = "";
  $ac = "";
  $mount = "";
  $bathroom = "";
  $tele = "";
}
?>