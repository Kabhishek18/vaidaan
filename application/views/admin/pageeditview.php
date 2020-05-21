<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('include/nav.php')?>
    <!-- BEGIN: Content-->
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Page Editor</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>ci-admin/dashboard">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript: void0" style="text-transform: capitalize;"><?=$data['page_parent']?>Page</a>
                                    </li>
                                    <li class="breadcrumb-item active" style="text-transform: capitalize;"><?=$data['page_name']?> Edit
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
                <!-- Snow Editor start -->
                <section class="snow-editor">
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
                                    <h4 class="card-title" style="text-transform: capitalize;"><?=$data['page_name']?></h4>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <!-- <p>Snow is a clean, flat toolbar theme.</p> -->
                                        <form method="post" action="<?=base_url()?>Admin/Pageupdate">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <input type="hidden" name="id" value="<?=$data['id']?>">
                                               <textarea name="editor1" contenteditable="true">
                                               <?=$data['page_description']?> </textarea>



                                            
                                               <script>
                                                    CKEDITOR.replace('editor1');
                                                   
                                               </script>
                                            </div>
                                        </div>
                                         <button type="submit" class="btn btn-primary" >Submit</button>   </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Snow Editor end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>