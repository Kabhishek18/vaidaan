


<!--== Start Footer Section ===-->
<footer id="footer-area">

    <!-- Start Newsletter Area -->
    <div class="newsletter-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="newsletter-content-wrap">
                        <h2>Newsletter</h2>
                        <p>Be the first to hear about new styles and offers and see how you’ve helped.</p>

                        <div class="newsletter-form-wrap">
                            <form action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                                  method="post" id="mc-form" class="mc-form">
                                <input type="email" id="mc-email" autocomplete="off" placeholder="Enter Email Address"
                                       required/>
                                <button class="btn"><i class="fa fa-envelope"></i></button>
                            </form>

                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Area -->

    <!-- Start Footer Widget Area -->
    <div class="footer-widget-wrapper">
        <div class="container">
            <div class="widget-content-wrap">
                <div class="row">
                    <!-- Start Single Footer Widget -->
                    <div class="col-lg-4 col-sm-12">
                        <div class="single-footer-widget-wrap footer-about">
                            <?php $footer =$this->page_model->getPageParent(9);
                            ?>
                            <?=$footer['page_description']?>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->

                    <!-- Start Single Footer Widget -->
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-footer-widget-wrap">
                            <h3 class="widget-title">Useful Links</h3>

                            <div class="widget-body">
                                <ul class="widget-list">
                                    <li><a href="<?=base_url()?>main/10/Delivery Info">Delivery Info</a></li>
                                    <li><a href="<?=base_url()?>main/11/privacy policy">Privacy Policy</a></li>
                                    <li><a href="<?=base_url()?>main/12/Return and Refunds">Return & Refunds</a></li>
                                    <li><a href="<?=base_url()?>main/13/Terms and Conditions">Terms & Conditions</a></li>
                                    <li><a href="<?=base_url()?>main/14/Cookies">Cookies Policy</a></li>
                                    <li><a href="<?=base_url()?>main/15/Disclaimer">Disclaimer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->

                    <!-- Start Single Footer Widget -->
                    <div class="col-lg-3 col-sm-6 col-md-3">
                        <div class="single-footer-widget-wrap">
                            <h3 class="widget-title">Help</h3>

                            <div class="widget-body">
                                <ul class="widget-list">
                                    <li><a href="<?=base_url()?>main/16/Track Your Order">Track Your Order</a></li>
                                    <li><a href="<?=base_url()?>main/12/Returns and Refunds">Returns</a></li>
                                    <li><a href="<?=base_url()?>main/17/Cancellations">Cancellations</a></li>
                                    <li><a href="<?=base_url()?>main/18/Payments">Payments</a></li>
                                    <li><a href="<?=base_url()?>main/19/Customer Care">Customer Care</a></li>
                                    <li><a href="<?=base_url()?>main/20/FAQs">FAQ's</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->

                    <!-- Start Single Footer Widget -->
                    <div class="col-lg-2 col-sm-6 col-md-3">
                        <div class="single-footer-widget-wrap">
                            <h3 class="widget-title">Explore Vaidaan </h3>

                            <div class="widget-body">
                                <ul class="widget-list">
                                    <li><a href="<?=base_url()?>About/9/About Us">About Us</a></li>
                                    <li><a href="<?=base_url()?>main/21/Culture">Culture</a></li>
                                    <!-- <li><a href="Javascript:void(0)">Blog</a></li> -->
                                    <li><a href="<?=base_url()?>main/22/Carrers">Careers</a></li>
                                    <li><a href="<?=base_url()?>main/23/Report Fraud">Report Fraud</a></li>
                                    <li><a href="<?=base_url()?>contact">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Widget Area -->

    <!-- Start Footer Copyright Area -->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <!-- Start Copyright Content -->
                <div class="col-sm-6 text-center text-sm-left">
                    <div class="copyright-content mt-4 mt-sm-0">
                        <p>© 2020 Vaidaan Jewellery. All Rights Reserved. | Designed By<a href="#" target="_blank"> TechCentrica</a>.</p>
                    </div>
                </div>
                <!-- End Copyright Content -->

                <div class="col-sm-6 text-center text-sm-right order-first order-sm-last">
                    <img src="<?=base_url()?>resource/assets/img/payment-icon.png" alt="Payment Method"/>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Copyright Area -->
</footer>
<!--== End Footer Section ===-->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-double-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
<!--=== Jquery Min Js ===-->
<script src="<?=base_url()?>resource/assets/js/vendor/jquery-3.3.1.min.js"></script>
<!--=== Jquery Migrate Min Js ===-->
<script src="<?=base_url()?>resource/assets/js/vendor/jquery-migrate-1.4.1.min.js"></script>
<!--=== Popper Min Js ===-->
<script src="<?=base_url()?>resource/assets/js/vendor/popper.min.js"></script>
<!--=== Bootstrap Min Js ===-->
<script src="<?=base_url()?>resource/assets/js/vendor/bootstrap.min.js"></script>
<!--=== Plugins Js ===-->
<script src="<?=base_url()?>resource/assets/js/plugins.js"></script>
<!--=== Ajax Mail Js ===-->
<script src="<?=base_url()?>resource/assets/js/ajax-mail.js"></script>

<!--=== Active Js ===-->
<script src="<?=base_url()?>resource/assets/js/active.js"></script>
</body>
</html>