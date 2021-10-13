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

//Add some tables to the database
$sql = "CREATE TABLE IF NOT EXISTS all_products (
product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
product_name VARCHAR(30) NOT NULL UNIQUE,
product_type VARCHAR(30) NOT NULL,
product_quantity INT NOT NULL,
product_price DOUBLE NOT NULL
)";
//product_image LONGBLOB NOT NULL
if (!mysqli_query($conn, $sql)) {
	echo "Error creating Products table: " . mysqli_error($conn);
	mysqli_close($conn);
}

//Fill tables with data
/*
$sql = "INSERT INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ROUND-NECK BASIC DARK GRAY TEE', 'tops', 999, 30, LOAD_FILE('Z:/public_html/4717_ClosetShopper/media/tops/1.jpg'));";
*/
$sql = "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price)
VALUES(NULL, 'ROUND-NECK BASIC DARK GRAY TEE', 'tops', 999, 30);";
if (!mysqli_query($conn, $sql)) {
    echo "Failed to fill tables with data: " . mysqli_error($conn);
    mysqli_close($conn);
}
/*
if (!mysqli_multi_query($conn, $sql)) {
    echo "Failed to fill tables with data: " . mysqli_error($conn);
    mysqli_close($conn);
}
*/
mysqli_close($conn);
?>