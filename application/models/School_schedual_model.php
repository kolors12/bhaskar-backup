<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class School_schedual_model extends CI_Model {
	
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
		
		function school_schedual_status($id,$value)
		{
			//echo($value);die();
			
			$this->db->where(array('sch_id'=>$id))->set(array('status' =>(int)$value))->update('school_schedual');
			return true;
		}
		
		public function delete_schedual_school($id)
		{
			$this->db->where('sch_id',$id);
			$query=$this->db->delete('school_schedual');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		
		function insert_school_schedual($data){
			$check_entry = $this->db->get_where('school_schedual',array('to_time'=>$data['to_time'], 'from_time' => $data['from_time'], 'status'=> '1' ));
			$num_of_rows = $check_entry->num_rows();
	
			if($num_of_rows != 0 ){
				$result = 2;
			} else {
				if( $this->db->insert('school_schedual', $data))
				{
					$result = 1;
				}else{
					$result = 6;
				}
			}
			return $result;
		}

		public function school_edit($id)
		{
		   $this->db->select('*');
			$this->db->from('school_schedual');
			$this->db->join('classes','classes.class_id=school_schedual.class');
			$this->db->where('sch_id',$id);
			$query=$this->db->get();
			$data=$query->result_array();
			return $data;
		}
		
		
		public function update_school_schedual($id,$data)
		{
			$this->db->where(array('sch_id' =>$id))->set($data)->update('school_schedual');
			return true;
			
		}

		function count_all($class_id,$schedual_day)
		{
			$query = $this->make_query($class_id,$schedual_day);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($class_id,$schedual_day)
		{
			//echo $class_id;exit;
			$query = "
			SELECT * FROM school_schedual as ss left join classes as c ON ss.class = c.class_id
			WHERE ss.status IN (0,1)  
			";

			if(isset($class_id) && $class_id != "")
			{
			$query .= "AND ss.class LIKE '%$class_id%'";
			}
			if(isset($schedual_day) && $schedual_day != "")
			{
			$query .= " AND ss.schedual_day LIKE '%$schedual_day%'";
			}
			
			$query .= "ORDER BY ss.sch_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $class_id,$schedual_day)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($class_id,$schedual_day);

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
					 $schedual_day 	 =	$row['schedual_day_ar'];
					 $class_name	 =	$row['class_name_ar'];
					 $subjects		 =	$row['subjects_ar'];
					 $class_grade	 =	$row['class_grade_ar'];
					}else{
					 $schedual_day 	=	$row['schedual_day'];
					 $class_name	=	$row['class_name'];
					 $class_grade	=	$row['class_grade'];
					 $subjects 		=	$row['subjects'];
					}
					$output .= '
					<tr>
						<td>'.$i.'</td>
						<td><strong>'. $schedual_day.'</strong></td>
						<td><strong>'. $class_name.' '. $class_grade.'</strong></td>
						<td><strong>'. $subjects.'</strong></td>
						<td><strong>'. $row['to_time']. ' to '. $row['from_time'].'</strong></td>
						
					
						</td>
						<td>';
					
                        					
						$output .= '<a href="'.base_url().'school_schedual/edit_classes_schedual/'.$row['sch_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit" title="Edit"><i class="fa fa-check-square-o"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'school_schedual/delete_schedual_school/'.$row['sch_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
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