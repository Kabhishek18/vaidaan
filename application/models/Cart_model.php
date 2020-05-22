<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart_model extends CI_Model{
    
    function __construct() {
        $this->user   = 'user';
        $this->page   = 'page';
        $this->order   = 'userorder';
        $this->product   = 'product';
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



    //Get Category and Subcategory by ID
    public function Getcatsub($value='')
    {
        $this->db->select('subcat.*');
        $this->db->from('subcat');
        $this->db->join('cat', 'cat.id =subcat.cat_id AND subcat.cat_id ='.$value);
        $this->db->where("(subcat.subcat_staus ='0' AND subcat.subcat_delete='0' AND cat.cat_status ='0' AND cat.cat_delete='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }

    //Get Subcatory and Product via id
    public function Getsubpro($value='')
    {
        $this->db->select('count(*)');
        $this->db->from('product');
        $this->db->join('subcat', ' product.subcat_id = subcat.id AND product.subcat_id  ='.$value);
        $this->db->where("(subcat.subcat_staus ='0' AND subcat.subcat_delete='0' AND product.product_status ='0' AND product.product_delete='0')",NULL,FALSE);
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    }
}    