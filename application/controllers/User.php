<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class User extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('admin_model');
		$this->load->model('page_model');
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
		if($this->session->userdata('utoken') == '')
		{
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav');
			$this->load->view('page/myaccount');
			$this->load->view('page/include/foot');
		}
		else
		{	
			redirect('myaccount/dashboard');
		}
	}


	//Auth Login
	public function Auth()
	{
		$auth['email']=$this->input->post("email");
		$auth['password']=md5($this->input->post("password"));	
		$set=$this->admin_model->Userauthentication($auth);
		  	if($set['user_status']=='0')
		  	 {
		  	 	$this->session->set_userdata('user_detail',$set);
		  	 	$this->session->set_userdata('utoken',$set['user_token']);
		  	 	$simage = unserialize($set['user_image']);
		  	 	$this->session->set_userdata('uimage',$simage['file_name']);

		  	 	redirect('myaccount/dashboard');
		  	 }
		  	 elseif($set['user_status']=='1'){
		  	 	$this->session->set_flashdata('deactive', 'Your Account Is Deactive. Please Contact Your Webmaster ');
  	 	 		redirect(base_url()."myaccount");
		  	 }

		  	 else{
		  	 	$this->session->set_flashdata('wrong', 'Wrong Credential');
  	 	 		redirect(base_url()."myaccount");
		  	 }
			  	 
	}


	//Logout
	public function Logout()
	{
		if(session_destroy())
		{
		$this->session->unset_userdata('user_detail');	   
		$this->session->unset_userdata('uimage');      
		$this->session->sess_destroy();
		redirect('myaccount',refresh);
		}
	}


	// DashBoard 
	public function Dashboard($value='')
	{
		if($this->session->userdata('utoken') == '')
		{
			redirect('',refresh);
		}
		else
		{	
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav');
			$this->load->view('page/dashboard');
			$this->load->view('page/include/foot');
		}	
	}


}	