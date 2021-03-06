<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Staff_model extends CI_Model {
	
	   public function view_staff_details($id)
		{
			
			$this->db->where('staff_id',$id);
			$query_result=$this->db->get('staff');
			$result = $query_result->result_array();
			return $result;
		}
		public function staff_roles()
		{
			$this->db->order_by("role_name", "Desc");
			$this->db->where('status',1);
			$query_result=$this->db->get('roles');
			$result = $query_result->result_array();
			return $result;
		}
		public function get_classes()
		{
			$this->db->order_by("class_name", "Desc");
			$query_result=$this->db->get('classes');
			$result = $query_result->result_array();
			return $result;
		}
		public function get_subjects()
		{
			$this->db->order_by("subject_name", "Desc");
			$query_result=$this->db->get('subjects');
			$result = $query_result->result_array();
			return $result;
		}
		
		function staff_status($id,$value)
		{
			
			$this->db->where(array('staff_id' =>$id))->set(array('status' =>(int)$value))->update('staff');
			return true;
		}
		
		public function delete_status($id)
		{
			$this->db->where('staff_id',$id);
			$query=$this->db->delete('staff');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		public  function insert_role($data)
		{
			$this->db->insert('staff', $data);
		    $user['emp_id'] = $this->db->insert_id();
			$user['username'] = $data['username'];
			$user['password	'] = $data['password'];
			$user['role	'] = $data['role_in_school'];
			$this->db->insert('login_table', $user);
			return true;
			
			
		}
		public function edit_staff($id)
		{
		    $query=$this->db->where(array('staff_id' =>$id))->get('staff');
			$result = $query->result_array();
			return $result;
		}
		
		
		public function update_staaff($id,$data)
		{
			$this->db->where(array('staff_id' =>$id))->set($data)->update('staff');
			return true;
		}

		function count_all($f_name, $emp_code)
		{
			$query = $this->make_query($f_name, $emp_code);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($f_name, $emp_code)
		{
			$query = "
			SELECT * FROM staff 
			WHERE status IN (0,1)  
			";

			if(isset($f_name) && $f_name != "")
			{
			$query .= "AND f_name LIKE '%$f_name%'";
			}
			if(isset($emp_code) && $emp_code != "")
			{
			$query .= " AND emp_code LIKE '%$emp_code%'";
			}
			$query .= "ORDER BY staff_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $f_name, $emp_code)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($f_name, $emp_code);

			$query .= ' LIMIT '.$start.', ' . $limit;

			$data = $this->db->query($query);
			//echo $this->db->last_query();
			$output = '';
			if($data->num_rows() > 0)
			{
				$i = 0;
				foreach($data->result_array() as $row)
				{
					++$i;

					if($siteLang == 'arabic'){
					  $f_name     =	$row['f_name_ar'];
					  $emp_code   =	$row['emp_code_ar'];
					  $work_no    =	$row['work_no_ar'];
					  $work_email =	$row['work_email_ar'];
					  $role_in_school =	$row['role_in_school_ar'];
					}else{
					  $f_name      =	$row['f_name'];
					  $emp_code    =    $row['emp_code'];
					  $work_no     =	$row['work_no'];
					  $work_email  =	$row['work_email'];
					  $role_in_school  =	$row['role_in_school'];
					  $profile_img  =	$row['profile_img'];
					}

					$output .= '
					
					<tr>
						<td>'.$i.'</td>
						<td>
							<div class="d-flex align-items-center">
								<img src="'.base_url().$profile_img.'" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
								<div class="ml-3">
									<a href="javascript:void(0);" title="">'. $f_name.'</a>
									<p class="mb-0">'. $work_email.'</p>
								</div>
							</div>
						</td>
						<td>'. $emp_code.'</td>
						<td>'. $work_no.'</td>
						<td>'. $role_in_school.'</td>
						<td>

						
						
						<a href="'.base_url().'staff/view_staff_details/'.$row['staff_id'].'"><button type="button" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" data-original-title="Delete">View Details</button></a>
						</td>
						<td scope="row">';
						if($row['status'] == "0")
						{ 
							$output .= '<span class="label btn-xs badge badge-danger"> Inactive</span>';
						}
						else
						{ 
							$output .= '<span class="label btn-xs badge badge-success">Active</span>';
						}
						$output .= '
						</td>
						<td>';

						if ($row['status'] == '1') { 
							$output .= '<a  Onclick="return Inactive();" href="'.base_url().'staff/staff_status/'.$row['staff_id'].'/0'.'" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-primary changestatus"><span  class="fa fa-ban" title="Inactive"></span></a>';
						 } else { 
						$output .= '<a  Onclick="return Active();" href="'.base_url().'staff/staff_status/'.$row['staff_id'].'/1'.'" data-toggle="tooltip" title="Active" class="btn btn-sm btn-primary changestatus"><span class="fa fa-check-circle-o" title="Active"></span></a>';
						 } 
						$output .= '<a href="'.base_url().'staff/edit_staff/'.$row['staff_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-check-square-o"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'staff/delete_status/'.$row['staff_id'].'"><button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button></a>
					</td>
					</tr>
					';
					//$i++;
				}
			}
			else
			{
				$output = '<td colspan="8" style="text-align:center;color:green;"><h5>No Teacher Found</h5></td>';
			}
			return $output;
		}
}