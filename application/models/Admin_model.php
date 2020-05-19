<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
    
    function __construct() {
        $this->user   = 'user';
        $this->page   = 'page';
    }
    

	public function Athentication($auth)
	{	
		$this->db->select('*');
		$this->db->from($this->user);
		$array = array('user_name' => $auth['username'],'user_password' => $auth['password'],'user_delete' =>'0');
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


    
}
