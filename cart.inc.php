<?php
    session_start();
    //Request to access the page from the form
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        //Add product to cart
        if(isset($_POST['add-to-cart']))
        {
            //If gloabal 'cart-product' variable set
            if(isset($_SESSION['cart-product']))
            {
                $cart_products = array_column($_SESSION['cart-product'],'productName');
                //Check if the value exists in the array
                if(in_array($_POST['productName'],$cart_products))
                {
                    //Display message and go to previous page
                    echo"<script>alert('Product added');
                        history.back();
                    </script>";
                }
                else{
                    $count = count($_SESSION['cart-product']);
                    $_SESSION['cart-product'][$count]=array('productName'=>$_POST['productName'],
                                                            'price' => $_POST['price'],
                                                                'quantity'=>1);
                
                    //Display message and go to previous page
                    echo"<script>alert('Product added');
                                history.back();
                        </script>";
                }
            }

            //If 'cart-product' varible doesn't exist, then create it with an array to contain the product name, price, and quantity.
            else
            {
                $_SESSION['cart-product'][0]=array('productName'=>$_POST['productName'],
                                                        'price' => $_POST['price'],
                                                        'quantity'=>1);
                print_r($_SESSION['cart-product']);
                //Display to tell the user that the item has been added, and went to the previous page.
                echo"<script>alert('Product added');
                            history.back();
                    </script>";
            }
        }
        //Remove product from cart
        if(isset($_POST['remove'])) {
            //create a variable call $remove_item which will be used to contain all the cart items value. 
            //the $key is as the [0] [1] [2], and the $remove_item is as [item_name], [item_price], [qty]
            foreach($_SESSION['cart-product'] as $key => $remove_product) 
            {
                //if there is value that has same name as 'productName' on the session 'cart-product', remove it from the array 'cart-product'
                if($remove_product['productName']==$_POST['productName'])
                {
                    //Resets any variable, so it will $key that contain the same item_name as from $remove_item.
                    unset($_SESSION['cart-product'][$key]);

                    //to returns the session 'cart-product' index value.
                    $_SESSION['cart-product'] = array_values($_SESSION['cart-product']);
                    //Display message and go to previous page
                    echo"<script>
                        alert('Product removed');
                        history.back();
                    </script>";
                }
            }

    }
    }
?>