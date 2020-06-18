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
			redirect('ci-admin');
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
			redirect('ci-admin');
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

		$config['upload_path'] =  "resource/upload/product";
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 3000;
        $this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('product_image')){
 		$image= $this->upload->data();
		$data['product_image'] =$image['file_name'];}
		else{
			 $data['product_image'] =null;
		}
		//image2	
		if($this->upload->do_upload('product_image2')){
 		$image2= $this->upload->data();
		$data['product_image2'] =$image2['file_name'];}
		else{
			 $data['product_image2'] =null;
		}	
		//image3
		if($this->upload->do_upload('product_image3')){
 		$image3= $this->upload->data();
		$data['product_image3'] =$image3['file_name'];}
		else{
			 $data['product_image3'] =null;
		}	
		//image 4
		if($this->upload->do_upload('product_image4')){
 		$image4= $this->upload->data();
		$data['product_image4'] =$image4['file_name'];}
		else{
			 $data['product_image4'] =null;
		}	
		//image 5
		if($this->upload->do_upload('product_image5')){
 		$image5= $this->upload->data();
		$data['product_image5'] =$image5['file_name'];}
		else{
			 $data['product_image5'] =null;
		}	
		$data['product_name'] =$this->input->post('product_name');
		$data['product_regularprice'] =$this->input->post('product_regularprice');
		$data['product_salesprice'] =$this->input->post('product_salesprice');

		$data['cat_id'] =$this->input->post('cat_id');
		$data['subcat_id'] =$this->input->post('subcat_id');
		$xcolor =$this->input->post('color');
		$xsize =$this->input->post('size');
		$color = explode(',', $xcolor);
		$size = explode(',', $xsize);
		$data['product_color'] =serialize($color);
		$data['product_size'] =serialize($size);

		$data['product_description'] =$this->input->post('product_description');
		$data['product_sku'] =$this->input->post('product_sku');
		$data['product_designer'] =$this->input->post('product_designer');
		$data['product_collection'] =$this->input->post('product_collection');
		$data['product_occasion'] =$this->input->post('product_occasion');
		$data['product_new'] =$this->input->post('product_new');
		$data['product_finish'] =$this->input->post('product_finish');
		$data['product_info'] =$this->input->post('product_information');
		$data['product_customise'] =$this->input->post('product_customise');
		$data['product_status'] =$this->input->post('product_status');

		if ($data['product_salesprice'] ==null) {
			$data['product_salesprice'] =0;
		}

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
			redirect('ci-admin');
		}
		else
		{	$data['id']=$this->uri->segment(3,0);
			if ($data['id']) {	
			$data['data'] =$this->admin_model->Getproall($data['id']);	
			$this->load->view('admin/include/head');
			$this->load->view('admin/productedit',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
			}
			else{
				redirect('ci-admin/product');
			}
		}	
	}


	//PRoduct UPdate

	public function Product_update()
	{

		$config['upload_path'] =  "resource/upload/product";
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 3000;
        $this->load->library('upload', $config);
		$this->upload->initialize($config);

		if($this->upload->do_upload('product_image')){
 		$image= $this->upload->data();
		$data['product_image'] =$image['file_name'];}
		
		//image2	
		if($this->upload->do_upload('product_image2')){
 		$image2= $this->upload->data();
		$data['product_image2'] =$image2['file_name'];}
			
		//image3
		if($this->upload->do_upload('product_image3')){
 		$image3= $this->upload->data();
		$data['product_image3'] =$image3['file_name'];}
			
		//image 4
		if($this->upload->do_upload('product_image4')){
 		$image4= $this->upload->data();
		$data['product_image4'] =$image4['file_name'];}
			
		//image 5
		if($this->upload->do_upload('product_image5')){
 		$image5= $this->upload->data();
		$data['product_image5'] =$image5['file_name'];}
			
		$data['product_name'] =$this->input->post('product_name');
		$data['product_regularprice'] =$this->input->post('product_regularprice');
		$data['product_salesprice'] =$this->input->post('product_salesprice');
		$data['cat_id'] =$this->input->post('cat_id');
		$data['subcat_id'] =$this->input->post('subcat_id');
		$xcolor =$this->input->post('color');
		$xsize =$this->input->post('size');
		$color = explode(',', $xcolor);
		$size = explode(',', $xsize);

		$data['product_color'] =serialize($color);
		$data['product_size'] =serialize($size);

		$data['product_sku'] =$this->input->post('product_sku');
		$data['product_designer'] =$this->input->post('product_designer');
		$data['product_description'] =$this->input->post('product_description');
		$data['product_collection'] =$this->input->post('product_collection');
		$data['product_occasion'] =$this->input->post('product_occasion');
		$data['product_new'] =$this->input->post('product_new');
		$data['product_finish'] =$this->input->post('product_finish');
		$data['id'] =$this->input->post('id');
		$data['product_info'] =$this->input->post('product_information');
		$data['product_customise'] =$this->input->post('product_customise');
		$data['product_status'] =$this->input->post('product_status');

		if ($data['product_salesprice']<=$data['product_regularprice']) {
			$result=$this->admin_model->UpdateProduct($data);
			if ($result) {
				$this->session->set_flashdata('success','Product Updated Succesfully');
				redirect('ci-admin/productedit/'.$data['id']);
			}
			else{
				$this->session->set_flashdata('warning','Something Misfortune Happen !!!');
				redirect('ci-admin/productedit/'.$data['id']);
			}
		}
		else{
			$this->session->set_flashdata('saleamount','Sales Amount Should Be Smaller or equal to Regular Amount');
				redirect('ci-admin/productedit/'.$data['id']);
		}
	}




	public function Productdelete($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->DeleteProduct($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Product Deleted successfully');

				redirect(base_url('ci-admin/product'));
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('ci-admin/product'));
			
			}
		}
	}


	public function imagedelete($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['id']=$this->uri->segment(3,0);
			$data['seg']=$this->uri->segment(4,0);

			$result=$this->admin_model->ImageDeleteproduct($data); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Image Deleted successfully');

				redirect(base_url('ci-admin/productedit/'.$data['id']));
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('ci-admin/productedit/'.$data['id']));
			
			}
		}
	}





	// Subcategory

	public function SubcategoryList($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['data']=$this->admin_model->Getsubcat();
			$this->load->view('admin/include/head');
			$this->load->view('admin/subcatlist',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}


	public function Subcatadd($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			
			$this->load->view('admin/include/head');
			$this->load->view('admin/subcatadd');
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}

	public function Subcategory_insert($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['subcat_name']=$this->input->post('subcat_name');
			$data['cat_id']=$this->input->post('cat_id');
			$data['subcat_status']=$this->input->post('subcat_status');

			if (!empty($data['subcat_name']) && !empty($data['cat_id'])) {
				$result=$this->admin_model->InsertSubcat($data);
				if ($result) {
					$this->session->set_flashdata('success','Subcategory Added Succesfully');
					redirect('ci-admin/subcatadd');
				}
				else{
					$this->session->set_flashdata('warning','Something Misfortune Happen !!!');
				redirect('ci-admin/subcatadd');
				}
			}
			else{
				$this->session->set_flashdata('saleamount','Please fill the information Correctly');
				redirect('ci-admin/subcatadd');
			}

		}	
	}

	public function Subcatedit($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['id'] = $this->uri->segment(3,0);
			$data['data']= $this->admin_model->Getsubcat($data['id']);
			$this->load->view('admin/include/head');
			$this->load->view('admin/subcatedit',$data);
			$this->load->view('admin/include/foot');
			$this->load->view('admin/include/foottile');
		}	
	}


	public function Subcatedit_update($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$data['subcat_name']=$this->input->post('subcat_name');
			$data['id']=$this->input->post('id');
			$data['cat_id']=$this->input->post('cat_id');
			$data['subcat_status']=$this->input->post('subcat_status');

			if (!empty($data['subcat_name']) && !empty($data['cat_id'])) {
				$result=$this->admin_model->UpdateSubcat($data);
				if ($result) {
					$this->session->set_flashdata('success','Subcategory Updated Succesfully');
					redirect('ci-admin/subcatedit/'.$data['id']);
				}
				else{
					$this->session->set_flashdata('warning','Something Misfortune Happen !!!');
				redirect('ci-admin/subcatedit/'.$data['id']);
				}
			}
			else{
				$this->session->set_flashdata('saleamount','Please fill the information Correctly');
				redirect('ci-admin/subcatedit/'.$data['id']);
			}

		}	
	}




	public function Subcatdelete($value='')
	{
		if($this->session->userdata('token') == '')
		{
			redirect('ci-admin');
		}
		else
		{	
			$id=$this->uri->segment(3,0);
			$result=$this->admin_model->DeleteSubcat($id); 
			if ($result=='true') {
				$this->session->set_flashdata('success', 'Subcategory Deleted successfully');

				redirect(base_url('ci-admin/subcategory'));
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('ci-admin/subcategory'));
			
			}
		}
	}

	public function ReviewAdd($value='')
	{
		$data['review_star']=$this->input->post('rating');
		$data['review_name']=$this->input->post('name');
		$data['review_email']=$this->input->post('email');
		$data['review_description']=$this->input->post('review');
		$data['review_product_id']=$this->input->post('id');
		$result = $this->cart_model->insertReview($data);
		if ($result) {
			$this->session->set_flashdata('success', 'Review sent successfully');

				redirect(base_url('product/'.$data['review_product_id']));
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happen ! Try Again');

				redirect(base_url('product/'.$data['review_product_id']));
		}
	}

}