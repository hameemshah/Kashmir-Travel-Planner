<?php
 //Start Session
 	session_start();
 	//Create constants to store repeating values
 	define('SITEURL', "http://localhost/Project/");
 	define('LOCALHOST','localhost');
 	define('DB_USERNAME','root');
 	define('DB_PASSWORD', '');
 	define('DB_NAME','kashmir');

 	$conn=mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error());
 	$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
?>