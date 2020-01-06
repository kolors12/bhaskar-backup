<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Teacher_schedual_model extends CI_Model {
	
	   public function get_subject()
		{
			$this->db->order_by('subject_id', 'Desc');
			$query_result=$this->db->get('subjects');
			$result = $query_result->result_array();
			return $result;
		}
		public function get_classes()
		{
			$this->db->order_by('class_id', 'Desc');
			$query_result=$this->db->get('classes');
			$result = $query_result->result_array();
			return $result;
		}
		public function teacher_list()
		{
		    $query=$this->db->where(array('role_in_school' =>'Teacher'))->get('staff');
			$result = $query->result_array();
			return $result;
		}
		
		function schedual_status($id,$value)
		{
			
			$this->db->where(array('tech_sch_id' =>$id))->set(array('status' =>(int)$value))->update('teacher_schedual');
			return true;
		}
		
		public function delete_schedual($id)
		{
			$this->db->where('tech_sch_id',$id);
			$query=$this->db->delete('teacher_schedual');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		

		function insert_teacher_schedual($data){
			$check_entry = $this->db->get_where('teacher_schedual',array('teacher_name' => $data['teacher_name'],'to_time'=>$data['to_time'], 'from_time' => $data['from_time'], 'status'=> '1' ));
			$num_of_rows = $check_entry->num_rows();
	
			if($num_of_rows != 0 ){
				$result = 2;
			} else {
				if( $this->db->insert('teacher_schedual', $data))
				{
					$result = 1;
				}else{
					$result = 6;
				}
			}
			return $result;
		}


		public function edit_tech_schedual($id)
		{
		    $query=$this->db->where(array('tech_sch_id' =>$id))->get('teacher_schedual');
			$result = $query->result_array();
			return $result;
		}
		
		
	
		function update_teacher_schedual($id,$data){
			$check_entry = $this->db->get_where('teacher_schedual',array('teacher_name' => $data['teacher_name'],'to_time'=>$data['to_time'], 'from_time' => $data['from_time'], 'status'=> '1'));
			$num_of_rows = $check_entry->num_rows();
	
			if($num_of_rows != 0 ){
				$result = 2;
			} else {
				$this->db->where('tech_sch_id', $id);	
				if( $this->db->update('teacher_schedual', $data))
				{
					$result = 1;
				}else{
					$result = 6;
				}
			}
			return $result;
		}


		function count_all($teacher_name,$schedual_day)
		{
			$query = $this->make_query($teacher_name,$schedual_day);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($teacher_name,$schedual_day)
		{
			$query = "
			SELECT sf.l_name,sf.l_name_ar,sf.f_name,sf.f_name,ts.tech_sch_id, ts.schedual_day,ts.schedual_day_ar,ts.teacher_name,ts.class,ts.class_ar,ts.subjects,ts.subjects_ar,ts.to_time,ts.from_time 
			FROM teacher_schedual as ts left join staff as sf ON ts.teacher_name = sf.staff_id
			WHERE ts.status IN (0,1)  
			";

			if(isset($teacher_name) && $teacher_name != "")
			{
			$query .= "AND ts.teacher_name LIKE '%$teacher_name%'";
			}
			if(isset($schedual_day) && $schedual_day != "")
			{
			$query .= " AND ts.schedual_day LIKE '%$schedual_day%'";
			}
			
			$query .= "ORDER BY ts.tech_sch_id DESC";
			return $query;
		}


		
		function fetch_data($limit, $start, $teacher_name,$schedual_day)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($teacher_name,$schedual_day);

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
					
					 $schedual_day  =	$row['schedual_day_ar'];
					 $class         =	$row['class_ar'];
					 $subjects      =	$row['subjects_ar'];
					 $f_name        =	$row['f_name_ar'];
					 $l_name        =	$row['l_name_ar'];
					
					}else{

					 $schedual_day 		=	$row['schedual_day'];
					 $class 			=	$row['class'];
					 $subjects 			=	$row['subjects'];
					 $f_name 			=	$row['f_name'];
					 $l_name 			=	$row['l_name'];
					
					}
					$output .= '
					<tr>
						<td>'.$i.'</td>
						<td><a href="'.base_url().'teacher_schedual/view_timetabel/'.$row['teacher_name'].'">'. $f_name.' '. $l_name.'</a></td>
						<td><strong>'. $schedual_day.'</strong></td>
						<td><strong>'. $class.'</strong></td>
						<td><strong>'. $subjects.'</strong></td>
						<td><strong>'. $row['to_time']. ' to '. $row['from_time'].'</strong></td>
						
						
						<td>';
						
                        					
						$output .= '<a href="'.base_url().'teacher_schedual/edit_teacher_schedual/'.$row['tech_sch_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit" title="Edit"><i class="fa fa-check-square-o"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'teacher_schedual/delete_schedual/'.$row['tech_sch_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
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