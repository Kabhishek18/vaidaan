<!-- Start PreHeader Area -->
    <div class="preheader-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center text-md-left">
                    <!-- Start PreHeader Left -->
                    <div class="preheader-left-wrap">
                        <a href="tel:9199109 88355"><i class="fa fa-phone"></i> +91 99109 88355</a>
                        <a href="mailto:info@vaidaan.com"><i class="fa fa-envelope"></i> info@vaidaan.com</a>
                    </div>
                    <!-- End PreHeader Left -->
                </div>

                <div class="col-md-6 mt-3 mt-md-0">
                    <!-- Start PreHeader Right -->
                    <div class="preheader-right-wrap">
                        <nav id="site-settings">
                            <ul class="nav justify-content-center justify-content-md-end">
                                <li class="dropdown-show"><a href="<?=base_url()?>myaccount" class="arrow-toggle" style="text-transform: capitalize;"><?=(!empty($_SESSION['user_detail']['user_name'])?$_SESSION['user_detail']['user_name']:'My-Account')?></a>
                                    <ul class="dropdown-nav">
                                        <li><a href="<?=base_url()?>myaccount">My Account</a></li>
                                        <li><a href="wishlist">Wishlist</a></li>
                                        <li><a href="cart">Shopping Cart</a></li>
                                        <li><a href="checkout">Checkout</a></li>
                                        
                                    </ul>
                                </li>

                               

                                <li class="dropdown-show"><a href="#" class="arrow-toggle">INR</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="#">AUD</a></li>
                                        <li><a href="#">USD</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End PreHeader Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End PreHeader Area -->
