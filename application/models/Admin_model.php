<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
    
    function __construct() {
        $this->user   = 'user';
        $this->page   = 'page';
        $this->product   = 'product';
        $this->subcat   = 'subcat';
        $this->cat   = 'cat';
        $this->blog   = 'blog';
        $this->coupon   = 'coupon';
    }
    

     public function Getcat($id = ''){
        $this->db->select('*');
        $this->db->from($this->cat);
       
        if($id){
            $array = array('id' => $id, 'cat_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('cat_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function Getsubcat($id = ''){
        $this->db->select('*');
        $this->db->from($this->subcat);
       
        if($id){
            $array = array('id' => $id, 'subcat_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('subcat_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }
    public function Getproall($id = ''){
        $this->db->select('*');
        $this->db->from($this->product);
       
        if($id){
            $array = array('id' => $id, 'product_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('product_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


	public function Athentication($auth)
	{	
		$this->db->select('*');
		$this->db->from($this->user);
		$array = array('user_email' => $auth['user_email'],'user_password' => $auth['password'],'user_delete' =>'0');
		$this->db->where($array);
		$query  = $this->db->get();
        $result = $query->row_array();
		return !empty($result)?$result:false;
	}

    public function Userauthentication($auth)
    {   
        $this->db->select('*');
        $this->db->from($this->user);
        $array = array('user_email' => $auth['email'],'user_password' => $auth['password'],'user_delete' =>'0');
        $this->db->where($array);
        $query  = $this->db->get();
        $result = $query->row_array();
        return !empty($result)?$result:false;
    }

	//User

	public function Getuser($id = ''){
        $this->db->select('*');
        $this->db->from($this->user);
       
        if($id){
            $array = array('id' => $id, 'user_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('user_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function insertuser($data){
        $insert = $this->db->insert($this->user,$data);
        return $insert?true:false;
    }


    public function updateuser($data){
        $this->db->where('id',$data['id']);
        $update = $this->db->update($this->user,$data);
        return $update?true:false;
    }


    public function deleteuser($data){
       $this->db->where('id',$data);
        $update = $this->db->delete($this->user);
       return $update?true:false;
    }
   


    public function Getpage($id = ''){
        $this->db->select('*');
        $this->db->from($this->page);
       
        if($id){
            $array = array('id' => $id, 'page_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('page_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }
    
    public function updatepage($data){
        $this->db->where('id',$data['id']);
        $update = $this->db->update($this->page,$data);
        return $update?true:false;
    }



    //Product
     public function InsertProduct($data){
        $insert = $this->db->insert($this->product,$data);
        $insert_id = $this->db->insert_id();
        return $insert?true:false;
    }

     public function UpdateProduct($data){
        $this->db->where('id',$data['id']);
        $update = $this->db->update($this->product,$data);
        return $update?true:false;
    }

     public function DeleteProduct($data){
       $this->db->where('id',$data);
        $update = $this->db->delete($this->product);
       return $update?true:false;
    }
   
    //Subcategory
     public function InsertSubcat($data){
        $insert = $this->db->insert($this->subcat,$data);
        $insert_id = $this->db->insert_id();
        return $insert?true:false;
    }

     public function UpdateSubcat($data){
        $this->db->where('id',$data['id']);
        $update = $this->db->update($this->subcat,$data);
        return $update?true:false;
    }

     public function DeleteSubcat($data){
       $this->db->where('id',$data);
        $update = $this->db->delete($this->subcat);
       return $update?true:false;
    }



    public function GetBlog($id = '')
    {

         $this->db->select('*');
        $this->db->from($this->blog);
       
        if($id){
            $array = array('id' => $id, 'blog_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('blog_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function InsertBlog($data){
        $insert = $this->db->insert($this->blog,$data);
        $insert_id = $this->db->insert_id();
        return $insert?true:false;
    }


    public function UpdateBlog($data){
        $this->db->where('id',$data['id']);
        $update = $this->db->update($this->blog,$data);
        return $update?true:false;
    }

    public function DeleteBlog($data){
       $this->db->where('id',$data);
        $update = $this->db->delete($this->blog);
       return $update?true:false;
    }



    public function GetCoupon($id = '')
    {

         
         $this->db->select('*');
        $this->db->from($this->coupon);
       
        if($id){
            $array = array('id' => $id, 'coupon_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('coupon_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function InsertCoupons($data)
    {
         $insert = $this->db->insert($this->coupon,$data);
        $insert_id = $this->db->insert_id();
        return $insert?true:false;
    }

     public function UpdateCoupons($data){
        $this->db->where('id',$data['id']);
        $update = $this->db->update($this->coupon,$data);
        return $update?true:false;
    }


     public function DeleteCoupon($data){
       $this->db->where('id',$data);
        $update = $this->db->delete($this->coupon);
       return $update?true:false;
    }

    public function StatusUpdates($data)
    {
        
        $update = $this->db->query("update userorder SET order_status='".$data['order_status']."' where id='".$data['id']."'");
        return $update?true:false;
    }
}
