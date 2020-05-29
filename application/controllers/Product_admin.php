<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');
class Product_admin extends CI_Controller {
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
			redirect('ci-admin',refresh);
		}
		else
		{	
			$data['data']=$this->cart_model->Getproall();
			$this->load->view('admin/include/head');
			$this->load->view('admin/productlist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	

	}


	public function Productadd($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$this->load->view('admin/include/head');
			$this->load->view('admin/productadd');
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}

	public function Subcategoryjson($value='')
	{
		$id=$this->input->post('id');
		$val =$this->cart_model->Getcatsub($id);
		echo json_encode($val);
	}

	public function Product_insert()
	{

		$config['upload_path'] =  "resource/upload/";
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('product_image');
 		$image= $this->upload->data();
		$data['product_image'] =$image['file_name'];	
		$data['product_name'] =$this->input->post('product_name');
		$data['product_regularprice'] =$this->input->post('product_regularprice');
		$data['product_salesprice'] =$this->input->post('product_salesprice');
		$data['cat_id'] =$this->input->post('cat_id');
		$data['subcat_id'] =$this->input->post('subcat_id');
		$color =$this->input->post('color');
		$size =$this->input->post('size');

		$data['product_color'] =serialize($color);
		$data['product_size'] =serialize($size);

		$data['product_description'] =$this->input->post('product_description');
		$data['product_info'] =$this->input->post('product_information');
		$data['product_customise'] =$this->input->post('product_customise');
		$data['product_status'] =$this->input->post('product_status');

		if ($data['product_salesprice']<=$data['product_regularprice']) {
			$result=$this->admin_model->InsertProduct($data);
			if ($result) {
				$this->session->set_flashdata('success','Product Added Succesfully');
				redirect('ci-admin/productadd');
			}
			else{
				$this->session->set_flashdata('warning','Something Misfortune Happen !!!');
			redirect('ci-admin/productadd');
			}
		}
		else{
			$this->session->set_flashdata('saleamount','Sales Amount Should Be Smaller or equal to Regular Amount');
			redirect('ci-admin/productadd');
		}
	}



	public function Productedit($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin',refresh);
		}
		else
		{	
			$this->load->view('admin/include/head');
			$this->load->view('admin/Productedit');
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}

}