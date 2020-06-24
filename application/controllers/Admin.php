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
			redirect('ci-admin/dashboard');
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
		  	 	redirect('ci-admin');
  	 	 		
		  	 }

		  	 else{
		  	 	$this->session->set_flashdata('wrong','<span style="color:red">Please Enter With Right Credential</span>');
		  	 	redirect('ci-admin');
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
		redirect('ci-admin');
		}
	}


	// DashBoard 
	public function Dashboard($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$this->load->view('admin/include/head');
			$this->load->view('admin/dashboard');
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}

	// Home Banner 
	public function HomeBanner($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$data['data']= $this->admin_model->GetSectionlist();
			$this->load->view('admin/include/head');
			$this->load->view('admin/homebanner',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}

	public function InsertSection($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$config['upload_path'] =  "resource/upload/home";
	        $config['allowed_types'] = 'jpg|png|jpeg';
	        $config['max_size'] = 3000;
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('section_image')){
	 		$image= $this->upload->data();
			$data['section_image'] =$image['file_name'];
			}

			$data['section_title'] =$this->input->post('section_title');
			$data['section_subtitle'] =$this->input->post('section_subtitle');
			$data['section_button'] =$this->input->post('section_button');
			$data['section_link'] =$this->input->post('section_link');
			$data['section_home'] =$this->input->post('section_home');
			$data['section_blurb'] =$this->input->post('section_blurb');

			if(!empty($data['section_title']))
			{
				$result =$this->admin_model->InsertSection($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'Section Added successfully');

					redirect('ci-admin/home');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/home');
				
				}
			}
		
		}	
	}


	public function HomeBanneredit($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id = $this->uri->segment(3,0);
			$data['data']= $this->admin_model->GetSectionlist($id);
			$this->load->view('admin/include/head');
			$this->load->view('admin/homesectionedit',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}

	public function UpdateSection($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$config['upload_path'] =  "resource/upload/home";
	        $config['allowed_types'] = 'jpg|png|jpeg';
	        $config['max_size'] = 3000;
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('section_image')){
	 		$image= $this->upload->data();
			$data['section_image'] =$image['file_name'];
			}

			$data['section_title'] =$this->input->post('section_title');
			$data['id'] =$this->input->post('id');
			$data['section_subtitle'] =$this->input->post('section_subtitle');
			$data['section_button'] =$this->input->post('section_button');
			$data['section_link'] =$this->input->post('section_link');
			$data['section_home'] =$this->input->post('section_home');
			$data['section_blurb'] =$this->input->post('section_blurb');

			if(!empty($data['section_title']))
			{
				$result =$this->admin_model->UpdateSections($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'Section Updated successfully');

					redirect('ci-admin/homeedit/'.$data['id']);
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/homeedit/'.$data['id']);
				
				}
			}
		
		}	
	}
	public function DeleteSection($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{

			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->DeleteSections($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Section Deleted successfully');

				redirect('ci-admin/home');
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/home');
			
			}
		}
	}		
	// Media 
	public function Media($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
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
			redirect('ci-admin');
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
			redirect('ci-admin');
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
			redirect('ci-admin');
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
			$data['user_password'] =md5($this->input->post('password'));
			$data['user_type'] =$this->input->post('user_type');
			$data['user_status'] =$this->input->post('user_status');
			
			$result=$this->admin_model->insertuser($data); 
			if ($result=='true') {
		      $this->session->set_flashdata('success', 'User Added successfully');

				redirect('ci-admin/user/useradd');
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/user/useradd');
			}
		}
	}


	public function Userupdateview($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
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
			redirect('ci-admin');
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
			$data['user_password'] =md5($this->input->post('password'));
			$data['user_type'] =$this->input->post('user_type');
			$data['user_status'] =$this->input->post('user_status');
			$result=$this->admin_model->updateuser($data); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'User Updated successfully');

				redirect('ci-admin/user/useredit/'.$data['id']);
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/user/useredit'.$data['id']);
			
			}
		}
	}


	public function Userdelete($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->deleteuser($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'User Deleted successfully');

				redirect('ci-admin/user/userlist');
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/user/userlist');
			
			}
		}
	}


	public function Userstatus($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['id'] =$this->uri->segment(3,0);
			$data['user_status'] =$this->uri->segment(4,0);

			if($data['user_status']==0){
				$data['user_status'] =1;
				$result=$this->admin_model->updateuserstat($data);
				redirect('ci-admin/user/userlist');
			}
			else{
				$data['user_status'] =0;
				$result=$this->admin_model->updateuserstat($data);
				redirect('ci-admin/user/userlist');
			}
		}	
	
	}



	//Page
	public function PageEditView($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
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
				redirect('ci-admin');
			}
			else
			{	
				$data['page_description'] =$this->input->post('editor1');
				$data['id'] =$this->input->post('id');
				$result=$this->admin_model->updatepage($data);
				if ($result=='true') {
				$this->session->set_flashdata('success', 'Page Updated successfully');

				redirect('ci-admin/page/page_edit/'.$data['id']);
				}
				else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/page/page_edit/'.$data['id']);
				
				}
			}	
	}

	public function Pagelist($value='')
	{
		if($this->session->userdata('token') == '')
			{
				redirect('ci-admin');
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


	//Admin
	public function BlogList($value='')
	{
		if($this->session->userdata('token') == '')
			{
				redirect('ci-admin');
			}
		else
			{	
			$data['data']=$this->admin_model->GetBlog();	
			$this->load->view('admin/include/head');
			$this->load->view('admin/bloglist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
			}
	}

	public function BlogAdd($value='')
	{
		if($this->session->userdata('token') == '')
			{
				redirect('ci-admin');
			}
		else
			{	
				
			$this->load->view('admin/include/head');
			$this->load->view('admin/blogadd');
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
			}
	}

	public function InsertBlog($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$config['upload_path'] =  "resource/upload/blog";
	        $config['allowed_types'] = 'jpg|png|jpeg';
	        $config['max_size'] = 3000;
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('blog_image')){
	 		$image= $this->upload->data();
			$data['blog_image'] =$image['file_name'];
			}

			$data['blog_title'] =$this->input->post('blog_title');
			$data['blog_author'] =$this->input->post('blog_author');
			$data['blog_description'] =$this->input->post('editor1');
			$data['blog_status'] =$this->input->post('blog_status');
			$data['blog_create'] =date("Y-m-d,h:i:sa");

			if(!empty($data['blog_title']))
			{
				$result =$this->admin_model->InsertBlog($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'Post Added successfully');

					redirect('ci-admin/blog/blogadd');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/blog/blogadd');
				
				}
			}
		
		}	
	}


	public function BlogEditView($value='')
	{
		if($this->session->userdata('token') == '')
			{
				redirect('ci-admin');
			}
			else
			{
			$data['id']	=$this->uri->segment(4,0);
			$data['data']=$this->admin_model->GetBlog($data['id']);	
			$this->load->view('admin/include/head');
			$this->load->view('admin/blogedit',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
			}
	}



	public function BlogUpdate($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$config['upload_path'] =  "resource/upload/blog";
	        $config['allowed_types'] = 'jpg|png|jpeg';
	        $config['max_size'] = 3000;
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('blog_image')){
	 		$image= $this->upload->data();
			$data['blog_image'] =$image['file_name'];
			}

			$data['blog_title'] =$this->input->post('blog_title');
			$data['id'] =$this->input->post('id');
			$data['blog_author'] =$this->input->post('blog_author');
			$data['blog_description'] =$this->input->post('editor1');
			$data['blog_status'] =$this->input->post('blog_status');
			$data['blog_create'] =date("Y-m-d,h:i:sa");

			if(!empty($data['blog_title']))
			{
				$result =$this->admin_model->UpdateBlog($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'Post Added successfully');

					redirect('ci-admin/blog/blog_edit/'.$data['id']);
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/blog/blog_edit/'.$data['id']);
				
				}
			}
		
		}	
	}


	public function BlogDelete($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->DeleteBlog($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Blog Deleted successfully');

				redirect('ci-admin/blog/bloglist');
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/blog/bloglist');
			
			}
		}
	}

	// Coupons 
	public function Couponlist($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$data['data']= $this->admin_model->GetCoupon();
			$this->load->view('admin/include/head');
			$this->load->view('admin/couponlist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}


	public function InsertCoupon($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	


			
			$data['coupon_name'] =$this->input->post('coupon_name');
			$data['coupon_type'] =$this->input->post('coupon_type');
			$data['coupon_value'] =$this->input->post('coupon_value');
			$data['coupon_expire'] =$this->input->post('coupon_expire');
			$data['coupon_description'] =$this->input->post('coupon_description');
			$data['coupon_status'] =$this->input->post('coupon_status');
		
			
			if(!empty($data['coupon_name']))
			{
				$result =$this->admin_model->InsertCoupons($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'Coupon Added successfully');

					redirect('ci-admin/coupon');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/coupon');
				
				}
			}
		
		}	
	}



	public function Couponedit($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$data['data']= $this->admin_model->GetCoupon($id);
			$this->load->view('admin/include/head');
			$this->load->view('admin/couponedit',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}


	public function UpdateCoupons($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	


			
			$data['coupon_name'] =$this->input->post('coupon_name');
			$data['id'] =$this->input->post('id');
			$data['coupon_type'] =$this->input->post('coupon_type');
			$data['coupon_value'] =$this->input->post('coupon_value');
			$data['coupon_expire'] =$this->input->post('coupon_expire');
			$data['coupon_description'] =$this->input->post('coupon_description');
			$data['coupon_status'] =$this->input->post('coupon_status');
		
			
			if(!empty($data['coupon_name']))
			{
				$result =$this->admin_model->UpdateCoupons($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'Coupon Updated successfully');

					redirect('ci-admin/coupon');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/coupon');
				
				}
			}
		
		}	
	}



	function CouponDelete(){
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->DeleteCoupon($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Coupon Deleted successfully');

				redirect('ci-admin/coupon');
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/coupon');
			
			}
		}
	}

	// Review 
	public function Reviewlist($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$data['data']= $this->admin_model->Getreview();
			$this->load->view('admin/include/head');
			$this->load->view('admin/reviewlist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}
	public function ReviewDelete($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->DeleteReview($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Deleted successfully');

				redirect('ci-admin/coupon');
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/coupon');
			
			}
		}
	}



	public function ReviewStatus($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['id']=$this->uri->segment(3,0);
			$data['review_status']=$this->uri->segment(4,0);
			$result=$this->admin_model->ReviewUpdates($data); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Updated successfully');

				redirect('ci-admin/review');
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect('ci-admin/review');
			
			}
		}
	}


	public function InsertMedia($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	

			$config['upload_path'] =  "resource/upload/media";
	        $config['allowed_types'] = 'jpg|png|jpeg';
	        $config['max_size'] = 3000;
	        $this->load->library('upload', $config);
			$this->upload->initialize($config);

			if($this->upload->do_upload('media')){
	 		$image= $this->upload->data();
			$data['section_image'] =$image['file_name'];
			}


			if(!empty($data['section_image']))
			{
				$result =$this->admin_model->InsertSection($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'Media Added successfully');

					redirect('ci-admin/media');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/media');
				
				}
			}
		
		}	
	}

	public function Viewintrest($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['data'] =$this->admin_model->Getlist(1); 
			$data['data2'] =$this->admin_model->Getlist(2); 
			$data['data3'] =$this->admin_model->Getlist(3); 
			$this->load->view('admin/include/head');
			$this->load->view('admin/productintrest',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');

		}	
	}

	public function Updateintrest($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	


			
			$data['intrest'] =$this->input->post('intrest');
			$data['list'] = serialize($data['intrest']);
			$data['id'] = 1;
		
			
			if(!empty($data['list']))
			{
				$result =$this->admin_model->Updateintrestlist($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'List Updated successfully');

					redirect('ci-admin/intrest');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/intrest');
				
				}
			}
		
		}	
	}

	public function Updateintrest2($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	


			
			$data['intrest'] =$this->input->post('intrest');
			$data['list'] = serialize($data['intrest']);
			$data['id'] = 2;
		
			
			if(!empty($data['list']))
			{
				$result =$this->admin_model->Updateintrestlist($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'List Updated successfully');

					redirect('ci-admin/intrest');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/intrest');
				
				}
			}
		
		}	
	}


	public function Updateintrest3($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	


			
			$data['intrest'] =$this->input->post('intrest');
			$data['list'] = serialize($data['intrest']);
			$data['id'] = 3;
		
			
			if(!empty($data['list']))
			{
				$result =$this->admin_model->Updateintrestlist($data);
				if ($result=='true') {
					$this->session->set_flashdata('success', 'List Updated successfully');

					redirect('ci-admin/intrest');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

					redirect('ci-admin/intrest');
				
				}
			}
		
		}	
	}
}
?>
