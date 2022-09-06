<?php
    session_start();
    include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="./css/product-page.css" rel="stylesheet" />
    <link rel="icon" href="images/logo(white).png">
    <title>Shopping Cart</title>
</head>
<body>
    <section>
        <h2>My Cart</h2>
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <thead>
            <tr>
                <th style="text-align:left;" width="5%">Id no.</th>
                <th style="text-align:left;" width="30%">Name</th>
                <th style="text-align:left;">Unit Price</th>
                <th style="text-align:left;">Quantity</th>
                <th style="text-align:left;" width="5%"></th>
            </tr>
        </thead>
        <tbody class="table-body">
            <?php
                $total=0;
                if(isset($_SESSION['cart-product'])){
                    //Assign the variable ['cart-product'] array to $key on each $product
                    foreach($_SESSION['cart-product'] as $key => $product) {
                        $total = $total + $product['price'];
                        echo "<tr>
                                <td>1</td>
                                <td>$product[productName]</td>
                                <td>$product[price]</td>
                                <td><input type= 'number' value='$product[quantity]' min='1' max='99'></td>
                                <td>
                                <form action ='cart.inc.php' method='POST'>
                                    <button name='remove'>REMOVE</button>
                                    <input type='hidden' name='productName' value='$product[productName]'>
                                </form>
                                </td>
                            </tr>";
                    }
                }
            ?>
        </tbody>
        <h3>Total</h3>
        <h4><?php echo $total; ?></h4>
    </section>
</body>
</html>