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
                            <h2 class="content-header-title float-left mb-0">Media</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void0">Media</a>
                                    </li>
                                    <li class="breadcrumb-item active">View
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
                                          <?php echo form_open_multipart('Admin/InsertMedia',' ') ?> 
                                         <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Media Name</label>
                                                            <input type="file" name="media" class="form-control" placeholder="Media Name" required data-validation-required-message="Media field is required">
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
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                               
                                <div class="card-content collapse show">
                                	<div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="media-list media-bordered">
                                            <?php
									$map = directory_map('./resource/upload/media');
									foreach ($map as $key) {
										?>

                                            <div class="media">
                                                <a class="align-self-start media-left" href="#">
                                                    <img src="<?=base_url()?>resource/upload/media/<?=$key?>" alt="Generic placeholder image" height="64" width="64">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading"><?=$key?></h5>
                                                    <p class="mb-0">
                                                        <?=base_url()?>resource/upload/<?=$key?>
                                                    </p>
                                                    
                                                </div>
                                            </div>
									<?php }	?>
										</div>
                                        </div>
                                    </div>
                                </div>


                                 
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </div>



