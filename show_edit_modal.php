<!-- Edit Model -->

<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
</div>
<div class="modal-body">
<?php
$edit=$conn->query("select * from rentroom where id=".$row['id']);
$erow=$edit->fetch_assoc();
?>
<div class="container-fluid">
<form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">

<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Price:</label>
</div>
<div class="col-lg-8">
<input type="text" name="price" class="form-control" 
value="<?php echo $erow['price']; ?>">
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Location:</label>
</div>
<div class="col-lg-8" align="left">
<select name="location">
<?php if ($erow['location']=="Bhadrapur") {?>
<option selected>Bhadrapur</option>
<option>Chandragadi</option>
<option>Birtamode</option>
<?php}elseif ($erow['location']=="Chandragadi") {?>
<option>Bhadrapur</option>
<option selected>Chandragadi</option>
<option>Birtamode</option>
<?php }else{ ?>
<option>Bhadrapur</option>
<option>Chandragadi</option>
<option selected>Birtamode</option>
<?php }?>
</select>
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Location In Map:</label>
</div>
<div class="col-lg-8">
<input type="text" name="latitude" class="form-control" 
value="<?php echo $erow['latitude']; ?>">
</div>
</div>
<br>

<div class="row">
<div class="col-lg-4">
<label style="position:relative; top:7px;"></label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="longitude" 
value="<?php echo $erow['longitude']; ?>">
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Room:</label>
</div>
<div class="col-lg-8">
<input type="text" name="room" class="form-control" 
value="<?php echo $erow['room']; ?>">
</div>
</div>
<br>

<div style="height:40px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Description:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="description" 
value="<?php echo $erow['description']; ?>">
</div>
</div>
<br>
 
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Room Image:
</label>
</div>
 
<div class="col-lg-8">
 
<input type="file" class="filestyle" name="pimage" />
 
</div>
 
</div>
 
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>
<button type="submit" class="btn btn-warning">
<span class="glyphicon glyphicon-check"></span> Save</button>
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->