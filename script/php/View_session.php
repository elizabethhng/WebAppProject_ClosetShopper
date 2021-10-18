
<?php 

Session_start();
$c=array_count_values($_SESSION['cart']);
$ordered_items=serialize($c);

// echo '<pre>';
// var_dump($_SESSION);
// echo $c[0];
// echo '</pre>';
// foreach ($c as $product_id => $qty) {
//     // $arr[3] will be updated with each value from $arr...
//    echo $product_id.":";
//    echo $qty."<br>";
// }

var_dump($c);
echo '<br>serialise:  ;';
var_dump($ordered_items);

echo '<br>';
var_dump(unserialize($ordered_items));

foreach (unserialize($ordered_items) as $product_id => $qty) {
    // $arr[3] will be updated with each value from $arr...
   echo "<br>".$product_id.":";
   echo $qty;
}
?>