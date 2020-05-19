<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->library('cart');
		$this->load->library('session');
	}

	//Index
	public function index()
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/product');
		$this->load->view('page/include/foot');
	}
}