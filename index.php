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
    <!-- Navbar -->


    <header>
    <?php require('header1.php'); ?>
v    </header>


    <!-- Home-->
    <Section class="home container" id="home">
    <div class="home-text">
      <h1>Find Your Next<br> Perfect Place To<br>Live.</h1>
      <a href="view.php" class="btn1">+Let's Get Started?</a>
      
</div>
</Section>

     <!-- About -->
     <section class="about container" id="about">
        <div class="about-img">
            <img src="css/img/about1.jpg" alt="">
        </div>
         <div class="about-text">
            <span>About us</span>
            <h2>We Provide The Best Room For You !</h2>
            <p> The best the room, The happier the people ! </p>
            <p> We service you intending to provide you the best room at best price.</p>
            <p>Not just in side of tenant but owner as well seeking the owners to get the best tenant possible. </p>
            <p> Choose the best ! </p>
            <p> Live happier !</p> 
            
            <a href="#" class="btn">Learn More</a>
         </div>
     </section>

     <!-- Location -->
     <section class="location container" id="location">

     <!-- Box 1 -->
     <div class="box" id="box">
         <i class='bx bx-home-alt-2' ></i>
         <h3>Find your best room to chill!</h3>
         <p>Providing you the best room in <br><br><a href="location1.php" class="btn">Bhadrapur Area</a></p>
     </div>

   

     <!-- Box 2 -->
     <div class="box" id="box">
         <i class='bx bx-home-alt-2'></i>
         <h3>Find your best room to chill!</h3>
         <p>Providing you the best room in <br><br><a href="Location3.php" class="btn">Birtamode Area</a></p>
     </div>

     <!-- Box 3 -->
     <div class="box" id="box">
         <i class='bx bx-home-alt-2' ></i>
         <h3>Find your best room to chill!</h3>
         <p>Providing you the best room in <br><br><a href="Location2.php" class="btn">Chandragadi Area</a></p>
     </div>
 </section>

 <!--Newsletter -->
 <section class="newsletter container">
     <h2>Have Question in mind? <br> Let us help you!</h2>
     <form action="query.php">
        <input type="text" name="" id="email-box" placeholder="Your Questions?" required>
        <input type="submit" value="Send" class="btn">
    </form>
 </section>

<!--Footer-->
<section class="footer">
    <div class="footer-container container">
        <h2>RENTYOURSPACE</h2>
        <div class="footer-box">
            <h3>Quick Links</h3>
            <a href="view.php"> Find A Room</a>
            <a href="query.php"> Review </a>
     
        </div>
        <div class="footer-box">
            <h3>Locations</h3>
            <a href="Location1.php"> Bhadrapur</a>
            <a href="Location3.php"> Birtamode</a>
            <a href="Location2.php"> Chandragadi</a>
        </div>
        <div class="footer-box">
            <h3>Contacts</h3>
            <a href="#">+977-9824950846</a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsttFtppvgLcbcpjHPWDLJKqqkbxzcwtsTpxvpFKQzPlNXclzcfhvfPmShVHhHgjftMvVZxg">rentyourspace@gmail.com</a>
            <div class="social">
                <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
            </div>
        </div>

    </div>

</section>

</body>
</html>