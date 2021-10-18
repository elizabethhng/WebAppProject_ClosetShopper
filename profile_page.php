<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - Profile Page</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="cs_stylesheet.css">
</head>
<body>

<?php  
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

    }
    #orders{
        padding:0px 33px;
    }
    tr{
        border-bottom: 1px solid #b9b9b9;
    }
    td{
        height:45px;
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
                <td>DATE</td><td>STATUS</td><td>ORDER NO.</td><td></td><td>TOTAL</td>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");
           	if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $username=$_SESSION['valid_user'];
            $sql = "SELECT * FROM f32ee.all_orders WHERE order_username ='$username' ";
            if ($result = mysqli_query($conn, $sql)) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>". $row["order_date"]."</td>";
                            echo "<td>". $row["order_status"]."</td>";
                            echo "<td>". $row["order_id"]."</td>";
                            if($row["order_status"]=='Paid')
                            {echo "<td><button class='grey_button'>CANCEL ORDER</button></td>";}
                            else{echo "<td></td>";}
                            echo "<td>$".$row["order_totprice"]."</td></tr>";
                    }
            } else {
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

</body>
</html>
