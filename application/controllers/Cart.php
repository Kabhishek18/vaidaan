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
	private $working_key = '1B000392933856A06A236A8590A8BD29';

	// Provide access code Shared by CCAVENUES

	private $access_code = '7C3C5AB5D68FF3826F7973A9251C4703';
	
	//Version Number
	private $version = '1.1';

	private $URL="https://test.ccavenue.com/transaction/transaction.do";

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
			redirect('');
		}
	}

	public function api_call($final_data)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$this->URL);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$final_data);

		// Get server response ... curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec ($ch);
		curl_close ($ch);


		var_dump($result);
		$information=explode('&',$result);
		$dataSize=sizeof($information);
		$status1=explode('=',$information[0]);
		$status2=explode('=',$information[1]);
		$status3=explode('=',$information[2]);
		if($status1[1] == '1'){
			$recorddata=$status2[1];
			return $recorddata." Error Code:".$status3[1];
		}
		else
		{
			$status=$this->decrypt($status2[1],$this->working_key);
			return $status;
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
				
					redirect('cart');  
		}
			redirect('cart');	
	}

	//quantity update
	function updateItemQty(){
		$coupon =$this->input->post('coupon');
		if (!empty($coupon)) {
			$ticket =$this->cart_model->Getcoupon($coupon);
			if($ticket){
			$this->session->set_userdata('ticket',$ticket);
			
			$this->session->set_flashdata('success', '<span style="color:green">Coupon Added successfully </span>');
			redirect('cart');
			}

			else{
			$this->session->set_flashdata('wrong', '<span style="color:red">Coupon not available</span>');
			redirect('cart');
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
		redirect('cart');
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
					redirect('checkout');
				}
				else{
					$this->session->set_flashdata('wrong', '<span style="color:orange">Sorry, Coupon Expired!! </span>');
					redirect('checkout');
				}
			}

			else{
			$this->session->set_flashdata('wrong', '<span style="color:red">Coupon not available</span>');
			redirect('checkout');
			}	
		}
	}

	function removeItem($rowid)
	{
		$remove =$this->cart->remove($rowid);
		redirect('cart');
	}
	function destremove(){
		$this->cart->destroy();
		redirect('cart');
	
	}
	function coupondestroy(){
		$this->session->unset_userdata('ticket');	
		redirect('checkout');
	
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
			redirect('');
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
					redirect('checkout');
				}
			}
			else{
				$this->session->set_flashdata('passerror', '<span style="color:red">Password is Required</span>');
				redirect('checkout');
			}
		}


		//Order Insertion

		$value['order_userid']=$data['user_id'];
		$value['order_amount']=$this->input->post('order_amount');
		$value['order_cart'] =serialize($order);
		$value['order_detail'] =$this->input->post('ordernote');	
		$value['billing_address']=$data['user_address'];
		$value['order_created'] =date("F d Y,h:i:sa");
		

		if (!empty($ship)) {
				$value['shipping_address'] =serialize($ship_bill);
			}

			$post_order = array (
								  'order_List' => 
											  array (
											    0 => 
											    array (
											      'reference_no' => '203000099429',
											      'amount' => '1.00',
											    ),
											    1 => 
											    array (
											      'reference_no' => '203000104640',
											      'amount' => '1.00',
											    ),
											  ),
										);

		// $order_List = array('reference_no' => generateUUID(),
		// 					'amount' => $value['order_amount']);		
		
		$merchant_data = json_encode($post_order);

		/*
			sample $post_data after json encode
			{
		   		"order_List": [
		      { "reference_no":"203000099429", "amount": "1.00"},
		      { "reference_no": "203000104640", "amount": "1.00"}
		   		]
			}
		*/

		// Encrypt merchant data with working key shared by ccavenue

		$encrypted_data = $this->encrypt($merchant_data, $this->working_key);
		//make final request string for the API call
        $command="confirmOrder";
		$final_data ="request_type=JSON&access_code=".$this->access_code."&command=".$command."&response_type=JSON&version=".$this->version."&enc_request=".$encrypted_data;
		$result = $this->api_call($final_data);

		 echo $result;

	//insert

		$pre =$this->cart_model->insertorder($value);
		if($pre)
		{
			$this->session->set_flashdata('success', '<span style="color:green">Order Has Been Generated Successfully <p>Orderid :'.$pre.'  </p></span>');
			redirect('thankyou');
		}
		else{
			$this->session->set_flashdata('unsuccess', '<span style="color:red">Issue has occured Contact WebAdministrator </span>');
			redirect('error');
		}	



	}
	else{
		redirect('');
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

		if(!empty($data['search'])){
		$data['subcat']=$this->cart_model->Search($data['search']);
		 
		$this->load->view('page/include/head');
		$this->load->view('page/include/nav');
		$this->load->view('page/search',$data);
		$this->load->view('page/include/foot');
		}
		else{
			redirect('');
		}
	}


	public function encrypt($plainText, $key)
	{

		$key = hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
		$openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
		$encryptedText = bin2hex($openMode);
		return $encryptedText;
 	}
	public function decrypt($encryptedText, $key)
 	{

		$key = hextobin(md5($key));
		$initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
		$encryptedText = hextobin($encryptedText);
		$decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
		return $decryptedText;
 	}

	 // Remove repeated content from request strign
	public function pkcs5_pad($plainText, $blockSize)
	{
		$pad = $blockSize - (strlen($plainText) % $blockSize);
	 	return $plainText . str_repeat(chr($pad), $pad);
	 }


	 //********** Hexadecimal to Binary function for php 4.0 version ********
	public function hextobin($hexString)
	{
		$length = strlen($hexString);
	 	$binString = "";
		$count = 0;
		while ($count < $length)
		{
			$subString = substr($hexString, $count, 2);
			$packedString = pack("H*", $subString);
			if ($count == 0) {
				$binString = $packedString;
			} else {
				$binString.=$packedString;
			}
			$count+=2;
		}
		return $binString;
	}
}