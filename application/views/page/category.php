<!--== Start Shop Page Wrapper ==-->
<div id="shop-page-wrapper" class="page-padding">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            <div class="col-lg-3">
                <div id="sidebar-area-wrap">
                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">PRODUCT CATEGORIES</h2>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                             <?php foreach($data as $navlist){
                               $count=$this->cart_model->Getsubpro($navlist['id']);?>

                                <li><a href="<?=base_url()?>category/<?=$navlist['cat_id']?>/s/<?=$navlist['id']?>"><?=$navlist['subcat_name']?> <span>(<?=$count[0]['count(*)']?>)</span></a></li>
                                <?php }?>

                            </ul>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">Color</h2>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li><a href="#">Black <span>(2)</span></a></li>
                                <li><a href="#">Blue <span>(4)</span></a></li>
                                <li><a href="#">Gold <span>(3)</span></a></li>
                                <li><a href="#">Red <span>(1)</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">DESIGNER</h2>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                <li><a href="#">PERSONAL NAME</a></li>
                                <li><a href="#">PERSONAL NAME</a></li>
                                <li><a href="#">PERSONAL NAME</a></li>
                                <li><a href="#">PERSONAL NAME</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">PRICE FILTER</h2>
                        <div class="sidebar-body">
                            
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->
                </div>
            </div>
            <!-- Sidebar Area End -->

            <!-- Start Shop Page Content -->
            <div class="col-lg-9 order-first order-lg-last">
                <div class="shop-page-content-wrap">
                    <div class="products-settings-option d-block d-md-flex">
                        <div class="product-cong-left d-flex align-items-center">
                            <ul class="product-view d-flex align-items-center">
                                <li class="current" data-target="grid-view"><i class="fa fa-th"></i></li>
                                <li data-target="product-list-view"><i class="fa fa-list-ul"></i></li>
                            </ul>
                            <span class="show-items">Items 1 - 9 of 17</span>
                        </div>

                        <div class="product-sort_by d-flex align-items-center mt-3 mt-md-0">
                            <label for="sort">Sort By:</label>
                            <select name="sort" id="sort">
                                <option value="Position">Relevance</option>
                                <option value="Name Ascen">Name, A to Z</option>
                                <option value="Name Decen">Name, Z to A</option>
                                <option value="Price Ascen">Price low to heigh</option>
                                <option value="Price Decen">Price heigh to low</option>
                            </select>
                        </div>
                    </div>

                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">

                                <?php foreach($catpro as $catitem){?>
                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="<?=base_url()?>product/<?=$catitem['id']?>" class="d-block">
                                                <img class="primary-thumb" src="<?=base_url()?>resource/assets/img/products/product-1.jpg"
                                                     alt="Product"/>
                                                <img class="secondary-thumb" src="<?=base_url()?>resource/assets/img/products/product-2.jpg"
                                                     alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal<?=$catitem['id']?>">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name" style="text-transform: capitalize;"><?=$catitem['cat_name']?></a>
                                            <h2 class="product-name"><a href="<?=base_url()?>product/<?=$catitem['id']?>"><?=$catitem['product_name']?></a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">₹<?=number_format($catitem['product_regularprice'])?></del>
                                                <span class="price">₹<?=number_format($catitem['product_salesprice'])?></span>
                                            </div>

                                            <p class="product-desc"><?=substr($catitem['product_description'],0,200)?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

<!--== Start Quick View Content ==-->
<div class="modal" id="quickViewModal<?=$catitem['id']?>" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="<?=base_url()?>resource/assets/img/icons/cancel.png" alt="Close" class="img-fluid"/></span>
            </button>
            <div class="modal-body">
                <div class="single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail Area Start -->
                        <div class="col-lg-5">
                            <div class="product-thumbnail-wrap">
                                <div class="product-image-carousel">
                                    <div class="single-image-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-1.jpg"
                                             alt="Product"/>
                                    </div>

                                    <div class="single-image-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-2.jpg"
                                             alt="Product"/>
                                    </div>

                                    <div class="single-image-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-3.jpg"
                                             alt="Product"/>
                                    </div>

                                    <div class="single-image-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-4.jpg"
                                             alt="Product"/>
                                    </div>

                                    <div class="single-image-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-5.jpg"
                                             alt="Product"/>
                                    </div>
                                </div>

                                <div class="pro-img-nav-carousel mt-3">
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-1.jpg"
                                             alt="Product"/>
                                    </div>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-2.jpg"
                                             alt="Product"/>
                                    </div>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-3.jpg"
                                             alt="Product"/>
                                    </div>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-4.jpg"
                                             alt="Product"/>
                                    </div>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-5.jpg"
                                             alt="Product"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail Area End -->

                        <!-- Product Details Area Start -->
                        <div class="col-lg-7">
                            <div class="product-details">
                                <h2><?=$catitem['product_name']?></h2>

                                <p class="pro-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </p>

                                <div class="price-group">
                                    <del class="price">INR<?=number_format($catitem['product_regularprice'])?></del>
                                    <span class="price sale-price">INR<?=number_format($catitem['product_salesprice'])?></span>
                                </div>

                                <div class="product-info-stock-sku">
                                    <span class="product-stock-status text-success">In Stock</span>
                                    <span class="product-sku-status"><strong>SKU</strong> MH<?=$catitem['id']?><?=$catitem['cat_id']?><?=$catitem['subcat_id']?></span>
                                </div>

                                <p class="product-desc"><?=substr($catitem['product_description'],0,250)?></p>

                                <div class="shopping-option">
                                    <!-- Product Size Choose Option -->
                                    <div class="shop-option-item">
                                        <h4>Size:</h4>
                                        <select name="pro_size" id="pro_size">
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                    </div>

                                    <!-- Product Color Choose Option -->
                                    <div class="shop-option-item">
                                        <h4>Color:</h4>
                                        <ul class="product-color nav">
                                            <li class="color-item red">red</li>
                                            <li class="color-item green">green</li>
                                            <li class="color-item black">black</li>
                                            <li class="color-item yellow">yellow</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-quantity d-sm-flex align-items-center">
                                    <div class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="1" min="1" /></div>
                                    </div>

                                    <a href="cart" class="btn btn-transparent btn-semi-round"><i
                                            class="fa fa-shopping-cart"></i> Add to Cart</a>
                                </div>

                                <div class="product-btn-group">
                                    <a href="wishlist" class="btn btn-round btn-transparent"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="compare" class="btn btn-round btn-transparent"><i
                                            class="fa fa-exchange"></i></a>
                                    <a href="single-product-gruop" class="btn btn-round btn-transparent"><i
                                            class="fa fa-envelope-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details Area End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Quick View Content ==-->






                                <?php }?>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
            <!-- End Shop Page Content -->
        </div>
    </div>
</div>
<!--== End Shop Page Wrapper ==-->


