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
<?php if($this->session->flashdata('success')){ ?>

                    <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success</h4>
                                            <p class="mb-0">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </p>
                                        </div>
                                       
                         <?php }elseif($this->session->flashdata('warning')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Danger</h4>
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('warning'); ?>
                                            </p>
                                        </div>
                        
                        <?php }?>  
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
                                  <?php if(!is_null($product_image)){?>
                                    <div class="single-image-item">
                                        <a href="<?=base_url()?>resource/upload/product/<?=$product_image?>" class="gallery-popup">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image?>"
                                             alt="Product"/>
                                         </a>
                                    </div>
                                    <?php }?>

                                    <?php if(!is_null($product_image2)){?>
                                    <div class="single-image-item">
                                          <a href="<?=base_url()?>resource/upload/product/<?=$product_image2?>" class="gallery-popup">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image2?>"
                                             alt="Product"/>
                                          </a>   
                                    </div>
                                    <?php }?>
                                    

                                    <?php if(!is_null($product_image3)){?>
                                    <div class="single-image-item">
                                         <a href="<?=base_url()?>resource/upload/product/<?=$product_image3?>" class="gallery-popup">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image3?>"
                                             alt="Product"/>
                                         </a>
                                    </div>
                                    <?php }?>
                                    

                                    <?php if(!is_null($product_image4)){?>
                                    <div class="single-image-item">
                                         <a href="<?=base_url()?>resource/upload/product/<?=$product_image4?>" class="gallery-popup">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image4?>"
                                             alt="Product"/>
                                        </a>     
                                    </div>
                                    <?php }?>
                                    

                                    <?php if(!is_null($product_image5)){?>
                                    <div class="single-image-item">
                                         <a href="<?=base_url()?>resource/upload/product/<?=$product_image5?>" class="gallery-popup">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image5?>"
                                             alt="Product"/>
                                        </a>     
                                    </div>
                                    <?php }?>
                                    
                                </div>

                                <div class="pro-img-nav-carousel mt-3">
                                     <?php if(!is_null($product_image)){?>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image?>"
                                             alt="Product"/>
                                    </div>
                                     <?php }?>
                                     <?php if(!is_null($product_image2)){?>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image2?>"
                                             alt="Product"/>
                                    </div>
                                     <?php }?>
                                     <?php if(!is_null($product_image3)){?>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image3?>"
                                             alt="Product"/>
                                    </div>
                                     <?php }?>

                                     <?php if(!is_null($product_image4)){?>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image4?>"
                                             alt="Product"/>
                                    </div>
                                     <?php }?>
                                     <?php if(!is_null($product_image5)){?>
                                    <div class="pro-nav-item">
                                        <img class="img-fluid" src="<?=base_url()?>resource/upload/product/<?=$product_image5?>"
                                             alt="Product"/>
                                    </div>
                                     <?php }?>
                                </div>
                            </div>
                        </div>
                        <!-- Product Thumbnail Area End -->

                        <!-- Product Details Area Start -->
                        <div class="col-lg-7">
                            <div class="product-details">
                                <h2><?=$product_name?></h2>
                                    


                                <div class="price-group">
                                    <?php if($product_salesprice != 0){?>
                                    <del class="price">INR <?=number_format($product_regularprice)?></del>
                                    <span class="price sale-price">INR <?=number_format($product_salesprice)?></span>
                                <?php }else{?>
                                    <span class="price sale-price">INR <?=number_format($product_regularprice)?></span>
                                <?php }?>    
                                </div>

                                <div class="product-info-stock-sku">
                                    <span class="product-stock-status text-success">In Stock</span>
                                    <span class="product-sku-status"><strong>SKU</strong> VAI<?=$id.$cat_id.$subcat_id?></span>
                                </div>

                                 <form method="post" action="<?=base_url()?>Cart/add_to_cart">
                                <div class="shopping-option">
                                    <!-- Product Size Choose Option -->
                                   <input type="hidden" name="pid" value="<?=$id?>">
                                    <div class="shop-option-item">
                                        <h4>Size:</h4>
                                        <select name="pro_size" id="pro_size" style="display: none;">
                                          <?php $sizes =unserialize($product_size);
                                        foreach($sizes as $size){?>
                                            <option value="<?=$size?>"><?=$size?> </option>
                                        <?php }?>
                                        </select>
                                    </div>

                                    <!-- Product Color Choose Option -->
                                    <div class="shop-option-item">
                                        <h4>Color:</h4>
                                        <select name="pro_color" id="pro_size" style="display: none;">
                                            <?php $colors =unserialize($product_color);
                                        foreach($colors as $color){?>
                                            <option value="<?=$color?>"><?=$color?> </option>
                                        <?php }?>
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
                                    <a id="reviews-tab" data-toggle="tab" href="#description">Description</a>
                                    <a id="reviews-tab" data-toggle="tab" href="#info">Additional Info</a>
                                    <a id="reviews-tab" data-toggle="tab" href="#Customise">Customise</a>
                                    <a id="reviews-tab" data-toggle="tab" href="#reviews">Reviews</a>

                                </nav>
                                <!-- Single Product tab Menu -->

                                <!-- Single Product tab Content -->
                                <div class="tab-content active" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="description">
                                        <?=$product_description?>
                                    </div>
									
									<div class="tab-pane fade show " id="info">
                                       
                                        <?=$product_info?>
                                       
                                    </div>
									
									<div class="tab-pane fade show " id="Customise">
                                         <?=$product_customise?>

                                       
                                    </div>

                                    <div class="tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="product-ratting-wrap">
                                                    <div class="pro-avg-ratting">
                                                        
                                                         <?php $average =$this->cart_model->ReviewAVG($id);?>
                                                        <h4><?=floatval($average[0]['AVG(review_star)'])?><span>(Overall)</span></h4>
                                                       
                                                    </div>
                                            
                                                    <div class="rattings-wrapper">
                                                        <?php $reviews =$this->cart_model->Getreview($id);?>
                                                        <?php foreach($reviews as $review){?>
                                                        <div class="sin-rattings">
                                                            <div class="ratting-author">
                                                                <h3><?=$review['review_name']?></h3>

                                                                <div class="ratting-star">
                                                                    <?php for ($i=0; $i <$review['review_star'] ; $i++){?>
                                                                    <i class="fa fa-star"></i>
                                                                     <?php }?>
                                                                    <span>(<?=$review['review_star']?>)</span>
                                                                </div>
                                                            </div>
                                                            <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                odit aut fugit, sed quia res eos qui ratione voluptatem
                                                                sequi Neque porro quisquam est, qui dolorem ipsum quia
                                                                dolor sit amet, consectetur, adipisci veli</p>
                                                        </div>
                                                        <?php }?>
                                            

                                                    </div>
                                                    <div class="ratting-form-wrapper">
                                                        <h3>Add your Comments</h3>
                                                        <form action="<?=base_url()?>Product_admin/ReviewAdd" method="post">
                                                            <div class="ratting-form row">
                                                                <div class="col-12 mb-4">
                                                                    <div class="col-md-6 col-12 mb-4">
                                                                    <label for="name">Name:</label>
                                                                    <input id="name" name="name" placeholder="Name" type="text">
                                                                </div>
                                                                <input type="hidden" name="id" value="<?=$id?>">
                                                                <div class="col-md-6 col-12 mb-4">
                                                                    <label for="email">Email:</label>
                                                                    <input id="email" name="email" placeholder="Email" type="text">
                                                                </div>
                                                                <div class="col-12 mb-4">
                                                                    <label for="your-review">Your Review:</label>
                                                                    <textarea name="review" id="your-review"
                                                                              placeholder="Write a review"></textarea>
                                                                </div>
                                                                    <h5>Rating:</h5>
                                                                    <style type="text/css">
                                                                        .rating {
                                                                            float:left;
                                                                        }

                                                                        .rating:not(:checked) > input {
                                                                            position:absolute;
                                                                            top:-9999px;
                                                                            clip:rect(0,0,0,0);
                                                                        }

                                                                        .rating:not(:checked) > label {
                                                                            float:right;
                                                                            width:1em;
                                                                            padding:0 .1em;
                                                                            overflow:hidden;
                                                                            white-space:nowrap;
                                                                            cursor:pointer;
                                                                            font-size:200%;
                                                                            line-height:1.2;
                                                                            color:#ddd;
                                                                            text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
                                                                        }

                                                                        .rating:not(:checked) > label:before {
                                                                            content: '★ ';
                                                                        }

                                                                        .rating > input:checked ~ label {
                                                                            color: #f70;
                                                                            text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
                                                                        }

                                                                        .rating:not(:checked) > label:hover,
                                                                        .rating:not(:checked) > label:hover ~ label {
                                                                            color: gold;
                                                                            text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
                                                                        }

                                                                        .rating > input:checked + label:hover,
                                                                        .rating > input:checked + label:hover ~ label,
                                                                        .rating > input:checked ~ label:hover,
                                                                        .rating > input:checked ~ label:hover ~ label,
                                                                        .rating > label:hover ~ input:checked ~ label {
                                                                            color: #ea0;
                                                                            text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
                                                                        }

                                                                        .rating > label:active {
                                                                            position:relative;
                                                                            top:2px;
                                                                            left:2px;
                                                                        }
                                                                    </style>
                                                                        <div class="rating">
                                                                           
                                                                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                                                                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                                                                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                                                                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                                                                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                                                                        </div>
                                                                   
                                                                </div>
                                                                
                                                                <div class="col-12">
                                                                    <input value="add review" class="btn btn-brand" type="submit">
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
