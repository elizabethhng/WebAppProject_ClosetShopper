<?php
Session_start();
$cart=array_count_values($_SESSION['cart']);
$ordered_items=serialize($cart);
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

include 'script/php/print_cart.php';
$username = $_SESSION['valid_user'];
if (isset($_POST['checkout'])){
    $sql = "INSERT INTO f32ee.all_orders (order_username, order_date, order_itemstr, order_totprice, order_status) 
    VALUES ('$username', now(), '$ordered_items', $total, 1)";
    mysqli_query($conn, $sql);
    echo "checkout";
}
?>