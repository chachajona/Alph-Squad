<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet" />
    <link href="./css/index.css" rel="stylesheet" />
    <link rel="icon" href="images/logo.png">
    <title>Home page</title>
</head>
<body>
    <header>
        <?php
        if (isset($_SESSION["username"])) {
            $username = htmlspecialchars($_SESSION["username"]);
            echo "<script>alert('Welcome back $username, you signed in successfully') </script>";
        }
        ?> 
        <nav>
            <div class="logo-area">
                <a href="index.html"><img src="images/AlphaSqu@d.png" alt="logo" class = "logo"></a>
            </div>
            <div class="search-box">
                <input type="search" placeholder="Search">
                <img src="images/search.png" alt="search" class = "search"/>        
            </div>
            <ul>
                <?php 
                if (isset($_SESSION["username"])) {
                    echo "<li><a href=\"shoppingcart.php\"><img src=\"images/shopping-bag.png\"/></a></li>";
                    echo "<li><a href=\"logout.php\"><img src=\"images/logout.png\"/></a></li>";
                }
                else {
                    echo "<li><a href=\"register.php\"><img src=\"images/signup.png\"/></a></li>";
                    echo "<li><a href=\"login.php\"><img src=\"images/login.png\"/></a></li>";
                }
                ?>
            </ul>
        </nav>
        <div class="banner"><img src="images/banner.jpg"/></div>

    </header>
    <section>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product-page.php">Products</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <h2>Hot Releases</h2>
        <div class="products-container">
            <div class="product">
                <img src="images/product-1.png" alt="" class="product-img"/>
                <div class ="product-detail">
                    <h1 class="product-title">Nike Dunk Low Halloween</h1>
                    <span class="product-price">$100</span>
                    <p class="product-description">Nike Dunk Low Halloween Collection.</p>
                    <a href="product(1).php" class="buy-button">Buy Now</a>
                </div>
            </div>
            <div class="product">
                <img src="images/product-2.png" alt="" class="product-img"/>
                <div class ="product-detail">
                    <h1 class="product-title">Nike Dunk Low Mummy</h1>
                    <span class="product-price">$100</span>
                    <p class="product-description">Nike Dunk Low Halloween Collection.</p>
                    <a href="product(2).php" class="buy-button">Buy Now</a>
                </div>
            </div>
            <div class="product">
                <img src="images/product-3.png" alt="" class="product-img"/>
                <div class ="product-detail">
                    <h1 class="product-title">Nike Air Force 1 Halloween</h1>
                    <span class="product-price">$120</span>
                    <p class="product-description">Nike Air Force Halloween Collection.</p>
                    <a href="product(3).php" class="buy-button">Buy Now</a>
                </div>
            </div>
            <div class="product">
                <img src="images/product-4.png" alt="" class="product-img"/>
                <div class ="product-detail">
                    <h1 class="product-title">Adidas Forum Home Alone</h1>
                    <span class="product-price">$150</span>
                    <p class="product-description">Adidas Forum Collection.</p>
                    <a href="product(4).php" class="buy-button">Buy Now</a>
                </div>
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
                    <li><a href="about.php">Contact Us</a></li>
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