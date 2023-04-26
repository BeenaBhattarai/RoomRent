<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Room Rental Website </title>
    <!-- Link To CSS -->
    <link href="css/style4.css" rel="stylesheet" type="text/css" />

    <!-- Box Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

   <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>


<body>
<header>
        <div class="nav container">

            <!-- Logo -->
            <a href="index.php"><i class="fas fa-home fa-2x "></i><h3>RentYourSpace</a></h3>

            <!--Menu Icon -->
            <input type="checkbox" name="" id="menu">
            <label for="menu"><i class='bx bx-menu' id="menu-icon"></i></label>

            <!-- Nav List -->
            <ul class="navbar">
               <li><a href="index.php">Home</a></li>
               <li><a href="#about">About</a></li>
               <li><a href="#location">Location</a></li>
               <li><a href="review.php">Review</a></li>
            </ul>

             <div class="users">
            <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <a href="profile.php">
          <img src="php/images/<?php echo $row['img']; ?>" alt=""  border-radius="50%" >
            <span><?php echo $row['fname'] ?></span>
        </a>
    </div>
    <a href="users.php"><i class="fab fa-facebook-messenger fa-2x"></i></a>
    <a href="notification.php"><i class="far fa-bell fa-2x"></i></a>

        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="btn1">Logout</a>
    </div>
        </div>


    </header>
  
    </html>