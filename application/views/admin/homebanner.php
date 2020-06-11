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
                                          <?php echo form_open_multipart('Admin/InsertSection',' ') ?> 
                                         <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Title</label>
                                                            <input type="text" name="section_title" class="form-control" placeholder="Section Title" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Subtitle</label>
                                                            <input type="text" name="section_subtitle" class="form-control" placeholder="Section Subtitle">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Button</label>
                                                            <input type="text" name="section_button" class="form-control" placeholder="Section Button Name" >
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Button Link</label>
                                                            <input type="text" name="section_link" class="form-control" placeholder="Section Button Link" >
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Section Image </label>
                                                            <input type="file" name="section_image" class="form-control" placeholder="Section Image" required data-validation-required-message="This field is required">
                                                        </div>
                                                    </div>
                                                </div>

                                         <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label> Section Type </label>
                                                    <select class="form-control" name="section_home" required="">
                                                        <option value="banner">Banner</option>
                                                        <option value="infoimage">Infoimage </option>
                                                        <option value="parallax">Parallax </option>
                                                        <option value="closet">Closet</option>   
                                                        <option value="subcategory">Subcategory</option>   
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
                                               <textarea class="form-control" name="section_blurb" contenteditable="true" placeholder="Blurb Description"></textarea>
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
                                       <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Section ID</th>
                                                        
                                                        <th>Section Title</th>
                                                        <th>Section Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($data as $item){?>
                                                <tr>
                                                   <td><?=$item['section_home']?></td>

                                                    <td><?=$item['id']?></td>
                                                   <td><?=$item['section_title']?></td>
                                                   <td><img src="<?=base_url()?>resource/upload/home/<?=$item['section_image']?>" width="100px"></td>

                                                
                                                    <td>
                                                    <?php if($item['section_status'] == '0'){echo "Active";}
                                                    
                                                            else{
                                                                echo "Inactive";
                                                                }?>
                                                            
                                                    </td>
                                                   <td class="product-action">
                                        <span class="action-edit"><a href="<?=base_url()?>ci-admin/homeedit/<?=$item['id']?>"><i class="feather icon-edit"></i></a></span>
                                        <span class="action-delete"><a href="<?=base_url()?>Admin/DeleteSection/<?=$item['id']?>" onclick="return confirm('Are you sure, you want to delete it?')"><i class="feather icon-trash"></i></a></span>
                                    </td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Section ID</th>
                                                        
                                                        <th>Section Title</th>
                                                        <th>Section Image</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
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