<?php

// Conncet Database MySQL 

// change this for your database 

$servername = "localhost";
$username = "root";
$password = "";
$databse = "login";

// Create connection
$connection = mysqli_connect($servername, $username, $password , $databse);

// Check connection
if (!$connection) {
 die("Connection failed: " . mysqli_connect_error());
}
#echo "Connected successfully";

?> 