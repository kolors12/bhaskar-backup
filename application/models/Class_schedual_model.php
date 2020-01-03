<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Class_schedual_model extends CI_Model {
	
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
		
		function class_schedual_status($id,$value)
		{
			
			$this->db->where(array('cls_sch_id' =>$id))->set(array('status' =>(int)$value))->update('class_schedual');
			//echo $this->db->last_query();exit;
			return true;
		}
		
		public function class_delete_schedual($id)
		{
			$this->db->where('cls_sch_id',$id);
			$query=$this->db->delete('class_schedual');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		// public  function insert_school_schedual($data)
		// {
		// 	$this->db->insert('class_schedual', $data);
		// 	return true;
		// }


		 public function insert_school_schedual($data){
			$check_entry = $this->db->get_where('class_schedual',array('to_time'=>$data['to_time'], 'from_time' => $data['from_time'], 'status'=> '1' ));
			$num_of_rows = $check_entry->num_rows();
	
			if($num_of_rows != 0 ){
				$result = 2;
			} else {
				if( $this->db->insert('class_schedual', $data))
				{
					$result = 1;
				}else{
					$result = 6;
				}
			}
			return $result;
		}

		public function edit_classes_schedual($id)
		{
		  
			$this->db->select('*');
			$this->db->from('class_schedual');
			$this->db->join('classes','classes.class_id=class_schedual.class');
			$this->db->where('cls_sch_id',$id);
			$query=$this->db->get();
			$data=$query->result_array();
			return $data;
		}
		
		
		public function update_class_schedual($id,$data)
		{
			$this->db->where(array('cls_sch_id' =>$id))->set($data)->update('class_schedual');
			return true;
		}

		function count_all($class_id,$lesson_name,$schedual_day)
		{
			$query = $this->make_query($class_id,$lesson_name,$schedual_day);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($class_id,$lesson_name,$schedual_day)
		{
			
			$query = "
			SELECT * FROM class_schedual as cs left join classes as c ON cs.class = c.class_id
			WHERE cs.status IN (0,1)  
			";

			if(isset($class_id) && $class_id != "")
			{
			$query .= "AND cs.class LIKE '%$class_id%'";
			}
			
			if(isset($lesson_name) && $lesson_name != "")
			{
			$query .= "AND cs.lesson_name LIKE '%$lesson_name%'";
			}
			
			if(isset($schedual_day) && $schedual_day != "")
			{
			$query .= " AND cs.schedual_day LIKE '%$schedual_day%'";
			}
			
			$query .= "ORDER BY cs.cls_sch_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start,$class_id, $lesson_name,$schedual_day)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($class_id,$lesson_name,$schedual_day);

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
						$lesson_name 	 =	$row['lesson_name_ar'];
						$schedual_day 	 =	$row['schedual_day_ar'];
						$class_name	     =	$row['class_name_ar'];
						$subjects		 =	$row['subjects_ar'];
						$class_grade	 =	$row['class_grade_ar'];
					   }else{
						$lesson_name 	=	$row['lesson_name'];
						$schedual_day 	=	$row['schedual_day'];
						$class_name  	=	$row['class_name'];
						$class_grade	=	$row['class_grade'];
						$subjects 		=	$row['subjects'];
					   }
					$output .= '
					<tr>
						<td>'.$i.'</td>
						<td>'. $lesson_name.'</td>
						<td>'. $schedual_day.'</td>
						<td>'. $class_name.''. $class_grade.'</td>
						<td>'. $subjects.'</td>
						<td>'. $row['to_time']. ' to '. $row['from_time'].'</td>
						
						
						<td>';
						$output .= '<a href="'.base_url().'class_schedual/edit_classes_schedual/'.$row['cls_sch_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit" title="Edit"><i class="fa fa-check-square-o"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'class_schedual/class_delete_schedual/'.$row['cls_sch_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
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