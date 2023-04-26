
<div class="Container">
<!-- Add New employee-->
<div class="modal " id="addnew" tabindex="-1" role="dialog" 
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Insert New Room</h4></center>
</div>
<div class="modal-body">
<div class="container-fluid">
<form method="POST" action="insert1.php" class="form-horizontal" 
enctype="multipart/form-data" >

<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Price:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="price" placeholder="Enter the price of room">
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Location:</label>
</div>
<div class="col-lg-8">
<select name="location">
<option>Bhadrapur</option>
<option>Chandragadi</option>
<option>Birtamode</option>

</select>
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Location In Map:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="latitude" placeholder="Enter latitude of Your Location">
</div>
</div>
<br>

<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;"></label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="longitude" placeholder="Enter longitude of Your Location">
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Room:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="room" placeholder="Enter the number of rooms">
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Description:</label>
</div>
<div class="col-lg-8">
<input type="text" class="form-control" name="description" placeholder="Mention the description of room">
</div>
</div>
<br>

<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4">
<label class="control-label" style="position:relative; top:7px;">Room Image:</label>
</div>
<div class="col-lg-8">
<input type="file" class="filestyle" name="pimage"/>
</div>
</div>
</div>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>

<button type="submit" class="btn btn-primary">
<span class="glyphicon glyphicon-floppy-disk"></span> Save</a>

</form>
</div>
</div>
</div>
</div>