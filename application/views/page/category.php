<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1><?php $cat=$this->cart_model->Getcat($cid);
                    echo $cat['cat_name']?></h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        
                       
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->


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

             
                </div>
            </div>
            <!-- Sidebar Area End -->

            <!-- Start Shop Page Content -->
            <div class="col-lg-9 order-first order-lg-last">
                <div class="shop-page-content-wrap">
                    <div class="products-settings-option d-block d-md-flex">
                        <!-- <div class="product-cong-left d-flex align-items-center">
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
                    </div> -->

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
                                                <img class="primary-thumb" src="<?=base_url()?>resource/upload/product/<?=$catitem['product_image']?>"
                                                     alt="Product"/>
                                                <img class="secondary-thumb" src="<?=base_url()?>resource/upload/product/<?=$catitem['product_image2']?>"
                                                     alt="Product"/>
                                            </a>
                                            <figcaption class="product-hvr-content">
                                                <a href="wishlist.html" class="btn-wishlist" data-toggle="tooltip"
                                                   data-placement="left" title="Add to Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="<?=base_url()?>product/<?=$catitem['id']?>" class="btn btn-brand btn-quickView"  >View More</a>
                                            </figcaption>
                                        </figure>

                                        <!-- Product Details -->
                                        <div class="product-details">
                                            <a href="shop.html" class="product-cat-name" style="text-transform: capitalize;"><?=$catitem['cat_name']?></a>
                                            <h2 class="product-name"><a href="<?=base_url()?>product/<?=$catitem['id']?>"><?=$catitem['product_name']?></a></h2>

                                            <?php if($catitem['product_salesprice'] != 0 ){?>
                                            <div class="product-prices">
                                                <del class="oldPrice">₹<?=number_format($catitem['product_regularprice'])?></del>
                                                <span class="price">₹<?=number_format($catitem['product_salesprice'])?></span>
                                            </div>
                                        <?php }else{?>
                                            <span class="price">₹<?=number_format($catitem['product_regularprice'])?></span>
                                           <?php }?> 


                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End -->







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


