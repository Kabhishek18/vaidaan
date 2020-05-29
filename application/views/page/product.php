<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1><?php $subcat=$this->cart_model->Getsubcat($subcat_id);
                    echo $subcat['subcat_name']?></h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="javascript:void(0);"><?php $cat=$this->cart_model->Getcat($cat_id);
                    echo $cat['cat_name']?></a></li>
                        <li><a href="javascript:void(0);" class="current"><?=$product_name?></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->

<!--== Start Single Product Wrapper ==-->
<div id="single-product-page-wrapper" class="page-padding">
    <div class="container">
        <div class="row">
            <!-- Single Product Page Content Start -->
            <div class="col-lg-12">
                <div class="single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail Area Start -->
                        <div class="col-lg-5">
                            <div class="product-thumbnail-wrap">
                                <div class="product-image-carousel">
                                    <div class="single-image-item">
										    <a href="assets/img/products/single-pro-thumb-5.jpg" class="gallery-popup">
											<img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-5.jpg" alt="product"/></a>
                                    </div>

                                    <div class="single-image-item">
										    <a href="assets/img/products/single-pro-thumb-5.jpg" class="gallery-popup">
											<img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-5.jpg" alt="product"/></a>
                                    </div>

                                    <div class="single-image-item">
										    <a href="assets/img/products/single-pro-thumb-5.jpg" class="gallery-popup">
											<img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-5.jpg" alt="product"/></a>

										
										
                                    </div>

                                    <div class="single-image-item">
										    <a href="assets/img/products/single-pro-thumb-5.jpg" class="gallery-popup">
											<img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-5.jpg" alt="product"/></a>
                                    </div>

                                    <div class="single-image-item">
										    <a href="assets/img/products/single-pro-thumb-5.jpg" class="gallery-popup">
											<img class="img-fluid" src="<?=base_url()?>resource/assets/img/products/single-pro-thumb-5.jpg" alt="product"/></a>
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
                                <h2><?=$product_name?></h2>
                                    

                                <p class="pro-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half"></i>
                                    <i class="fa fa-star-o"></i>
                                </p>

                                <div class="price-group">
                                    <del class="price">INR <?=number_format($product_regularprice)?></del>
                                    <span class="price sale-price">INR <?=number_format($product_salesprice)?></span>
                                </div>

                                <div class="product-info-stock-sku">
                                    <span class="product-stock-status text-success">In Stock</span>
                                    <span class="product-sku-status"><strong>SKU</strong> MH<?=$id.$cat_id.$subcat_id?></span>
                                </div>

                                <p class="product-desc"><?=substr($product_description,0,200)?></p>
                                 <form method="post" action="<?=base_url()?>Cart/add_to_cart">
                                <div class="shopping-option">
                                    <!-- Product Size Choose Option -->
                                   <input type="hidden" name="pid" value="<?=$id?>">
                                    <div class="shop-option-item">
                                        <h4>Size:</h4>
                                        <select name="pro_size" id="pro_size" style="display: none;">
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
                                        <select name="pro_color" id="pro_size" style="display: none;">
                                            <option value="Red">Red</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Black">Black</option>
                                            <option value="Maroon">Maroon</option>
                                            <option value="Yellow">Yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="product-quantity d-sm-flex align-items-center">
                                    <div class="pro-quantity">
                                        <div class="pro-qty"><input type="text" value="1" min="1" name="qty" /></div>
                                    </div>

                                    <button class="btn btn-transparent btn-semi-round"><i
                                            class="fa fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                                </form>
                                    <span class="product-stock-status text-success">Ships In 07-10 Working Days</span>



                                <div class="product-btn-group">
                                    <a href="wishlist.html" class="btn btn-round btn-transparent"><i
                                            class="fa fa-heart-o"></i></a>
                                    <a href="single-product-gruop.html" class="btn btn-round btn-transparent"><i
                                            class="fa fa-envelope-o"></i></a>
                                </div>

                                <!-- Product Share -->
                                <div class="product-share-area">
                                    <h3>Share This Product:</h3>
                                    <div class="share-btn">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details Area End -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Product Full Description Start -->
                            <div class="product-full-info-reviews">
                                <!-- Single Product tab Menu -->
                                <nav class="nav" id="nav-tab">
                                    <a class="active" id="description-tab" data-toggle="tab" href="#description">Description</a>
                                    <a id="reviews-tab" data-toggle="tab" href="#info">Additional Info</a>
                                    <a id="reviews-tab" data-toggle="tab" href="#Customise">Customise</a>
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews">Reviews</a>

                                </nav>
                                <!-- Single Product tab Menu -->

                                <!-- Single Product tab Content -->
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="description">
                                        <?=$product_description?>
                                    </div>
									
									<div class="tab-pane fade show active" id="info">
                                       
                                        <?=$product_info?>
                                       
                                    </div>
									
									<div class="tab-pane fade show active" id="Customise">
                                         <?=$product_customise?>

                                       
                                    </div>

                                    <div class="tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="product-ratting-wrap">
                                                    <div class="pro-avg-ratting">
                                                        <h4>4.5 <span>(Overall)</span></h4>
                                                        <span>Based on 9 Comments</span>
                                                    </div>
                                                    <div class="ratting-list">
                                                        <div class="sin-list float-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>(5)</span>
                                                        </div>
                                                        <div class="sin-list float-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span>(3)</span>
                                                        </div>
                                                        <div class="sin-list float-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span>(1)</span>
                                                        </div>
                                                        <div class="sin-list float-left">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                            <span>(0)</span>
                                                        </div>
                                                    </div>
                                                    <div class="rattings-wrapper">

                                                        <div class="sin-rattings">
                                                            <div class="ratting-author">
                                                                <h3>Cristopher Lee</h3>
                                                                <div class="ratting-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span>(5)</span>
                                                                </div>
                                                            </div>
                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                dolor sit amet, consectetur, adipisci veli</p>
                                                        </div>

                                                        <div class="sin-rattings">
                                                            <div class="ratting-author">
                                                                <h3>Nirob Khan</h3>
                                                                <div class="ratting-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span>(5)</span>
                                                                </div>
                                                            </div>
                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                dolor sit amet, consectetur, adipisci veli</p>
                                                        </div>

                                                        <div class="sin-rattings">
                                                            <div class="ratting-author">
                                                                <h3>MD.ZENAUL ISLAM</h3>
                                                                <div class="ratting-star">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <span>(5)</span>
                                                                </div>
                                                            </div>
                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                dolor sit amet, consectetur, adipisci veli</p>
                                                        </div>

                                                    </div>
                                                    <div class="ratting-form-wrapper">
                                                        <h3>Add your Comments</h3>
                                                        <form action="#" method="post">
                                                            <div class="ratting-form row">
                                                                <div class="col-12 mb-4">
                                                                    <h5>Rating:</h5>
                                                                    <div class="ratting-star fix">
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                        <i class="fa fa-star-o"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-4">
                                                                    <label for="name">Name:</label>
                                                                    <input id="name" placeholder="Name" type="text">
                                                                </div>
                                                                <div class="col-md-6 col-12 mb-4">
                                                                    <label for="email">Email:</label>
                                                                    <input id="email" placeholder="Email" type="text">
                                                                </div>
                                                                <div class="col-12 mb-4">
                                                                    <label for="your-review">Your Review:</label>
                                                                    <textarea name="review" id="your-review"
                                                                              placeholder="Write a review"></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input value="add review" type="submit">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product tab Content -->
                            </div>
                            <!-- Product Full Description End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Product Page Content End -->
        </div>
    </div>
</div>
<!--== End Single Product Wrapper ==-->
