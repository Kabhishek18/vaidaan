<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->model('cart_model');
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

	//Page Not Found
	public function Category()
	{
		$id =$this->uri->segment(2,0);
		if($id){
		$data['data']=$this->cart_model->Getcatsub($id);
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/category',$data);
		$this->load->view('page/include/foot');
		}
	}
	//Page Not Found
	public function Subcategory()
	{
		$data['cid'] =$this->uri->segment(2,0);
		$data['sid'] =$this->uri->segment(4,0);
		if($data){
		$data['data']=$this->cart_model->Getcatsub($data['cid']);
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/category',$data);
		$this->load->view('page/include/foot');
		}
	}

}
