<?php
session_start();
$error= NULL;
include_once "php/config.php";
$unique_id=$_SESSION['unique_id'];

$sql = $conn->query("SELECT password FROM users WHERE unique_id = $unique_id");
 $row = $sql -> fetch_assoc() or die();
  $password=$row["password"];

if (isset($_POST['password']) && !empty($_POST['password']))
{
$old_password=$_POST['password'];
     
    if(md5($old_password) == $password)
    {
    	$new_password=$_POST['psw'];
    	$confirm_password=$_POST['psw-repeat'];

        if($new_password == $confirm_password){

          $conn->query("UPDATE users SET password= md5($new_password)  WHERE unique_id = $unique_id") ;

               echo "<script>alert('<p>Incorrect password</p>')</script>";

          header("Location:profile.php");
  
        }
    }
    else{
        echo "<script>alert('<p>Incorrect password</p>')</script>";

          header("Location:profile.php");
    }
    
}

?>