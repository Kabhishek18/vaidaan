<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'page';
$route['404_override'] = 'page/PageNotFound';
$route['translate_uri_dashes'] = FALSE;


//Page Routes
$route['contact'] = 'page/Contact';
$route['about/(:num)/(:any)'] = 'page/About';
$route['lookbook/(:any)'] = 'page/LookBook';
$route['category/(:any)'] = 'page/Category';
$route['category/(:any)/s/(:any)'] = 'page/Subcategory';
$route['product/(:any)'] = 'page/Product';
$route['blog/(:any)/(:any)'] = 'page/Blog';

//Cart
$route['cart'] ='cart';
$route['checkout'] ='cart/Checkout';
$route['thankyou'] ='cart/thankyou';
$route['error'] ='cart/error';

$route['search'] ='cart/Search';


//User Account Path 
$route['myaccount'] = 'user';
$route['myaccount/dashboard'] = 'user/Dashboard';




//Admin
$route['ci-admin'] ='admin';
$route['ci-admin/dashboard'] ='admin/Dashboard';
$route['ci-admin/media'] ='admin/Media';
//Admin User
$route['ci-admin/user/userlist'] ='admin/Userlist';
$route['ci-admin/user/useradd'] ='admin/Useradd';
$route['ci-admin/user/useredit/(:any)'] ='admin/Userupdateview';
//Page Edit
$route['ci-admin/page/pagelist']='admin/Pagelist';
$route['ci-admin/page/page_edit/(:any)'] ='admin/PageEditView';

//Blog Edit
$route['ci-admin/blog/bloglist']='admin/BlogList';
$route['ci-admin/blog/blogadd']='admin/BlogAdd';
$route['ci-admin/blog/blog_edit/(:any)'] ='admin/BlogEditView';

//Product_Admin
$route['ci-admin/product'] ='Product_admin';
$route['ci-admin/productadd'] ='Product_admin/Productadd';
$route['ci-admin/productedit/(:any)'] ='Product_admin/Productedit';

//Subcategory
$route['ci-admin/subcategory'] ='Product_admin/SubcategoryList';
$route['ci-admin/subcatadd'] ='Product_admin/Subcatadd';
$route['ci-admin/subcatedit/(:any)'] ='Product_admin/Subcatedit';

//Order ADMin
$route['ci-admin/order'] ='Order_admin';
$route['ci-admin/orderview/(:any)'] ='Order_admin/Orderview';

//Coupon
$route['ci-admin/coupon'] ='Admin/Couponlist';
$route['ci-admin/coupon/(:any)'] ='Admin/Couponedit';
