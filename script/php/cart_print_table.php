<?php
//This file is part of the cart.php page, whereby this page is invoked whenever a cart button is clicked, to update the latest values
Session_start();
$c = $_SESSION['cart'];
$cart=array_count_values($c);   //retrieves product id and respective quantities in user's cart within the session
ksort($cart);

include "script/php/fetch_product_details.php"; //include script to retrieve product details

$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$total = 0;

//Display table in cart.php 
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
    echo $qty;
    echo "<button type='submit' name='add' value='$product_id'>+</button>
    </form></td><td></td><td>SGD $";
    $subtotal = $price*$qty;
    echo $subtotal;
    echo "</td></tr>";
    $total = $total + $subtotal;
}


if (isset($_POST['delete'])) {  //If user clicks "x" in item row
    $i = $_POST['delete'];
    foreach($_SESSION['cart'] as $product_id) {
        if($product_id==$i){
            $key=array_search($i,$_SESSION['cart']);
            unset($_SESSION['cart'][$key]);
        }
    }
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";
} 
if (isset($_POST['add'])) {     //If user clicks "+" in item row
    $i = $_POST['add'];
    $_SESSION['cart'][] = $i;
    echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";//Redirect to cart.php
} 
if (isset($_POST['sub'])) {     //If user clicks "-" in item row
    $i = $_POST['sub'];        
    $key=array_search($i,$_SESSION['cart']);
    unset($_SESSION['cart'][$key]);
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
    echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";//Redirect to cart.php
}
mysqli_close($conn);
?>