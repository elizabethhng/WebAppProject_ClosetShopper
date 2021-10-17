<?php 
include "script/php/categories_create_table.php";
include "script/php/user_create_table.php";
include "script/php/cart_create_table.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - Home</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
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

    <div class="content" style="padding: 0%;">
        <div class="slideshow-container">
            <div class="mySlides fade">
            <img src="media/slideshow/2.png" style="width:100%">
            </div>
            <div class="mySlides fade">
            <img src="media/slideshow/1.png" style="width:100%">
            </div>
            <div class="mySlides fade">
            <img src="media/slideshow/3.png" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="media/slideshow/4.png" style="width:100%">
            </div>
        </div>
        <div style="text-align:center; padding-top: 20px; padding-bottom: 20px;">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span>
            <span class="dot"></span> 
        </div>
        <table class='homepage'>
            <tr>
                <td><a href="categories_top.php"><img src="media/slideshow/top.png"></a></td>
                <td><a href="categories_bag.php"><img src="media/slideshow/bag.png"></a></td>
                <td><a href="categories_bottoms.php"><img src="media/slideshow/bottom.png"></a></td>
            </tr>
            <tr>
                <td><a href="categories_top.php">TOPS</a></td>
                <td><a href="categories_bag.php">BAGS</a></td>
                <td><a href="categories_bottoms.php">BOTTOMS</a></td>
            </tr>
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
<script>
    showSlides();
    banner_showSlides();
</script>

</body>
</html>
