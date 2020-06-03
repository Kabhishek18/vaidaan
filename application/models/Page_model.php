<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_model extends CI_Model{
    
    function __construct() {
        $this->page   = 'page';
        $this->blog   = 'blog';
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
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('blog_status' => '0', 'blog_delete' => '0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }
}