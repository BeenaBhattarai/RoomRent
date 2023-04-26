<?php session_start();
include_once "php/config.php";

?>

<html>
<head>

<title>Crud Operation</title>
<script src="css/jquery.min_.js"></script>
<link rel="stylesheet" href="css/bootstrap.min_.css" />
<script src="css/bootstrap.min_.js"></script>
<link rel="stylesheet" href="css/jquery.dataTables.min_.css"></style>
<script type="text/javascript" src="css/jquery.dataTables.min_.js"></script>
<script type="text/javascript" src="css/bootstrap-filestyle.min_.js"> </script>
<link href="css/fonts.css" rel="stylesheet">
<script>

$(document).ready(function(){
$('#empTable').dataTable();
$('.file-upload').file_upload();
});

</script>
</head>

<a href="index.php">
<img border="0" src="css/img/home1.jpg" width="180" height="80">
</a>


<body style="margin:20px auto">

<div class="container">
<br/><br/>

<div style="height:50px;"></div>
<table class="table table-striped table-bordered table-responsive table-hover" id="empTable" >
<thead>
<th><center>Picture</center></th>
<th><center>Price</center></th>
<th><center>Location</center></th>
<th><center>Description</center></th>
<th><center>Booking Status</center></th>
<th><center>Action</center></th>
</thead>
<tbody>
<?php
include('php/config.php');
$unique_id= $_SESSION['unique_id'];
$result=$conn->query("Select rentroom.id, price, location, description, booking_status from rentroom , booking_details WHERE rentroom.id=booking_details.id AND rentroom.unique_id<>{$unique_id} AND location='Chandragadi'AND booking_status='Not Booked'");
while($row=$result->fetch_assoc()){
$img = "http://localhost/RoomRent/profile_images/".$row['id']. ".jpg";
?>
<tr>
<td> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
<td><?php echo $row['price']; ?></td>
<td><?php echo $row['location']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['booking_status']; ?></td>
<td>

<a href="#detail<?php echo $row['id']; ?>" 
data-toggle="modal" class="btn btn-success btn-sm">
<span class="glyphicon glyphicon-floppy-open">
</span>Detail</a>&nbsp;

<a href="#book<?php echo $row['id']; ?>" 
data-toggle="modal" class="btn btn-primary btn-sm">
<span class="glyphicon glyphicon-trash">
</span>Book</a>&nbsp;

<a href="#chat<?php echo $row['id']; ?>" 
data-toggle="modal" class="btn btn-info btn-sm">
<span class="glyphicon glyphicon-trash">
</span>chat</a>&nbsp;

<!-- include detail modal -->
<?php include('show_detail_modal.php'); ?>
<!-- End -->
<!-- include book modal -->
<?php include('show_book_modal.php');
?>
<!-- include chat modal -->
<?php include('show_chat_modal.php');
?>
<!-- End -->
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
<!-- include insert modal -->
<?php include('show_add_modal.php'); ?>
<!-- End -->
</div>
</body>
</html>