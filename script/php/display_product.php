<?php
include "script/php/fetch_product_details.php";

function generate_name_table($id){
    echo "<th>";
    echo insert_name($id);
    echo "</th>";
    echo "<th>";
    echo insert_name($id+1);
    echo "</th>";
    echo "<th>";
    echo insert_name($id+2);
    echo "</th>";
}

function generate_price_table($id){
    echo "<td style='padding: 1%;'>";
    echo "$";
    echo insert_price($id);
    echo "</td>";
    echo "<td style='padding: 1%;'>";
    echo "$";
    echo insert_price($id+1);
    echo "</td>";
    echo "<td style='padding: 1%;'>";
    echo "$";
    echo insert_price($id+2);
    echo "</td>";
}
?>

 