<?php
Session_start();
$cart=array_count_values($_SESSION['cart']);
$ordered_items=serialize($cart);
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

foreach ($cart as $product_id => $qty) {
    $sql = "SELECT product_price FROM f32ee.all_products WHERE product_id = $product_id;";
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_row($result);
        $price = number_format((float)$row[0], 2, '.', '');
    } else {
        echo "Failed fetching data from database.";
    }
    $subtotal = $price*$qty;
    $total = $total + $subtotal;
}

if (isset($_POST['pass'])){
    $username = $_SESSION['valid_user'];
    $sql = "INSERT INTO f32ee.all_orders (order_username, order_date, order_itemstr, order_totprice, order_status) 
    VALUES ('$username', now(), '$ordered_items', $total, 1)";
    mysqli_query($conn, $sql);
    //include 'email_comfirm.php';
    $to      = $username;
    $subject = 'Your Order is Confirmed!';
    $message = 'Thank you for shopping with Closet Shoppers! Your order has been confirmed';
    $headers = 'From: f32ee@localhost' . "\r\n" .
        'Reply-To: f32ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers,'-ff32ee@localhost');

    unset($_SESSION['cart']);
    //echo "<script type='text/javascript'> document.location = 'profile_page.php'; </script>";
    header("Refresh:2 url=../../profile_page.php");
    $message="<br><br>Thank you for shopping with Closet Shopper!<br>A Confirmation Email has been sent to you and you will be redirected to the profile page.";
    // echo("Thank you for shopping with us! Comfirmation Email has been send to you! <br>Redirection to Profile Page in 3 seconds!");
}

if (isset($_POST['fail'])){
    //echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";
    header("Refresh:2 url=../../cart.php");
    $message="<br><br>Payment Unsuccessful, Please try again! <br>You will be redirected to your cart.";
    // echo("Payment unsuccessful! Please try again! You will be redirected to your cart.");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - PAYMENT STATUS</title>
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
            <a href="index.php"><img src="../../media\logo.png" width="260px" height="28px" alt="logo" style="float:center;" ></a>
        </div>
    
    </div>

    <div class="content" style="height:300px">
        <ul class="breadcrumb">
                <hr style="margin-top:5px;">
        </ul>

        <h1><strong>Payment Status</strong></h1>
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
