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

if (isset($_GET['checkout'])){
    if (!isset($_SESSION['valid_user']))
    {
        header("refresh:0; url=login_signup.php");
    }else {
        $username = $_SESSION['valid_user'];
        $sql = "INSERT INTO f32ee.all_orders (order_username, order_date, order_itemstr, order_totprice, order_status) 
        VALUES ('$username', now(), '$ordered_items', $total, 1)";
        mysqli_query($conn, $sql);
        header("Refresh:0 url=../../profile_page.php");
    }
}

if (isset($_GET['updatecart']){
    header("Refresh:0 url=../../cart.php");
}

?>