<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Teacher_meeting_model extends CI_Model {
	
	 
		public function get_teachers()
		{
		    $query=$this->db->where(array('role_in_school' =>'Teacher'))->get('staff');
			$result = $query->result_array();
			return $result;
		}
		
		function class_status($id,$value)
		{
			
			$this->db->where(array('class_id' =>$id))->set(array('status' =>(int)$value))->update('classes');
			return true;
		}
		
		public function delete_classes($id)
		{
			$this->db->where('class_id',$id);
			$query=$this->db->delete('classes');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		public  function insert_teacher_meeting($data)
		{
			$this->db->insert('teacher_meeting', $data);
			return true;
		}
		public function edit_classes($id)
		{
		    $query=$this->db->where(array('class_id' =>$id))->get('classes');
			$result = $query->result_array();
			return $result;
		}
		
		
		public function update_class($id,$data)
		{
			$this->db->where(array('class_id' =>$id))->set($data)->update('classes');
			return true;
		}

		function count_all($class_name,$class_grade)
		{
			$query = $this->make_query($class_name,$class_grade);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($class_name,$class_grade)
		{
			$query = "
			SELECT * FROM classes 
			WHERE status IN (0,1)  
			";

			if(isset($class_name) && $class_name != "")
			{
			$query .= "AND class_name LIKE '%$class_name%'";
			}
			if(isset($class_grade) && $class_grade != "")
			{
			$query .= " AND class_grade LIKE '%$class_grade%'";
			}
			
			$query .= "ORDER BY class_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $class_name,$class_grade)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($class_name,$class_grade);

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
					$class_name =	$row['class_name_ar'];
					$class_grade =	$row['class_grade_ar'];
					$subjects_name =	$row['subjects_name_ar'];
					}else{
					$class_name =	$row['class_name'];
					$class_grade =	$row['class_grade'];
					$subjects_name =	$row['subjects_name'];
					}

					$output .= '
					<tr>
						<td>'.$i.'</td>
						<td><strong>'. $class_name.'</strong></td>
						<td><strong>'. $class_grade.'</strong></td>
						<td><strong>'. $subjects_name.'</strong></td>
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
							$output .= '<a  Onclick="return Inactive();" href="'.base_url().'classes/class_status/'.$row['class_id'].'/0'.'" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-primary changestatus"><span  class="fa fa-ban" title="Inactive"></span></a>';
						 } else { 
						$output .= '<a  Onclick="return Active();" href="'.base_url().'classes/class_status/'.$row['class_id'].'/1'.'" data-toggle="tooltip" title="Active" class="btn btn-sm btn-primary changestatus"><span class="fa fa-check-circle-o" title="Active"></span></a>';
						 }
                        					
						$output .= '<a href="'.base_url().'classes/edit_classes/'.$row['class_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit" title="Edit"><i class="fa fa-check-square-o"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'classes/delete_classes/'.$row['class_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
					</td>
					</tr>
					';
					//$i++;
				}
			}
			else
			{
				$output = '<td colspan="4" style="text-align:center;color:red;"><h5>No Data Found</h5></td>';
			}
			return $output;
		}
}