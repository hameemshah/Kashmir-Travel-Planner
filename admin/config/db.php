<?php
//This file contains the database access information.
#Connect to database
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set the database access information as constants:
DEFINE ('DB_USER', 'kashmiruser');
DEFINE ('DB_PASSWORD', 'password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'kashmir');

//Make the connection
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL :' . mysqli_connect_error());
//Set the encoding
mysqli_set_charset($dbc, 'utf8mb4');