<!--== Start Shop Page Wrapper ==-->
<div id="shop-page-wrapper" class="page-padding">
    <div class="container">
        <div class="row">
        
            <!-- Start Shop Page Content -->
            <div class="col-lg-12 order-first order-lg-last">
                <div class="shop-page-content-wrap">
               
                    <h1>"<?=$search?>" Search Result.........</h1>
                    <br>
                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">
                                <?php if($subcat){?>
                                <?php foreach($subcat as $catitem){?>
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




                                <?php }?>

                               <?php }else{?> 
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="single-product-item">
                                    <h1>No Similar Result Found !!!</h1>
                                            </div>  
                                        </div>
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


