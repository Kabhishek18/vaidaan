<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1>Shopping Cart</h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="javascript:void(0);">Shop</a></li>
                        <li><a href="javascript:void(0);" class="current">Cart</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->

<!--== Start Cart Page Wrapper ==-->
<div id="cart-page-wrapper" class="page-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Cart Table Area -->
                <form method="post" action="<?=base_url()?>cart/updateItemQty">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Thumbnail</th>
                            <th class="pro-title">Product</th>
                            <th class="pro-price">Price</th>
                            <th class="pro-quantity">Quantity</th>
                            <th class="pro-subtotal">Total</th>
                            <th class="pro-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php if($this->cart->total_items()>0){
                           foreach($cartItems as $items){?> 
                        <tr>
                            <td class="pro-thumbnail">
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/products/product-1.jpg" alt="Product"/></a></td>
                            <td class="pro-title"><a href="<?=base_url()?>product/<?=$items['id']?>"><?=$items['name']?></a></td>
                            <td class="pro-price"><span>INR <?=number_format($items['price'])?></span></td>
                            <td class="pro-quantity">
                                <input type="hidden" name="rowid[]" id="rowid" value="<?=$items['rowid']?>">
                                <div class="pro-qty"><input type="text" name="qty[]" id="qty" value="<?=$items['qty']?>"></div>
                            </td>
                            <td class="pro-subtotal"><span>INR <?=number_format($items['subtotal'])?></span></td>
                            <td class="pro-remove"><a href="<?=base_url()?>cart/removeItem/<?=$items['rowid']?>"><i class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <?php }}?>
                        </tbody>
                    </table>
                </div>

                <!-- Cart Update Option -->
                <div class="cart-update-option d-block d-md-flex justify-content-between">
                    <div class="apply-coupon-wrapper">
                        <div class=" d-block d-md-flex">
                           <!--  <input type="text" name='coupon' placeholder=" Coupon Code" value="<?=(!empty($_SESSION['ticket']['coupon_name'])?$_SESSION['ticket']['coupon_name']:'')?>" />
                            <button type="submit" class="btn btn-brand">Apply Coupon</button> -->
                            <a class="btn btn-brand" href="<?=base_url()?>Cart/destremove"> Clear Cart</a>
                        </div>
                    </div>
                    <div class="cart-update">
                        <button type="submit" class="btn btn-brand">Update Cart</button>
                    </div>
                </div>
            </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 ml-auto">
                <!-- Cart Calculation Area -->
                <div class="cart-calculator-wrapper">
                    <div class="cart-calculate-items">
                        <h3>Cart Totals</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Sub Total</td>
                                    <td>INR <?php  $ship = 70;
                                        echo number_format($this->cart->format_number($this->cart->total())); ?></td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>INR <?=$ship?></td>
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
                                <tr class="total">
                                    <td>Total</td>
                                    <td class="total-amount">INR <?=number_format((empty($total)?$this->cart->total():$total))?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <a href="<?=base_url()?>checkout" class="btn btn-brand d-block">Proceed To Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Cart Page Wrapper ==-->
