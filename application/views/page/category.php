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
                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
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
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb" src="<?=base_url()?>resource/assets/img/products/product-3.jpg"
                                                     alt="Product"/>
                                                <img class="secondary-thumb" src="<?=base_url()?>resource/assets/img/products/product-4.jpg"
                                                     alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb" src="<?=base_url()?>resource/assets/img/products/product-5.jpg"
                                                     alt="Product"/>
                                                <img class="secondary-thumb" src="<?=base_url()?>resource/assets/img/products/product-6.jpg"
                                                     alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-two/product-7.jpg" alt="Product"/>
                                                <img class="secondary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-two/product-8.jpg" alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-two/product-1.jpg" alt="Product"/>
                                                <img class="secondary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-two/product-2.jpg" alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-two/product-3.jpg" alt="Product"/>
                                                <img class="secondary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-two/product-4.jpg" alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-three/product-1.jpg" alt="Product"/>
                                                <img class="secondary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-three/product-2.jpg" alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-three/product-4.jpg" alt="Product"/>
                                                <img class="secondary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-three/product-5.jpg" alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->

                                <!-- Single Product Start -->
                                <div class="col-lg-4 col-sm-6">
                                    <div class="single-product-item">
                                        <!-- Product Thumbnail -->
                                        <figure class="product-thumbnail">
                                            <a href="single-product-sticky-left.html" class="d-block">
                                                <img class="primary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-three/product-8.jpg" alt="Product"/>
                                                <img class="secondary-thumb"
                                                     src="<?=base_url()?>resource/assets/img/products/home-three/product-9.jpg" alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" class="btn btn-brand btn-quickView" data-toggle="modal"
                                                   data-target="#quickViewModal">Quick View</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name">Bedroom</a>
                                            <h2 class="product-name"><a href="single-product-carousel.html">Sociis
                                                natoque</a></h2>
                                            <div class="product-prices">
                                                <del class="oldPrice">$50.00</del>
                                                <span class="price">$40.00</span>
                                            </div>

                                            <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit. Culpa cum, cumque dignissimos doloribus eaque earum eligendi est
                                                fugit impedit iusto labore minus modi nemo odio officia omnis quas quasi
                                                quibusdam quos repellat repudiandae rerum saepe sapiente similique
                                                tempora vero voluptas!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->
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
