<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class User_model extends CI_Model {
	
	   public function users_view()
		{
			$this->db->order_by('user_id', 'Desc');
			$query_result=$this->db->get('users');
			$result = $query_result->result_array();
			return $result;
		}
		
		function user_status($id,$value)
		{
			//print_r($id,$value);exit;
			$this->db->where(array('user_id' =>$id))->set(array('user_status' =>(int)$value))->update('users');
			return true;
		}
		
		public function delete_user($id)
		{
			$this->db->where('user_id',$id);
			$query=$this->db->delete('users');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		public  function insert_users($data)
		{
			$this->db->insert('users', $data);
			return true;
		}
		public function edit_sect($id)
		{
			$query=$this->db->where(array('sect_id' =>$id))->get('sect');
			$result = $query->result_array();
			return $result;
		}
		
		
		public function updatesect($data)
		{
			$this->db->where(array('sect_id' =>$data['sect_id']))->set($data)->update('sect');
			return true;
		}
	
	
}