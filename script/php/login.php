<?php //authmain.php
include "dbconnect.php";
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  $password = md5($password); //hash password
  $query = 'select * from users ' //check input username and password
           ."where username='$userid' "
           ." and password='$password'";

  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )    // if they are in the database register the user id and address
  {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['valid_user'] = $userid; //set session variable
    $_SESSION['address']=$row['address']; 
    
  }
  $dbcnx->close();
}

//After logged in if successful
  if (isset($_SESSION['valid_user'])) 
  {
    if(isset($_SESSION['cart']))      //If logged in and cart has items,
    header("refresh:0; url=../../cart.php"); //redirect to cart
    else
    header("refresh:0; url=../../profile_page.php"); //If logged in and cart has NO items, redirect to profile_page.php

  }

//After logged in if NOT successful
  else
  {
    if (isset($userid)) //If login attempted but username or pasword wrong (login field in form is set)
    {
      $_SESSION['login_fail']= true; //display error message
      header("refresh:0; url=../../login_signup.php");//redirect to login_signup.php for user to try again
    }
  }
?>

