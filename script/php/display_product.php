<?php
include "script/php/fetch_product_details.php";

function generate_name_table($id){
    $end = $id + 3;
    for ($id; $id<$end; $id++) {
        echo "<th>";
        echo insert_name($id);
        echo "</th>";
    }
}

function generate_price_table($id){
    $end = $id + 3;
    for ($id; $id<$end; $id++) {
        echo "<td style='padding: 1%;'>";
        echo "$";
        echo insert_price($id);
        echo "</td>";
    }
}

function generate_image_table($id){
    $end = $id + 3;
    for ($id; $id<$end; $id++) {
        echo "<td>";
        echo "<img src=";
        echo insert_image($id);
        echo ">";
    }
}
?>

 