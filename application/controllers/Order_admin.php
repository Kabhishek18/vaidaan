<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Order_admin extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('cart_model');
		$this->load->library('cart');
		$this->load->library('session');
		$this->load->helper('date');
		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	//Index
	public function index()
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['data']=$this->cart_model->Getorder();
			$this->load->view('admin/include/head');
			$this->load->view('admin/orderlist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	

	}


	//Index
	public function Orderview()
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			if ($this->uri->segment(3,0)) {
				$data['id'] =$this->uri->segment(3,0);
			$data['data']=$this->cart_model->Getorder($data['id']);
			$this->load->view('admin/include/head');
			$this->load->view('admin/orderview',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
			}
			
		}	

	}

	public function OrderDelete($value='')
	{

		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			if ($this->uri->segment(3,0)) {
				$data['id'] =$this->uri->segment(3,0);
				$data['order_delete'] =1;
				$data['order_status'] =1;
				$result=$this->cart_model->Deleteorder($data);
				echo $result;
			}
			
		}	

	}


}