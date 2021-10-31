<?php
// This file belongs to profile_page.php whereby clicking cancel order will invoke this form to update status
    $id=$_GET['id'];    //retrieve order id to be cancelleed
    // var_dump($_GET);    
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
    if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "UPDATE f32ee.all_orders SET order_status = 'Cancelled' WHERE order_id = $id;"; //update order_status to cancelled for the selected order id
    mysqli_query($conn, $sql);
    header("refresh:0; url=../../profile_page.php"); //redirect back to profile page instantly
    
    mysqli_close($conn);
?>