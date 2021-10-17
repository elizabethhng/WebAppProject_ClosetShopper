<?php 
include "script/php/categories_create_table.php";
include "script/php/display_product.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - BOTTOMS</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="script/css/cs_stylesheet_category.css">
<link rel="stylesheet" href="script/css/cs_stylesheet_slideshow.css">
<link rel="stylesheet" href="cs_stylesheet.css">
</head>
<body>
<style>
    .container {
    position: relative;
    }

    .image {
    max-width: 100%;
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
    }

    .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
    }

    .container:hover .image {
    opacity: 0.3;
    }

    .container:hover .middle {
    opacity: 1;
    }

    button {
    background-color: #ECCBBA;
    color: #555555;
    font-size: 16px;
    padding: 10px 20px;
    }
</style>

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
                <li>bottoms</li>
                <hr style="margin-top:5px;">
        </ul>
        <h1>BOTTOMS</h1>
        <table class="category">
            <?php print_table('bottoms'); ?>
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
