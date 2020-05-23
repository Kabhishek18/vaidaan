<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('page_model');
		$this->load->model('cart_model');
		$this->load->library('cart');
		$this->load->library('session');
	}

	//Index
	public function index()
	{
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/cart');
		$this->load->view('page/include/foot');
	}

	function add_to_cart(){ 
		
		$data['id'] =$this->input->post('pid');
		$data['qty'] =$this->input->post('qty');
		$data['pro_size'] =$this->input->post('pro_size');
		$data['pro_color'] =$this->input->post('pro_color');
		//Fetch data
		$product =$this->cart_model->Getproall($id);
		$data =array('id' =>$product['id'] , 
					 'qty'	=> $data['qty'],
					 'price' => $product['product_salesprice'],
					 'name' =>$product['product_name'],
					 'size'=>$data['pro_size'],
					 'color'=>$data['pro_color']
					);
		
		  $this->cart->insert($data);
		//http_redirect()
		redirect('/cart');  
	}

	//quantity update
	function updateItemQty(){
		$update =0;
		//get the data
		$rowid =$this->input->post('rowid');
		$qty =$this->input->post('qty');
		//update the cart
		if (!empty($rowid) && !empty($qty)) {
			$data = array(
				'rowid'=>$rowid,
				'qty'=>$qty
			);

			$update=$this->cart->update($data);
		}
		//return respone
		redirect('/cart');
	}

	function removeItem($rowid)
	{
		$remove =$this->cart->remove($rowid);
		redirect('cart/');
	}
	function destremove(){
		$this->cart->destroy();
		redirect('/cart');
	
	}



	function Checkout()
	{	
		if ($this->cart->total_items()>0) {
		$data = array();
		$data['cartItems'] = $this->cart->contents();
		$this->load->view('page/include/header');
		$this->load->view('page/shop/checkout',$data);
		$this->load->view('page/include/footer');
		}
		else{
			redirect('');
		}
	}
}