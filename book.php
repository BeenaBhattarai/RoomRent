<?php
include('php/config.php');
session_start();
$unique_id= $_SESSION['unique_id'];
$id=$_GET['id'];
      
      $sql = $conn->query("SELECT booking_status FROM booking_details WHERE id = $id");
     $row2 = $sql -> fetch_assoc() or die();
      $booking_status= $row2["booking_status"];

    if($booking_status == 'Not Booked' ){
         
         $booked_id=$_SESSION['unique_id'];

    $conn->query("UPDATE booking_details SET status = 1,booking_status='Booked', booked_id='$booked_id' WHERE id =$id") ;

         echo '<script>alert("Congratulations!! The room is successfully booked")</script>';
    
?>

<html>
<head>
    <link rel="stylesheet" href="css/style7.css">
    <title></title>
</head>
<body>
    

    <div class="ticket">
        <img src="css/img/logo.png" alt="Logo" height="100px" width="70px" >

        <?php
        include('php/config.php');
          $id=$_GET['id'];
          $sql=mysqli_query($conn, "Select users.img,users.fname,users.lname,booking_details.booking_status from users, booking_details WHERE users.unique_id=booking_details.booked_id AND booking_details.id = $id");
            if(mysqli_num_rows($sql)>0){
              $row1 = mysqli_fetch_assoc($sql); 
          }
          $booking_status=$row1['booking_status'];
         if($booking_status= 'Booked'){
        ?>

        <p class="centered">BOOKING RECEIPT</p>
        <p class="image">
        <br> <span><img src="php/images/<?php echo $row1['img']; ?>" height="40px" width="30px" border-radius="50%" />
        <?php echo $row1['fname'];?><?php echo $row1['lname']; ?></span></p>
       <br/>

       <table>
        <thead>
            <tr>
                <th class="q"><center>R_ID</center></th>
                <th class="q"><center>Picture</center></th>
                <th class="d"><center>Location</center></th>
                <th class="p"><center>No.of.Room</center></th>
                <th class="p"><center>Price</center></th>
            </tr>
        </thead>
        <tbody>
            <?php
                include('php/config.php');
                $sql=mysqli_query($conn, "Select rentroom.id, rentroom.location,rentroom.room,rentroom.price from rentroom, booking_details WHERE rentroom.id=$id");
                if(mysqli_num_rows($sql)>0){
               $row = mysqli_fetch_assoc($sql);
               }
                $img = "http://localhost/RoomRent/profile_images/".$row['id']. ".jpg";
            ?>
        <tr>
            <td class="q"><?php echo $row['id']; ?></td>
            <td class="q"> <img src='<?php echo $img ?>' height="50px" width="70px" /></td>
            <td class="d"><?php echo $row['location']; ?></td>
            <td class="p"><?php echo $row['room']; ?></td>
            <td class="p"><?php echo $row['price']; ?></td>
        </tr>
        <tr>
            <td class="q"></td>
            <td class="q"></td>
            <td class="d"></td>
            <td class="p">TOTAL</td>
            <td class="p"><?php echo $row['price']; ?></td>
    </tbody>
</table>
<p class="centered">Thank you for booking! <br>Enjoy your thrilled and chilled room</p>
    </div>
  <?php } 
  else{

    echo "Sorry The Room is not Booked!";
  }
    ?>
    <button id="btnPrint" class="hidden-print">Print</button>
    <script src="javascript/script.js"></script>
    <?php 
    }
    else{

        echo '<script>alert("Sorry! This room is already booked")</script>';
    }
    ?>
</body>

</html>




