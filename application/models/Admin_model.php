<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model{
    
    function __construct() {
        $this->user   = 'user';
        $this->page   = 'page';
        $this->product   = 'product';
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
}
