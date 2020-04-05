<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	
	
	  function login($user_email,$user_password)
	  {
		$query=$this->db->where(array('username'=>$user_email,'password'=>$user_password))->get('login_table');
		$result = $query->result_array();
	
		if(sizeof($result) == 1)
		
        {
            $row = $query->row();
            $data = array(
			'user_id' => $row->user_id,
			'emp_id' => $row->emp_id,
			'username' => $row->username,
			'password' => $row->password,
			'role' => $row->role,
			'validated' => true
			);
            $this->session->set_userdata($data);
            return true;
        } 
	}
	
	 public function update_profile($id,$data)
    {
		$this->db->where(array('user_id' =>$id))->set($data)->update('users');
		return true;
	}
	
	public function get_admin($id)
    {
	    
		$this->db->where('user_id', $id);
        $this->db->from('users');  
        $query = $this->db->get();
        return $result=$query->row();
	}		// 
	/*
	public function user_count_list()
    {
		$query = $this ->db->get('users');
		$result1=$query->result_array();
		return $result1;
    }
	public function user_inactive_count_list()
    {
		$query = $this ->db->where(array ('status' => 0 ))->get('users');
		$result1=$query->result_array();
		return $result1;
    }
	public function set_count()
    {
		$query = $this ->db->where(array ('status' => 1 ))->get('sect');
		$result1=$query->result_array();
		return $result1;
    }
	public function sub_set_count()
    {
		$query = $this ->db->where(array ('status' => 1 ))->get('sub_sect');
		$result1=$query->result_array();
		return $result1;
    }
	public function favourite_count()
	{	
		$query = $this ->db->where(array ('status' => 1 ))->get('users');
		$result1=$query->result_array();
		return $result1;
	} */
	
	
}