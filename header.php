<header>
        <nav>
            <?php
                $count=0;
                if(isset($_SESSION['cart-product'])){
                    //count how much the item on the cart
                    $count= count($_SESSION['cart-product']);
                }
            ?>
            <a href="index.php"><img src="images/return.png" class="return-button"/></a>
            <a href="index.php"><img src="images/AlphaSqu@d.png" class="logo"/></a>
            <div>
                <a href="shopping-cart.php"><img src="images/shopping-bag.png" class="shopping-bag"/></a>
                <span class="cart-count">(<?php echo $count; ?>)</span>
            </div>
        </nav>
</header>