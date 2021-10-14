<?php //authmain.php
include "dbconnect.php";
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];
/*
  $db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }
*/
$password = md5($password);
  $query = 'select * from users '
           ."where username='$userid' "
           ." and password='$password'";

// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    $row = mysqli_fetch_assoc($result);
    // if they are in the database register the user id and address
    $_SESSION['valid_user'] = $userid;
    $_SESSION['address']=$row['address'];
    
  }
  $dbcnx->close();
}

  if (isset($_SESSION['valid_user']))
  {
    header("refresh:0; url=../../profile_page.php");
  }
  else
  {
    if (isset($userid))
    {
      // if they've tried and failed to log in
      $_SESSION['login_fail']= true;
      header("refresh:0; url=../../login_signup.php");

    }
  }
?>

