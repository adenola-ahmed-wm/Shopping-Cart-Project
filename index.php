<?php
require_once('connect.php');
function getProducts($conn) {
    $sql = 'SELECT * FROM products ORDER BY name';
    $stmt = $conn->prepare($sql);
if ($stmt->execute()) {
while ($row = $stmt->fetch()) {
    echo '<div>
    Name: '.$row['name'].'<br>
    Price: $'.$row['price'].'<br>
    <form method="post" action="/">
        <input type="hidden" name="id" value="'.$row['id'].'"/>
        <input type="submit" name="add" value="ADD"/>
    </form>
</div>';
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
        <li class="active"><a href='index.php'><span>Home</span></a></li>
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
​
<div id = bodyText>
    ​
</div>
<header>
    <h1>Phones</h1>
</header>

<!-- Each image is 350px by 233px -->
<div class="photobanner">
    <img class="first" src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/apple-iphone-6s/rose-gold/stills/browse-apple-iphone-6s-rose-gold.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/samsung-galaxy-s-6-edge/black-sapphire/stills/browse-samsung-galaxy-s-6-edge-black-sapphire.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/lg-g4/metallic-gray/stills/browse-lg-g4-metallic-gray.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/htc-one-m9/gunmetal/stills/browse-htc-one-m9-gunmetal.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/lg-leon-lte/all/stills/browse-lg-leon-lte-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/microsoft-lumia-435/all/stills/browse-microsoft-lumia-435-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/zte-zmax/all/stills/browse-zte-zmax-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/zte-avid-plus/all/stills/browse-zte-avid-plus-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
    <img src="http://s.tmocache.com/content/dam/tmo/en-p/cell-phones/blackberry-priv/all/stills/browse-blackberry-priv-all.jpg/_jcr_content/renditions/cq5dam.web.280.280.jpeg" alt="" />
</div>
<br><br>
<div>
    <?php
        getProducts($dbh);
    ?>
</div>
</body>
</html>