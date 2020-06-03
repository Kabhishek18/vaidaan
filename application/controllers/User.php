<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class User extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('admin_model');
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
		redirect('myaccount');
		}
	}


	// DashBoard 
	public function Dashboard($value='')
	{
		if($this->session->userdata('utoken') == '')
		{
			redirect('');
		}
		else
		{	
			$this->load->view('page/include/head');
			$this->load->view('page/include/nav');
			$this->load->view('page/dashboard');
			$this->load->view('page/include/foot');
		}	
	}


	//Registration

	public function Registration($value='')
	{	
		$data['user_email'] = $this->input->post('email');
		$data['user_password'] = $this->input->post('password');
		$repassword = $this->input->post('repassword');

		if(!empty($data['user_email']) && !empty($data['user_password'])) 
		{
			if($data['user_password'] == $repassword) {
				$data['user_token'] =generateUUID();
				$data['user_password'] =md5($data['user_password']);
				$result =$this->admin_model->insertuser($data);
				if($result) {
					$this->session->set_flashdata('success', '<span style="color:green">Account is Created</span>');
					redirect(base_url().'myaccount');
				}
				else{
					$this->session->set_flashdata('warning', '<span style="color:red">Something Misfortune Happen !!</span>');
					redirect(base_url().'myaccount');
				}

			}
			else{
				$this->session->set_flashdata('warningpass', '<span style="color:red">Password and Confirm password are different!!</span>');
				redirect(base_url().'myaccount');
			}

		}
		

	}



	public function AccountUpdate($value='')
	{
		$data['user_name'] = $this->input->post('user_firstname');
		$data['user_lastname'] = $this->input->post('user_lastname');
		$ads['bill_company'] = $this->input->post('company');
		$ads['bill_street1'] = $this->input->post('street');
		$ads['bill_town'] = $this->input->post('city');
		$ads['bill_state'] = $this->input->post('state');
		$ads['bill_country'] = $this->input->post('country');
		$ads['bill_zip'] = $this->input->post('zip');
		$data['user_address'] =serialize($ads);
		$data['user_mobile'] = $this->input->post('mobile');
		$data['id'] = $this->input->post('id');
		$data['user_password'] = $this->input->post('password');
		$repassword = $this->input->post('repassword');
		if(!empty($data['id']) && !empty($data['user_password'])) 
		{
			if($data['user_password'] == $repassword) {
				$data['user_password'] =md5($data['user_password']);
				$result =$this->admin_model->updateuser($data);
				if($result) {
					$this->session->set_flashdata('success', '<span style="color:green">Account has been update please login</span>');
					session_destroy();
					redirect(base_url().'myaccount');
				}
				else{
					$this->session->set_flashdata('warning', '<span style="color:red">Something Misfortune Happen !!</span>');
					redirect(base_url().'myaccount/dashboard');
				}

			}
			else{
				$this->session->set_flashdata('warningpass', '<span style="color:red">Password and Confirm password are different!!</span>');
				redirect(base_url().'myaccount/dashboard');
			}

		}
	}

}	