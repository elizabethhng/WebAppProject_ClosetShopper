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
$sql = "CREATE TABLE IF NOT EXISTS users (
username VARCHAR(40) NOT NULL UNIQUE PRIMARY KEY, 
password VARCHAR(40) NOT NULL,
address VARCHAR(40) NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
    echo "Error creating table: " . mysqli_error($conn);
    mysqli_close($conn);
}
?>