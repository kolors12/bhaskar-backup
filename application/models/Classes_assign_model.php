<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Classes_assign_model extends CI_Model {
	
	   public function gett_class()
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
		public function get_students()
		{
			$this->db->order_by('adm_id', 'Desc');
			$this->db->where('status',1);
			$query_result=$this->db->get('admission_users');
			$result = $query_result->result_array();
			return $result;
		}
		public function resource_details($subject_id,$class_id)
		{
		$query = $this->db->get_where('resource', array('class_id' => $class_id,'subject_id' => $subject_id));
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
		
		public function delete_assign_student($id)
		{
			$this->db->where('cls_id',$id);
			$query=$this->db->delete('classes_assign');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		
		public function insert_assign_studenst($data){
			
			
				$student_id = $data['student_id'];
				unset($data['student_id']);
				for ($i = 0; $i < count($student_id); $i++ ) 
				{
				$data['student_id'] = $student_id[$i];
				if( $this->db->insert('classes_assign', $data))
				{
				$result = 1;
				}else{
				$result = 6;
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

		function count_all($class_id,$subject_id)
		{
			$query = $this->make_query($class_id,$subject_id);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($class_id,$subject_id)
		{
			$sess_data = $this->session->all_userdata();
			$id = $sess_data['emp_id'];
			$query = "
			SELECT c.class_name,c.class_name_ar,c.class_grade,c.class_grade_ar,su.subject_name,su.subject_name_ar,cs.cls_id,cs.class_id,cs.resource,cs.from_date,cs.to_date,cs.description,cs.cls_id,cs.from_date_ar,cs.to_date_ar,cs.description_ar,au.student_name,au.student_name_ar,re.topic_name FROM classes_assign as cs
			left join classes as c ON cs.class_id = c.class_id
			left join subjects as su ON cs.subject_id  = su.subject_id
			left join admission_users as au ON cs.student_id  = au.adm_id
			left join resource as re ON cs.resource  = re.re_id 			
			WHERE cs.status IN (0,1) AND cs.tech_id = '$id'
			";
			if(isset($class_id) && $class_id != "")
			{
			$query .= "AND cs.class_id LIKE '%$class_id%'";
			}
			if(isset($subject_id) && $subject_id != "")
			{
			$query .= "AND cs.subject_id LIKE '%$subject_id%'";
			}
			$query .= "ORDER BY cs.cls_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $class_id,$subject_id)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($class_id,$subject_id);

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
						
						$class_name	     =	$row['class_name_ar'];
						$class_grade	 =	$row['class_grade_ar'];
						$student_name	 =	$row['student_name_ar'];
						$subjects	     =	$row['subject_name_ar'];
						$from_date   	=   $row['from_date_ar'];
						$to_date 	    =   $row['to_date_ar'];
						$description 	=   $row['description_ar'];
					   }else{
						
						$class_name  	=	$row['class_name'];
						$class_grade	=	$row['class_grade'];
						$subjects 		=	$row['subject_name'];
						$student_name 	=   $row['student_name'];
						$topic_name 	=   $row['topic_name'];
						$from_date   	=   $row['from_date'];
						$to_date 	    =   $row['to_date'];
						$description 	=   $row['description'];
					   }
					
					   $output .= '
					   <tr>
						<td>'.$i.'</td>
						<td><strong>'.$class_name.' '.$class_grade.'</strong></td>
						<td><strong>'.$subjects.'</strong></td>
						<td><strong>'.$student_name .'</strong></td>
						<td><strong>'.$topic_name .'</strong></td>
						<td><strong>'.$from_date .'</strong></td>
						<td><strong>'.$to_date .'</strong></td>
						<td><strong>'.$description .'</strong></td>
						
					
						<td>';
						
						$output .= '
						<a Onclick="return ConfirmDelete();" href="'.base_url().'classes_assign/delete_assign_student/'.$row['cls_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
					</td>
					</tr>
					';
					//$i++;
				}
			}
			else
			{
				$output = '<td colspan="9" style="text-align:center;color:red;"><h6>No Data Found</h6></td>';
			}
			return $output;
		}
}