
<!--== Start Page Header ==-->
<div id="page-header-wrapper">
    <div class="container">
        <div class="row">
            <!-- Page Title Area Start -->
            <div class="col-6">
                <div class="page-title-wrap">
                    <h1>My Account</h1>
                </div>
            </div>
            <!-- Page Title Area End -->

            <!-- Page Breadcrumb Start -->
            <div class="col-6 m-auto">
                <nav class="page-breadcrumb-wrap">
                    <ul class="nav justify-content-end">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="javascript:void(0);">My Profile</a></li>
                        <li><a href="javascript:void(0);" class="current">Dashboard</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Page Breadcrumb End -->
        </div>
    </div>
</div>
<!--== End Page Header ==-->

<!--== Start My Account Page Wrapper ==-->
<div id="my_account-page-wrapper" class="page-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- My Account Page Start -->
                <div class="myaccount-page-wrapper">
                    <!-- My Account Tab Menu Start -->
                    <div class="row">
                        <div class="col-lg-3 col-md-4">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>


                                <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment
                                    Method</a>

                                <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> address</a>

                                <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

                                <a href="<?=base_url()?>User/Logout"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-md-8">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>
                                           <?php if($this->session->flashdata('success')){ ?>
                        <?php echo $this->session->flashdata('success'); } ?>

                        <?php if($this->session->flashdata('warning')){ ?>
                        <?php echo $this->session->flashdata('warning'); } ?>

                        <?php if($this->session->flashdata('warningpass')){ ?>
                        <?php echo $this->session->flashdata('warningpass'); } ?>
                                        <div class="welcome">
                                            <p>Hello, <strong style="text-transform: capitalize;"><?=$_SESSION['user_detail']['user_name']?></strong>
                                        </div>

                                        <p class="mb-0">From your account dashboard. you can easily check & view your
                                            recent orders, manage your shipping and billing addresses and edit your
                                            password and account details.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Orders</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>April 19, 2020</td>
                                                    <td>Pending</td>
                                                    <td>INR 3000</td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>April 19, 2020</td>
                                                    <td>Approved</td>
                                                    <td>INR 200</td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>April 19, 2020</td>
                                                    <td>On Hold</td>
                                                    <td>INR 990</td>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="download" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Downloads</h3>

                                        <div class="myaccount-table table-responsive text-center">
                                            <table class="table table-bordered">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Date</th>
                                                    <th>Expire</th>
                                                    <th>Download</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>H-49, Level 3, Sector 63, Noida 201301</td>
                                                    <td>Aug 22, 2018</td>
                                                    <td>Yes</td>
                                                    <td><a href="#" class="btn btn-brand btn-small"><i
                                                            class="fa fa-cloud-download"></i> Download File</a></td>
                                                </tr>
                                                <tr>
                                                    <td>HasTech - Profolio Business Template</td>
                                                    <td>Sep 12, 2018</td>
                                                    <td>Never</td>
                                                    <td><a href="#" class="btn btn-brand btn-small"><i
                                                            class="fa fa-cloud-download"></i> Download File</a></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Payment Method</h3>

                                        <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Billing Address</h3>

                                        <address>
                                            <?php
                                            $address=unserialize($_SESSION['user_detail']['user_address']);
                                            ?> 
                                            <?php if(!empty($address['bill_company'])){?>
                                            <p>Company Name: <?=$address['bill_company']?><p>
                                              <?php }?>  
                                            <p>Address: <?=$address['bill_street1'].$address['bill_street2'].', '.$address['bill_town'].', '.$address['bill_state'].', '.$address['bill_country'].', '.$address['bill_zip']?></p>    
                                            <p>Mobile: <?=$_SESSION['user_detail']['user_mobile']?></p>
											<p>Email: <?=$_SESSION['user_detail']['user_email']?></p>

                                        </address>

                                        <a href="#" class="btn btn-brand d-inline-block"><i class="fa fa-edit"></i> Edit
                                            Address</a>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="account-info" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Account Details</h3>

                                        <div class="account-details-form">
                                            <form action="<?=base_url()?>User/AccountUpdate" method="post">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">First Name</label>
                                                            <input type="text" id="first-name"
                                                            name="user_firstname"       placeholder="First Name"/>
                                                        </div>
                                                    </div>
                                                <input type="hidden" name="id" value="<?=$_SESSION['user_detail']['id']?>">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Last Name</label>
                                                            <input type="text" id="last-name" name="user_lastname" placeholder="Last Name"/>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                                    
                                                <div class="single-input-item">
                                                    <label for="first-name" class="required">Company </label>
                                                    <input type="text" id="company" name="company" placeholder="Company" required/>
                                                </div>
                                                  

                                                  
                                               
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">Street Address</label>
                                                            <input type="text" id="street"
                                                            name="street"       placeholder="Street Address" required />
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Town / City</label>
                                                            <input type="text" id="city" name="city" placeholder="Town / City " required="" />
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">State / Province</label>
                                                            <input type="text" id="state"
                                                            name="state"       placeholder="State / Province"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">Country</label>
                                                            <input type="text" id="country" name="country" placeholder="Country"/>
                                                        </div>
                                                    </div>

                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="last-name" class="required">ZIP</label>
                                                            <input type="text" id="zip" name="zip" placeholder="Pincode"/>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="single-input-item">
                                                            <label for="first-name" class="required">Mobile</label>
                                                            <input type="text" id="mobile"
                                                            name="mobile"       placeholder="Mobile / Phone"/>
                                                        </div>
                                                    </div>

                                               
                                                </div>


                                                <fieldset>
                                                    <legend>Password change</legend>
                                                

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="new-pwd" class="required">New
                                                                    Password</label>
                                                                <input type="password" id="new-pwd" name="password" 
                                                                       placeholder="New Password"/>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="confirm-pwd" class="required">Confirm
                                                                    Password</label>
                                                                <input type="password" id="confirm-pwd"
                                                                name="repassword" 
                                                                       placeholder="Confirm Password"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>

                                                <div class="single-input-item">
                                                    <button type="submit" class="btn btn-brand">Update Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>
                </div>
                <!-- My Account Page End -->
            </div>
        </div>
    </div>
</div>
<!--== End My Account Page Wrapper ==-->