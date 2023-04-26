<?php
//Create database connection
$mysqli = mysqli_connect("localhost","root","","crudphp");

if (!$mysqli) {

die("Connection error: " . mysqli_connect_error());

}
?>