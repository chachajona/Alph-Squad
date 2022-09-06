<?php
    session_start();
    include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/product.css" rel="stylesheet" />
    <link rel="icon" href="images/logo.png">
    <title>Product 2 Page</title>
</head>
<body>
    <section class ="product">
        <div class="product-img">
            <img src="images/product-2.png">
        </div>
        <div class = "product-detail">
        <form action="cart.inc.php" method="POST">
            <h2>Nike</h2>
            <h1>Dunk Low "Mummy"</h1>
            <p>The Nike Dunk Low SB ‘Mummy’ celebrates Halloween with a unique design 
                inspired by the classic celluloid monster. The off-white canvas upper, 
                featuring tonal decorative stitching and frayed edges, can be torn away 
                to reveal a bluish-grey suede underlay — the same material used on the signature 
                Swoosh. The semi-translucent rubber cupsole glows in the dark, along with a back
                 heel accented with a pair of pair of embroidered eyes. Additional details include 
                 an embroidered spider on the left toe box and an ancient Egyptian Eye of Horus 
                 graphic on the interior tongue.
            </p>
            <pre class="sku">SKU                               DM0774-111</pre>
            <pre class="colorway">Colorway COCONUT MILK/SEAFOAM-YELLOW STRIKE</pre>
            </select></pre>
            <span class="product-price">$100.00</span>
            <button type="submit" name="add-to-cart"class="add-cart">ADD TO CART</button>
            <input type="hidden" name="productName" value="Nike-dunk-low-mummy">
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