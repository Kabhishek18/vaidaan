<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('cart_model');
		$this->load->model('page_model');
		$this->load->library('cart');
		$this->load->library('session');
		if ($this->config->item('secure_site')) {
			force_ssl();
		}

	}

	//Index
	public function index()
	{
		if ($this->cart->total_items()>0) {
		$data = array();
		$data['cartItems'] = $this->cart->contents();
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/cart',$data);
		$this->load->view('page/include/foot');
		}
		else{
			header('location:'.base_url().'');
		}
	}

	function add_to_cart(){ 
		
		$data['id'] =$this->input->post('pid');
		$data['qty'] =$this->input->post('qty');
		$data['pro_size'] =$this->input->post('pro_size');
		$data['pro_color'] =$this->input->post('pro_color');
		//Fetch data
		if (is_numeric($data['qty'])){
				$product =$this->cart_model->Getproall($data['id']);
				if($product['product_salesprice']==0)
				{
					$product['product_salesprice'] =$product['product_regularprice'];
				}
				$data =array('id' =>$product['id'] , 
							 'qty'	=> $data['qty'],
							 'price' => $product['product_salesprice'],
							 'name' =>$product['product_name'],
							 'size'=>$data['pro_size'],
							 'color'=>$data['pro_color'],
							 'image' => $product['product_image']
							);
				  $this->cart->insert($data);
				
					header('location:'.base_url().'cart');  
		}
			header('location:'.base_url().'cart');	
	}

	//quantity update
	function updateItemQty(){
		$coupon =$this->input->post('coupon');
		if (!empty($coupon)) {
			$ticket =$this->cart_model->Getcoupon($coupon);
			if($ticket){
			$this->session->set_userdata('ticket',$ticket);
			
			$this->session->set_flashdata('success', '<span style="color:green">Coupon Added successfully </span>');
			header('location:'.base_url().'cart');
			}

			else{
			$this->session->set_flashdata('wrong', '<span style="color:red">Coupon not available</span>');
			header('location:'.base_url().'cart');
			}	
		}

		$update =0;
		//get the data
		$rowid =$this->input->post('rowid');
		$qty =$this->input->post('qty');
		for($i=0;$i<count($rowid);$i++){
			$data[$i] = array('rowid' => $rowid[$i],'qty' => $qty[$i]);
		}
		//update the cart
		if (!empty($rowid) && !empty($qty)) {

			$update=$this->cart->update($data);
		}
		//return respone
		header('location:'.base_url().'cart');
	}


	//Apply Coupon
	function ApplyCoupon(){
		$coupon =$this->input->post('coupon');
		if (!empty($coupon)) {
			$ticket =$this->cart_model->Getcoupon($coupon);
			if($ticket){
			 	$todaydate =date('Y-m-d');
              	$expdate =$ticket['coupon_expire'];
              
                if($todaydate <=$expdate){
					$this->session->set_userdata('ticket',$ticket);
			
					$this->session->set_flashdata('success', '<span style="color:green">Coupon Added successfully </span>');
					header('location:'.base_url().'checkout');
				}
				else{
					$this->session->set_flashdata('wrong', '<span style="color:orange">Sorry, Coupon Expired!! </span>');
					header('location:'.base_url().'checkout');
				}
			}

			else{
			$this->session->set_flashdata('wrong', '<span style="color:red">Coupon not available</span>');
			header('location:'.base_url().'checkout');
			}	
		}
	}

	function removeItem($rowid)
	{
		$remove =$this->cart->remove($rowid);
		header('location:'.base_url().'cart');
	}
	function destremove(){
		$this->cart->destroy();
		header('location:'.base_url().'cart');
	
	}
	function coupondestroy(){
		$this->session->unset_userdata('ticket');	
		header('location:'.base_url().'checkout');
	
	}



	function Checkout()
	{	
		if ($this->cart->total_items()>0) {
		$data = array();
		$data['cartItems'] = $this->cart->contents();
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/checkout',$data);
		$this->load->view('page/include/foot');
		}
		else{
			header('location:'.base_url().'');
		}
	}






	function Orderprocess()
	{	
	if ($this->cart->total_items()>0) {
	$order[0] = $this->cart->contents();
	$order[1] = $this->cart->total();
	$create =$this->input->post('create');
	$ship =$this->input->post('ship');
	$data['user_token'] =generateUUID();
	$data['user_password'] =$this->input->post('password');	
	$data['user_name'] =$this->input->post('bill_firstname');	
	$data['user_lastname'] =$this->input->post('bill_lastname');	
	$data['user_email'] =$this->input->post('bill_email');	
	$data['user_mobile'] =$this->input->post('bill_phone');	
	$data['user_id'] = $this->input->post('user_id');
	$order_bill['user_name'] =$data['user_name'].' '.$data['user_lastname'];
	$order_bill['user_email'] =$data['user_email'];
	$order_bill['user_mobile']=$data['user_mobile'];
	$order_bill['bill_company'] =$this->input->post('bill_company');	
	$order_bill['bill_country'] =$this->input->post('bill_country');	
	$order_bill['bill_street1'] =$this->input->post('bill_street1');	
	$order_bill['bill_street2'] =$this->input->post('bill_street2');	
	$order_bill['bill_town'] =$this->input->post('bill_town');	
	$order_bill['bill_state'] =$this->input->post('bill_state');	
	$order_bill['bill_zip'] =$this->input->post('bill_zip');
	$data['user_address']=serialize($order_bill);	
	
	//Shipping address
	$ship_bill['ship_firstname'] =$this->input->post('ship_firstname');	
	$ship_bill['ship_lastname'] =$this->input->post('ship_lastname');	
	$ship_bill['ship_email'] =$this->input->post('ship_email');	
	$ship_bill['ship_company'] =$this->input->post('ship_company');	
	$ship_bill['ship_country'] =$this->input->post('ship_country');	
	$ship_bill['ship_street1'] =$this->input->post('ship_street1');	
	$ship_bill['ship_street2'] =$this->input->post('ship_street2');	
	$ship_bill['ship_town'] =$this->input->post('ship_town');	
	$ship_bill['ship_state'] =$this->input->post('ship_state');	
	$ship_bill['ship_zip'] =$this->input->post('ship_zip');	
	

	if (!empty($create)) {
			if (!empty($data['user_password'])) {
				$check=$this->cart_model->Getauthuser($data['user_email']);

				if ($check==false) {
					$result=$this->cart_model->insertuser($data);
					if ($result) {
						$data['user_id'] = $result;
						$this->session->set_flashdata('inserted', '<span style="color:green">Account is Created</span>');
					}
					else{
						
						$this->session->set_flashdata('inserterror', '<span style="color:red">Something Error! In account creation</span>');
					}
				}
				else{
					$this->session->set_flashdata('accounttaken', '<span style="color:red">Account Is Already Taken! Please  Login With Same. </span>');
					header('location:'.base_url().'checkout');
				}
			}
			else{
				$this->session->set_flashdata('passerror', '<span style="color:red">Password is Required</span>');
				header('location:'.base_url().'checkout');
			}
		}


		//Order Insertion

		$value['order_userid']=$data['user_id'];
		$value['order_amount']=$this->input->post('order_amount');
		$value['order_cart'] =serialize($order);
		$value['order_detail'] =$this->input->post('ordernote');	
		$value['billing_address']=$data['user_address'];
		$value['order_created'] =date("F d Y,h:i:sa");
		if (empty($ship)) {
			$result =$this->cart_model->insertorder($value);
			if($result)
			{
				$this->session->set_flashdata('success', '<span style="color:green">Order Has Been Generated Successfully <p>Orderid :'.$result.'  </p></span>');
				header('location:'.base_url().'thankyou');
			}
			else{
				$this->session->set_flashdata('unsuccess', '<span style="color:red">Issue has occured Contact WebAdministrator </span>');
				header('location:'.base_url().'error');
			}
		}	
		else{
			$value['shipping_address'] =serialize($ship_bill);
			$result =$this->cart_model->insertorder($value);
			if($result)
			{
				$this->session->set_flashdata('success', '<span style="color:green">Order Has Been Generated Successfully <p>Orderid :'.$result.'  </p></span>');
				header('location:'.base_url().'thankyou');
			}
			else{
				$this->session->set_flashdata('unsuccess', '<span style="color:red">Issue has occured Contact WebAdministrator </span>');
				header('location:'.base_url().'error');
			}
		}



	}
	else{
		header('location:'.base_url().'');
	}
	}


	public function thankyou($value='')
	{

		$this->session->sess_destroy();
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/thankyou');
		$this->load->view('page/include/foot');
	}

	public function error($value='')
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/error');
		$this->load->view('page/include/foot');
	}


	public function Search($value='')
	{
		$data['search'] = $this->input->post('search');
		$data['subcat']=$this->cart_model->Search($data['search']);
		
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/search',$data);
		$this->load->view('page/include/foot');

	}
}