<?php 
include "script/php/categories_create_table.php";
include "script/php/display_product.php";
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
            <a href="index.html"><img src="media\logo.png" width="260px" height="28px" alt="logo" style="float:center;" ></a>
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
            <li><a href="index.html">Home</a></li>
            <li>tops</li>
            <hr style="margin-top:5px;">
        </ul>
        <h1>TOPS</h1>
        <table class="category">
            <tr><!--Product Image-->
                <td><img src="media/tops/1.jpg"></td>
                <td><img src="media/tops/2.jpg"></td>
                <td><img src="media/tops/3.jpg"></td>
            </tr>
            <tr><?php generate_name_table(1); ?></tr>
            <tr><?php generate_price_table(1); ?></tr>
            <tr><!--Product Image-->
                <td><img src="media/tops/4.jpg"></td>
                <td><img src="media/tops/5.jpg"></td>
                <td><img src="media/tops/6.jpg"></td>
            </tr>
            <tr><?php generate_name_table(4); ?></tr>
            <tr><?php generate_price_table(4); ?></tr>
            <tr><!--Product Image-->
                <td><img src="media/tops/7.jpg"></td>
                <td><img src="media/tops/8.jpg"></td>
                <td><img src="media/tops/9.jpg"></td>
            </tr>
            <tr><?php generate_name_table(7); ?></tr>
            <tr><?php generate_price_table(7); ?></tr>
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


