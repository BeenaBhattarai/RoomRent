<!-- Delete -->
<div class="modal fade" id="bkr<?php echo $row['id']; ?>" 
tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Receipt?</h4></center>
</div>
<div class="modal-body">
 
<div class="container-fluid">
<h5><center>Do you want the receipt?</center></h5>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="book_receipt.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
<span class="glyphicon glyphicon-trash"></span>Receipt</a>
</div>
 
</div>
</div>
</div>
<!-- /.modal -->