<?php
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

//Create tables for cart
$sql = "CREATE TABLE IF NOT EXISTS cart (
    order_id INT PRIMARY KEY, 
    order_name VARCHAR(40) NOT NULL UNIQUE,
    order_quantity INT NOT NULL,
    order_subtotal DOUBLE NOT NULL,
    order_image VARCHAR(40) NOT NULL
    )";
mysqli_query($conn, $sql);

?>
