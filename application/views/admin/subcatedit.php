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
                            <h2 class="content-header-title float-left mb-0">Subcategory</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void0">Subcategory</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add
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
                <!-- card actions section start -->
                <section id="card-actions">
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
                        
                        <?php }elseif($this->session->flashdata('saleamount')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Danger</h4>
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('saleamount'); ?>
                                            </p>
                                        </div>
                        <?php }?>  
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Subcategory </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('Product_admin/Subcatedit_update','class="form-horizontal novalidate"') ?> 
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Subcategory Name</label>
                                                            <input type="text" name="subcat_name" class="form-control" placeholder="Subcategory  Name" required data-validation-required-message="This Product Name field is required"
                                                            value="<?=$data['subcat_name']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                          <input type="hidden" name="id" value="<?=$data['id']?>">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        	<label>Select Category </label>

                                                            <select id="category" class="form-control" name="cat_id" style="text-transform: capitalize;">
                                                          <?php
                                                            $selcat =$this->cart_model->Getcat($data['cat_id']);
                                                            ?> 
                                                            <option value="<?=$selcat['id']?>"> Selected <?=$selcat['cat_name']?></option>    
                                                            


                                                            <?php
                                                            $cat =$this->cart_model->Getcat();
                                                            ?>    
                                                            <?php foreach($cat as $item){?>    
                                                            	<option value="<?=$item['id']?>" ><?=$item['cat_name']?></option>
                                                    
                                                             <?php }?>   

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                       
               
             



                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Subcategory Status Active/Inactive  </label>
                                                            <select class="form-control" name="subcat_status">
                                                             <option value="<?=$data['subcat_status']?>">Selected <?=($data['subcat_status']==0?'Active':'Inactive')?></option>   

                                                                <option value="0">Active</option>
                                                                <option value="1">Inactive</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                           
                                        <?php echo form_close() ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </div>

