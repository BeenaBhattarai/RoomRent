<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}
$unique_id=$_SESSION['unique_id'];
?>
<?php include_once "header.php"; ?>
<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>

          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            
          </div>
        </div>
         <a href="index.php" class="logout">Home Page</a>

         
       
      </header>
      <br/>
      <h2>Total Room Booked:</h2>
      <a href="profile.php#Post">

        <?php
                $query = "SELECT booking_status FROM booking_details WHERE booking_status='booked' AND unique_id= {$_SESSION['unique_id']}";
                $query_run = mysqli_query($conn, $query);
                    $row = mysqli_num_rows($query_run);
                      echo '<h3 >'.$row.' Room Booked.  </h3>';
                      $r=$row;
            ?>
            <br>
            <hr>
            <hr>
            <br/>
          </a>
          <h2>New Notifications:</h2>
          

      </a>
      
     </div>
    </section>
  </div>

  
</body>
</html>