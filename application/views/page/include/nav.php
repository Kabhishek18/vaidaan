
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
                                <span class="count"><?=(empty($this->cart->total_items())?'0':$this->cart->total_items())?></span>
                                <span>/</span>
                                <span class="amount">INR<?=(empty($this->cart->total_items())?'0.00':number_format($this->cart->total()))?></span>
                            </button>

                            <div class="minicart-content">
                                <div class="mini-cart-body">
                                
                                    <?php if($this->cart->total_items()>0){
                                     $cartItems= $this->cart->contents();
                                    foreach($cartItems as $items){?> 
                                    <!-- Single Cart Item Start -->
                                    <div class="single-cart-item d-flex">
                                        <figure class="product-thumb">
                                            <a href="#"><img src="<?=base_url()?>resource/assets/img/products/product-2.jpg" alt="Products"/></a>
                                        </figure>
                                        <div class="product-details">
                                            <h2><a href="<?=base_url()?>product/<?=$items['id']?>"><?=$items['name']?></a></h2>
                                            <div class="cal d-flex align-items-center">
                                                <span class="quantity"><?=$items['qty']?></span>
                                                <span class="multiplication">X</span>
                                                <span class="price">INR<?=number_format($items['price'])?></span>
                                            </div>
                                        </div>
                                        <a href="<?=base_url()?>cart/removeItem/<?=$items['rowid']?>" class="remove-icon"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    <!-- Single Cart Item End -->
                                    <?php }}?>
                                </div>
                                <div class="mini-cart-footer text-center">
                                    <a href="<?=base_url()?>cart" class="btn btn-transparent btn-small mr-3">View Cart</a>
                                    <a href="<?=base_url()?>checkout" class="btn btn-transparent btn-small">Checkout</a>
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
                                <li class="dropdown-show"><a href="">About</a>
                                </li>
                                <li class="dropdown-show"><a href="">Lookbook</a>
                                </li>
                                
                                <li class="dropdown-show"><a href="<?=base_url()?>category/1" class="arrow-toggle">Jewellery</a>
                                    <ul class="mega-menu-wrap dropdown-nav">
                                        <li class="mega-menu-item"><a href="shop" class="mega-item-title">NEW IN</a>
                                            <ul>
                                                <li><a href="<?=base_url()?>category/1/product_new/sale">Sale</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_new/gift card">Gift Cards</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_new/new arrivals">New Arrivals</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_new/best selling">Best Selling</a></li>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop" class="mega-item-title">BY CATEGORY</a>
                                            <ul>
                                                <?php $jewellery=$this->cart_model->Getcatsub(1);
                                                foreach($jewellery as $jewel){?>
                                                <li><a href="<?=base_url()?>category/1/s/<?=$jewel['id']?>" style="text-transform: capitalize;"><?=$jewel['subcat_name']?></a></li>
                                                <?php }?>
                                            </ul>
                                        </li>

                                        <li class="mega-menu-item"><a href="shop" class="mega-item-title">BY COLLECTION</a>
                                            <ul>
                                                <li><a href="<?=base_url()?>category/1/product_collection/pahal">Pahal</a></li>
                                                        <li><a href="<?=base_url()?>category/1/product_collection/the beginning">The beginning</a></li>
                                                        <li><a href="<?=base_url()?>category/1/product_collection/new arrivals">New Arrivals</a></li>
                                                        <li><a href="<?=base_url()?>category/1/product_collection/best selling">Best Selling</a></li>
                                            </ul>
                                        </li>
										
										<li class="mega-menu-item"><a href="shop" class="mega-item-title">BY OCCASION</a>
                                            <ul>
                                                <li><a href="<?=base_url()?>category/1/product_occasion/daily essentials">Daily Essential</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_occasion/wedding bells">Wedding Bells</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_occasion/party crazy">Party Crazy</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_occasion/festivals">Festivals</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_occasion/limited editions">Limited Editions</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_occasion/ishita picks">Ishita Picks</a></li>

                                            </ul>
                                        </li>
										
										<li class="mega-menu-item"><a href="shop" class="mega-item-title">BY FINISH</a>
                                            <ul>
                                                <li><a href="<?=base_url()?>category/1/product_finish/gold">Gold</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_finish/silver">Silver</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_finish/gun metal">Gun Metal</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_finish/multi color">Multi Color</a></li>
                                                <li><a href="<?=base_url()?>category/1/product_finish/black">Black</a></li>


                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
								<li class="dropdown-show"><a href="<?=base_url()?>category/2" class="arrow-toggle">Clothing</a>
                                    <ul class="dropdown-nav">
                                        <?php $cloth=$this->cart_model->Getcatsub(2);
                                                foreach($cloth as $jewel){?>
                                        <li><a href="<?=base_url()?>category/1/s/<?=$jewel['id']?>" style="text-transform: capitalize;"><?=$jewel['subcat_name']?></a></li>
                                                <?php }?>
                                    </ul>
                                </li>
                                <li class="dropdown-show"><a href="<?=base_url()?>category/3" class="arrow-toggle">Bags</a>

                                    <?php $bags=$this->cart_model->Getcatsub(3);   if ($bags) {
                                         echo '<ul class="dropdown-nav">';
                                                foreach($bags as $jewel){?>
                                        <li><a href="<?=base_url()?>category/1/s/<?=$jewel['id']?>" style="text-transform: capitalize;"><?=$jewel['subcat_name']?></a></li>
                                                <?php } 
                                              echo "</ul>";      
                                            }?>


                                </li>

                                <li class="dropdown-show"><a href="<?=base_url()?>category/4" class="arrow-toggle">Footwear</a>
                                    <?php $bags=$this->cart_model->Getcatsub(3);   if ($bags) {
                                       echo '<ul class="dropdown-nav">';
                                                foreach($bags as $jewel){?>
                                        <li><a href="<?=base_url()?>category/1/s/<?=$jewel['id']?>" style="text-transform: capitalize;"><?=$jewel['subcat_name']?></a></li>
                                                <?php }
                                              echo "</ul>";   }?>
                                </li>

                                <li><a href="<?=base_url()?>contact">Contact</a></li>
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
                <form action="<?=base_url()?>search" method="POST" class="search-form-area">
                    <input type="search" class="form-control" name="search" id="search" placeholder="Search">
                    <button type="submit" class="btn btn-brand btn-search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--== End Search box Wrapper ==-->
