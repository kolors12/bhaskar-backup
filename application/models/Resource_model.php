<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Resource_model extends CI_Model {
	
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

		public function view_all_resources($id,$value)
		{
		  
			$this->db->select('*');
			$this->db->from('resource');
			$this->db->join('classes','classes.class_id = resource.class_id');
			$this->db->join('subjects','subjects.subject_id = resource.subject_id');
			$this->db->where('resource.class_id',$id);
			$this->db->where('resource.subject_id',$value);
			$query=$this->db->get();
			$result=$query->result_array();
			return $result;
		}
		
		function class_status($id,$value)
		{
			
			$this->db->where(array('class_id' =>$id))->set(array('status' =>(int)$value))->update('classes');
			return true;
		}
		
		public function delete_resource($id)
		{
			$this->db->where('re_id ',$id);
			$query=$this->db->delete('resource');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		
		public function insert_resource($data){
			  
				$topic_name = $data['topic_name'];
				$url_name = $data['url_name'];
				$description = $data['description'];
				$document = $data['document'];
				
				$custom_array = array();
				
				for ($i = 0; $i < count($topic_name); $i++ ) 
				{
					$topic_name_val = "";
					if(isset($topic_name[$i])){
						$topic_name_val = $topic_name[$i];
					}
					$url_name_val = "";
					if(isset($url_name[$i])){
						$url_name_val = $url_name[$i];
					}
					$description_val = "";
					if(isset($description[$i])){
						$description_val = $description[$i];
					}
					$document_val = "";
					if(isset($document[$i])){
						$document_val = $document[$i];
					}
					
					
					$custom_array[$i] = array(
						"class_id" => $data['class_id'],
						"subject_id" => $data['subject_id'],
						"topic_name" => $topic_name_val,
						"url_name" => $url_name_val,
						"description" => $description_val,
						"document" => 'assets/resource/'.$document_val,
					);
					
					if( $this->db->insert('resource', $custom_array[$i]))
				    {
					$result = 1;
				     }else{
					$result = 6;
				}
					
				}
				/* echo '<pre>';
				print_r($custom_array);
				echo '</pre>';exit; */
				
				
				
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

		function count_all($class_id,$subjects_id)
		{
			$query = $this->make_query($class_id,$subjects_id);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($class_id,$subjects_id)
		{
			$query = "
			SELECT DISTINCT att.subject_id,att.class_id, att.topic_name,att.topic_name_ar,att.url_name,att.description,att.document,att.re_id,c.class_name,c.class_name_ar,
			c.class_grade,c.class_grade_ar, su.subject_name,su.subject_name_ar FROM resource as att
			left join classes as c ON c.class_id = att.class_id
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
			
			$query .= "ORDER BY att.re_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $class_id,$subjects_id)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($class_id,$subjects_id);

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
						$subject_name	 =	$row['subject_name_ar'];
						$topic_name	     =	$row['topic_name_ar'];
						$url_name	     =	$row['url_name_ar'];
						
					   }else{

						
						$class_name  	=	$row['class_name'];
						$class_grade	=	$row['class_grade'];
						$subjects 		=	$row['subjects'];
						$subject_name 	=	$row['subject_name'];
						$topic_name 	=	$row['topic_name'];
						$url_name 	    =	$row['url_name'];
						$document 	    =	$row['document'];
					   }
					
					   $output .= '
					   <tr>
						<td>'.$i.'</td>
						<td><a href="'.base_url().'resource/view_all_resources/'.$row['class_id'].'/'.$row['subject_id'].'">'. $class_name.' '.$class_grade.'</a></td>
						<td><strong>'. $subject_name .'</strong></td>
						<td><strong>'. $topic_name .'</strong></td>
						<td><strong>'. $url_name .'</strong></td>
						<td><a href="'.base_url().$document.'" download="'.$document.'" ><i class="fa fa-download"></i> Download</a></td>
						
					
						<td>';
						
						$output .= '
						<a Onclick="return ConfirmDelete();" href="'.base_url().'resource/delete_resource/'.$row['re_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
					</td>
					</tr>
					';
					//$i++;
				}
			}
			else
			{
				$output = '<td colspan="7" style="text-align:center;color:blue;"><h5>No Data Found</h5></td>';
			}
			return $output;
		}
}
///<td><a href="'.base_url().'classes_assign/view_students/'.$row['class_id'].'">'. $class_name.'</a></td>///