<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('include/nav.php')?>


 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Invoice</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Order
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="content-body">
                <!-- invoice functionality start -->
                <section class="invoice-print mb-1">
                    <div class="row">

                        <fieldset class="col-12 col-md-5 mb-1 mb-md-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email" aria-describedby="button-addon2">
                                <div class="input-group-append" id="button-addon2">
                                    <button class="btn btn-outline-primary" type="button">Send Invoice</button>
                                </div>
                            </div>
                        </fieldset>
                        <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                            <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>
                            <button class="btn btn-outline-primary  ml-0 ml-md-1"> <i class="feather icon-download"></i> Download</button>
                        </div>
                    </div>
                </section>
                <!-- invoice functionality end -->
                <!-- invoice page -->
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <div id="invoice-company-details" class="row">
                            <div class="col-sm-6 col-12 text-left pt-1">
                                <div class="media pt-1">
                                    <img src="<?=base_url()?>resource/assets/img/Vaidaa-Jewellery.png" alt="company logo" />
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 text-right">
                                <h1>Invoice</h1>
                                <div class="invoice-details mt-2">
                                    <h6>INVOICE NO.</h6>
                                    <p><?=$data['id']?>/<?=date('Y')?></p>
                                    <h6 class="mt-2">INVOICE DATE</h6>
                                    <p><?=date("F d Y ", strtotime($data['order_created']))?></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Company Details -->
                        
                        <!-- Invoice Recipient Details -->
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-sm-6 col-12 text-left">
                                <h5>Recipient</h5>
                                <div class="recipient-info my-2">
                                    <?php if($data['shipping_address']!="" ){?>
                                    	<p>Peter Stark</p>
                                    <p>8577 West West Drive</p>
                                    <p>Holbrook, NY</p>
                                    <p>90001</p>
                                <?php }else{ echo "N/A";}?>
                                </div>
                                <div class="recipient-contact pb-2">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        peter@mail.com
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        +91 988 888 8888
                                    </p>
                                </div>
                            </div>
                            <?php $bill =unserialize($data['billing_address']);
                      			?>
                            <div class="col-sm-6 col-12 text-right">
                                <h5><?=$bill['bill_company']?></h5>
                                <div class="company-info my-2">
                                	<p></p>
                                    <p><?=$bill['bill_street1'].', '.$bill['bill_street2']?></p>
                                    <p><?=$bill['bill_town'].', '.$bill['bill_state']?></p>
                                    <p><?=$bill['bill_zip'].', '.$bill['bill_country']?></p>
                                </div>
                                <div class="company-contact">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        <?=$bill['user_email']?>
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                       <?=$bill['user_mobile']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Recipient Details -->
                         <?php $cart =unserialize($data['order_cart']);
                      			?>
                        <!-- Invoice Items Details -->
                        <div id="invoice-items-details" class="pt-1 invoice-items-table">
                            <div class="row">
                                <div class="table-responsive col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Size / Color</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($cart[0] as $item){?>	
                                            <tr>
                                                <td><?=$item['id']?></td>
                                                <td><?=$item['name']?></td>
                                                <td><?=$item['size']?> / <?=$item['color']?></td>
                                                <td><?=$item['qty']?></td>

                                                <td>INR <?=number_format($item['price'])?></td>
                                               
                                                <td>INR <?=number_format($item['subtotal'])?></td>
                                            </tr>
                                        <?php }?>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="invoice-total-details" class="invoice-total-table">
                            <div class="row">
                                <div class="col-7 offset-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                                <tr>
                                                    <th>SUBTOTAL</th>
                                                    <td>INR <?=number_format($cart[1])?> </td>
                                                </tr>
                                                <tr>
                                                    <th>DISCOUNT (5%)</th>
                                                    <td>INR <?
                                                    $data['order_amount'] =  intval(str_replace(',', '', $data['order_amount']));
                                                     echo number_format($cart[1] -$data['order_amount']);
                                                ?></td>
                                                </tr>
                                                <tr>
                                                    <th>TOTAL</th>
                                                    <td>INR <?=number_format($data['order_amount'])?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Footer -->
                        <div id="invoice-footer" class="text-right pt-3">
                            <p>Transfer the amounts to the business amount below. Please include invoice number on your check.
                                <p class="bank-details mb-0">
                                    <span class="mr-4">BANK: <strong>FTSBUS33</strong></span>
                                    <span>IBAN: <strong>G882-1111-2222-3333</strong></span>
                                </p>
                        </div>
                        <!--/ Invoice Footer -->

                    </div>
                </section>
                <!-- invoice page end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
