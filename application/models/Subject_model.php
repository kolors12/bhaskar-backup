<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Subject_model extends CI_Model {
	
	   public function admission_view()
		{
			$this->db->order_by('adm_id', 'Desc');
			$query_result=$this->db->get('admission_users');
			$result = $query_result->result_array();
			return $result;
		}
		
		function subject_status($id,$value)
		{
			
			$this->db->where(array('subject_id' =>$id))->set(array('status' =>(int)$value))->update('subjects');
			return true;
		}
		
		public function delete_subject($id)
		{
			$this->db->where('subject_id',$id);
			$query=$this->db->delete('subjects');
			if($query)
			{
			return true;
			}else
			{
			return false;
			}

		}
		public  function insert_subject($data)
		{
			$this->db->insert('subjects', $data);
			return true;
		}
		public function edit_subject($id)
		{
		    $query=$this->db->where(array('subject_id' =>$id))->get('subjects');
			$result = $query->result_array();
			return $result;
		}
		
		
		public function update_role($id,$data)
		{
			$this->db->where(array('subject_id' =>$id))->set($data)->update('subjects');
			return true;
		}

		function count_all($subject_name)
		{
			$query = $this->make_query($subject_name);
			$data = $this->db->query($query);
			return $data->num_rows();
		}
	
		function make_query($subject_name)
		{
			$query = "
			SELECT * FROM subjects 
			WHERE status IN (0,1)  
			";

			if(isset($subject_name) && $subject_name != "")
			{
			$query .= "AND subject_name LIKE '%$subject_name%'";
			}
			
			$query .= "ORDER BY subject_id DESC";
			return $query;
		}

		
		function fetch_data($limit, $start, $subject_name)
		{
			$siteLang=$this->session->userdata('site_lang');
			$query = $this->make_query($subject_name);

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
					$subject_name =	$row['subject_name_ar'];
					}else{
					$subject_name =	$row['subject_name'];
					}

					$output .= '
					<tr>
						<td>'.$i.'</td>
						<td>
							<strong>'. $subject_name.'</strong>
						</td>
						<td scope="row">';
						if($row['status'] == "0")
						{ 
							$output .= '<span class="label btn-xs badge badge-danger"> Inactive</span>.';
						}
						else
						{ 
							$output .= '<span class="label btn-xs badge badge-success">Active</span>';
						}
						$output .= '
						</td>
						<td>';
						if ($row['status'] == '1') { 
							$output .= '<a  Onclick="return Inactive();" href="'.base_url().'subject/subject_status/'.$row['subject_id'].'/0'.'" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-primary changestatus"><span  class="fa fa-ban" title="Inactive"></span></a>';
						 } else { 
						$output .= '<a  Onclick="return Active();" href="'.base_url().'subject/subject_status/'.$row['subject_id'].'/1'.'" data-toggle="tooltip" title="Active" class="btn btn-sm btn-primary changestatus"><span class="fa fa-check-circle-o" title="Active"></span></a>';
						 }
                        					
						$output .= '<a href="'.base_url().'subject/edit_subject/'.$row['subject_id'].'"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit" title="Edit"><i class="fa fa-check-square-o"></i></button></a>

						<a Onclick="return ConfirmDelete();" href="'.base_url().'subject/delete_subject/'.$row['subject_id'].'"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></button></a>
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