<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1><?=$data['blog_title']?></h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="javascript:void(0);" class="current"><?=$data['blog_title']?></a></li>
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->




<!--== Start About Page ==-->
<div id="contact-page-wrapper">
    <div class="container-fluid">
        <div class="row">
             <div class="col-lg-6">
                <h5>Author : <?=$data['blog_author']?></h5>
                    
                </div>
                <div class="col-lg-6" >

                   <h5 > Blog Created Date : <?=date("F d Y ", strtotime($data['blog_create']))?>
                   <span style="float: right;">
               Blog Last Modified : <?=date("F d Y ", strtotime($data['blog_modified']))?></span></h5>
                   </div>
            

            <div class="col-lg-12">
                
                <?=$data['blog_description']?>
            </div>
        </div>
    </div>
</div>

<!--== Start About Page ==-->