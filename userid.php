<?php 
  session_start();
  include_once "php/config.php";
  $userID= $_SESSION["unique_id"];

  echo "$userID";

  $sql = $conn->query("SELECT * FROM rentroom WHERE unique_id = {$userID}");

 $row = $sql -> fetch_assoc() or die();
  printf ("%s\n", $row["unique_id"]);
?>

<html>


<div class="prev-comments">
      <?php 
      
      $sql = "SELECT * FROM comments";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="single-item">
        <h4><?php echo $row['name']; ?></h4>
        <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
        <p><?php echo $row['comment']; ?></p>
      </div>
      <?php

        }
      }
      
      ?>
    </div>
  </div>
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









$id=$_GET['id'];
$conn->query("delete from rentroom where id=$id");
unlink("profile_images/".$id.".jpg");
header('location:view.php');





$sql = $conn->query("SELECT booking_status FROM rentroom WHERE id = $id");

    $row = $sql -> fetch_assoc() or die();
      $booking_status= $row["booking_status"];
      echo  $booking_status;




<!--chat-->
<div class="modal fade" id="chat<?php echo $row['id']; ?>" 
tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<center><h4 class="modal-title" id="myModalLabel">Book?</h4></center>
</div>
<div class="modal-body">
 
<div class="container-fluid">
<h5><center>Are you sure you want to proceed to chat?</center></h5>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">
<span class="glyphicon glyphicon-remove"></span> Cancel</button>
<a href="book.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">
<span class="glyphicon glyphicon-trash"></span> Send Message</a>
</div>
 
</div>
</div>
</div>
<!-- /.modal -->