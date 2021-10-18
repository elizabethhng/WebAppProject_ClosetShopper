<?php
    $id=$_GET['id'];
    var_dump($_GET);
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE f32ee.all_orders SET order_status = 'Cancelled' WHERE order_id = $id;";
    mysqli_query($conn, $sql);
    header("refresh:0; url=../../profile_page.php");
    
    mysqli_close($conn);
?>