<?php
include('php/config.php');
$id=$_GET['id'];
$conn->query("delete from comments where id=$id");
header('location:profile.php#post');
?>