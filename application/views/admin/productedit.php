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
                                    	<?php echo form_open_multipart('Product_admin/Product_update','class="form-horizontal novalidate"') ?> 
                                        
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" required data-validation-required-message="This Product Name field is required" value="<?=$data['product_name']?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="product_sku" class="form-control" placeholder="SKU" min="0"required data-validation-required-message="This Regular_price field is required" value="<?=$data['product_sku']?>">
                                                        </div>
                                                    </div>
                                                </div>


                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="text" name="product_designer" class="form-control" placeholder="Product designer " value="<?=$data['product_designer']?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="number" name="product_regularprice" class="form-control" placeholder="Regular price" min="0"required data-validation-required-message="This Regular_price field is required" 
                                                            value="<?=$data['product_regularprice']?>">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="number" name="product_salesprice" class="form-control" placeholder="Sales Price" min="0"required data-validation-required-message="This Sales Price field is required"  value="<?=$data['product_salesprice']?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image(Home , Category)</label>
                                                            <input type="file" name="product_image" class="form-control" placeholder="File" accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-1" >
                                                    <img src="<?=base_url()?>/resource/upload/product/<?=$data['product_image']?>" width="100%">
                                                </div>
                                                <input type="hidden" name="id" value="<?=$data['id']?>">
                                                <div class="col-sm-10">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image 2</label>
                                                            <input type="file" name="product_image2" class="form-control" placeholder="File"  accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1" >
                                                    <img src="<?=base_url()?>/resource/upload/product/<?=$data['product_image2']?>" width="100%">
                                                </div>

                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image 3</label>
                                                            <input type="file" name="product_image3" class="form-control" placeholder="File"  accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1" >
                                                    <img src="<?=base_url()?>/resource/upload/product/<?=$data['product_image3']?>" width="100%">
                                                </div>
                                                <div class="col-sm-2" >
                                                     <span class="action-delete" style="font-size: 30px"><a href="<?=base_url()?>Product_admin/imagedelete/<?=$data['id']?>/product_image3" onclick="return confirm('Are you sure, you want to delete it?')"><i class="feather icon-trash"></i></a></span>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image4</label>
                                                            <input type="file" name="product_image4" class="form-control" placeholder="File"  accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-1" >
                                                    <img src="<?=base_url()?>/resource/upload/product/<?=$data['product_image4']?>" width="100%">
                                                </div>

                                                  <div class="col-sm-2" >
                                                     <span class="action-delete" style="font-size: 30px"><a href="<?=base_url()?>Product_admin/imagedelete/<?=$data['id']?>/product_image4" onclick="return confirm('Are you sure, you want to delete it?')"><i class="feather icon-trash"></i></a></span>
                                                </div>



                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Image5</label>
                                                            <input type="file" name="product_image5" class="form-control" placeholder="File"  accept="image/png, image/jpeg">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-1" >
                                                    <img src="<?=base_url()?>/resource/upload/product/<?=$data['product_image5']?>" width="100%">
                                                </div>
                                                  <div class="col-sm-2" >
                                                     <span class="action-delete" style="font-size: 30px"><a href="<?=base_url()?>Product_admin/imagedelete/<?=$data['id']?>/product_image5" onclick="return confirm('Are you sure, you want to delete it?')"><i class="feather icon-trash"></i></a></span>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        	<label>Select Category </label>

                                                            <select id="category" class="form-control" name="cat_id" style="text-transform: capitalize;" required="">
                                                           <?php
                                                           $selcat =$this->cart_model->Getcat($data['cat_id']);?>     
                                                            <option value="<?=$data['cat_id']?>">Selected <?=$selcat['cat_name']?></option>    
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
                                                            <select class="form-control" id="subcategory"name="subcat_id" style="text-transform: capitalize;" required="">
                                                               <?php
                                                           $selsubcat =$this->cart_model->Getsubcat($data['subcat_id']);?>     
                                                            <option value="<?=$data['subcat_id']?>">Selected <?=$selsubcat['subcat_name']?></option>    
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php $color=unserialize($data['product_color']);?>
                                                       <?php $xcolor = implode(',',$color);?> 
                                            <div class="col-sm-6 col-12">
                                                <label> Color  </label>
                                                <div class="form-group">

                                                     <input type="text" name="color" class="form-control" placeholder="Color Name" required data-validation-required-message="This Color Name field is required" value="<?=$xcolor?>">
                                                </div>
                                            </div>

                                            <?php $size=unserialize($data['product_size']);?>
                                                 <?php $xsize = implode(',',$size);?> 
                                            <div class="col-sm-6 col-12">
                                                <label> Size  </label>
                                                <div class="form-group">
                                                   
                                                      <input type="text" name="size" class="form-control" placeholder="Size" required data-validation-required-message="This Size field is required" value="<?=$xsize?>">
                                                </div>
                                            </div>


                                            <div class="col-sm-6 col-12">
                                                <label>
                                                  New 
                                                </label>
                                    
                                                <div class="form-group">
                                                    <select class=" form-control" name="product_new" style="text-transform: capitalize;">
                                                        <option value="<?=(!is_null($data['product_new'])?$data['product_new']:'')?>">Selected <?=(!is_null($data['product_new'])?$data['product_new']:'none')?></option> 
                                                          <optgroup></optgroup>

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
                                                          <option value="<?=(!is_null($data['product_collection'])?$data['product_collection']:'')?>">Selected <?=(!is_null($data['product_collection'])?$data['product_collection']:'none')?></option>
                                                          <optgroup></optgroup>
                                                         <option value="raunak-sparkle">raunak-sparkle in silver collection</option>
                                                        <option value="maya a lap luxury">Maya a lap luxury</option>
                                                        <option value="nazaqat the floral story">Nazaqat the floral story </option>
                                                      
                                                    
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-12">
                                                <label>
                                                  By Occasions 
                                                </label>
                                    
                                                <div class="form-group">
                                                    <select class=" form-control" name="product_occasion" style="text-transform: capitalize;">
                                                        <option value="<?=(!is_null($data['product_occasion'])?$data['product_occasion']:'')?>">Selected <?=(!is_null($data['product_occasion'])?$data['product_occasion']:'none')?></option>
                                                          <optgroup></optgroup>
                                                        
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
                                                        <option value="<?=(!is_null($data['product_finish'])?$data['product_finish']:'')?>">Selected <?=(!is_null($data['product_finish'])?$data['product_finish']:'none')?></option>
                                                          <optgroup></optgroup>
                                                         
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
                                                    <textarea class="form-control" id="label-textarea2" name="product_description" rows="3" placeholder="Product Description"><?=$data['product_description']?></textarea>
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
                                                    <textarea class="form-control" id="label-textarea" name="product_information" rows="3" placeholder="Product Information "><?=$data['product_info']?></textarea>
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
                                                    <textarea class="form-control" id="label-textarea3" name="product_customise" rows="3" placeholder="Product Customise"><?=$data['product_customise']?>
                                                    </textarea>
                                                    
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

                                                            <option value="<?=$data['product_status']?>">Selected <?=($data['product_status']==0?'Active':'Inactive')?></option>
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