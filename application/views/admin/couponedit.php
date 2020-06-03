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
                            <h2 class="content-header-title float-left mb-0">Coupon</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Coupon Edit View
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                  
                </div>
            </div>
            <div class="content-body">
            
                <!-- Column selectors with Export Options and print table -->
                <section id="column-selectors">
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        <a href="" class=""></a>
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                          <?php echo form_open_multipart('Admin/UpdateCoupons',' ') ?> 
                                         <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Coupon Name</label>
                                                            <input type="text" name="coupon_name" class="form-control" placeholder="Coupon Name" required data-validation-required-message="This Coupon Name field is required" value="<?=$data['coupon_name']?>">
                                                        </div>
                                                    </div>
                                                </div>


                                                <input type="hidden" name="id" value="<?=$data['id']?>">
                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label> Coupon Type </label>
                                                    <select class="form-control" name="coupon_type">
                                                        <option value="<?=$data['coupon_type']?>">Selected <?=$data['coupon_type']==0?'Amount':'Percentage'?></option>
                                                        <optgroup></optgroup>
                                                        <option value="0">Amount </option>
                                                        <option value="1">Percentage</option>
                                                       
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                         <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Coupon Value</label>
                                                            <input type="number" name="coupon_value" class="form-control" placeholder="Coupon Value" required data-validation-required-message="This Coupon Name field is required" value="<?=$data['coupon_value']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Coupon Expire Date</label>
                                                            <input type="date" name="coupon_expire" class="form-control" placeholder="Coupon Value" required data-validation-required-message="This Coupon Name field is required" value="<?=$data['coupon_expire']?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Coupon Status Active/Inactive  </label>
                                                            <select class="form-control" name="coupon_status">
                                                                <option value="<?=$data['coupon_status']?>">Selected <?=$data['coupon_status']==0?'Active':'Inactive'?></option>
                                                        <optgroup></optgroup>
                                                                <option value="0">Active</option>
                                                                <option value="1">Inactive</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                          
                                       
                                          
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label>Blog Description</label>
                                               <textarea class="form-control" name="coupon_description" contenteditable="true"><?=$data['coupon_description']?></textarea>
                                                </div>
                                            </div>

                                            
                                            </div>
                                      
                                       
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                         <button type="submit" class="btn btn-primary" >Submit</button>  
                                                     </div>
                                                </div>
                                            </div>
                                         </div>
                                     

                                       <?php echo form_close() ?>                                         
                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Column selectors with Export Options and print table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>