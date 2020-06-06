<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model{
    
    function __construct() {
        $this->page   = 'page';
        $this->blog   = 'blog';
        $this->home   = 'home_section';
        $this->product   = 'product';

    }
    
    public function getPageParent($id = ''){
        $this->db->select('*');
        $this->db->from($this->page);
       
        if($id){
            $array = array('id' => $id, 'page_status' => '0', 'page_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->group_by('page_parent', 'asc');
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }
    

    public function getPageSub($id = ''){
        $this->db->select('*');
        $this->db->from($this->page);
        $this->db->where('page_parent', $id);
        $query  = $this->db->get();
        $result = $query->result_array();   
        // return fetched data
        return !empty($result)?$result:false;
    }    
    /*
     * Insert data in the database
     * @param data array
     */
    public function insertTransaction($data){
        $insert = $this->db->insert($this->transTable,$data);
        return $insert?true:false;
    }
    
    public function GetBlog($id = '')
    {

        $this->db->select('*');
        $this->db->from($this->blog);
       
        if($id){
            $array = array('id' => $id, 'blog_status' => '0', 'blog_delete' => '0');
            $this->db->where($array);
            $this->db->order_by("id", "desc");
            $this->db->limit(10,0);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('blog_status' => '0', 'blog_delete' => '0');
            $this->db->where($array);
            $this->db->order_by("id", "desc");
             $this->db->limit(10,0);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function GetSectionlist($id = '',$section = '')
    {

         
         $this->db->select('*');
        $this->db->from($this->home);
       if ($section) {
           if($id){
            $array = array('id' => $id,'section_home'=>$section, 'section_status' => '0','section_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('section_home'=>$section,'section_status' => '0','section_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
       }else{
         if($id){
            $array = array('id' => $id, 'section_status' => '0','section_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
           $array = array('section_status' => '0','section_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
       }
       
        
        // return fetched data
        return !empty($result)?$result:false;
    }


     public function Getproall($id = '',$order = '',$cat =''){
        $this->db->select('*');
        $this->db->from($this->product);
       
        if ($cat) {
            if($id){
            $array = array('id' => $id, 'cat_id' => $cat,'product_delete' => '0','product_status' => '0');
            $this->db->where($array);
            $this->db->order_by("id", $order);
            $this->db->limit(20,0);
            $query  = $this->db->get();
            $result = $query->row_array();
            }else{
           $array = array('cat_id' => $cat,'product_delete' => '0','product_status' => '0');
            $this->db->where($array);
            $this->db->order_by("id", $order);
            $this->db->limit(20,0);
            $query  = $this->db->get();
            $result = $query->result_array();
            }
        }else{
            if($id){
            $array = array('id' => $id, 'product_delete' => '0','product_status' => '0');
            $this->db->where($array);
            $this->db->order_by("id", $order);
            $this->db->limit(20,0);
            $query  = $this->db->get();
            $result = $query->row_array();
             }else{
           $array = array('product_delete' => '0','product_status' => '0');
            $this->db->where($array);
            $this->db->order_by("id", $order);
            $this->db->limit(20,0);
            $query  = $this->db->get();
            $result = $query->result_array();
            }
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }
}