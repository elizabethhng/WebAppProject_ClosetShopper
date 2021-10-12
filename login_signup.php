<!DOCTYPE html>
<html lang="en">
<head>
<title>The Closet Shopper - Login</title>
<meta charset="utf-8">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto' >
<link rel="stylesheet" href="cs_stylesheet.css">
</head>
<body>
<style>
    .content{
        min-height: 500px;
    }
    table{
        text-align:left;
    }
    #signin_form{
        float: left;
        padding: 15px;
        margin-bottom: 24px;
    }
    th{
        font-size: 14px;
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
        <hr>
    <form method="post" action="">
        <table id = "signin_form">
            <tr><th><h2>SIGN IN</h2></th></tr>
            <tr>
                <th><label for="Email">EMAIL&ast;<br></label></th>
            </tr>
            <tr>
                <td>
                    <input type="email" name="Email"  id="Email" size=20 required placeholder = "Enter your registered email address." pattern ="^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$"><br><br>
                </td>
            </tr>
            <tr>
                <th><label for="Email">PASSWORD&ast;</label></th>
            </tr>
            <tr>
                <th>
                <input type="email" name="Email"  id="Email" size=20 required placeholder = "Enter your Email-ID here" pattern ="^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$"><br><br>
                </th>
            </tr>
            <tr><td><button id="Submit" type="submit" >LOGIN</button></td></tr>
                
        </table>

	</form>	
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
