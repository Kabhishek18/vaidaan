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
                            <h2 class="content-header-title float-left mb-0">Product</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:void0">Product</a>
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
                                    <h4 class="card-title">Add Product </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('Product_admin/Product_insert','class="form-horizontal novalidate"') ?> 
                                        
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" required data-validation-required-message="This Product Name field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="product_sku" class="form-control" placeholder="SKU" min="0"required data-validation-required-message="This Regular_price field is required">
                                                        </div>
                                                    </div>
                                                </div>


                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="product_designer" class="form-control" placeholder="Product designer ">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="number" name="product_regularprice" class="form-control" placeholder="Regular price" min="0"required data-validation-required-message="This Regular_price field is required">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="number" name="product_salesprice" class="form-control" placeholder="Sales Price" min="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image</label>
                                                            <input type="file" name="product_image" class="form-control" placeholder="File" required data-validation-required-message="This File field is required" accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image 2</label>
                                                            <input type="file" name="product_image2" class="form-control" placeholder="File" required data-validation-required-message="This File field is required" accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image 3</label>
                                                            <input type="file" name="product_image3" class="form-control" placeholder="File"   accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image4</label>
                                                            <input type="file" name="product_image4" class="form-control" placeholder="File"  accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image5</label>
                                                            <input type="file" name="product_image5" class="form-control" placeholder="File"  accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        	<label>Select Category </label>

                                                            <select id="category" class=" form-control" name="cat_id" style="text-transform: capitalize;">
                                                            <option>Select Category</option>    
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
                                                            <label> Subcategory  </label>
                                                            <select class="form-control" id="subcategory"name="subcat_id" style="text-transform: capitalize;">
                                                              <option value="">Select Category first</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            <div class="col-sm-6 col-12">
                                                <label> Color  </label>
                                                <div class="form-group">
                                                    <input type="text" name="color" class="form-control" placeholder="Color Name" required data-validation-required-message="This Color Name field is required">
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-12">
                                                <label> Size  </label>
                                                <div class="form-group">
                                                    
                                                      <input type="text" name="size" class="form-control" placeholder="Size" required data-validation-required-message="This Size field is required">
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label>
                                                  New 
                                                </label>
                                    
                                                <div class="form-group">
                                                    <select class=" form-control" name="product_new" style="text-transform: capitalize;">
                                                       <option></option>
                                                        <option value="sale">sale</option>
                                                        <option value="gift card">gift card</option>
                                                        <option value="new arrivals">new arrivals</option>
                                                        <option value="best selling">best selling</option>
                                                      
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <label>
                                                  By Collection 
                                                </label>
                                    
                                                <div class="form-group">
                                                    <select class=" form-control" name="product_collection" style="text-transform: capitalize;">
                                                          <option></option>
                                                        <option value="raunak-sparkle">raunak-sparkle in silver collection</option>
                                                        <option value="maya a lap luxury">Maya a lap luxury</option>
                                                        <option value="nazaqat the floral story">nazaqat the floral story </option>
                                                      
                                                    
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label>
                                                  By Occasions 
                                                </label>
                                    
                                                <div class="form-group">
                                                    <select class=" form-control" name="product_occasion" style="text-transform: capitalize;">
                                                          <option></option>
                                                        <option value="daily essentials">daily essentials</option>
                                                        <option value="wedding bells">wedding bells</option>
                                                        <option value="party crazy">party crazy</option>
                                                        <option value="festivals">festivals</option>
                                                        <option value="limited editions">limited editions</option>
                                                        <option value="ishita picks">ishita picks</option>
                                                      
                                                    
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <label>
                                                  By Finish 
                                                </label>
                                    
                                                <div class="form-group">
                                                    <select class=" form-control" name="product_finish" style="text-transform: capitalize;">
                                                         <option></option>
                                                        <option value="gold">gold</option>
                                                        <option value="silver">silver</option>
                                                        <option value="gun metal">gun metal</option>
                                                        <option value="multi color">multi color</option>
                                                        <option value="black">black</option>
                                                        <option value="rose gold">Rose Gold</option>

                                                       
                                                      
                                                    
                                                    </select>
                                                </div>
                                            </div>
             

                <!-- Floating Label Textarea start -->
                <section class="floating-label-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            
                                <div class="card-content">
                                    <div class="card-body">
                                     <p class="mb-2">Product Description</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-label-group">
                                                    <textarea class="form-control" id="label-textarea2" name="product_description" rows="3" placeholder="Product Description" contenteditable="true"></textarea>

                                               <script>
                                                    CKEDITOR.replace('product_description');
                                                   
                                               </script>
                                                    <label for="label-textarea">Product Description</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Floating Label Textarea end -->

                 <!-- Floating Label Textarea start -->
                <section class="floating-label-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mb-2">Product Information</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-label-group">
                                                    <textarea class="form-control" id="label-textarea" name="product_information" rows="3" placeholder="Product Information "contenteditable="true"></textarea>

                                               <script>
                                                    CKEDITOR.replace('product_information');
                                                   
                                               </script>
                                                    <label for="label-textarea">Product Information</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Floating Label Textarea end -->



                <!-- Floating Label Textarea start -->
                <section class="floating-label-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                            
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="mb-2">Product Customise</p>
                                        <div class="row">
                                            <div class="col-12">
                                                <fieldset class="form-label-group">
                                                    <textarea class="form-control" id="label-textarea3" name="product_customise" rows="3" placeholder="Product Customise"contenteditable="true"></textarea>

                                               <script>
                                                    CKEDITOR.replace('product_customise');
                                                   
                                               </script>
                                                    <label for="label-textarea">Product Customise</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Floating Label Textarea end -->


                                            <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Product Status Active/Inactive  </label>
                                                            <select class="form-control" name="product_status">
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


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <script type='text/javascript'>
  // baseURL variable
  var baseURL= "<?php echo base_url();?>";
 
  $(document).ready(function(){
 
    // City change
    $('#category').change(function(){
      var id = $(this).val();

      // AJAX request
      $.ajax({
        url:'<?=base_url()?>Product_admin/Subcategoryjson',
        method: 'post',
        data: {id: id},
        dataType: 'json',
        success: function(response){

          // Remove options 
          $('#subcategory').find('option').not(':first').remove();

          // Add options
          $.each(response,function(index,data){
             $('#subcategory').append('<option value="'+data['id']+'">'+data['subcat_name']+'</option>');
          });
        }
     });
   });
 

 
 });
 </script>    