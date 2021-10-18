<?php 
include "script/php/categories_create_table.php";
include "script/php/display_product.php";
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - Top</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="script/css/cs_stylesheet_category.css">
<link rel="stylesheet" href="script/css/cs_stylesheet_slideshow.css">
<link rel="stylesheet" href="cs_stylesheet.css">
</head>
<body>

<div id="wrapper">
    <!-- Announcement banner -->
    <div id="banner">
        <div class="myBanner fade">New Collections Arrive every Thursday!</div>
        <div class="myBanner fade">10% off for CSBank members</div>
        <div class="myBanner fade">Free Delivery on all orders</div>
    </div>

    <!-- Top navigation -->
    <div class="topnav">

        <!-- Centered link -->
        <div class="topnav-centered">
            <a href="index.php"><img src="media\logo.png" width="260px" height="28px" alt="logo" style="float:center;" ></a>
        </div>
    
        <!-- Left-aligned links (default) -->
        <!-- <div class="topnav-left"> -->
        <a style="padding-left:50px;"href="about_us.html">ABOUT US</a>
        <div class="dropdown">
            <button class="dropbtn">SHOP ALL CATEGORIES</button>
            <div class="dropdown-content">
            <a href="categories_top.php">TOPS</a>
            <a href="categories_bottoms.php">BOTTOMS</a>
            <a href="categories_bag.php">BAGS</a>
            </div>
        <!-- </div> -->
        </div>

    
        <!-- Right-aligned links -->
        <div class="topnav-right">
            <a href="cart.php"><img src="media\cart_icon.png" width="13px" height="13px" alt="cart_icon" >CART</a>
            <a style="padding-right:50px;"href="profile_page.php">PROFILE PAGE</a>
        </div>
    
    </div>

    <div class="content">
        <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>tops</li>
            <hr style="margin-top:5px;">
        </ul>
        <h1>TOPS</h1>
        <table class="category">
        <?php
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM f32ee.all_products WHERE product_type = 'tops'";
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
                echo "<a href='" .$_SERVER['PHP_SELF']. '?buy=' .$row["product_id"]. "'>";
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
        ?>
        </table>
    </div>

    <footer>
        <ul>
            <li><a><strong>We'd love to hear your feedback!</strong></a></li>
            <li><a><img src="media\call_icon.png" width="8px" height="8px" alt="call_icon" >
                Call Us : +65 6123 4567</a></li>
            <li><a href=
                "mailto:CLOSETSHOPPER@eee.com" ><img src="media\email_icon.png" width="8px" height="8px" alt="call_icon" > Email Us: CLOSETSHOPPER@eee.com</a></li>
        </ul> 
        <p style ="text-align: center; font-size: xx-small; padding-bottom: 5px; margin-top: 5px;" ><i> &copy;Copyright CLOSET SHOPPER  2021 All Rights Reserved</i></p>
    </footer>
</div>

<script type="text/javascript" src="script/javascript/slide_show.js"></script>
<script>banner_showSlides();</script>

</body>
</html>


