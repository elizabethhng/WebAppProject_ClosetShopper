<?php // register.php
include "dbconnect.php";
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) || empty ($_POST['address'])) {
	echo "All records to be filled in";
	exit;}
	}
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$address = $_POST['address'];


// echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
	}
$password = md5($password);
// echo $password;
$sql = "INSERT INTO users (username, password,address) 
		VALUES ('$username', '$password','$address')";
//	echo "<br>". $sql. "<br>";
$result = $dbcnx->query($sql);
session_start();
if (!$result){
	$_SESSION['reg_fail']= true;
	header("refresh:0; url=../../login_signup.php");
}
else{
	$_SESSION['valid_user']=$username;
	echo "Welcome ". $username . ". You are now registered, you will be redirected to your profile page in 2 seconds";
	header("refresh:2; url=../../profile_page.php");
}
?>