
<!--== Start Header Section ===-->
<header id="header-area">
    <?php require('preheader.php')?>
    <!-- Start Header Bottom  -->
    <div class="header-bottom-area"  style="padding-bottom:0px;">
        <div class="container-fluid">
		
		 	
            <div class="row" >
                <!-- Start Logo Area -->
                <div class="col-lg-2 col-sm-4 m-auto text-center text-sm-left">
                    <div class="logo-wrap mb-4 mb-sm-0">
                        <a href="<?=base_url()?>"><img src="<?=base_url()?>resource/assets/img/Vaidaa-Jewellery.png" alt="Logo"/></a>
                    </div>
                </div>
                <!-- End Logo Area -->

                <!-- Header Shop Cong Area -->
                <div class="col-lg-5 col-sm-8 m-auto">
                    <div class="header-configure-area d-flex justify-content-center justify-content-sm-end align-items-center">
                        <!-- Start Search Box -->
                        <div class="search-box-wrap">
                            <button class="srch-icon animate-modal-popup" data-mfp-src="#search-box-popup"><i
                                    class="fa fa-search"></i></button>
                        </div>
                        <!-- End Search Box -->

                        <!-- Start Mini Cart Area -->
                        <div class="mini-cart-wrap">
                            <button class="btn-minicart"><i class="fa fa-shopping-cart"></i>
                                <span class="count">4</span>
                                <span>/</span>
                                <span class="amount">INR488.00</span>
                            </button>

                            <div class="minicart-content">
                                <div class="mini-cart-body">
                                    <!-- Single Cart Item Start -->
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img src="<?=base_url()?>resource/assets/img/products/product-1.jpg"
                                                                               alt="Products"/></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">3</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">INR77.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <!-- Single Cart Item End -->

                                    <!-- Single Cart Item Start -->
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img src="<?=base_url()?>resource/assets/img/products/product-2.jpg"
                                                                               alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="single-product">Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">2</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">INR6.00</span>
                                            </div>
                                        </div>
                                        <a href="#" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <!-- Single Cart Item End -->

                                    <!-- Single Cart Item Start -->
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img src="<?=base_url()?>resource/assets/img/products/product-3.jpg"
                                                                               alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">1</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">INR116.00</span>
                                            </div>
                                        </div>
                                        <a href="single-product" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <!-- Single Cart Item End -->

                                    <!-- Single Cart Item Start -->
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img src="<?=base_url()?>resource/assets/img/products/product-4.jpg"
                                                                               alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="#">Sprite Yoga Companion Kit</a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity">1</span>
                                                <span class="multiplication">X</span>
                                                <span class="price">INR116.00</span>
                                            </div>
                                        </div>
                                        <a href="single-product" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <!-- Single Cart Item End -->
                                </div>
                                <div class="mini-cart-footer text-center">
                                    <a href="#" class="btn btn-transparent btn-small mr-3">View Cart</a>
                                    <a href="#" class="btn btn-transparent btn-small">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Mini Cart Area -->
                    </div>
                </div>
                <!-- Header Shop Cong Area -->
            </div>
			
			<div class="row" style=" border-top:1px solid; border-color:whitesmoke; margin-top:20px;">
                <!-- Start Navigation // Main Menu -->
                <div class="col-lg-10 m-auto d-none d-lg-block">
                    <div id="navigation-area-wrap">
                        <nav class="mainmenu">
                            <ul id="main-navbar" class="clearfix">
                                <li class="dropdown-show"><a href="<?=base_url()?>" style="color:#bdb093;">Home</a></li>
                                <?php $page = $this->page_model->getPageParent();?>
                                <?php foreach($page as $menu):?>
                                <li class="dropdown-show"><a href="#" class="arrow-toggle"><?=$menu['page_parent']?></a>
                                    <ul class="dropdown-nav">
                                        <?php $sub = $this->page_model->getPageSub($menu['page_parent']);?>
                                        <?php foreach($sub as $submenu):?>
                                        <li><a href="<?=base_url()?>about/<?=$submenu['id']?>/<?=$submenu['page_name']?>" style="text-transform: capitalize;"><?=$submenu['page_name']?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                                <?php endforeach;?>   
                                <li class="dropdown-show"><a href="#" class="arrow-toggle">Jewellery</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <li class="mega-menu-item"><a href="shop" class="mega-item-title">NEW IN</a>
                                            <ul>
                                                <li><a href="#">Sale</a></li>
                                                <li><a href="#">Gift Cards</a></li>
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Best Selling</a></li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop" class="mega-item-title">BY CATEGORY</a>
                                            <ul>
                                                <li><a href="#">Earrings</a></li>
                                                <li><a href="#">Hoops</a></li>
                                                <li><a href="#">Studs</a></li>
                                                <li><a href="#">Necklaces</a></li>
                                                <li><a href="#">Bracelets</a></li>
                                                <li><a href="#">Rings</a></li>
                                                <li><a href="#">Head Pieces</a></li>
                                                <li><a href="#">Brooches</a></li>
                                                <li><a href="#">Belts</a></li>
                                                <li><a href="#">Anklets</a></li>

                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop" class="mega-item-title">BY COLLECTION</a>
                                            <ul>
                                                <li><a href="#">Pahal</a></li>
                                                <li><a href="#">The Beginning</a></li>
                                                <li><a href="#">New Arrivals</a></li>
                                                <li><a href="#">Best Selling</a></li>
                                            </ul>
                                        </li>
										
										<li class="mega-menu-item"><a href="shop" class="mega-item-title">BY OCCASION</a>
                                            <ul>
                                                <li><a href="#">Daily Essentials</a></li>
                                                <li><a href="#">Wedding Bells</a></li>
                                                <li><a href="#">Party Crazy</a></li>
                                                <li><a href="#">Festivals</a></li>
                                                <li><a href="#">Limited Editions</a></li>
                                                <li><a href="#">Ishita Picks</a></li>

                                            </ul>
                                        </li>
										
										<li class="mega-menu-item"><a href="shop" class="mega-item-title">BY FINISH</a>
                                            <ul>
                                                <li><a href="#">Gold</a></li>
                                                <li><a href="#">Silver</a></li>
                                                <li><a href="#">Gun Metal</a></li>
                                                <li><a href="#">Multi Colour</a></li>
                                                <li><a href="#">Black</a></li>

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
								<li class="dropdown-show"><a href="#" class="arrow-toggle">Clothing</a>
                                    <ul class="dropdown-nav">
                                        <li><a href="#">Western</a></li>
                                        <li><a href="#">Indo Western</a></li>
                                        <li><a href="#">Indian </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-show"><a href="<?=base_url()?>">Bags</a></li>

                                <li class="dropdown-show"><a href="#">Footwear</a></li>

                                <li><a href="#">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- End Navigation // Main Menu -->

            </div>
			
        </div>
    </div>
    <!-- End Header Bottom  -->
</header>
<!--== End Header Section ===-->

<!--== Start Search box Wrapper ==-->
<div class="mfp-hide modalSearchBox" id="search-box-popup">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="search-box-wrapper">
                <form action="#" method="POST" class="search-form-area">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="btn btn-brand btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== End Search box Wrapper ==-->
