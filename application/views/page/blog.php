<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1><?=$data['blog_title']?></h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="javascript:void(0);" class="current"><?=$data['blog_title']?></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->






<!--== Start Blog Details Page Wrapper ==-->
<div id="blog-details-page-wrapper" class="page-padding">
    <div class="container">
        <div class="row">
            <!-- Sidebar Area Start -->
            <div class="col-lg-4">
                <div id="sidebar-area-wrap">
                 
                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <div class="sidebar-body">
                            <div class="recent-post-sidebar">


                            <?php $blogs =$this->page_model->GetBlog()?>
                             <?php foreach($blogs as $blog ){?>
                                <!-- Single Recent Posts Start -->
                                <div class="single-post-item d-flex">
                                    <a href="single-blog.html" class="post-thumb">
                                        <img src="<?=base_url()?>resource/upload/blog/<?=$blog['blog_image']?>" alt="Blog">
                                    </a>
                                    <div class="product-details">
                                        <h2><a href="single-blog.html"><?=$blog['blog_title']?></a></h2>
                                        <span class="date"><?=date("F d Y ", strtotime($blog['blog_create']))?></span>
                                        <a href="<?=base_url()?>blog/<?=$blog['id']?>/<?=$blog['blog_title']?>" class="btn-readmore">Read More <i
                                                class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!-- Single Recent Posts End -->
                                 <?php }?>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                </div>
            </div>
            <!-- Sidebar Area End -->

            <!-- Single Blog Page Content -->
            <div class="col-lg-8 order-first order-lg-last">
                <article class="single-blog-content-wrap">
                    <div class="post-header">
                        <figure class="post-thumbnail">
                            <img src="<?=base_url()?>resource/upload/blog/<?=$data['blog_image']?>" class="img-fluid" alt="Blog"/>
                        </figure>

                        <div class="post-meta">
                            <h2><?=$data['blog_title']?></h2>
                            <div class="post-info">
                                <a href="#"><i class="fa fa-user"></i> <?=$data['blog_author']?></a>
                                <a href="#"><i class="fa fa-calendar-check-o"></i> <?=date("F d Y ", strtotime($data['blog_create']))?></a>
                            </div>
                        </div>
                    </div>

                    <div class="post-content">
                        <?=$data['blog_description']?>
                    </div>

                   <!--  <div class="post-footer d-block d-sm-flex justify-content-sm-between align-items-center">
                        <ul class="tags">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Sale</a></li>
                            <li><a href="#">Investment</a></li>
                        </ul>

                        <div class="post-share mt-3 mt-sm-0">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-reddit"></i></a>
                            <a href="#"><i class="fa fa-digg"></i></a>
                        </div>
                    </div> -->
                </article>

                <!-- Comment Area Start -->
                <!-- <div class="comment-area-wrapper">
                    <div class="comments-preview-area comment-single-item">
                        <h2>Comments (3)</h2>

                        <div class="single-comment d-block d-md-flex">
                            <div class="comment-author">
                                <a href="#"><img src="assets/img/blog/author-1.jpg" class="img-fluid"
                                                 alt="Comment User"/></a>
                            </div>
                            <div class="comment-info mt-3 mt-md-0">
                                <div class="comment-info-top d-flex justify-content-between">
                                    <h3>Houdai Man</h3>
                                    <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <a href="#" class="comment-date">19 JULY 2017, 10:05 PM</a>
                                <p>On the other hand, we with righteous indignation and dislike men ware sobeguil andlo
                                    demized by the charms of pleasure of the moment.</p>
                            </div>
                        </div>

                        <div class="single-comment reply d-block d-md-flex">
                            <div class="comment-author">
                                <a href="#"><img src="assets/img/blog/author-2.jpg" class="img-fluid"
                                                 alt="Comment User"/></a>
                            </div>
                            <div class="comment-info mt-3 mt-md-0">
                                <div class="comment-info-top d-flex justify-content-between">
                                    <h3>Alex Tuntuni</h3>
                                    <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <a href="#" class="comment-date">19 JULY 2017, 10:05 PM</a>
                                <p>On the other hand indignation and dislike men ware sobeguil andlo demized by the
                                    charms of pleasure of the moment.</p>
                            </div>
                        </div>

                        <div class="single-comment d-block d-md-flex">
                            <div class="comment-author">
                                <a href="#"><img src="assets/img/blog/author-3.jpg" class="img-fluid"
                                                 alt="Comment User"/></a>
                            </div>
                            <div class="comment-info mt-3 mt-md-0">
                                <div class="comment-info-top d-flex justify-content-between">
                                    <h3>Dig Kamla</h3>
                                    <a href="#" class="btn-reply"><i class="fa fa-reply"></i> Reply</a>
                                </div>
                                <a href="#" class="comment-date">19 JULY 2017, 10:05 PM</a>
                                <p>On the other hand, we with righteous indignation and dislike men ware sobeguil andlo
                                    demized by the charms of pleasure of the moment.</p>
                            </div>
                        </div>
                    </div>

                    <div class="leave-comment-area comment-single-item">
                        <h2>Leave a Comment</h2>
                        <div class="comment-form-wrap">
                            <form action="#" method="get">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="text" placeholder="Name" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="email" placeholder="Email Address" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-input-item">
                                    <input type="url" placeholder="Website" required/>
                                </div>

                                <div class="single-input-item">
                                    <textarea name="comment" id="comment" cols="30" rows="6"
                                              placeholder="Write your Comment"></textarea>
                                </div>

                                <div class="single-input-item">
                                    <button type="submit" class="btn btn-brand">Submit Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Single Blog Page Content -->
        </div>
    </div>
</div>
<!--== End Blog Details Page Wrapper ==-->