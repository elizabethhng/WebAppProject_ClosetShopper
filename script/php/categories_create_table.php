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

//Create tables for items
$sql = "CREATE TABLE IF NOT EXISTS all_products (
product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
product_name VARCHAR(40) NOT NULL UNIQUE,
product_type VARCHAR(40) NOT NULL,
product_quantity INT NOT NULL,
product_price DOUBLE NOT NULL,
product_image VARCHAR(40) NOT NULL
)";
mysqli_query($conn, $sql);

//Fill tables with data [tops]
$sql = "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ROUND-NECK BASIC TEE', 'tops', 999, 28,'media/tops/1.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'OVERSIZE TRENCH COAT', 'tops', 999, 73, 'media/tops/2.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LONG-SLEEVE COLLAR SHIRT', 'tops', 999, 25.5, 'media/tops/3.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ROUND-NECK BLACK TEE', 'tops', 999, 28, 'media/tops/4.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LONG-SLEEVE COTTON COLLAR SHIRT', 'tops', 999, 19.9, 'media/tops/5.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'OFFICE COLLAR SHIRT', 'tops', 999, 25, 'media/tops/6.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SILK COLLAR SHIRT - (4PC)', 'tops', 999, 103, 'media/tops/7.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SILK LONG-SLEEVE SHIRT', 'tops', 999, 32, 'media/tops/8.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SLEEVELESS V-NECK TOP', 'tops', 999, 22.9, 'media/tops/9.jpg');";

//Fill tables with data [bottoms]
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LOOSE THREE-QUARTER PANTS', 'bottoms', 999, 45.9, 'media/bottoms/1.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ARMY GREEN DENIM SHORT SKIRT', 'bottoms', 999, 32, 'media/bottoms/2.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LOOSE DRY-FIT SHORTS', 'bottoms', 999, 15, 'media/bottoms/3.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LOOSE STRAIGHT LONG PANTS', 'bottoms', 999, 59.9, 'media/bottoms/4.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'BLACK LEATHER SHORTS', 'bottoms', 999, 26, 'media/bottoms/5.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'BLUE DENIM SHORT SKIRT', 'bottoms', 999, 28.5, 'media/bottoms/6.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ASHE BROWN LONG SKIRT', 'bottoms', 999, 56, 'media/bottoms/7.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'HIGH WAIST PANTS', 'bottoms', 999, 63.5, 'media/bottoms/8.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'DENIM SHORT SKIRT', 'bottoms', 999, 25.9, 'media/bottoms/9.jpg');";


//Fill tables with data [bags]
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SIMPLE CHOCOLATE CROSSBODY BAG', 'bags', 999, 32, 'media/bags/1.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'DOUBLE HANDLE SQUARE CROSSBODY BAG', 'bags', 999, 43, 'media/bags/2.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'METALLIC ACCENT CROSSBODY BAG', 'bags', 999, 35, 'media/bags/3.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'TWIST HANDLE SOFT SHOULDER BAG', 'bags', 999, 45, 'media/bags/4.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'FRONT FLAP CROSSBODY BAG', 'bags', 999, 19.9, 'media/bags/5.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'DOUBLE HANDLE CYLINDER SHOULDER BAG', 'bags', 999, 39.9, 'media/bags/6.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ADJUSTABLE SMALL SHOULDER BAG', 'bags', 999, 20, 'media/bags/7.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'METALLIC BUCKLE SHOULDER BAG', 'bags', 999, 32, 'media/bags/8.jpg');";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SINGLE HANDLE ROUND BOTTOM BAG', 'bags', 999, 22.9, 'media/bags/9.jpg');";

mysqli_multi_query($conn, $sql);

mysqli_close($conn);
?>