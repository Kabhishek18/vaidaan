<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->model('cart_model');
		$this->load->model('admin_model');
		$this->load->model('productfilter_model');
	}

	//Index
	public function index()
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/home');
		$this->load->view('page/include/foot');

	}

	//About Us
	public function About($value='')
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/about');
		$this->load->view('page/include/foot');

	}

	//LookBook
	public function LookBook($value='')
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/lookbook');
		$this->load->view('page/include/foot');

	}

	public function MainBody($value='')
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/mainbody');
		$this->load->view('page/include/foot');

	}


	// Contact Us
	public function Contact()
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/contact');
		$this->load->view('page/include/foot');
	}
	//Page Not Found
	public function PageNotFound()
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/404');
		$this->load->view('page/include/foot');
	}

	//Page Category
	public function Category()
	{
		$data['cid'] =$this->uri->segment(2,0);
		if (is_numeric($data['cid'])) {
			if($data['cid']){
			$data['data']=$this->cart_model->Getcatsub($data['cid']);
			$data['catpro']=$this->cart_model->Getcatpro($data['cid']);
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav');
			$this->load->view('page/category',$data);
			$this->load->view('page/include/foot');
			}
		}
		else{
			redirect(base_url());
		}
	}

	//Page Subcategory
	public function Subcategory()
	{
		$data['cid'] =$this->uri->segment(2,0);
		$data['sid'] =$this->uri->segment(4,0);
		if (is_numeric($data['sid']) && is_numeric($data['cid'])) {
			if($data){
			$data['data']=$this->cart_model->Getcatsub($data['cid']);
			$data['subcat']=$this->cart_model->Getsubproall($data['sid']);
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav');
			$this->load->view('page/subcategory',$data);
			$this->load->view('page/include/foot');
			}
		}
		else{
			redirect(base_url());
		}
	}

	//Page Product
	public function Product()
	{
		$id =$this->uri->segment(2,0);
		if (is_numeric($id)) {
		$data=$this->cart_model->Getproall($id);	
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/product',$data);
		$this->load->view('page/include/foot');
		}
		else{
			redirect(base_url());
		}
	}



	//BLog
	public function Blog($value='')
	{
		$id =$this->uri->segment(2,0);
		$name =$this->uri->segment(3,0);
		if (is_numeric($id) && !empty($name)) {
			$data['data']=$this->page_model->GetBlog($id);	
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav');
			$this->load->view('page/blog',$data);
			$this->load->view('page/include/foot');
		}
		else{
			redirect(base_url());
		}
	}


	//Page Menu
	public function Menu()
	{
		$value['id'] =$this->uri->segment(2,0);
		$value['info'] =$this->uri->segment(3,0);
		$value['menu'] =$this->uri->segment(4,0);
		$value['menu'] =urldecode($value['menu']);
		
		if (is_numeric($value['id'])) {
			if($value['id']){
			$data['data']=$this->cart_model->Getcatsub($value['id']);
			$data['catpro']=$this->cart_model->Getmenuproall($value);
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav');
			$this->load->view('page/menu',$data);
			$this->load->view('page/include/foot');
			}
		}
		else{
			redirect(base_url());
		}
	}

	public function CategoryPriceFilter()
	{
		$value['cid'] =$this->uri->segment(2,0);
		$value['price'] =$this->uri->segment(3,0);
		$value['min'] =$this->uri->segment(4,0);
		$value['max'] =$this->uri->segment(5,0);
		if (empty($value['cid'])) {
			redirect(base_url());

		}	
		elseif (empty($value['price'])) {
			redirect(base_url());
			
		}
		elseif (empty($value['min'])) {
			redirect(base_url());	
		}
		elseif (empty($value['max'])) {
			redirect(base_url());
			
		}
		else{

			$data['data']=$this->cart_model->Getcatsub($value['cid']);
			$data['catpro'] = $this->page_model->Getcatpro($value['cid'],$value['min'],$value['max']);
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav',$value);
			$this->load->view('page/catpricefilter',$data);
			$this->load->view('page/include/foot');
		}
	}


		public function SubCategoryPriceFilter()
	{
		$value['cid'] =$this->uri->segment(2,0);
		$value['sid'] =$this->uri->segment(4,0);
		$value['price'] =$this->uri->segment(5,0);
		$value['min'] =$this->uri->segment(6,0);
		$value['max'] =$this->uri->segment(7,0);
		if (empty($value['cid'])) {
			redirect(base_url());

		}
		elseif (empty($value['sid'])) {
			redirect(base_url());
			
		}

		elseif (empty($value['price'])) {
			redirect(base_url());
			
		}
		elseif (empty($value['min'])) {
			redirect(base_url());	
		}
		elseif (empty($value['max'])) {
			redirect(base_url());
			
		}
		else{

			$data['data']=$this->cart_model->Getcatsub($value['cid']);
			$data['subcat'] = $this->page_model->Getsubpro($value['sid'],$value['min'],$value['max']);
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav',$value);
			$this->load->view('page/subcatpricefilter',$data);
			$this->load->view('page/include/foot');
		}
	}
}
?>