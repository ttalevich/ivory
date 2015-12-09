<?php include('includes/doc.php'); ?>
<?php include('includes/nav.php'); ?>

    <div id="inner-container">
        <div id="aside">
            <div id="aside-content">
                <ul class="relative aside-toggle">
                    <li><span class="aside-toggle"></span></li>
                    <li><h3>TYPE</h3></li>
                    <li class="slider">
                        <ul class="slide">
                            <li><a href="leathers.php">leather</a></li>
                            <li><a href="#">sweaters</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="relative aside-toggle">
                    <li><span class="aside-toggle"></span></li>
                    <li><h3>designers</h3></li>
                    <li class="slider">
                        <ul class="slide">
                            <li><a href="#">Julius_7</a></li>
                            <li><a href="#">Number (n)ine</a></li>
                            <li><a href="#">Rick Owens</a></li>
                            <li><a href="#">Undercoverism</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="relative aside-toggle">
                    <li><span class="aside-toggle"></span></li>
                    <li><h3>Price</h3></li>
                    <li class="slider">
                        <input type="number" placeholder="min">
                        <input type="number" placeholder="max">
                    </li>
                </ul>
            </div>
        </div>
        <div id="inner-content">
            <section class="main-cta">
                <h1>Outerwear</h1>
                <div class="relative left">
                    <a href="leather.php">
                        <a href="leather.php" class="cta">Leather</a>
                        <img src="images/banners/leather.jpg" alt="Shop Leather">
                    </a>
                </div>
                <div class="relative right">
                    <a href="#.php">
                        <a href="#" class="cta">sweaters</a>
                        <img src="images/banners/sweaters.jpg" alt="Shop Sweaters">
                    </a>
                </div>
            </section>
            <section class="main-items">
                <h1>Current selection</h1>
                <div id="item-wrapper">
                    <div class="items relative">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/outerwear/2101602379476-1.jpg" alt="Rick Owens Button Intarsia">
                            </a>
                        </div>
                        <section class="item-desc">
                            <a href="#"><h3>Button Neck Intarsia</h3></a>
                            <a href="#"><p>Rick Owens</p></a>
                            <a href="leather.php"><p>Leather</p></a>
                            <p class="price">$645</p>
                        </section>
                    </div>
                    <div class="items relative">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/outerwear/n9.jpg" alt="Number (n)ine Sweatshirt">
                            </a>
                        </div>
                        <section class="item-desc">
                            <a href="#"><h3>Sweatshirt</h3></a>
                            <a href="#"><p>Number (n)ine</p></a>
                            <a href="#"><p>Sweaters</p></a>
                            <p class="price">$40</p>
                        </section>
                    </div>
                    <div class="items relative">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/outerwear/ro-stripe.jpg" alt="Rick Owens Striped Sweater">
                            </a>
                        </div>
                        <section class="item-desc">
                            <a href="#"><h3>striped sweater</h3></a>
                            <a href="#"><p>Rick Owens</p></a>
                            <a href="#"><p>Sweaters</p></a>
                            <p class="price">$175</p>
                        </section>
                    </div>
                    <div class="items relative">
                        <div class="item-img">
                            <a href="product.php">
                                <img src="images/outerwear/2101603094743-1.jpg" alt="Undercoverism Ethnic Rider">
                            </a>
                        </div>
                        <section class="item-desc">
                            <a href="product.php"><h3>Ethnic Rider</h3></a>
                            <a href="#"><p>Undercoverism</p></a>
                            <a href="leather.php"><p>Leather</p></a>
                            <p class="price">$800</p>
                        </section>
                    </div>
                    <div class="items relative">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/outerwear/julius.jpg" alt="Julius_7 Double Zip Moto">
                            </a>
                        </div>
                        <section class="item-desc">
                            <a href="#"><h3>Double-zip Moto</h3></a>
                            <a href="#"><p>Julius_7</p></a>
                            <a href="#"><p>Leather</p></a>
                            <p class="price">$600</p>
                        </section>
                    </div>
                    <div class="items relative">
                        <div class="item-img">
                            <a href="#">
                                <img src="images/outerwear/uu-gradient.jpg" alt="Undercoverism Gradient">
                            </a>
                        </div>
                        <section class="item-desc">
                            <a href="#"><h3>Gradient</h3></a>
                            <a href="#"><p>Undercoverism</p></a>
                            <a href="#"><p>Sweaters</p></a>
                            <p class="price">$250</p>
                        </section>
                    </div>
                    <a href="#" class="more">...view all</a>
                </div>
            </section>
        </div>
    </div>
<?php include('includes/footer.php'); ?>
