<?php
include('php/config.php');


$id=$_GET['id'];
$price=$_POST['price'];
$room=$_POST['room'];
$location=$_POST['location'];
$description=$_POST['description'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
 
$conn->query("update rentroom set price='$price', room='$room', 
location='$location', description='$description', latitude='$latitude', longitude='$longitude' where id=$id");
 
 
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
 
unlink(FILEREPOSITORY.$filename);
$result = move_uploaded_file($_FILES['pimage']['tmp_name'],
FILEREPOSITORY.$filename);
//$result = move_uploaded_file($_FILES['pimg']['tmp_name'],
"/profile_images/28.jpg";
if ($result == 1) echo "<p>File successfully uploaded.</p>";
else echo "<p>There was a problem uploading the file.</p>";
}
}
 
header('location:profile.php');
 
?>