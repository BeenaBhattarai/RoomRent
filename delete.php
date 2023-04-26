<?php
include('php/config.php');
$id=$_GET['id'];
$conn->query("delete from booking_details where id=$id");
$conn->query("delete from rentroom where id=$id");
unlink("profile_images/".$id.".jpg");
header('location:profile.php');
?>

	