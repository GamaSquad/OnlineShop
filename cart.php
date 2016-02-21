<?php
$pageTitle = 'Shopping Cart';
require 'includes/header.php';
require 'includes/nav.php';
?> 

<!DOCTYPE html>


<div>
    <div class="cart_product_tile">
        <a href="cart.php"> 
            <div class="cart_product_photo">
                <img class="productphoto" style="margin-top: 20px" src="img/products/small/product1.jpg" alt=""/>

            </div>
            <div class="cart_product_name">
                <span <i class="product_name"></i> Product Name </span>
            </div>
            <div class="cart_product_desc">
                <span <i class="product_desc"></i> Description text goes here. And another line. And another line...</span>
            </div>
            <div class="cart_product_price">
                <span <i class="product_price"></i> 1111.11 BGN </span>
            </div>
    </div>

    <div class="cart_product_tile">
        <a href="cart.php"> 
            <div class="cart_product_photo">
                <img class="productphoto" src="img/products/small/product1.jpg" alt=""/>

                <span <i class="product_photo"></i></span>
            </div>
            <div class="cart_product_name">
                <span <i class="product_name"></i> Product Name </span>
            </div>
            <div class="cart_product_desc">
                <span <i class="product_desc"></i> Description text goes here. And another line. And another line...</span>
            </div>
            <div class="cart_product_price">
                <span <i class="product_price"></i> 1111.11 BGN </span>
            </div>
    </div><div class="cart_product_tile">
        <a href="cart.php"> 
            <div class="cart_product_photo">
                <img class="productphoto" src="img/products/small/product1.jpg" alt=""/>
                <span <i class="product_photo"></i></span>
            </div>
            <div class="cart_product_name">
                <span <i class="product_name"></i> Product Name </span>
            </div>
            <div class="cart_product_desc">
                <span <i class="product_desc"></i> Description text goes here. And another line. And another line...</span>
            </div>
            <div class="cart_product_price">
                <span <i class="product_price"></i> 1111.11 BGN </span>
            </div>
    </div>
</div>


<div class="checkout"> 
    <a href="cart.php">
        <div>
            <input class="checkout_button" type="button" value="Checkout" >


            <div class="total_amount">
                <span class="total_price"></i> Total Price is: 3333.33 BGN</span>
            </div>
        </div>
</div>


</body>

<?php
require 'includes/footer.php';
?>