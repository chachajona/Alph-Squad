<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/product.css" rel="stylesheet" />
    <link rel="icon" href="images/logo.png">
    <title>Product 3 Page</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php"><img src="images/return.png" class="return-button"/></a>
            <a href="index.php"><img src="images/AlphaSqu@d.png" class="logo"/></a>
            <a href="shopping-cart.php"><img src="images/shopping-bag.png" class="shopping-bag"/></a>
        </nav>
    </header>
    <section class ="product">
        <div class="product-img">
            <img src="images/product-3.png">
        </div>
        <div class = "product-detail">
            <h2>Nike</h2>
            <h1>Air Force 1 "Halloween"</h1>
            <p>This spooky season, get into a pair of Air Force 1s that might give you
                 the creeps at first—those daunting staring-eye graphics aren't going 
                 anywhere. A premium Black leather upper, White midsole and Orange accents 
                 put a costume on a frightful favourite.
            </p>
            <pre class="sku">SKU                               DC8891-001</pre>
            <pre class="colorway">Colorway            BLACK/BLACK-STARFISH-SAIL</pre>
            </select></pre>
            <span class="product-price">$120.00</span>
            <a href="#" class="add-cart">ADD TO CART</a>
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