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
                            <h2 class="content-header-title float-left mb-0">Product</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Product List View
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
                                    <h4 class="card-title">Product List</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                      <p>
                                       <a class="btn btn-primary waves-effect waves-light" href="<?=base_url('ci-admin/productadd')?>">
                                           Add Product
                                       </a>
                                      </p>
                                        <div class="table-responsive">
                                            <table class="table dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                         <th>Pro ID</th>
                                                        <th>Name</th>
                                                        <th>SKU ID</th>
                                                        <th>Designer</th>
                                                        <th>Category</th>
                                                        <th>SubCategory</th>
                                                        <th>Regular / Sales Price</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    if ($data) {
                                                        
                                                    foreach($data as $item){?>
                                                    <tr>
                                                        <td><?=$item['id']?></td>
                                                        <td><?=$item['product_name']?></td>
                                                        <td><?=$item['product_sku']?></td>
                                                        <td><?=$item['product_designer']?></td>
                                                        <td><?php $catname =$this->admin_model->Getcat($item['cat_id']);
                                                                echo $catname['cat_name'] ;?></td>
                                                      <td><?php $subcatname =$this->admin_model->Getsubcat($item['subcat_id']);
                                                                echo $subcatname['subcat_name'] ;?></td>
                                                        <td><?=$item['product_regularprice']?> / <?=$item['product_salesprice']?></td>
                                                    
                                                    


                                                        <td>
                                                                <?php if($item['product_status'] == '0'){echo "Active";}
                                                        
                                                                else{
                                                                    echo "Inactive";
                                                                }?>
                                                            
                                                        </td>
                                                       <td class="product-action">
                                        <span class="action-edit"><a href="<?=base_url()?>ci-admin/productedit/<?=$item['id']?>"><i class="feather icon-edit"></i></a></span>
                                        <span class="action-delete"><a href="<?=base_url()?>Product_admin/Productdelete/<?=$item['id']?>" onclick="return confirm('Are you sure, you want to delete it?')"><i class="feather icon-trash"></i></a></span>
                                    </td>
                                                    </tr>
                                                    <?php }}?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                          <th>Pro ID</th>
                                                        <th>Name</th>
                                                        <th>SKU ID</th>
                                                        <th>Designer</th>
                                                        <th>Category</th>
                                                        <th>SubCategory</th>
                                                        <th>Regular / Sales Price</th>
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