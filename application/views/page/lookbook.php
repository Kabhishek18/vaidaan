<?php $pageid = $this->uri->segment(2, 0);
    $data =$this->page_model->getPageParent($pageid);
?>
<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1><?=$data['page_name']?></h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="#" class="current"><?=$data['page_name']?></a></li>
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
            <div class="col-lg-12">
                <?=$data['page_description']?>
            </div>
        </div>
    </div>
</div>

<!--== Start About Page ==-->