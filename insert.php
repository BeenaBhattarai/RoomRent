<?php
include('php/config.php');
session_start();
$unique_id = $_SESSION['unique_id'];
 
$price=$_POST['price'];
$room=$_POST['room'];
$location=$_POST['location'];
$description=$_POST['description'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$booking_status= 'Not Booked';

$conn->query("insert into rentroom (price, unique_id ,room, location, description, latitude, longitude) 
values ('$price','$unique_id', '$room', '$location','$description', '$latitude', '$longitude')");
 
$res = $conn->query("Select id from rentroom order by id desc");
$row = $res->fetch_row();
$id = $row[0];

$conn->query("insert into booking_details (id,unique_id ,booking_status) 
values ('$id','$unique_id', '$booking_status')");
 
// Set a constant
define ("FILEREPOSITORY","profile_images/");
 
// Make sure that the file was POSTed.
if (is_uploaded_file($_FILES['pimage']['tmp_name']))
{
	
// Was the file a JPEG?
if ($_FILES['pimage']['type'] != "image/jpeg") {
echo "<p>Profile image must be uploaded in JPEG format.</p>";
} else {
 
//$name = $_FILES['classnotes']['name'];
$filename=$id.".jpg";
 
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],FILEREPOSITORY.$filename);
//$result = move_uploaded_file($_FILES['pimg']['tmp_name'],
"/profile_images/28.jpg";
if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}
header('location:view.php');
?>