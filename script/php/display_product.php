<?php
function print_table($category) {
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM f32ee.all_products WHERE product_type = '$category'";
	if ($result = mysqli_query($conn, $sql)) {

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            $i=0;
            while($row = mysqli_fetch_assoc($result)) {
                // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                if($i==0){echo "<tr>"; $i=3;}
                    echo "<td  style='vertical-align: top;'><table>";
                    echo '<div class="container">';
                    echo '<img class="image" src=';
                    echo $row["product_image"];
                    echo '><div class="middle">';
                    echo '<button>ADD TO CART</button>';
                    echo '</div></div></div>';
                    echo "</td></tr>";

                    echo "<tr><th>";
                    echo $row["product_name"];
                    echo "</th></tr>";
    
                    echo "<tr><td style='padding: 1%;'>";
                    echo "$";
                    echo $row["product_price"];
                    echo "</table></td>";
                if($i==0){echo "</tr>"; }
                $i--;
            }
        }

	} else {
		echo "Failed fetching data from database.";

	mysqli_close($conn);
    }
}

function print_cart() {
    $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM f32ee.all_products WHERE product_id = $id";
	if ($result = mysqli_query($conn, $sql)) {

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                    echo "<tr><td>";
                    echo "<img src=";
                    echo $row["order_image"];
                    echo "><strong>";
                    echo $row["order_name"];
                    echo "</strong><br>Order ID: ";
                    echo $row["order_id"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["order_quantity"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["order_subtotal"];
                    echo "</td></tr>";
                }

            }

	} else {
		echo "Failed fetching data from database.";

	mysqli_close($conn);
    }
}
?>

 