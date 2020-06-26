<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productfilter_model extends CI_Model{

	 function __construct() {
        
        $this->product   = 'product';
        $this->subcat   = 'subcat';
        $this->cat   = 'cat';
    }


     public function GetPriceFilter($id = ''){
        $this->db->select('*');
        $this->db->from($this->product);
       
        if($id){
            $array = array('id' => $id, 'product_status' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('product_status' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    
}
?>    