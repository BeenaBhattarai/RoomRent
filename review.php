<?php 

include 'php/config.php';
session_start();
error_reporting(0); // For not showing any error
$unique_id=$_SESSION['unique_id'];

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
  $name = $_POST['name']; // Get Name from form
  $email = $_POST['email']; // Get Email from form
  $comment = $_POST['comment']; // Get Comment from form

  $sql = "INSERT INTO comments (unique_id, name, email, comment)
      VALUES ('$unique_id','$name', '$email', '$comment')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Comment added successfully.')</script>";
  } else {
    echo "<script>alert('Comment does not add.')</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="css/style2.css">
  
  <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

  <title>Comment System in PHP - Pure Coding</title>
</head>
<body>
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
        <a class="nav-link" href="index.php">HOME</a>
      </li> &nbsp;&nbsp;&nbsp;
      <li class="nav-item active ">
        <a class="nav-link" href="index.php#about">ABOUT</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="index.php#location">LOCATION</a>
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li class="nav-item active">
        <a class="nav-link" href="query.php">REVIEW</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</header>
<!--End of Header Section -->

<br/><br/><br/>
<div class="row bg-dark">

    <!--First-Row-First-Column PP-Section. -->
    <div class="col-10">
      <br/><br/>
    <div class="wrapper">
    <form action="" method="POST" class="form">
      <div class="row">
        <div class="input-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your Name" required>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Enter your Email" required>
        </div>
      </div>
      <div class="input-group textarea">
        <label for="comment">Comment</label>
        <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Post Comment</button>
      </div>
    </form>
    <div class="prev-comments">
      <?php 
      
      $sql = "SELECT * FROM comments";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

      ?>
      <div class="single-item">
        <h4><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></h4>
        
        <p><?php echo $row['comment']; ?></p>
      </div>
      <?php

        }
      }
      
      ?>
    </div>
  </div>
  </div>
</body>
</html>