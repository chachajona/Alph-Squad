<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Shrikhand&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="./css/login.css" rel="stylesheet" />
        <link rel="icon" href="images/logo.png">
        <title>Login Page</title>
    </head>
    <body>
        <header>
            <div class="return_area">
                <a href="index.php"><img src="images/return.png" alt="return" class="return"/></a>
            </div>
            <div class = "logo_area">
                <a href="index.php"><img src="images/logo.png" alt="logo" class = "logo"></a>
            </div>
        </header>
        <section class="wrapper">
            <img src="images/background-object-1.png" alt="background-object" class = "object-1"/>
            <div class="box">
                <form action="login.inc.php" method="post">
                    <h2>Sign In</h2>
                    <div class="input-box one">
                        <div>
                            <img src="images/user.png" alt="username" class="icon-1"/>
                        </div>
                        <div>
                            <input type="text" name="username" required>
                            <label>Username</label>
                        </div>
                    </div>
                    <div class="input-box two">
                        <div>
                            <img src="images/password.png" alt="password"/>
                        </div>
                        <div>
                            <input type="password" name="pwd" required>
                            <label>Password</label>
                        </div>
                    </div>
                    <!-- <div class="selection-box">
                        <label>Select User Type: </label>
                        <select class="user-form" name="role">
                            <option value="user" selected>User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div> -->
                    <div class="button">
                        <input type="submit" name="sign-in" value="Sign In">
                    </div>
                    <div class="signup-link">
                        <p class="new-member">Create a new account?
                            <a href="register.php">Sign up</a> </p>
                    </div>
                    <div class="message-container">
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "invalidLogin") {
                            echo ("<p class=\"alert\">Incorrect information, please try again.</p>");
                        }
                        if ($_GET['error'] == "success") {
                            echo ("<p class=\"alert\">You have login successfully!!<p>");
                        }
                    }
                    ?>
                    </div>
                </form>
            </div>
            <img src="images/background-object-2.png" alt="background-object" class = "object-2"/>
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