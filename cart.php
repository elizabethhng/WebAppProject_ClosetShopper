<?php 
include "script/php/cart_create_table.php";
include "script/php/categories_display_product.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - Cart</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="script/css/cs_popup.css">
<link rel="stylesheet" href="script/css/cs_stylesheet_category.css">
<link rel="stylesheet" href="script/css/cs_stylesheet_slideshow.css">
<link rel="stylesheet" href="cs_stylesheet.css">
</head>
<body>

<style>
    #orderTable{
        margin:auto;
        margin-top: 100px;
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;
        color:#555555;
    }
    #checkout{
        float: right;
        margin: 20px 0px 20px 20px;
        width: auto;
        padding:8px 40px;
    }
    #updatecart{
        float: right;
        margin: 20px 20px 20px 0px;
        width: auto;
        padding:8px 40px;
    }
    #continueshopping{
        float: left;
        margin: 20px 20px 20px 0px;
        width: auto;
        padding:8px 40px;
    }
    #orders{
        padding:0px 33px;
    }
    tr{
        border-bottom: 1px solid #b9b9b9;
    }
    th{
        text-align: left;
    }
    td{
        padding: 5px;
    }
    .cart img{
        padding: 3%;
        width: 126px;
        height: 126px;
    }
    .cart button{
        margin: 0px 20px;
        padding:10px;
        width: 43px;
    }
    #pass {
        float: right;
    }
    a{
        color:#555555
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
        <a style="padding-left:50px;"href="about_us.html">ABOUT US</a>
        <div class="dropdown">
            <button class="dropbtn">SHOP ALL CATEGORIES</button>
            <div class="dropdown-content">
            <a href="categories_top.php">TOPS</a>
            <a href="categories_bottoms.php">BOTTOMS</a>
            <a href="categories_bag.php">BAGS</a>
            </div>
        </div>

        <!-- Right-aligned links -->
        <div class="topnav-right">
            <a href="cart.php"><img src="media\cart_icon.png" width="13px" height="13px" alt="cart_icon" >CART</a>
            <a style="padding-right:50px;"href="profile_page.php">PROFILE PAGE</a>
        </div>
    
    </div>

    <div class="content">
        <!-- breadcrumb navigation bar -->
        <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Cart</li>
                <hr style="margin-top:5px;">
        </ul>
        <h1>SHOPPING CART</h1>
        <!-- Display cart table -->
        <div id="orders">
            <table class="cart" id="orderTable"> 
                <colgroup>
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 10%;">
                    <col span="1" style="width: 40%;">
                    <col span="1" style="width: 25%;">
                    <col span="1" style="width: 5%;">
                    <col span="1" style="width: 15%;">
                </colgroup>
                <tr>
                    <th colspan="3">PRODUCTS</th><th>QTY.</th><th></th><th>SUBTOTAL</th>
                </tr>
                    <?php include "script/php/cart_print_table.php" ?>
                    <th colspan="4"></th><th>TOTAL</th><td>SDG $<?php echo $total; ?></td>
                </tr>
                <tr style='border-bottom: 0px;'>
                    <td colspan="5" style='text-align: right;'></td><td><i><small>(GST incl.)</small></i></td>
                </tr>
                <tr style='border-bottom: 0px;'>
                
                    <td colspan="3">
                        <a href="index.php"><button id="continueshopping" name="continueshopping" class="grey_button" type="button">CONTINUE SHOPPING</button></a>
                    </td>
                    <td colspan="3">
                        <button id="checkout" name="checkout" value='<?php echo $user_check; ?>'>CHECKOUT</button>
                    </td>
                </tr>
            </table>
            
            
        </div>
        
    </div>

<!-- The Modal, used for pop up window upon checkout. It is used to control payment outcome-->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
    <strong>PAYMENT STATUS</strong>
    </div>
    <div class="modal-body">
        <?php 
            Session_start();
            if (empty($_SESSION['cart'])){ //If cart empty
                echo "Cart is empty! Unable to Proceed";
            }elseif(!isset($_SESSION['valid_user'])){ //If not logged in, link to login_register.php
                echo "Please <a href=login_signup.php> Register/Login!</a>";
            }else{                               //Display option to decide payment outcome
                echo "Thank you for shopping with us! Please select the payment status!";
            }
        ?>
    </div>
    <!-- Display payment outcome options (buttons) -->
    <div class="modal-footer">
    <form action="script/php/cart_checkout.php" method=POST>
      <button class="grey_button" id="fail" type="submit" name="fail" 
        <?php if(!isset($_SESSION['valid_user']) || !isset($_SESSION['cart'])){?> style="display:none;" <?php } ?>>PAYMENT FAIL</button>
      <button class="grey_button" id="pass" type="submit" name="pass" 
        <?php if(!isset($_SESSION['valid_user']) || !isset($_SESSION['cart'])){?> style="display:none;" <?php } ?>>PAYMENT SUCCESSFUL</button>
    </form>
    </div>
  </div>
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

<!-- Call script for Announcement Banner -->
<script type="text/javascript" src="script/javascript/slide_show.js"></script>
<script>banner_showSlides();</script>

<!--Relevant Javacript for popup window event handler  -->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    // Get the button that opens the modal
    var btn = document.getElementById("checkout");

    // When the user clicks the button, open the modal 
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>