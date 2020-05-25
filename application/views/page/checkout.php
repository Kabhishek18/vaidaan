
<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1>Checkout</h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="javascript:void(0);">Shop</a></li>
                        <li><a href="javascript:void(0);" class="current">Checkout</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->

<!--== Start Checkout Page Wrapper ==-->
<div id="checkout-page-wrapper" class="page-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">

             
                <!-- Checkout Login Coupon Accordion Start -->
                <div class="checkoutaccordion" id="checkOutAccordion">
                    <?php if(empty($_SESSION['user_detail'])){?>
                    <div class="card">
                        <h3>Returning Customer? <span data-toggle="collapse" data-target="#logInaccordion">Click Here To Login</span>
                        </h3>

                        <div id="logInaccordion" class="collapse" data-parent="#checkOutAccordion">
                            <div class="card-body">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If
                                    you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <div class="login-reg-form-wrap">
                                    <div class="row">
                                        <div class="col-lg-7 m-auto">
                                            <form action="<?=base_url()?>User/Auth" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="email" name="email"  placeholder="Email " required/>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="password" name="password" placeholder="Enter your Password" required/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                        <div class="remember-meta">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="rememberMe"/>
                                                                <label class="custom-control-label" for="rememberMe">Remember
                                                                    Me</label>
                                                            </div>
                                                        </div>

                                                        <a href="javascript:void(0)" class="forget-pwd">Forget Password?</a>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <button type= "submit" class="btn btn-brand">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    ?>
                    
                     <?php
                        if($this->session->flashdata('success')){ ?>
                        <?php echo $this->session->flashdata('success'); } ?>
                         <?php if($this->session->flashdata('wrong')){ ?>
                        <?php echo $this->session->flashdata('wrong');} ?>
                    <div class="card">
                        <h3>Have A Coupon? <span data-toggle="collapse" data-target="#couponaccordion">Click Here To Enter Your Code</span>
                        </h3>
                        <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">
                            <div class="card-body">
                                <div class="cart-update-option">
                                    <div class="apply-coupon-wrapper">
                                        <form action="<?=base_url()?>cart/ApplyCoupon" method="post" class=" d-block d-md-flex">
                                            <input type="text" placeholder="Enter Your Coupon Code" name="coupon" required/>
                                            <button class="btn btn-brand">Apply Coupon</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checkout Login Coupon Accordion End -->
              
            </div>
        </div>


        <?php if($this->session->flashdata('accounttaken')){ ?>
        <?php echo '<h2>'.$this->session->flashdata('accounttaken').'</h2>'; } ?>
        <form action="cart/Orderprocess" method="post">
            <input type="hidden" name="user_id" value="<?=(!empty($_SESSION['user_detail']['id'])?$_SESSION['user_detail']['id']:'')?>">
        <div class="row">
            <!-- Checkout Billing Details -->
            <div class="col-lg-6">
                <div class="checkout-billing-details-wrap">
                    <h2>Billing Details</h2>
                    <div class="billing-form-wrap">
                       
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label for="f_name" class="required">First Name</label>
                                        <input type="text" id="f_name" placeholder="First Name" name="bill_firstname" value="<?=(!empty($_SESSION['user_detail']['user_name'])?$_SESSION['user_detail']['user_name']:'')?>" required/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label for="l_name" class="required">Last Name</label>
                                        <input type="text" id="l_name" placeholder="Last Name" name="bill_lastname" value="<?=(!empty($_SESSION['user_detail']['user_lastname'])?$_SESSION['user_detail']['user_lastname']:'')?>" required/>
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <label for="email" class="required">Email Address</label>
                                <input type="email" id="email" placeholder="Email Address" name="bill_email" value="<?=(!empty($_SESSION['user_detail']['user_email'])?$_SESSION['user_detail']['user_email']:'')?>" required/>
                            </div>

                            <div class="single-input-item">
                                <label for="com-name">Company Name</label>
                                <input type="text" id="com-name" name="bill_company" placeholder="Company Name"/>
                            </div>

                           <div class="single-input-item">
                                <label for="com-name">Country</label>
                                <input type="text" id="com-name" name="bill_country" placeholder="Country"/>
                            </div>

                            <div class="single-input-item">
                                <label for="street-address" class="required">Street address</label>
                                <input type="text" id="street-address" name="bill_street1" placeholder="Street address Line 1" required/>
                            </div>

                            <div class="single-input-item">
                                <input type="text" name="bill_street2"nameplaceholder="Street address Line 2 (Optional)"/>
                            </div>

                            <div class="single-input-item">
                                <label for="town" class="required">Town / City</label>
                                <input type="text" name="bill_town" id="town" placeholder="Town / City" required/>
                            </div>

                            <div class="single-input-item">
                                <label for="state">State / Divition</label>
                                <input type="text" name="bill_state" id="state" placeholder="State / Divition"/>
                            </div>

                            <div class="single-input-item">
                                <label for="postcode" class="required">Postcode / ZIP</label>
                                <input type="text" name="bill_zip" id="postcode" placeholder="Postcode / ZIP" required/>
                            </div>

                            <div class="single-input-item">
                                <label for="phone" class="required">Phone </label>
                                <input type="text" id="phone" name="bill_phone" placeholder="Phone" required / >
                            </div>

                            <div class="checkout-box-wrap">
                                  <?php if(empty($_SESSION['user_detail'])){?>
                                <div class="single-input-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="create" id="create_pwd" >
                                        <label class="custom-control-label" for="create_pwd">Create an account? 
                                        <?php if($this->session->flashdata('passerror')){ ?>
                        <?php echo $this->session->flashdata('passerror'); } ?>
                                        </label>
                                    </div>
                                </div>
                                <?php }?>

                                <div class="account-create single-form-row">
                                    <p>Create an account by entering the information below. If you are a returning
                                        customer please login at the top of the page.</p>
                                    <div class="single-input-item">
                                        <label for="pwd" class="required">Account Password </label>
                                        <input type="password" name="password" id="pwd" placeholder="Account Password" />
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-box-wrap">
                                <div class="single-input-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="ship"id="ship_to_different">
                                        <label class="custom-control-label" for="ship_to_different">Ship to a different
                                            address?</label>
                                    </div>
                                </div>
                                <div class="ship-to-different single-form-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="f_name_2" class="required">First Name</label>
                                                <input type="text" id="f_name_2" placeholder="First Name" name="ship_firstname"/>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="single-input-item">
                                                <label for="l_name_2" class="required">Last Name</label>
                                                <input type="text" id="l_name_2" placeholder="Last Name" name="ship_lastname" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="email_2" class="required">Email Address</label>
                                        <input type="email" id="email_2" placeholder="Email Address" name="ship_email" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="com-name_2">Company Name</label>
                                        <input type="text" id="country_2" placeholder="Company Name" name="ship_company"/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="country_2" class="required">Country</label>
                                         <input type="text" id="com-name2" name="ship_country" placeholder="Country"/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="street-address_2" class="required">Street address</label>
                                        <input type="text" id="street-address_2" placeholder="Street address Line 1"
                                            name="ship_street1"   />
                                    </div>

                                    <div class="single-input-item">
                                        <input type="text" placeholder="Street address Line 2 (Optional)"   name="ship_street2"/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="town_2" class="required">Town / City</label>
                                        <input type="text" id="town_2" placeholder="Town / City"   name="ship_town"/>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="state_2">State / Divition</label>
                                        <input type="text" id="state_2" placeholder="State / Divition"   name="ship_state" />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="postcode_2" class="required">Postcode / ZIP</label>
                                        <input type="text" id="postcode_2" placeholder="Postcode / ZIP"   name="ship_zip" />
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <label for="ordernote">Order Note</label>
                                <textarea name="ordernote" id="ordernote" cols="30" rows="3"
                                          placeholder="Notes about your order, e.g. special notes for delivery." name="ship_note"></textarea>
                            </div>
                        
                    </div>
                </div>
            </div>

            <!-- Order Summary Details -->
            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="order-summary-details">
                    <h2>Your Order Summary</h2>
                    <div class="order-summary-content">
                        <!-- Order Summary Table -->
                        <div class="order-summary-table table-responsive text-center">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Total</th>
                                </tr>
                                </thead>

                                <tbody>
                                      <?php if($this->cart->total_items()>0){
                                        foreach($cartItems as $items){?>     
                                <tr>
                                    <td><a href="<?=base_url()?>product/<?=$items['id']?>"><?=$items['name']?> <strong> × <?=$items['qty']?></strong></a></td>
                                    <td>INR <?=number_format($items['price'])?></td>
                                </tr>
                                     <?php }}?>
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td>Sub Total</td>
                                    <td><strong>INR  <?php  $ship = 70;
                                        echo number_format($this->cart->format_number($this->cart->total())); ?></strong></td>
                                </tr>

                                <tr>
                                    <td>Shipping</td>
                                    <td class="d-flex justify-content-center">
                                        <ul class="shipping-type">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="flatrate" name="shipping"
                                                           class="custom-control-input" checked/>
                                                    <label class="custom-control-label" for="flatrate">Flat Rate:
                                                        INR <?=$ship?></label>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </td>
                                </tr>
                                <?php if(!empty($_SESSION['ticket'])){?>
                                <tr>
                                    <td>Coupon (<?=$_SESSION['ticket']['coupon_name']?>) <a href="<?=base_url()?>cart/coupondestroy" style='color: red'>Remove</a></td>
                                    
                                    <td><?php $carttotal =$this->cart->total(); 
                                        if($_SESSION['ticket']["coupon_type"]==0) 
                                        {       
                                            $discount =$_SESSION['ticket']["coupon_value"];
                                              $total =$carttotal -$discount + $ship; 
                                        }
                                        else{
                                            $discount = $_SESSION['ticket']["coupon_value"]*$carttotal/100;

                                             $total =$carttotal -$discount+$ship; 
                                    
                                        }
                                   echo 'INR '.$discount?></td>
                                </tr>
                                <?php }?>
                                <tr>
                                    <td>Total Amount</td>
                                    <td><strong>INR <?php 
                                    $storevalue =number_format((empty($total)?$this->cart->total():$total));
                                    echo $storevalue;
                                    ?></strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <!-- Order Payment Method -->
                        <div class="order-payment-method">
                            <div class="single-payment-method show">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="cashon" name="paymentmethod" value="cash"
                                               class="custom-control-input" checked/>
                                        <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                    </div>
                                </div>
                                <div class="payment-method-details" data-method="cash">
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                            </div>

                            <div class="single-payment-method">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="directbank" name="paymentmethod" value="bank"
                                               class="custom-control-input"/>
                                        <label class="custom-control-label" for="directbank">Direct Bank
                                            Transfer</label>
                                    </div>
                                </div>
                                <div class="payment-method-details" data-method="bank">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order will not be shipped until the funds have cleared
                                        in our account..</p>
                                </div>
                            </div>

                            <div class="single-payment-method">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="checkpayment" name="paymentmethod" value="check"
                                               class="custom-control-input"/>
                                        <label class="custom-control-label" for="checkpayment">Pay with Check</label>
                                    </div>
                                </div>
                                <div class="payment-method-details" data-method="check">
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State /
                                        County, Store Postcode.</p>
                                </div>
                            </div>

                            <div class="single-payment-method">
                                <div class="payment-method-name">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="paypalpayment" name="paymentmethod" value="paypal"
                                               class="custom-control-input"/>
                                        <label class="custom-control-label" for="paypalpayment">Paypal <img
                                                src="<?=base_url()?>resource/assets/img/paypal-card.jpg" class="img-fluid paypal-card"
                                                alt="Paypal"/></label>
                                    </div>
                                </div>
                                <div class="payment-method-details" data-method="paypal">
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                        account.</p>
                                </div>
                            </div>

                            <div class="summary-footer-area">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terms" required/>
                                    <label class="custom-control-label" for="terms">I have read and agree to the website
                                        <a href="<?=base_url()?>">terms and conditions.</a></label>
                                </div>
                                 <input type="hidden" name="order_amount" value="<?=$storevalue?>"> 

                                <button type="submit" class="btn btn-brand btn-full">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
<!--== End Checkout Page Wrapper ==-->
