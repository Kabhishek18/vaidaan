<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
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



}
