<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Attendance_model extends CI_Model {
	
	   public function get_class()
		{
			$this->db->order_by('class_id', 'ASC');
			$this->db->where('status',1);
			$query_result=$this->db->get('classes');
			$result = $query_result->result_array();
			return $result;
		}
		public function get_subject()
		{
			$this->db->order_by('subject_id', 'Desc');
			$this->db->where('status',1);
			$query_result=$this->db->get('subjects');
			$result = $query_result->result_array();
			return $result;
		}
			function students_details($clas_id){
			$query = $this->db->get_where('admission_users', array('level_of_grade' => $clas_id));
			return $query;
			}

		public function all_students_view($id)
		{
		  
			$this->db->select('*');
			$this->db->from('classes_assign');
			$this->db->join('classes','classes.class_id = classes_assign.class_id');
			$this->db->join('admission_users','admission_users.adm_id = classes_assign.student_id');
			$this->db->where('classes_assign.class_id',$id);
			$query=$this->db->get();
			$result=$query->result_array();
			return $result;
		}
		
		function class_status($id,$value)
		{
			
			$this->db->where(array('class_id' =>$id))->set(array('status' =>(int)$value))->update('classes');
			return true;
		}
		
		public function delete_student_attendance($id)
		{
			$this->db->where('attend_id',$id);
			$query=$this->db->delete('attendance');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		
		public function insert_attendance($data){
			
			$check_entry = $this->db->get_where('attendance',array('present_day'=>$data['present_day'],'subject_id'=>$data['subject_id'],'class_id'=>$data['class_id']));
			$num_of_rows = $check_entry->num_rows();

			if($num_of_rows != 0 ){
				$result = 2;
			} else {
				$student_id = $data['student_id'];
					unset($data['student_id']);
					for ($i = 0; $i < count($student_id); $i++ ) 
					{
						$data['student_id'] = $student_id[$i];
							if( $this->db->insert('attendance', $data))
							{
								$result = 1;
							}else{
								$result = 6;
							}
					
				   }
			}
			return $result;
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

		function count_all($class_id,$subjects_id,$date2)
		{
			$query = $this->make_query($class_id,$subjects_id,$date2);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($class_id,$subjects_id,$date2)
		{
			$query = "
			SELECT * FROM attendance as att
			left join classes as c ON c.class_id = att.class_id
			left join admission_users as au ON au.adm_id = att.student_id
			left join subjects as su ON su.subject_id = att.subject_id
			WHERE att.status IN (0,1)  
			";
			if(isset($class_id) && $class_id != "")
			{
			$query .= "AND att.class_id LIKE '%$class_id%'";
			}
			if(isset($subjects_id) && $subjects_id != "")
			{
			$query .= " AND att.subject_id LIKE '%$subjects_id%'";
			}
			if(isset($date2) && $date2 != "")
			{
			$query .= " AND att.present_day LIKE '%$date2%'";
			}
			$query .= "ORDER BY att.attend_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $class_id,$subjects_id,$date2)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($class_id,$subjects_id,$date2);

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

						$semister	     =	$row['semister_ar'];
						$class_name	     =	$row['class_name_ar'];
						$class_grade	 =	$row['class_grade_ar'];
						$student_name	 =	$row['student_name_ar'];
						$present_day	 =	$row['present_day'];
						$subject_name	 =	$row['subject_name_ar'];
						
					   }else{

						$semister  	    =	$row['semister'];
						$class_name  	=	$row['class_name'];
						$class_grade	=	$row['class_grade'];
						$subjects 		=	$row['subjects'];
						$student_name   =	$row['student_name'];
						$present_day 	=	$row['present_day'];
						$subject_name 	=	$row['subject_name'];
					   }
					
					   $output .= '
					   <tr>
						<td>'.$i.'</td>
						<td><strong>'.  $semister.'</strong></td>
						<td><strong>'.  $class_name.'</strong></td>
						<td><strong>'.  $class_grade.'</strong></td>
						<td><strong>'.  $subject_name .'</strong></td>
						<td><strong>'.  $present_day .'</strong></td>
						<td><strong>'.  $student_name .'</strong></td>
						
					
						<td>';
						
						$output .= '
						<a Onclick="return ConfirmDelete();" href="'.base_url().'attendance/delete_student_attendance/'.$row['attend_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
					</td>
					</tr>
					';
					//$i++;
				}
			}
			else
			{
				$output = '<td colspan="8" style="text-align:center;color:red;"><h6>No Data Found</h6></td>';
			}
			return $output;
		}
}
///<td><a href="'.base_url().'classes_assign/view_students/'.$row['class_id'].'">'. $class_name.'</a></td>///