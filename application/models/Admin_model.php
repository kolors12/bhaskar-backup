<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Admin_model extends CI_Model {
		
		public function get_class()
		{
			$this->db->order_by('class_id', 'ASC');
			$this->db->where('status',1);
			$query_result=$this->db->get('classes');
			$result = $query_result->result_array();
			return $result;
		}
	   public function admission_view()
		{
			$this->db->order_by('adm_id', 'Desc');
			$query_result=$this->db->get('admission_users');
			$result = $query_result->result_array();
			return $result;
		}
		
		function admission_status($id,$value)
		{
			
			$this->db->where(array('adm_id' =>$id))->set(array('status' =>(int)$value))->update('admission_users');
			return true;
		}
		
		public function delete_admission($id)
		{
			$this->db->where('adm_id',$id);
			$query=$this->db->delete('admission_users');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}
		}
		public  function insert_admission($data)
		{
			$this->db->insert('admission_users', $data);
			$students['emp_id'] = $this->db->insert_id();
			$students['username'] = $data['username'];
			$students['password	'] = $data['password'];
			$var ="Student";
			$students['role	'] = $var;
			$this->db->insert('login_table', $students);
			return true;
		}

		

		public function view_details($id)
		{
		  
			$this->db->select('*');
			$this->db->from('admission_users as au');
			$this->db->join('classes as c','c.class_id = au.level_of_grade');
			$this->db->where('au.adm_id',$id);
			$query=$this->db->get();
			$data=$query->result_array();
			return $data;
		}
		
		
		public function update_admission($id,$data)
		{
			$this->db->where(array('adm_id' =>$id))->set($data)->update('admission_users');
			return true;
		}

		function count_all($student_name, $level_grade)
		{
			$query = $this->make_query($student_name, $level_grade);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($student_name, $level_of_grade)
		{
			$query = "
			SELECT au.student_name,au.student_name_ar,au.date_of_birth,au.date_of_birth_ar,au.age,au.age_ar,au.status,au.adm_id,c.class_name,c.class_name_ar,c.class_grade,c.class_grade_ar FROM admission_users as au left join classes as c ON au.level_of_grade = c.class_id
			WHERE au.status IN (0,1)  
			";

			if(isset($student_name) && $student_name != "")
			{
			$query .= "AND au.student_name LIKE '%$student_name%'";
			}
			if(isset($level_of_grade) && $level_of_grade != "")
			{
			$query .= " AND au.level_of_grade LIKE '%$level_of_grade%'";
			}
			$query .= "ORDER BY au.adm_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $student_name, $level_of_grade)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($student_name, $level_of_grade);

			$query .= ' LIMIT '.$start.', ' . $limit;

			$data = $this->db->query($query);
			//echo $this->db->last_query();
		//echo "<pre>"; print_r($data->result_array());echo "<pre>";
			$output = '';
			if($data->num_rows() > 0)
			{
				$i = 0;
				foreach($data->result_array() as $row)
				{
					++$i;

					if($siteLang == 'arabic'){
					$student_name   =	$row['student_name_ar'];
					$date_of_birth  =   $row['date_of_birth_ar'];
					$age            =  	$row['age_ar'];
					$class_name     =	$row['class_name_ar'];
					$class_grade     =	$row['class_grade_ar'];
					}else{
					$student_name  =	$row['student_name'];
					$date_of_birth =    $row['date_of_birth'];
					$age           =	$row['age'];
					$class_name    =	$row['class_name'];
					$class_grade    =	$row['class_grade'];
					}

					$output .= '
					<tr>
						<td>'.$i.'</td>
						<td><a href="'.base_url().'admin/view_details/'.$row['adm_id'].'">'. $student_name.'</a></td>
						<td>'. $date_of_birth.'</td>
						<td>'. $age.'</td>
						<td>'. $class_name.' '. $class_grade.'</td>

						<!--td>
						
						<a href="'.base_url().'admin/view_details/'.$row['adm_id'].'"><button type="button" class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Delete">View Details</button></a>
						</td-->
						<td scope="row">';
						if($row['status'] == 0)
						{ 
							$output .= '<span class="label btn-xs badge badge-danger"> Inactive</span>';
						}
						else
						{ 
							$output .= '<span class="label btn-xs badge badge-success">Active'.$row['status'].'</span>';
						}
						$output .= '
						</td>
						<td>';
						if ($row['status'] == 1) { 
							$output .= '<a  Onclick="return Inactive();" href="'.base_url().'admin/admission_status/'.$row['adm_id'].'/0'.'" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-primary changestatus"><span  class="fa fa-ban" title="Inactive"></span></a>';
						 } else { 
						$output .= '<a  Onclick="return Active();" href="'.base_url().'admin/admission_status/'.$row['adm_id'].'/1'.'" data-toggle="tooltip" title="Active" class="btn btn-sm btn-primary changestatus"><span class="fa fa-check-circle-o" title="Active"></span></a>';
						 } 
						$output .= '<a href="'.base_url().'admin/edit_details/'.$row['adm_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-check-square-o"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'admin/delete_admission/'.$row['adm_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></a>
					</td>
					</tr>
					';
					//$i++;
				}
			}
			else
			{
				$output = '<td colspan="7" style="text-align:center;color:red;"><h5>No Admission Found</h5></td>';
			}
			return $output;
		}
}