<?php
session_start();
$error= NULL;
include_once "config.php";
$unique_id=$_SESSION['unique_id'];

$sql = $conn->query("SELECT password FROM users WHERE unique_id = {$unique_id}");
 $row = $sql -> fetch_assoc() or die();
  $password=$row["password"];

if(isset($_POST['submit'])){

	$password1= md5($_REQUEST['pass']);
	$password = md5($_REQUEST['psw']);
	$cpassword = md5($_REQUEST['psw-repeat']);

	if($password1 != $password){
		$error = "<p> Your old password do not match</p>";
    }
    else if($password != $cpassword){
		$error = "<p> Your passwords do not match</p>";
	}
	else{
		echo "Your password is changed";

		$conn->query("UPDATE users SET password =$password1 WHERE unique_id = $unique_id") ;
	}
}

?>