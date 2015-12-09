<?php include('includes/doc.php'); ?>
<?php include('includes/nav.php'); ?>
    <div id="container">
        <div id="cart-container" class="relative">
            <div class="cart-header">
                <h1>sign in</h1>               
                <h4>shopping cart > sign in</h4>              
            </div>
            <div id="login-container">
                <input type="text" placeholder="email">
                <input type="text" placeholder="password">
                <a href="confirm.php" class="checkout">login</a>
                <a href="register.php" class="add-wish">register</a>
                <a href="customer-info.php" class="add-wish guest-btn">guest checkout</a>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>