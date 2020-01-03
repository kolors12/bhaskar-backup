<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	
	
	  function login($user_email,$user_password)
	  {
		$query=$this->db->where(array('user_email'=>$user_email,'user_password'=>$user_password))->get('users');
		$result = $query->result_array();
	
		if(sizeof($result) == 1)
		
        {
            $row = $query->row();
            $data = array(
			'user_id' => $row->user_id,
			'first_name' => $row->user_name,
			'last_name' => $row->user_email,
			'user_email' => $row->user_phone,
			'mobile_number' => $row->user_password,
			'user_password' => $row->user_address,
			'role_type' => $row->role_type,
			'user_status' => $row->user_status,
			'validated' => true
			);
            $this->session->set_userdata($data);
            return true;
        } 
	}
	
	/* public function updatepassword($user_id,$data)
    {
		$this->db->where(array('user_id' =>$user_id))->set($data)->update('admin_user');
		return true;
	}
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