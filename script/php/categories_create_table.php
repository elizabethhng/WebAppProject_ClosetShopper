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
/*$priv = "GRANT ALL PRIVILEGES ON f32ee.* TO f32ee@f32ee;";
mysqli_query($conn, $priv);
$priv = "FLUSH PRIVILEGES;";
mysqli_query($conn, $priv);*/

//Add some tables to the database [image is not included]
$sql = "CREATE TABLE IF NOT EXISTS all_products (
product_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
product_name VARCHAR(40) NOT NULL UNIQUE,
product_type VARCHAR(30) NOT NULL,
product_quantity INT NOT NULL,
product_price DOUBLE NOT NULL,
product_image LONGBLOB NOT NULL
)";
mysqli_query($conn, $sql);

//Fill tables with data [tops]
$sql = "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ROUND-NECK BASIC DARK GRAY TEE', 'tops', 999, 28, LOAD_FILE('media/tops/1.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'OVERSIZE LONG TIED WAIST TRENCH COAT', 'tops', 999, 73, LOAD_FILE('media/tops/2.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LOOSE LONG-SLEEVE COLLAR SHIRT', 'tops', 999, 25.5, LOAD_FILE('media/tops/3.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ROUND-NECK BASIC BLACK TEE', 'tops', 999, 28, LOAD_FILE('media/tops/4.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'COTTON LONG-SLEEVE COLLAR SHIRT', 'tops', 999, 19.9, LOAD_FILE('media/tops/5.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'OFFICE LONG-SLEEVE WHITE COLLAR SHIRT', 'tops', 999, 25, LOAD_FILE('media/tops/6.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SILK LONG-SLEEVE COLLAR SHIRT - (4PC BUNDLE)', 'tops', 999, 103, LOAD_FILE('media/tops/7.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SILK LONG-SLEEVE COLLAR SHIRT', 'tops', 999, 32, LOAD_FILE('media/tops/8.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SLEEVELESS V-NECK TIED TOP', 'tops', 999, 22.9, LOAD_FILE('media/tops/9.jpg'));";

//Fill tables with data [bottoms]
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LOOSE CUT THREE-QUATER PANTS', 'bottoms', 999, 45.9, LOAD_FILE('media/bottoms/1.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ARMY GREEN DENIM SHORT SKIRT', 'bottoms', 999, 32, LOAD_FILE('media/bottoms/2.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LOOSE DRY-FIT HOME WEAR SHORTS', 'bottoms', 999, 15, LOAD_FILE('media/bottoms/3.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'LOOSE STRAIGHT CUT LONG PANTS', 'bottoms', 999, 59.9, LOAD_FILE('media/bottoms/4.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'BLACK LEATHER A-SHAPE SHORTS', 'bottoms', 999, 26, LOAD_FILE('media/bottoms/5.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'BLUE DENIM SHORT SKIRT', 'bottoms', 999, 28.5, LOAD_FILE('media/bottoms/6.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ASHE BROWN LONG SKIRT', 'bottoms', 999, 56, LOAD_FILE('media/bottoms/7.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'HIGH WAIST BLACK THREE-QUATER PANTS', 'bottoms', 999, 63.5, LOAD_FILE('media/bottoms/8.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'DENIM IRREGULAR CUT SHORT SKIRT', 'bottoms', 999, 25.9, LOAD_FILE('media/bottoms/9.jpg'));";


//Fill tables with data [bags]
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SIMPLE CHOCOLATE CROSSBODY BAG', 'bags', 999, 32, LOAD_FILE('media/bags/1.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'DOUBLE HANDLE SQUARE CROSSBODY BAG', 'bags', 999, 43, LOAD_FILE('media/bags/2.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'METALLIC ACCENT CROSSBODY BAG', 'bags', 999, 35, LOAD_FILE('media/bags/3.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'TWIST HANDLE SOFT SHOULDER BAG', 'bags', 999, 45, LOAD_FILE('media/bags/4.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'FRONT FLAP CROSSBODY BAG', 'bags', 999, 19.9, LOAD_FILE('media/bags/5.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'DOUBLE HANDLE CYLINDER SHOULDER BAG', 'bags', 999, 39.9, LOAD_FILE('media/bags/6.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'ADJUSTABLE SMALL SHOULDER BAG', 'bags', 999, 20, LOAD_FILE('media/bags/7.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'METALLIC BUCKLE SHOULDER BAG', 'bags', 999, 32, LOAD_FILE('media/bags/8.jpg'));";
$sql .= "INSERT IGNORE INTO all_products (product_id, product_name, product_type, product_quantity, product_price, product_image)
VALUES(NULL, 'SINGLE HANDLE ROUND BOTTOM BAG', 'bags', 999, 22.9, LOAD_FILE('media/bags/9.jpg'));";

mysqli_multi_query($conn, $sql);

mysqli_close($conn);
?>