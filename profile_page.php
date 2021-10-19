<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - Profile Page</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="script/css/cs_stylesheet_category.css">
<link rel="stylesheet" href="script/css/cs_stylesheet_slideshow.css">
<link rel="stylesheet" href="cs_stylesheet.css">
</head>
<body>

<?php  
    include "script/php/fetch_product_details.php";
    session_start();
    // check session variable
    if (!isset($_SESSION['valid_user']))
    {
        header("refresh:0; url=login_signup.php");
    }
?> 

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
        text-align: left;
        color:#555555;

    }
    #orders{
        padding:0px 33px;
    }
    tr{
        border-bottom: 1px solid #b9b9b9;
    }
    td{
        height:45px;
        /* width:100px;  */
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
            <li>Profile Page</li>
            <hr style="margin-top:5px;">
    </ul>
        <h1>Profile Page</h1>
        <!-- user information -->
        <div id="userDetails">
 
            <h3><b>User Email:</b> <?php echo $_SESSION['valid_user'] ?></h3>
            <h3><b>Shipping Address:</b> <?php echo $_SESSION['address'] ?></h3>
        </div>
        <!-- Logout Button -->
        <form action="script/php/logout.php" method=POST>
        <button id="logout" type="submit" >LOGOUT</button></form>
        <!-- Order table -->
        <div id="orders">
        <table id="orderTable">
            <tr>
                <td><b>ORDERS</b></td><td></td><td></td><td></td><td></td><td></td>
            </tr>
            <tr>
                <th>DATE</th><th>ORDER NO.</th><th>ITEMS</th><th>TOTAL</th><th>STATUS</th><th></th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
           	if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $username=$_SESSION['valid_user'];
            $sql = "SELECT * FROM f32ee.all_orders WHERE order_username ='$username' ORDER BY order_id DESC";
            if ($result = mysqli_query($conn, $sql)) {
                    // output data of each row
                    
                    while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>". $row["order_date"]."</td>";
                            echo "<td>". $row["order_id"]."</td>";
                            echo "<td style='width: 40%;'><p style='text-align:left; padding:5px;'>";
                            foreach (unserialize($row["order_itemstr"]) as $product_id => $qty)
                            {
                            echo "$qty X ";
                            echo insert_name($product_id)."<br>";
                            }
                            echo "</p></td>";
                            echo "<td>$".$row["order_totprice"]."</td>";
                            echo "<td>". $row["order_status"]."</td>";
                            if($row["order_status"]=='Paid'){
                            $order_id=$row["order_id"];
                            echo "<td style='width: 170px;'><form action='script/php/cancel_order.php' method=GET>";
                            echo "<button class='grey_button'>CANCEL ORDER</button>";
                            echo "<input type='hidden' value='$order_id' name='id' /></form></td></tr>";}
                            else{echo "<td></td></tr>";}
                    }
                }
            else {
                echo "Failed fetching data from database.";
                mysqli_close($conn);
                } 
            ?>
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
<script type="text/javascript" src="script/javascript/slide_show.js"></script>
<script>banner_showSlides();</script>
</body>
</html>
