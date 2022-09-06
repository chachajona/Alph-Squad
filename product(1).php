<?php
    session_start();
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/product.css" rel="stylesheet" />
    <link rel="icon" href="images/logo.png">
    <title>Product 1 Page</title>
</head>
<body>
    <section class ="product">
        
        <div class="product-img">
            <img src="images/product-1.png">
        </div>
        <div class = "product-detail">
        <form action="cart.inc.php" method="POST">
            <h2>Nike</h2>
            <h1>Dunk Low "Halloween"</h1>
            <p>The Nike Low PRM Halloween features a Saile leather
                upper with black overlays and orange Swooshes. On 
                the black overlays, subtle graphics of eyes from 
                creatures of the night are painted that can glow
                in the dark. A glow-in-the-dark outsole and woven 
                tongue tag complete this Halloween desgin.
            </p>
            <pre class="sku">SKU                               DD3357-100</pre>
            <pre class="colorway">Colorway                    SAIL/STAR-BLACK</pre>
            </select></pre>
            <span class="product-price">$100.00</span>
            <button type="submit" name="add-to-cart"class="add-cart">ADD TO CART</button>
            <input type="hidden" name="productName" value="Nike-dunk-low-halloween">
            <input type="hidden" name="price" value="100">
        </form>
        </div>
    </section>
    <footer>
        <div class="footer-row one">
            <div class="footer-column one">
                <h3>Company</h3>
                <a href="#"><img src="images/full-logo.png" alt="full-logo" class="logo-company"/></a>
            </div>
            <div class="footer-column">
                <h3>Category</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product-page.php">Products</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Brands</h3>
                <ul>
                    <li><a href="product-page.php">Adidas</a></li>
                    <li><a href="product-page.php">Nike</a></li>
                    <li><a href="product-page.php">Jordan</a></li>
                    <li><a href="product-page.php">Yeezy</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <a href="http://twitter.com/"><img src="images/Twitter.png" alt="Twitter"/></a>
                    <a href="http://facebook.com/"><img src="images/Facebook.png" alt="Facebook"/></a>
                    <a href="http://instagram.com/"><img src="images/Instagram.png" alt="Instagram"/></a>
                </div>
            </div>
        </div>
        <div class="footer-row two">
            <p>AlphaSqu@d @ 2021 - All Rights Reserved | Design made by DANG QUANG DUNG</p>
        </div>
    </footer>
</body>
</html>