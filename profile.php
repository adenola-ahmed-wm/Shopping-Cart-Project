<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <script src="jquery-2.1.4.min.js"></script>
    ​
    <!-- Files for menu bar -->
    <script src="javascript.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css"/>
</head>
<body>
<div style="z-index: 10" id='cssmenu'>
    <ul>
        <li class="active"><a href='index.html'><span>Home</span></a></li>
        <li><a href='#'><span>About</span></a>
            <ul>
                <li class='has-sub'><a href=''><span>About Us</span></a></li>
                <li class='has-sub'><a href=''><span>Contact Info</span></a></li>
                <li class='has-sub'><a href=''><span>Frequently Asked Questions</span></a></li>
            </ul>
        </li>
        <li><a href='products.html'><span>Products</span></a>
            <ul>
                <li class='has-sub'><a href='Phones.html'><span>Phones</span></a></li>
            </ul>
        </li>
        <li><a href='#'><span>Cart</span></a>
            <ul>
                <li class='has-sub'><a href=''><span>Shopping Cart</span></a></li>
                <li class='has-sub'><a href=''><span>Checkout</span></a></li>
            </ul>
        </li>
        <li style="float: right;"><a href=''><span>Profile</span></a></li>
    </ul>
</div>
<div id = bodyText>
    ​
</div>
<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>
</body>
</html>