<?php
function add_to_cart($id, $name, $subtotal, $image){
    $servername = "localhost";
    $username = "f32ee";
    $password = "f32ee";
    $database = "f32ee";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO cart (order_id, order_name, order_quantity, order_subtotal, product_image)
    VALUES ($id, '$name', 1, '$subtotal', '$image')
    ON DUPLICATE KEY UPDATE order_quantity = order_quantity + VALUES(order_quantity);"

    mysqli_query($conn, $sql);

    mysqli_close($conn);
}
?>