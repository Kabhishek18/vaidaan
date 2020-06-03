<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter_Category extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->model('cart_model');
	}
	public function Index()
	{
		$this->load->view('admin/include/head');
	}

}