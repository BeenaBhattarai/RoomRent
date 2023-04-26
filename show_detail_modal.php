<!-- Detail Model -->
<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<h3> Room Details </h3>
</div>
<div class="modal-body">
<?php
$edit=$conn->query("Select * from rentroom where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">
<form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">
 
<div class="row">
<div class="col-lg-12" align="center">
<?php $img = "http://localhost/RoomRent/profile_images/".$row['id']. ".jpg";?>
<img src='<?php echo $img ?>' height="200px" width="370px" />
 
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Price:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['price']; ?>
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Room:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['room']; ?>
</div>
</div>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Location:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['location']; ?>
</div>
</div>

<div style="height:40px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Description:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['description']; ?>
</div>
</div>


<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-20" align="middle">
<label style="position:relative; top:7px;">Location In Map:</label>
</div>
<br>
<div class="col-lg-18" align="middle">
<iframe src='https://www.google.com/maps?q=<?php echo $erow["latitude"]; ?>,<?php echo $erow["longitude"]; ?>&h1=es;z=14&output=embed' style="width: 100%; height: 100% "></iframe>
</div>
</div>

 
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> 
Close</button>
 
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->