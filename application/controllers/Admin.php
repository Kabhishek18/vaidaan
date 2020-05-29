<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('admin_model');
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
		$auth['user_email']=$this->input->post('username');
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
		  	 	$simage = unserialize($set['user_image']);
		  	 	$this->session->set_userdata('image',$simage['file_name']);

		  	 	$this->session->set_userdata('type',$set['user_type']);
		  	 	redirect('ci-admin/dashboard');
		  	 }
		  	 elseif($set['user_status']=='1'){
		  	 	$this->session->set_flashdata('deactive','<span style="color:orange">Your Account Is Deactive. Please Contact Your WebMaster</span>');
		  	 	redirect(base_url().'ci-admin');
  	 	 		
		  	 }

		  	 else{
		  	 	$this->session->set_flashdata('wrong','<span style="color:red">Please Enter With Right Credential</span>');
		  	 	redirect(base_url().'ci-admin');
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


	// DashBoard 
	public function Media($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$this->load->view('admin/include/head');
			$this->load->view('admin/media');
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
			$data['user_status'] =$this->input->post('user_status');
			
			$result=$this->admin_model->insertuser($data); 
			if ($result=='true') {
		      $this->session->set_flashdata('success', 'User Added successfully');

				redirect(base_url('ci-admin/user/useradd'));
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('ci-admin/user/useradd'));
			}
		}
	}


	public function Userupdateview($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$id= $this->uri->segment(4,0);
			$data['data']=$this->admin_model->Getuser($id);
			$data['id']=$id;
			$this->load->view('admin/include/head');
			$this->load->view('admin/userupdateview',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}


	public function Userupdate($value='')
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
    		if (!empty($this->upload->do_upload('file')))
        	{
	        if (!$this->upload->do_upload('file')) 
			{
	            $error = array('error' => $this->upload->display_errors());

	           print_r($error);
	           echo "Go Back Upload JPG|PNG|JPEG below Size 2000*2000 less than 2000 kb ";
	        } 
			else 
			{
			$data['user_image'] = $this->upload->data();
			$data['user_image'] = serialize($data['user_image']);
			}}

			$data['id'] = $this->input->post('id');
			$data['user_name'] =$this->input->post('username');
			$data['user_email'] =$this->input->post('email');
			$data['user_password'] =$this->input->post('password');
			$data['user_type'] =$this->input->post('user_type');
			$data['user_status'] =$this->input->post('user_status');
			$result=$this->admin_model->updateuser($data); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'User Updated successfully');

				redirect(base_url('ci-admin/user/useredit/'.$data['id']));
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('ci-admin/user/useredit'.$data['id']));
			
			}
		}
	}


	public function Userdelete($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->deleteuser($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'User Deleted successfully');

				redirect(base_url('ci-admin/user/userlist'));
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('ci-admin/user/userlist'));
			
			}
		}
	}


	public function Userstatus($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$data['id'] =$this->uri->segment(3,0);
			$data['user_status'] =$this->uri->segment(4,0);

			if($data['user_status']==0){
				$data['user_status'] =1;
				$result=$this->admin_model->updateuserstat($data);
				//redirect('ci-admin/user/userlist');
			}
			else{
				$data['user_status'] =0;
				$result=$this->admin_model->updateuserstat($data);
				//redirect('ci-admin/user/userlist');
			}
		}	
	
	}



	//Page
	public function PageEditView($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$data['id'] =$this->uri->segment(4,0);
			$data['data']=$this->admin_model->GetPage($data['id']);
			$this->load->view('admin/include/head');
			$this->load->view('admin/pageeditview',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}


	public function Pageupdate($value='')
	{
		if($this->session->userdata('token') == '')
			{
				redirect('ci-admin',refresh);
			}
			else
			{	
				$data['page_description'] =$this->input->post('editor1');
				$data['id'] =$this->input->post('id');
				$result=$this->admin_model->updatepage($data);
				if ($result=='true') {
				$this->session->set_flashdata('success', 'Page Updated successfully');

				redirect(base_url('ci-admin/page/page_edit/'.$data['id']));
				}
				else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('ci-admin/page/page_edit/'.$data['id']));
				
				}
			}	
	}

	public function Pagelist($value='')
	{
		if($this->session->userdata('token') == '')
			{
				redirect('ci-admin',refresh);
			}
			else
			{	
			$data['data']=$this->admin_model->GetPage();	
			$this->load->view('admin/include/head');
			$this->load->view('admin/pagelist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
			}
	}
}
