<?php
Session_start();
$c = $_SESSION['cart'];
$cart=array_count_values($c);

include "script/php/fetch_product_details.php";
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_GET['delete'])) {
    $i = $_GET['delete'];
    foreach($_SESSION['cart'] as $product_id) {
    $key=array_search($i,$_SESSION['cart']);
    unset($_SESSION['cart'][$key]);
    }
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    header("Refresh:0 url=cart.php");
} 
if (isset($_GET
['add'])) {
    $i = $_GET
    ['add'];
    $_SESSION['cart'][] = $i;
    header("Refresh:0 url=cart.php");
} 
if (isset($_GET
['sub'])) {
    $i = $_GET
    ['sub'];
    $key=array_search($i,$_SESSION['cart']);
    unset($_SESSION['cart'][$key]);
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    header("Refresh:0 url=cart.php");
}

$total = 0;
foreach ($cart as $product_id => $qty) {
    $sql = "SELECT product_price FROM f32ee.all_products WHERE product_id = $product_id;";
    if ($result = mysqli_query($conn, $sql)) {
        $row = mysqli_fetch_row($result);
        $price = number_format((float)$row[0], 2, '.', '');
    } else {
        echo "Failed fetching data from database.";
    }
    
    echo "<tr><td>
    <form method=POST id='cart_table'>
    <button type='submit' name='delete' value='$product_id'>x</button>
    </td><td>";

    echo "<img src=";
    echo insert_image($product_id);
    echo "></td><td>";
    echo insert_name($product_id);
    echo "</td><td>
    <button type='submit' name='sub' value='$product_id'>-</button>";
    echo "<input type='text' value=$qty></input>";
    echo "<button type='submit' name='add' value='$product_id'>+</button>
    </form></td><td></td><td>SGD $";
    $subtotal = $price*$qty;
    echo $subtotal;
    echo "</td></tr>";
    $total = $total + $subtotal;
}

if (isset($_POST['delete'])) {
    $i = $_POST['delete'];
    foreach($_SESSION['cart'] as $product_id) {
    $key=array_search($i,$_SESSION['cart']);
    unset($_SESSION['cart'][$key]);
    }
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    echo "<script type='text/javascript'> document.location.href = 'cart.php'; </script>";
} 
if (isset($_POST['add'])) {
    $i = $_POST['add'];
    $_SESSION['cart'][] = $i;
    echo "<script type='text/javascript'> document.location.href = 'cart.php'; </script>";
} 
if (isset($_POST['sub'])) {
    $i = $_POST['sub'];
    $key=array_search($i,$_SESSION['cart']);
    unset($_SESSION['cart'][$key]);
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    echo "<script type='text/javascript'> document.location.href = 'cart.php'; </script>";
}

mysqli_close($conn);
?>