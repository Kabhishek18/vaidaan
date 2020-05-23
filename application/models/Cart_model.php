<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model{
    
    function __construct() {
        $this->user   = 'user';
        $this->page   = 'page';
        $this->order   = 'userorder';
        $this->product   = 'product';
        $this->cat   = 'cat';
        $this->subcat   = 'subcat';
        $this->review   = 'review';
    }

    public function Getcat($id = ''){
        $this->db->select('*');
        $this->db->from($this->cat);
       
        if($id){
            $array = array('id' => $id, 'cat_delete' => '0','cat_status' =>'0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('cat_delete' => '0','cat_status' =>'0');
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
            $array = array('id' => $id, 'subcat_delete' => '0','subcat_status' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('subcat_delete' => '0','subcat_status' => '0');
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
            $array = array('id' => $id, 'product_delete' => '0','product_status' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('product_delete' => '0','product_status' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    //Get Category and Subcategory by ID
    public function Getcatsub($value='')
    {
        $this->db->select('subcat.*');
        $this->db->from('subcat');
        $this->db->join('cat', 'cat.id =subcat.cat_id AND subcat.cat_id ='.$value);
        $this->db->where("(subcat.subcat_status ='0' AND subcat.subcat_delete='0' AND cat.cat_status ='0' AND cat.cat_delete='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }

    //Get Subcatory and Product via id only Count
    public function Getsubpro($value='')
    {
        $this->db->select('count(*)');
        $this->db->from('product');
        $this->db->join('subcat', ' product.subcat_id = subcat.id AND product.subcat_id  ='.$value);
        $this->db->where("(subcat.subcat_status ='0' AND subcat.subcat_delete='0' AND product.product_status ='0' AND product.product_delete='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }


    public function Getcatpro($value='')
    {
    	$this->db->select('product.*,cat.cat_name');
        $this->db->from('product');
        $this->db->join('cat', ' cat.id = product.cat_id AND cat.id  ='.$value);
        $this->db->where("(cat.cat_status='0' AND cat.cat_delete='0' AND product.product_status='0' AND product.product_delete='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }


    //Get Subcatory and Product via all
    public function Getsubproall($value='')
    {
        $this->db->select('product.*');
        $this->db->from('product');
        $this->db->join('subcat', ' product.subcat_id = subcat.id AND product.subcat_id  ='.$value);
        $this->db->where("(subcat.subcat_status ='0' AND subcat.subcat_delete='0' AND product.product_status ='0' AND product.product_delete='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }


    public function Getreview($id = ''){
        $this->db->select('*');
        $this->db->from($this->review);
       
        if($id){
            $array = array('id' => $id, 'review_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('review_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }



}    