 <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <!-- Left Item Top Nav -->
                    </div>
                    <ul class="nav navbar-nav float-right">
                     
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vaidaan..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                    
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void0" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600" style="text-transform: capitalize;"><?=$_SESSION['user_name']?></span><span class="user-status">
                                    <?php 
                                                        if($_SESSION['type']=='0'){
                                                            echo "Super";
                                                        }elseif($data['user_type']=='1'){echo "Admin";}
                                                        else{echo "User";}?>
                                </span></div><span><img class="round" src="<?=base_url()?>resource/upload/<?=$_SESSION['image']?>" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="<?=base_url()?>ci-admin/user/useredit/<?=$_SESSION['id']?>"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?=base_url()?>Admin/Logout"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
   
    <!-- END: Header -->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="<?=base_url()?>resource/admin/html/ltr/vertical-menu-template-dark/<?=base_url('ci-admin/dashboard')?>">
                        
                        <h2 class="brand-text mb-0">Vaidaan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

                <li class=" nav-item "><a href="<?=base_url('ci-admin/dashboard')?>"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                    <ul class="menu-content">
                        <li><a href="<?=base_url()?>ci-admin/dashboard"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Dashboard</span></a>
                        </li>
                         <li><a href="<?=base_url()?>ci-admin/media"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Media</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span>Users</span>
                </li>
                <li class=" nav-item"><a href="javascript:void(0)><i class="feather icon-user"></i><span class="menu-title" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li ><a href="<?=base_url()?>ci-admin/user/userlist"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                        <li><a href="<?=base_url()?>ci-admin/user/useradd"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="View">Add</span></a>
                        </li>
                    </ul>
                </li>
                 <li class=" navigation-header"><span>Pages</span>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-copy"></i><span class="menu-title" data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li ><a href="<?=base_url()?>ci-admin/page/pagelist"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="List">List</span></a>
                        </li>
                    </ul>
                </li>
                
                <li class=" navigation-header"><span>Items</span>
                </li>
                <li class=" nav-item"><a href="javascript:void(0)"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">Ecommerce</span></a>
                    <ul class="menu-content">
                        <li><a href="<?=base_url()?>ci-admin/subcategory"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Subcategory</span></a>
                        </li>
                        <li><a href="<?=base_url()?>ci-admin/product"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Product</span></a>
                        </li>
                        <li><a href="<?=base_url()?>ci-admin/order"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Details">Order</span></a>
                        </li>
                       
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->