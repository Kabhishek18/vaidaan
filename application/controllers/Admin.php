<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('admin_model');
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
			$this->load->view('admin/include/head');
			$this->load->view('admin/login');
			$this->load->view('admin/include/foot');
		}
		else
		{	
			redirect('ci-admin/dashboard',refresh);
		}

	}

	//Auth Login
	public function Auth()
	{
		$auth['username']=$this->input->post('username');
		$auth['password']=md5($this->input->post("password"));	
		$set=$this->admin_model->Athentication($auth);
		if ($set['user_type']=='2') {
			redirect('');
			}	
		else{	
		  	if($set['user_status']=='0')
		  	 {
		  	 	$this->session->set_userdata('id',$set['id']);
		  	 	$this->session->set_userdata('token',$set['user_token']);
		  	 	$this->session->set_userdata('user_name',$set['user_name']);
		  	 	$this->session->set_userdata('email',$set['user_email']);
		  	 	$this->session->set_userdata('image',$set['user_image']);
		  	 	$this->session->set_userdata('type',$set['user_type']);
		  	 	redirect('ci-admin/dashboard');
		  	 }
		  	 elseif($set['user_status']=='1'){
  	 	 		header("Refresh: 5; url='".base_url()."ci-admin'");
  	 	 		echo "Your Account Has Been Deactive";
 				echo "You will be redirected to Login in 5 seconds...";	
		  	 }

		  	 else{
		  	 	header("Refresh: 5; url='".base_url()."ci-admin'");
  	 	 		echo "Wrong Credential !!!";
 				echo "You will be redirected to Login in 5 seconds...";	
		  	 }
		}
		  	 
	}
	//Logout
	public function Logout()
	{
		if(session_destroy())
	{
		$this->session->unset_userdata('id');	
		$this->session->unset_userdata('token');     
		$this->session->unset_userdata('user_name');      
		$this->session->unset_userdata('email');      
		$this->session->unset_userdata('type');      
		$this->session->unset_userdata('image');      
		$this->session->sess_destroy();
		redirect('ci-admin',refresh);
	}
	}


	// DashBoard 

	public function Dashboard($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$this->load->view('admin/include/head');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}
		
	}





	// User 

	public function Userlist($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	

			$data['data']= $this->admin_model->Getuser();
			$this->load->view('admin/include/head');
			$this->load->view('admin/userlist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}
		
	}


	public function Useradd($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$this->load->view('admin/include/head');
			$this->load->view('admin/useradd');
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}
		
	}

	public function Userinsert($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
	else
		{	
		$config['upload_path'] =  "resource/upload/";
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2000;
        $config['max_width'] = 2000;
        $config['max_height'] = 2000;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) 
		{
            $error = array('error' => $this->upload->display_errors());

           print_r($error);
           echo "Go Back Upload JPG|PNG|JPEG below Size 2000*2000 less than 2000kb";
        } 
		else 
		{
		$data['user_image'] = $this->upload->data();
		$data['user_image'] = serialize($data['user_image']);
		}
		$data['user_token'] = generateUUID();
		$data['user_name'] =$this->input->post('username');
		$data['user_email'] =$this->input->post('email');
		$data['user_password'] =$this->input->post('password');
		$data['user_type'] =$this->input->post('user_type');
		
		$result=$this->admin_model->insertuser($data); 
		if ($result=='true') {
			//swal('Hello world!);
		}
	}
	}


}
