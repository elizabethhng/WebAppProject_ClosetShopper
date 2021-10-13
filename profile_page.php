<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - Profile Page</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="cs_stylesheet.css">
</head>
<body>

<style>
    #userDetails{
        float: left;
        padding-left: 35px;

    }
    #logout{
        float: right;
        margin-right: 35px;

    }
    .content{
        min-height: 500px;
    }
    #orderTable{
        margin:auto;
        margin-top: 100px;
        width: 100%;
        border-collapse: collapse;
        font-size: 13px;

    }
    #orders{
        padding:0px 33px;
    }
    tr{
        border-bottom: 1px solid #b9b9b9;
    }

</style>


<div id="wrapper">
    <!-- Announcement banner -->
    <div id="banner">
        <h9>banner goes here</h9>
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
            <li>Profile Page</li>
            <hr style="margin-top:5px;">
    </ul>
        <h1>Profile Page</h1>
        <!-- user information -->
        <div id="userDetails">
            <h3><b>User Email:</b> USER@eee.com</h3>
            <h3><b>Shipping Address:</b> 123 Nanyang St 10</h3>
        </div>
        <!-- Logout Button -->
        <button id="logout" type="submit" >LOGOUT</button>
        <!-- Order table -->
        <div id="orders">
        <table id="orderTable">
            <tr>
                <td><b>ORDERS</b></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <td>DATE</td><td>STATUS</td><td>ORDER NO.</td><td></td><td>QTY.</td><td>TOTAL</td>
            </tr>
        </table>
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

</body>
</html>
