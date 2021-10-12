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
        min-height: 450px;
    }
    table{
        text-align:left;
    }
    #signin_form{
        float: left;
        padding: 15px 15px 15px 75px;
        margin-bottom: 24px;
    }
    #register_form{
        float: right;
        padding: 15px 75px 15px 15px;
        margin-bottom: 24px;
    }
    th{
        font-size: 12px;
    }
    input{
        padding: 5px;
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
        
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table id = "signin_form">
            <tr><th><h2>SIGN IN</h2></th></tr>
            <div class="form-group">
            <tr>
                <th><label for="Email">EMAIL&ast;<br></label></th>
            </tr>
            <tr>
                <td>
                    <input type="email" name="username"  class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" size=40 required placeholder = "Enter your registered email address."><br><br>
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </td>
            </tr>
            </div>
            <div class="form-group">
            <tr>
                <th><label for="psw">PASSWORD&ast;</label></th>
            </tr>
            <tr>
                <td>
                <input type="password" size=40 placeholder="Enter your password" n name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" required></td>
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </tr>
            </div>
            <div class="form-group">
            <tr><td><button type="submit"id="Submit"class="btn btn-primary">LOGIN</button></td></tr>
        </table>

        <table id = "register_form">
            <tr><th><h2>REGISTER</h2></th></tr>
           
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
             <tr>
                <th><label>EMAIL ADDRESS &ast;<br></label></th>
             </tr>
             <tr><td>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" size=40 required placeholder = "All communication will be sent to this address."><br><br>
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </td></tr>
            </div>    
            
            <div class="form-group">
             <tr>
                 <th><label>PASSWORD &ast;<br></label></th>
             </tr>
             <tr><td>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>"size=40 required placeholder = "Please enter a password"><br><br>
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                 </td></tr>
            </div>
            
            <div class="form-group">
             <tr>
                <th><label>CONFIRM PASSWORD &ast;<br></label></th>
             </tr>
             <tr><td>    
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" size="40"><br><br>
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </td></tr>
            </div>

            <div class="form-group">
             <tr>
                <th><label>SHIPPING ADDRESS &ast;<br></label></th>
             </tr>
             <tr><td>
                <input type="text" name="Address" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $address; ?>" size=40 required placeholder = "Enter your delivery address."><br><br>
                <span class="invalid-feedback"><?php echo $address_err; ?></span>
                </td></tr>
            </div>
            <tr>
                <div class="form-group">
                <tr><td><button type="submit"id="Submit"class="btn btn-primary">REGISTER NEW ACCOUNT</button></td></tr>
                </div>
            </tr>    
        </form>
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
