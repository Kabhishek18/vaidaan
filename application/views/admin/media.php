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
                    
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                               
                                <div class="card-content collapse show">
                                	<div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="media-list media-bordered">
                                            <?php
									$map = directory_map('./resource/upload/');
									foreach ($map as $key) {
										?>

                                            <div class="media">
                                                <a class="align-self-start media-left" href="#">
                                                    <img src="<?=base_url()?>resource/upload/<?=$key?>" alt="Generic placeholder image" height="64" width="64">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="media-heading"><?=$key?></h5>
                                                    <p class="mb-0">
                                                        <?=base_url()?>resource/upload/<?=$key?>
                                                    </p>
                                                    
                                                </div>
                                            </div>
									<?php }
									?>
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



