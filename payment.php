<?php include('includes/doc.php'); ?>
<?php include('includes/nav.php'); ?>
    <div id="container">
        <div id="cart-container" class="relative">
            <div class="cart-header">
                <h1>payment</h1>               
                <h4>shopping cart > checkout</h4>              
            </div>
            <div class="payment-container">
                <h1>payment information</h1>
                    <h4>Credit / Debit</h4>
                    <input class="payment" type="text" placeholder="name on card" value="Tracey Talevich">
                    <select>
                        <option value="VISA">VISA</option>
                        <option>MasterCard</option>
                        <option>American Express</option>
                    </select>
                <select>
                        <option>November</option>
                        <option>February</option>
                        <option>January</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>December</option>
                    </select>
                    <select>
                        <option>2020</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                    </select>
                    
                <input class="payment-small" type="number" value="3556477738223">
                <input class="cvv" type="text" placeholder="cvv" value="246">
                <a href="confirm.php" class="add-cart">Next</a>
            </div>
            
        </div>
    </div>
<?php include('includes/footer.php'); ?>