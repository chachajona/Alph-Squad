<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Shrikhand&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="./css/register.css" rel="stylesheet" />
        <link rel="icon" href="images/logo(white).png">
        <title>Register Page</title>
    </head>
    <body>
        <header>
            <div class="return_area">
                <a href="index.php"><img src="images/return-1.png" alt="return" class="return"/></a>
            </div>
            <div class = "logo_area">
                <a href="index.php"><img src="images/logo(white).png" alt="logo" class = "logo"></a>
            </div>
        </header>
        <section class="wrapper">
            <img src="images/background-object-3.png" alt="background-object" class = "object-1"/>
            <div class="box">
                <form action="register.inc.php" method="post">
                    <h2>Sign Up</h2>
                    <div class="input-box one">
                        <div>
                            <img src="images/fullname.png" alt="username-icon" class="icon-1"/>
                        </div>
                        <div>
                            <input type="text" name="full_name" required>
                            <label>Full Name</label>
                        </div>
                    </div>
                    <div class="input-box two">
                        <div>
                            <img src="images/user.png" alt="username-icon" class="icon-2"/>
                        </div>
                        <div>
                            <input type="text" name="username" required>
                            <label>Username</label>
                        </div>
                    </div>
                    <div class="input-box three">
                        <div>
                            <img src="images/password.png" alt="password"/>
                        </div>
                        <div>
                            <input type="password" name="pwd" required>
                            <label>Password</label>
                        </div>
                    </div>
                    <div class="input-box four">
                        <div>
                            <img src="images/reconfirm.png" alt="confirm"/>
                        </div>
                        <div>
                            <input type="password" name="conPwd" required>
                            <label>Confirm Password</label>
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
                        <input type="submit" name="signup-submit" value="Sign Up">
                    </div>
                    <div class="signin-link">
                        <p class="new-member">Have an account?
                            <a href="login.php">Sign in here</a> </p>
                    </div>
                    <!-- <div class="message-container">
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "invalidUsername") {
                            echo ("<p class=\"alert\">Username can only contain uppercase, lowercase characters and numbers<p>");
                        }
                        if ($_GET['error'] == "passwordsNotMatch") {
                            echo ("<p class=\"alert\">Passwords don't match, please try again!<p>");
                        }
                        if ($_GET['error'] == "usernameIsTaken") {
                            echo ("<p class=\"alert\">This username is already taken<p>");
                        }
                        if ($_GET['error'] == "statementFailed") {
                            echo ("<p class=\"alert\">Something went wrong, please try again!!<p>");
                        }
                        if ($_GET['error'] == "success") {
                            echo ("<p class=\"alert\">You have registered successfully. Click sign in button above<p>");
                        }
                    }
                    ?>
                    </div> -->
                </form>
            </div>
            <img src="images/background-object-4.png" alt="background-object" class = "object-2"/>
        </section>
    </body>
    <footer>
        <div class="footer-row one">
            <div class="footer-column one">
                <h3>Company</h3>
                <a href="#"><img src="images/full-logo(white).png" alt="full-logo" class="logo-company"/></a>
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
</html>