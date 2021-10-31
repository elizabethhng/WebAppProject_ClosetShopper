<?php // register.php
include "dbconnect.php";
// if (isset($_POST['submit'])) {
// 	if (empty($_POST['username']) || empty ($_POST['password'])
// 		|| empty ($_POST['password2']) || empty ($_POST['address'])) {
// 	echo "All records to be filled in";
// 	exit;}
// 	}

//store variables from register form
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$address = $_POST['address'];


if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
	}

$password = md5($password); //hash password

$sql = "INSERT INTO users (username, password,address) 
		VALUES ('$username', '$password','$address')"; //insert new account details
$result = $dbcnx->query($sql);

session_start();
if (!$result){ //If insert fail due to duplicate username
	$_SESSION['reg_fail']= true; //display error message
	header("refresh:0; url=../../login_signup.php");
}
else{ //if account created successfully, login the user
	$_SESSION['valid_user']=$username;
	$_SESSION['address']=$address;
	if(isset($_SESSION['cart'])){ //if user added items to cart before registration, redirect back to cart
		$message= "Welcome <b>". $username . "</b>. You are now registered.<br> Please Proceed With Checkout";
		header("refresh:2; url=../../cart.php");
	}
	else{
		$message= "Welcome <b>". $username . "</b>. You are now registered<br> you will be redirected to your profile page in 2 seconds";
		header("refresh:2; url=../../profile_page.php");
	}
	
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - REGISTERED</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="../../cs_stylesheet.css">
</head>
<body>


<div id="wrapper">
    <!-- Top navigation -->
    <div class="topnav">

        <!-- Centered link -->
        <div class="topnav-centered" style= "height:75px;">
            <a href="../../index.php"><img src="../../media\logo.png" width="260px" height="28px" alt="logo" style="float:center;" ></a>
        </div>
    
    </div>

    <div class="content" style="height:200px">
        <ul class="breadcrumb">
                <hr style="margin-top:5px;">
        </ul>

        <h1><strong>Registration status</strong></h1>
        <!-- display message -->
        <h1 style= "font-weight: normal;"><?php echo $message?> </h1> 

    </div>

    <footer>
        <ul>
            <li><a><strong>We'd love to hear your feedback!</strong></a></li>
            <li><a><img src="../../media\call_icon.png" width="8px" height="8px" alt="call_icon" >
                Call Us : +65 6123 4567</a></li>
            <li><a href=
                "mailto:CLOSETSHOPPER@eee.com" ><img src="../../media\email_icon.png" width="8px" height="8px" alt="call_icon" > Email Us: CLOSETSHOPPER@eee.com</a></li>
        </ul> 
        <p style ="text-align: center; font-size: xx-small; padding-bottom: 5px; margin-top: 5px;" ><i> &copy;Copyright CLOSET SHOPPER  2021 All Rights Reserved</i></p>
    </footer>
</div>
</body>
</html>
