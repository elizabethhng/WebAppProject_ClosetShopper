<?php
// This file is invoked from the cart.php page, upon clicking the checkout button
// Upon checkout, totalled prices are calculated and actions will be taken depending on payment ; successful OR unsuccessful
Session_start();
$cart=array_count_values($_SESSION['cart']);      //retrieves product id and respective quantities in user's cart within the session
ksort($cart);
$ordered_items=serialize($cart);                  //serialize array to store in SQL as a field
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee"); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

foreach ($cart as $product_id => $qty) {
    $sql = "SELECT product_price FROM f32ee.all_products WHERE product_id = $product_id;"; //load price for each product_id in cart from sql
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_row($result);
        $price = number_format((float)$row[0], 2, '.', '');
    } else {
        echo "Failed fetching data from database.";
    }
    $subtotal = $price*$qty;    //calculate subtotal per product
    $total = $total + $subtotal;//calculate total price
}

//If payment SUCCESSFUL, 1.Save order, 2.Send Email, 3.Unset Cart in session
if (isset($_POST['pass'])){      
    $username = $_SESSION['valid_user']; //load username
    
    //Insert order details to all_orders table
    $sql = "INSERT INTO f32ee.all_orders (order_username, order_date, order_itemstr, order_totprice, order_status) 
    VALUES ('$username', now(), '$ordered_items', $total, 1)";
    mysqli_query($conn, $sql);

    //Send confirmation Email to user's registered email address(username)
    $to      = $username;
    $subject = 'Your Order is Confirmed!';
    $message = 'Thank you for shopping with Closet Shoppers! Your order has been confirmed';
    $headers = 'From: f32ee@localhost' . "\r\n" .
        'Reply-To: f32ee@localhost' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers,'-ff32ee@localhost');

    //Clear cart in session, display confirmation message and redirect to profile_page.php
    unset($_SESSION['cart']);
    header("Refresh:2 url=../../profile_page.php");
    $message="<br><br>Thank you for shopping with Closet Shopper!<br>A Confirmation Email has been sent to you and you will be redirected to the profile page.";
}

//If payment UNSUCCESSFUL, redirect to cart.php, no further action taken.
if (isset($_POST['fail'])){
    header("Refresh:2 url=../../cart.php");
    $message="<br><br>Payment Unsuccessful, Please try again! <br>You will be redirected to your cart.";
}

?>

<!--Display post payment message  -->
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
            <a href="../../index.php"><img src="../../media\logo.png" width="260px" height="28px" alt="logo" style="float:center;" ></a>
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
