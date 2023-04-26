<?php session_start();
include_once "php/config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Room Rental Website </title>

    <!-- Link To CSS -->
    <link href="css/style8.css" rel="stylesheet" type="text/css" />


    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <script>

        $(document).ready(function(){
        $('#roomTable').dataTable();
        $('.file-upload').file_upload();
        });

    </script>
</head>

    
  <body>
    <!--Header Section -->
    <header>
    <div class="container-fluid flex shadow-sm bg-white rounded"><br>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;               &nbsp;&nbsp;&nbsp;&nbsp;
   <a class="navbar-brand" href="index.php"><i class="fas fa-home fa-2x text-gray-300"></i></a>&nbsp;&nbsp;&nbsp;
  <a class="navbar-brand" href="index.php"><h5>RENTYOURSPACE </h5></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><b>HOME</b></a>
      </li> &nbsp;&nbsp;&nbsp;
      <li class="nav-item active ">
        <a class="nav-link" href="index.php#about"><b>ABOUT</b></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="index.php#location"><b>LOCATION</b></a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="query.php"><b>REVIEW</b></a>
      </li>
    </ul>
  </div>
</nav>
</div>
</header>
<!--End of Header Section -->


<!-- Body Part Starts -->
<body>

<hr>
<div class="container-fluid">
  <div class="row bg-light">

    <!--First-Row-First-Column PP-Section. -->
    <div class="col-1">
    </div>

    <div class="col-10">
      <br/><br/><br/><br/><br/><br/><br/>

       <section class="about">

      <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>

        
         <div class="about-img">
          <img src="php/images/<?php echo $row['img']; ?>" alt=""  class="rounded-circle" height="150" width="220">
        </div>

      <div class="about-details" style="margin-bottom: 20px auto;">
        <br/><br/>
          <span><h3 style="font-weight:600;"><?php echo $row['fname'] ?>&nbsp;<?php echo $row['lname'] ?></h3></span>
          <a href="#Post">
          <?php
          
                $query = "SELECT id FROM rentroom WHERE unique_id = {$_SESSION['unique_id']}";
                $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                      echo '<h5 >'.$row.' posts </h5>';
                        ?>
            </a>

        </div>
    

    </div>
 </section>   
  </div>


   <section class="option">
    <div class="row bg-light">
      <div class="col-4"></div>
   
        <div class="col-5 ">
          <div class="option-list">
          
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link disabled" href="#">About</a>&nbsp;&nbsp;
      <a class="nav-item nav-link active" href="#Post">Posts</a>&nbsp;&nbsp;
      <a class="nav-item nav-link active" href="#Post">Booking</a>&nbsp;&nbsp;
      <a class="nav-item nav-link active" href="#Review">Review</a>&nbsp;&nbsp;
    </div>
  </div>
</a>
</nav>
</div>
        </div>

        <!-- Setting Section -->
<div class="option-setting">
    <div class="col-2 bg-light ">
      <br/>
     <div class="dropdown">
     <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-user-edit fa-1x"></i> 
     </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="show_password_modal.php">Change Password</a>
    <a class="dropdown-item" href="show_profilechange_modal.php">Change Profile-Photo</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
      
    </a>
<br/>
<br/>

    </div>
  </div>
  </div>
  <hr>
  
  <div class="row">
    <!--Second-row-Second-Column -->
    <div class="col-2">


    </div>
    <div class="col-1 bg-light">
    </div>

    <!-- Second-row-Third-Column Post $ Review -->

    <div class="col shadow-lg p-3 mb-5 bg-light rounded"  id="Post">

       <!--Post Starts -->
      <center><h4> Room Post</h4></center>
      <div class="row header col-sm-12" style="text-align:center;color:green">
      <span class="pull-left">
      <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm">
      <span class="glyphicon glyphicon-plus"></span><i class="fas fa-plus fa-1x text-gray-300"></i>&nbsp;List a place</a></span>

      <div style="height:50px;"></div>
      <table class="table table-striped table-responsive table-hover" id="empTable" >
      <thead>
      <th><center>Room_ID</center></th>
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
      $result=$conn->query("Select rentroom.id,price,location,description,booking_status from rentroom,booking_details WHERE rentroom.id=booking_details.id AND rentroom.unique_id=$unique_id");
      while($row=$result->fetch_assoc()){
      $img = "http://localhost/RoomRent/profile_images/".$row['id']. ".jpg";
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
      <td><img src='<?php echo $img ?>' height="50px" width="70px" /></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['location']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['booking_status']; ?></td>
      <td>

      <a href="#detail<?php echo $row['id']; ?>" 
      data-toggle="modal" class="btn btn-success btn-sm">
      <span class="glyphicon glyphicon-floppy-open">
      </span>Detail</a>&nbsp;

      <a href="#edit<?php echo $row['id']; ?>" 
      data-toggle="modal" class="btn btn-warning btn-sm">
      <span class="glyphicon glyphicon-edit">
      </span> Edit</a>&nbsp;

      <a href="#del<?php echo $row['id']; ?>" 
      data-toggle="modal" class="btn btn-danger btn-sm">
      <span class="glyphicon glyphicon-trash">
      </span> Delete</a>

      <a href="#bkr<?php echo $row['id']; ?>" 
      data-toggle="modal" class="btn btn-primary btn-sm">
      <span class="glyphicon glyphicon-trash">
      </span> Receipt</a>

      <!-- include detail modal -->
      <?php include('show_detail_modal.php'); ?>
      <!-- End -->
      <!-- include edit modal -->
      <?php include('show_edit_modal.php'); ?>
      <!-- End -->
      <!-- include delete modal -->
      <?php include('show_delete_modal.php'); ?>
      <!-- End -->
      <!-- include receipt modal -->
      <?php include('show_receipt_modal.php'); ?>
      <!-- End -->
      </td>
      </tr>
      <?php } ?>
      </tbody>
      </table>
      </div>
      <!-- include insert modal -->
      <?php include('show_add_modal1.php'); ?>
      <!-- End -->
      </div>
          </div>
    </div>



    <div class="row">
      <div class="col-8 shadow-lg p-3 mb-5 bg-light rounded" style="margin:30px auto" id="Post">
        <center><h4> Own Booking details </h4></center>
        <table class="table table-borderless">
          <thead>
        <th><center>Room_ID</center></th>
        <th><center>Booking_ID</center></th>
        <th><center>Price</center></th>
        <th><center>Location</center></th>
        <th><center>Action</center></th>
        </thead>
           <tbody>
            <?php
            include('php/config.php');
             $unique_id= $_SESSION['unique_id'];

             $result=$conn->query("Select booking_details.id,price,location from rentroom,booking_details WHERE rentroom.id=booking_details.id AND booked_id=$unique_id ");

            while($row=$result->fetch_assoc()){
            ?>

          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td>
              <a href="#bkr<?php echo $row['id']; ?>" 
              data-toggle="modal" class="btn btn-primary btn-sm">
              <span class="glyphicon glyphicon-trash">
              </span> Receipt</a>

              <!-- include receipt modal -->
            <?php include('show_receipt_modal.php'); ?>
            <!-- End -->
          </td>
          </tr>
           <?php } ?>
         </tbody>
       </table>
     </div>
   </div>

  <div class="row">
      <div class="col-8 shadow-lg p-3 mb-5 bg-light rounded" style="margin:30px auto" id="Post">
          <center><h4> Review Post</h4></center>
        <table class="table table-borderless">
          <thead>
        <th><center>Review</center></th>
        <th><center>Action</center></th>
        </thead>
           <tbody>
            <?php
                include('php/config.php');
                $unique_id= $_SESSION['unique_id'];
      $result=$conn->query("select * from comments WHERE unique_id={$unique_id}");
      while($row=$result->fetch_assoc()){
        ?>
        <tr>
          <td><?php echo $row['comment']; ?></td>
          <td>
            <a href="#dele<?php echo $row['id']; ?>" 
      data-toggle="modal" class="btn btn-danger btn-sm">
      <span class="glyphicon glyphicon-trash">
      </span> Delete</a>

          <!-- include delete modal -->
            <?php include('show_delete_modal1.php'); ?>
          <!-- End -->
        </td>
      </tr>
      <?php } ?>
    </tbody>
              
        </table>

      </div>
  </div>
</div>


</body>
</html>

            


   