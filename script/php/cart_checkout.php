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
    include 'email_comfirm.php';
    unset($_SESSION['cart']);
    //echo "<script type='text/javascript'> document.location = 'profile_page.php'; </script>";
    header("Refresh:4 url=../../profile_page.php");
    echo("Thank you for shopping with us! Comfirmation Email has been send to you! <br>Redirection to Profile Page in 3 seconds!");
}

if (isset($_POST['fail'])){
    //echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";
    header("Refresh:1 url=../../cart.php");
    echo("Payment unsuccessful! Please try again!");
}

?>