<?php $sliders = $this->page_model->GetSectionlist(null,'banner');?>
<!--== Start Slider Area ==-->
<section id="slider-area-wrap">
    <div class="slider-carousel-wrap">

        <?php foreach($sliders as $slider){?>
        <!-- Start Single Slide Item -->
         <?php if($slider['section_button']){?>
        <div class="single-slide-wrap" style="background-image:url('<?=base_url()?>resource/upload/home/<?=$slider['section_image']?>')!important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slide-content-wrap">
                            <h2 class="fadeInLeft animated"><?=$slider['section_title']?></h2>
                            <h3 class="fadeInLeft animated two"><?=$slider['section_subtitle']?></h3>
                            <?php if($slider['section_button']){?>
                            <a href="<?=$slider['section_link']?>" class="fadeInLeft animated three btn btn-transparent btn-small"><?=$slider['section_button']?></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{?>
                <a href="<?=$slider['section_link']?>">
              <div class="single-slide-wrap" style="background-image:url('<?=base_url()?>resource/upload/home/<?=$slider['section_image']?>')!important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="slide-content-wrap">
                            <h2 class="fadeInLeft animated"><?=$slider['section_title']?></h2>
                            <h3 class="fadeInLeft animated two"><?=$slider['section_subtitle']?></h3>
                            <?php if($slider['section_button']){?>
                            <a href="<?=$slider['section_link']?>" class="fadeInLeft animated three btn btn-transparent btn-small"><?=$slider['section_button']?></a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </a>
        <!-- End Single Slide Item -->
        <?php }}?>
       

    </div>
</section>
<!--== End Slider Area ==-->

<?php $subcategorys = $this->page_model->GetSectionlist(null,'subcategory');
 if($subcategorys){?>
<!--== Start Categories Gallery ==-->
<div class="categories-gallery-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="categories-content-wrap">
                    <div class="categories-carousel-wrap">
                        <!-- Start Single Category Item -->
                        
                        <?php foreach($subcategorys as $subcategory){?>

                        <div class="single-category-wrap">
                            <figure class="category-thumbnail">
                                <a href="#"><img src="<?=base_url()?>resource/upload/home/<?=$subcategory['section_image']?>" alt="Category"/></a>
                                <figcaption class="category-name">
                                    <a href="<?=$subcategory['section_link']?>"><?=$subcategory['section_title']?></a>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- End Single Category Item -->
                        <?php }?>

                       
                    </div>
                </div>
            </div>
        </div>

        
		
    </div>
</div>
<!--== End Categories Gallery ==-->
<?php }?>


<!--== Start Top Interesting Product Area ==-->
<section id="products-area-wrapper">
    <div class="container">
        <!-- Start Section Title Area -->
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap">
                    <h2>Top Interesting</h2>
                    <p>Browse the collection of our best selling and top interesting products. You’ll definitely find
                        what you are looking for.</p>
                </div>
            </div>
        </div>
        <!-- End Section Title Area -->

        <!-- Start Products Content Wrapper -->
        <div class="row">
            <div class="col-lg-12">
                <div class="products-wrapper">
                    <div class="products-carousel-wrap">

                        <?php $list =$this->admin_model->Getlist(1);
                        $arr =unserialize($list[0]['list']);
                         ?>

                          <?php   foreach($arr as $key){ 
                            $catitem =$this->cart_model->Getproall($key);
                            ?>      
                        <!-- Start Single Product -->
                        <div class="single-product-item">
                            <!-- Product Thumbnail -->
                            <figure class="product-thumbnail">
                              <a href="<?=base_url()?>product/<?=$catitem['id']?>" class="d-block">
                                    <img class="primary-thumb" src="<?=base_url()?>resource/upload/product/<?=$catitem['product_image']?>" alt="Product"/>
                                    <img class="secondary-thumb" src="<?=base_url()?>resource/upload/product/<?=$catitem['product_image2']?>" alt="Product"/>
                                </a>
                                <figcaption class="product-hvr-content">
                                    
                                    <a href="<?=base_url()?>product/<?=$catitem['id']?>" class="btn btn-brand btn-quickView"  >View More</a>
                                </figcaption>
                            </figure>

                            <!-- Product Details -->
                            <div class="product-details">
                                <a href="<?=base_url()?>product/<?=$catitem['id']?>" class="product-cat-name" style="text-transform: capitalize;">
                                                <?php $row =$this->cart_model->Getcat($catitem['cat_id']);
                                                echo $row['cat_name'];?>

                                            </a>
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
                        <!-- End Single Product -->
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Products Content Wrapper -->
    </div>
</section>
<!--== End Top Interesting Product Area ==-->

<!--== Start Product Banner area ==-->
<div class="special-products-banner" Style="margin-bottom:60px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">


                <?php $infoimages = $this->page_model->GetSectionlist(null,'infoimage');?>
                <?php $i=1;foreach($infoimages as $infoimage){?>
                <div class="single-special-pro-banner">
                    <div class="row">
                        <?php if($i%2 !=0){?>
                        <div class="col-md-6 col-lg-7">
                            <figure class="special-product-thumb">
                                <a href="#"><img src="<?=base_url()?>resource/upload/home/<?=$infoimage['section_image']?>"
                                                         alt="Product Banner"/></a>
                            </figure>
                        </div>
                         <?php }?>
                        <div class="col-md-6 col-lg-5 my-auto <?=($i%2==0)?'text-md-right':''?>">
                            <div class="special-product-content">
                                <h4><?=$infoimage['section_title']?></h4>
                                <h2><?=$infoimage['section_subtitle']?></h2>
                                <p><?=$infoimage['section_blurb']?></p>
                                <a href="<?=$infoimage['section_link']?>" class="btn btn-black btn-small"><?=$infoimage['section_button']?></a>
                            </div>
                        </div>
                        <?php if($i%2==0){?>
                        <div class="col-md-6 col-lg-7 order-first order-md-last">
                            <figure class="special-product-thumb">
                                <a href="#"><img src="<?=base_url()?>resource/upload/home/<?=$infoimage['section_image']?>"
                                                         alt="Product Banner"/></a>
                            </figure>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php $i++;}?>

            </div>
        </div>
    </div>
</div>
<!--== End Product Banner area ==-->
<?php $parallaxs = $this->page_model->GetSectionlist(null,'parallax');
            if($parallaxs){?>
                <?php foreach($parallaxs as $parallax){?>
<!--== Start Parallax Banner Area ==-->
<section id="parallax-banner-area" class="parallaxBg" style="background-image:url('<?=base_url()?>resource/upload/home/<?=$parallax['section_image']?>')!important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="banner-content-wrap">
                    <h2><?=$parallax['section_title']?></h2>
                    <p>“<?=$parallax['section_blurb']?>”</p>
                    <a href="<?=$parallax['section_link']?>" class="btn btn-transparent"><?=$parallax['section_button']?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Parallax Banner Area ==-->
<?php }}?>
<!--== Start New, Feature Products & Testimonial Area ==-->
<section id="new-feature-pro-reviews">
    <div class="container">
        <div class="row">
            <!-- Start New Products Area -->
            <div class="col-lg-4 col-sm-6">
                <div id="new-products-area">
                    <!-- Section Title -->
                    <div class="section-title-wrap style-two">
                        <h2>New Products</h2>
                    </div>

                    <!-- Product Content -->
                    <div class="products-wrapper product-list-view small-list">
                        <div class="product-vertical-carousel">

                             <?php $newproducts = $this->page_model->Getproall(null,'desc');?>
                        <?php foreach($newproducts as $key){?>  
                            <!-- Start Single Product -->
                            <div class="single-product-item">
                                <!-- Product Thumbnail -->
                                <figure class="product-thumbnail">
                                    <a href="<?=base_url()?>product/<?=$key['id']?>" class="d-block">
                                        <img class="primary-thumb"  src="<?=base_url()?>resource/upload/product/<?=$key['product_image']?>"
                                             alt="Product"/>
                                        <img class="secondary-thumb" src="<?=base_url()?>resource/upload/product/<?=$key['product_image2']?> "
                                             alt="Product"/>
                                    </a>
                                </figure>

                                <!-- Product Details -->
                                <div class="product-details">
                                    <h2 class="product-name"><a href="#"><?=$key['product_name']?> </a></h2>

                                    <div class="product-prices">
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
                            <!-- End Single Product -->
                        <?php }?>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- End New Products Area -->

            <!-- Start Feature Products Area -->
            <div class="col-lg-4 col-sm-6">
                <div id="feature-products-area">
                    <!-- Section Title -->
                    <div class="section-title-wrap style-two">
                        <h2>Feature Products</h2>
                    </div>

                    <!-- Product Content -->
                    <div class="products-wrapper product-list-view small-list">
                        <div class="product-vertical-carousel">
                               <?php $featureproducts = $this->page_model->Getproall(null,'desc','1');?>
                        <?php foreach($featureproducts as $key){?>  
                            <!-- Start Single Product -->
                            <div class="single-product-item">
                                <!-- Product Thumbnail -->
                                <figure class="product-thumbnail">
                                    <a href="<?=base_url()?>product/<?=$key['id']?>" class="d-block">
                                        <img class="primary-thumb"  src="<?=base_url()?>resource/upload/product/<?=$key['product_image']?>"
                                             alt="Product"/>
                                        <img class="secondary-thumb" src="<?=base_url()?>resource/upload/product/<?=$key['product_image2']?> "
                                             alt="Product"/>
                                    </a>
                                </figure>

                                <!-- Product Details -->
                                <div class="product-details">
                                    <h2 class="product-name"><a href="#"><?=$key['product_name']?> </a></h2>

                                    <div class="product-prices">
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
                            <!-- End Single Product -->
                        <?php }?>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Feature Products Area -->

            <!-- Start Testimonials Area -->
            <div class="col-lg-4">
                <div id="testimonial-wrapper">
                    <!-- Section Title -->
                    <div class="section-title-wrap style-two">
                        <h2>Testimonials</h2>
                    </div>

                    <!-- Testimonials Content -->
                    <div class="testimonial-content">
                        <div class="testimonial-carousel">
                            <?php $testimonials = $this->page_model->GetSectionlist(null,'testimonial');
                                if($testimonials){?>
                                    <?php foreach($testimonials as $testimonial){?>
                            <!-- Start Single Testimonial Item -->
                            <div class="single-testimonial-item text-center">
                                <div class="testimonial-avatar">
                                    <img src="<?=base_url()?>resource/upload/home/<?=$testimonial['section_image']?>" alt="Client Avatar"/>
                                </div>
                                <div class="testimonial-quote">
                                    <p>
                                        <?=$testimonial['section_blurb']?>
                                    </p>
                                    <h4 class="testimonial-author"><?=$testimonial['section_title']?> <span
                                            class="title">- <?=$testimonial['section_subtitle']?></span></h4>
                                </div>
                            </div>
                            <!-- End Single Testimonial Item -->
                            <?php }}?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonials Area -->
        </div>
    </div>
</section>
<!--== End New, Feature Products & Testimonial Area ==-->

<?php $closets = $this->page_model->GetSectionlist(null,'closet');
 if($closets){?>
<!--== Start Instagram Feed Area ==-->
<section id="instagram-feed-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="instagram-content-header">
                    <h3>CELEBRITY CLOSET</h3>
                    
                </div>

                <div class="instagram-feed-thumb">
                    <div id="instafeed" class="instagram-carousel">

                        <?php foreach($closets as $closet){?>
                        <figure class="product-thumbnail">
                                    <a href="<?=base_url()?>product/<?=$closet['section_link']?>" class="d-block">

                                        <img class="primary-thumb"  src="<?=base_url()?>resource/upload/home/<?=$closet['section_image']?>"
                                             alt="Product"/>
                                    </a>
                        </figure>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Instagram Feed Area ==-->
<?php }?>


<!--== Start Instagram Feed Area ==-->
<!-- <section id="instagram-feed-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="instagram-content-header">
                    <h3>INSTAGRAM FOLLOW US</h3>
                    <em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </em>
                </div>

                 <div class="instagram-feed-thumb">
                    <div id="instafeed" class="instagram-carousel" data-userid="6665768655"
                         data-accesstoken="6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--== End Instagram Feed Area ==-->

<!--== Start Blog Section ==-->
<section id="blog-section-wrapper">
    <div class="container">
        <!-- Start Section Title Area -->
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="section-title-wrap">
                    <h2>Latest From Our Blog</h2>
                    <p>Do you want to present posts in the best way to highlight interesting moments of your blog? Focus
                        on the latest news!</p>
                </div>
            </div>
        </div>
        <!-- End Section Title Area -->

        <!-- Start Blog Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-content-wrapper">
                    <div class="blog-content-carousel">
                        <?php $blogs =$this->page_model->GetBlog()?>
                        <?php foreach($blogs as $blog ){?>
                        <!-- Single Blog Start // Video Thumbnail -->
                        <div class="single-blog-wrap">
                            <div class="embed-responsive embed-responsive-16by9" style="margin-top:-170px">
                                <img src="<?=base_url()?>resource/upload/blog/<?=$blog['blog_image']?>">
                            </div>
                            <div class="blog-details">
                                <h3><a href="<?=base_url()?>blog/<?=$blog['id']?>/<?=$blog['blog_title']?>"><?=$blog['blog_title']?></a></h3>
                                <div class="blog-meta">
                                    <a href="javascript:void(0)">By <?=$blog['blog_author']?></a>
                                    <a href="javascript:void(0)"><?=date("F d Y ", strtotime($blog['blog_create']))?></a>
                                    
                                </div>
                                <p><?php $pos=strpos($blog['blog_description'], ' ', 200);
                                      echo substr($blog['blog_description'],0,$pos ); ?></p>
                                <a href="<?=base_url()?>blog/<?=$blog['id']?>/<?=$blog['blog_title']?>" class="btn-readmore">Continue Reading</a>
                            </div>
                        </div>
                        <!-- Single Blog End // Video Thumbnail -->
                        <?php }?>
                   

                      
                    </div>
                </div>
            </div>
        </div>
        <!-- End Blog Content -->
    </div>
</section>
<!--== End Blog Section ==-->


