<?php
    session_start();
    // session_destroy();
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/product-page.css" rel="stylesheet" />
    <link rel="icon" href="images/logo(white).png">
    <title>Product Page</title>
</head>
<body>
    <section>
        <h2>Our Products</h2>
        <div class="products-container">
            <div class="product">
                <form action="cart.inc.php" method="POST">
                    <img src="images/product-1.png" alt="" class="product-img"/>
                    <div class ="product-detail">
                        <h1 class="product-title"><a href="product(1).php">Nike Dunk Low Halloween</a></h1>
                        <span class="product-price">$100</span>
                        <p class="product-description">Nike Dunk Low Halloween Collection.</p>
                        <button type="submit" name="add-to-cart" class="cart-button">Add to cart</button>
                        <input type="hidden" name="productName" value="Nike-dunk-low-halloween">
                        <input type="hidden" name="price" value="100">
                    </div>
                </form>
            </div>
            <div class="product">
                <form action="cart.inc.php" method="POST">
                    <img src="images/product-2.png" alt="" class="product-img"/>
                    <div class ="product-detail">
                        <h1 class="product-title"><a href="product(1).php">Nike Dunk Low Mummy</a></h1>
                        <span class="product-price">$100</span>
                        <p class="product-description">Nike Dunk Low Halloween Collection.</p>
                        <button type="submit" name="add-to-cart" class="cart-button">Add to cart</button>
                        <input type="hidden" name="productName" value="Nike-dunk-low-mummy">
                        <input type="hidden" name="price" value="100">
                    </div>
                </form>
            </div>
            <div class="product">
                <form action="cart.inc.php" method="POST">
                    <img src="images/product-3.png" alt="" class="product-img"/>
                    <div class ="product-detail">
                        <h1 class="product-title"><a href="product(3).php">Nike Air Force 1 Halloween</a></h1>
                        <span class="product-price">$120</span>
                        <p class="product-description">Nike Air Force Halloween Collection.</p>
                        <button type="submit" name="add-to-cart" class="cart-button">Add to cart</button>
                        <input type="hidden" name="productName" value="Nike-air-force-1-halloween">
                        <input type="hidden" name="price" value="120">
                    </div>
                </form>
            </div>
            <div class="product">
                <form action="cart.inc.php" method="POST">
                    <img src="images/product-4.png" alt="" class="product-img"/>
                    <div class ="product-detail">
                        <h1 class="product-title"><a href="product(4).php">Adidas Forum Home Alone</a></h1>
                        <span class="product-price">$150</span>
                        <p class="product-description">Adidas Forum Collection.</p>
                        <button type="submit" name="add-to-cart" class="cart-button">Add to cart</button>
                        <input type="hidden" name="productName" value="Adidas-forum-low-home-alone">
                        <input type="hidden" name="price" value="150">
                    </div>
                </form>
            </div>
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