<?php
Session_start();
$cart=array_count_values($_SESSION['cart']);

include "script/php/fetch_product_details.php";
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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
    
    echo "<tr><td><button id='delete'>x</button></td><td>";
    echo "<img src=";
    echo insert_image($product_id);
    echo "></td><td>";
    echo insert_name($product_id);
    echo "</td><td><button id='add'>+</button>";
    echo $qty;
    echo "<button id='sub'>-</button></td><td></td><td>SGD $";
    $subtotal = $price*$qty;
    echo $subtotal;
    echo "</td></tr>";
    $total = $total + $subtotal;
}

mysqli_close($conn);
?>