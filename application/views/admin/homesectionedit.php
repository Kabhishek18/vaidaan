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
                            <h2 class="content-header-title float-left mb-0">Home</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Section List View
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
                                          <?php echo form_open_multipart('Admin/UpdateSection',' ') ?> 
                                         <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Title</label>
                                                            <input type="text" name="section_title" class="form-control" placeholder="Section Title" required data-validation-required-message="This field is required" value="<?=$data['section_title']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" value="<?=$data['id']?>">
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Subtitle</label>
                                                            <input type="text" name="section_subtitle" class="form-control" placeholder="Section Subtitle" value="<?=$data['section_subtitle']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Button</label>
                                                            <input type="text" name="section_button" class="form-control" placeholder="Section Button Name" value="<?=$data['section_button']?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Button Link</label>
                                                            <input type="text" name="section_link" class="form-control" placeholder="Section Button Link" value="<?=$data['section_link']?>" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <img src="<?=base_url()?>resource/upload/home/<?=$data['section_image']?>" width="100%">
                                                </div>
                                                 <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Image </label>
                                                            <input type="file" name="section_image" class="form-control" placeholder="Section Image" >
                                                        </div>
                                                    </div>
                                                </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label> Section Type </label>
                                                    <select class="form-control" name="section_home" required="">
                                                         <option value="<?=$data['section_home']?>">Selected <?=($data['section_home'])?></option>
                                                          <optgroup></optgroup>
                                                        <option value="banner">Banner</option>
                                                        <option value="infoimage">Infoimage </option>
                                                        <option value="parallax">Parallax </option>
                                                        <option value="closet">Closet</option>  
                                                        <option value="testimonial">Testimonial</option>  
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                   

                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="section_status" required="">
                                                                 <option value="<?=$data['section_status']?>">Selected <?=($data['section_status']==0?'Active':'Inactive')?></option>
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
                                                        <label>Blurb Description</label>
                                               <textarea class="form-control" name="section_blurb" contenteditable="true" placeholder="Blurb Description"><?=$data['section_blurb']?></textarea>
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