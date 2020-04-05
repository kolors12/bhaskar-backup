<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Staff extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Staff_model');
		  $this->load->helper('language');
		  $this->load->library("form_validation");
			$siteLang=$this->session->userdata('site_lang');
			if(!empty($siteLang))
			{
			$lan=$siteLang;
			$this->session->set_userdata('lan_id', $lan);

			$this->lang->load($siteLang, $siteLang);
			}
			else
			{
			$lan="english";
			$this->session->set_userdata('lan_id', $lan);
			$this->lang->load('english', 'english');
			}
		}
	
	
	public function staff()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['staff_roles'] = $this->Staff_model->staff_roles();
		$data['get_classes'] = $this->Staff_model->get_classes();
		$data['get_subjects'] = $this->Staff_model->get_subjects();
		$this->load->view('staff_page',$data);
		
	}

	public function insert_staff(){
		
			$gt = new GoogleTranslate();
			
			
			

			if(!empty($this->input->post('classes_to_teach'))){
			$cls = $this->input->post('classes_to_teach');
			$data=array(
			'classes_to_teach'=>implode(",",$cls),
			);
			}
			$data['subjects'] = $this->input->post('subjects_to');
			$data['f_name'] = $this->input->post('f_name');
			$data['l_name'] = $this->input->post('l_name');
			$data['emp_code'] = $this->input->post('emp_code');
			$data['work_no'] = $this->input->post('work_no');
			$data['personal_no'] = $this->input->post('personal_no');
			$data['work_email'] = $this->input->post('work_email');
			$data['personal_email'] = $this->input->post('personal_email');
			$data['gender'] = $this->input->post('gender');
			$data['comm_addr'] = $this->input->post('comm_addr');
			$data['per_addr'] = $this->input->post('per_addr');
			$data['role_in_school'] = $this->input->post('role_in_school');
			$data['class_teacher_for'] = $this->input->post('class_teacher_for');
			$data['currently_working'] = $this->input->post('currently_working');
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');
			$data['profile_name'] = $this->input->post('profile_name');
			$data['device_id'] = $this->input->post('device_id');
			$data['device_type'] = $this->input->post('device_type');
			
			
			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/staffimage/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$profileimg =$_FILES['profile_img']['name'];
			$configicon['file_name'] = $profileimg;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('profile_img'); 
			
			
			
			/*Translate String*/
			$data['f_name_ar']=$gt->translate("en","ar",$this->input->post('f_name'));
			$data['l_name_ar']=$gt->translate("en","ar",$this->input->post('l_name'));
			$data['emp_code_ar']=$gt->translate("en","ar",$this->input->post('emp_code'));
			$data['work_no_ar']=$gt->translate("en","ar",$this->input->post('work_no'));
			$data['personal_no_ar']=$gt->translate("en","ar",$this->input->post('personal_no'));
			$data['work_email_ar']=$gt->translate("en","ar",$this->input->post('work_email'));
			$data['personal_email_ar']=$gt->translate("en","ar",$this->input->post('personal_email'));
			$data['gender_ar']=$gt->translate("en","ar",$this->input->post('gender'));
			$data['comm_addr_ar']=$gt->translate("en","ar",$this->input->post('comm_addr'));
			$data['per_addr_ar']=$gt->translate("en","ar",$this->input->post('per_addr'));
			$data['role_in_school_ar']=$gt->translate("en","ar",$this->input->post('role_in_school'));
			$data['classes_to_teach_ar']=$gt->translate("en","ar",$this->input->post('classes_to_teach'));
			$data['class_teacher_for_ar']=$gt->translate("en","ar",$this->input->post('class_teacher_for'));
			$data['subjects_ar']=$gt->translate("en","ar",$this->input->post('subjects_to'));
			$data['currently_working_ar']=$gt->translate("en","ar",$this->input->post('currently_working'));
			$data['username_ar']=$gt->translate("en","ar",$this->input->post('username'));
			$data['password_ar']=$gt->translate("en","ar",$this->input->post('password'));
			$data['profile_name_ar']=$gt->translate("en","ar",$this->input->post('profile_name'));
			$data['device_id_ar']=$gt->translate("en","ar",$this->input->post('device_id'));
			$data['device_type_ar']=$gt->translate("en","ar",$this->input->post('device_type'));
			/**/
			$data['profile_img']  = 'assets/staffimage/'.$profileimg;
			//print_r($data);die();
			$result = $this->Staff_model->insert_role($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Teacher Successfully Added ');
				redirect('staff/staff');
			} else {
			    $this->load->helper('url');
				redirect('staff/staff');
			}
	     
	   }

	function fetch_data()
	{
		/* ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL); */

		sleep(1);
		$f_name = $this->input->post('f_name');
		$emp_code = $this->input->post('emp_code');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Staff_model->count_all($f_name, $emp_code);
		$config['per_page'] = 8;
		$config['uri_segment'] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['num_links'] = 3;
		$this->pagination->initialize($config);
		$page = $this->uri->segment(3);
		$start = ($page - 1) * $config['per_page'];
		$output = array(
		'pagination_link'  => $this->pagination->create_links(),
		'admissions_list'   => $this->Staff_model->fetch_data($config["per_page"], $start, $f_name, $emp_code)
		);
		echo json_encode($output);
	}
	

	function staff_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$result = $this->Staff_model->staff_status($id,$value);
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message1','Teacher Status Successfully Updated ');
			redirect('staff/staff');
		} else {
			$this->load->helper('url');
			redirect('staff/staff');
		}
		
	}
	
	function delete_status($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $result = $this->Staff_model->delete_status($id);
	  if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message3','Teacher Successfully Deleted ');
			redirect('staff/staff');
		} else {
			$this->load->helper('url');
			redirect('staff/staff');
		}
	  
	}
	
	public function view_staff_details($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['staff_view'] = $this->Staff_model->view_staff_details($id);
	  $this->load->view('view_staff_details',$data);
		
	}
	public function edit_staff($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['staff_view_edit'] = $this->Staff_model->edit_staff($id);
	  $this->load->view('edit_staff',$data);
		
	}
	public function update_staaff()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$gt = new GoogleTranslate();
		$id = $this->input->post('id');
		$data['f_name'] = $this->input->post('f_name');
		$data['l_name'] = $this->input->post('l_name');
		$data['emp_code'] = $this->input->post('emp_code');
		$data['work_no'] = $this->input->post('work_no');
		$data['personal_no'] = $this->input->post('personal_no');
		$data['work_email'] = $this->input->post('work_email');
		$data['personal_email'] = $this->input->post('personal_email');
		$data['gender'] = $this->input->post('gender');
		$data['comm_addr'] = $this->input->post('comm_addr');
		$data['per_addr'] = $this->input->post('per_addr');
		$data['role_in_school'] = $this->input->post('role_in_school');
		$data['classes_to_teach'] = $this->input->post('classes_to_teach');
		$data['class_teacher_for'] = $this->input->post('class_teacher_for');
		$data['subjects'] = $this->input->post('subjects');
		$data['currently_working'] = $this->input->post('currently_working');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['profile_name'] = $this->input->post('profile_name');
		$data['device_id'] = $this->input->post('device_id');
		$data['device_type'] = $this->input->post('device_type');
		
		/* birth_certificate Code*/
		$profileimg =$_FILES['profile_img']['name'];
		if($profileimg){
		$configicon['upload_path'] = 'assets/staffimage/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$profileimg =$_FILES['profile_img']['name'];
		$configicon['file_name'] = $profileimg;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('profile_img'); 
		$data['profile_img']  = 'assets/staffimage/'.$profileimg;		
		}
		
		
		/*Translate String*/
		$data['f_name_ar']=$gt->translate("en","ar",$this->input->post('f_name'));
		$data['l_name_ar']=$gt->translate("en","ar",$this->input->post('l_name'));
		$data['emp_code_ar']=$gt->translate("en","ar",$this->input->post('emp_code'));
		$data['work_no_ar']=$gt->translate("en","ar",$this->input->post('work_no'));
		$data['personal_no_ar']=$gt->translate("en","ar",$this->input->post('personal_no'));
		$data['work_email_ar']=$gt->translate("en","ar",$this->input->post('work_email'));
		$data['personal_email_ar']=$gt->translate("en","ar",$this->input->post('personal_email'));
		$data['gender_ar']=$gt->translate("en","ar",$this->input->post('gender'));
		$data['comm_addr_ar']=$gt->translate("en","ar",$this->input->post('comm_addr'));
		$data['per_addr_ar']=$gt->translate("en","ar",$this->input->post('per_addr'));
		$data['role_in_school_ar']=$gt->translate("en","ar",$this->input->post('role_in_school'));
		$data['classes_to_teach_ar']=$gt->translate("en","ar",$this->input->post('classes_to_teach'));
		$data['class_teacher_for_ar']=$gt->translate("en","ar",$this->input->post('class_teacher_for'));
		$data['subjects_ar']=$gt->translate("en","ar",$this->input->post('subjects'));
		$data['currently_working_ar']=$gt->translate("en","ar",$this->input->post('currently_working'));
		$data['username_ar']=$gt->translate("en","ar",$this->input->post('username'));
		$data['password_ar']=$gt->translate("en","ar",$this->input->post('password'));
		$data['profile_name_ar']=$gt->translate("en","ar",$this->input->post('profile_name'));
		$data['device_id_ar']=$gt->translate("en","ar",$this->input->post('device_id'));
		$data['device_type_ar']=$gt->translate("en","ar",$this->input->post('device_type'));
		
		$result = $this->Staff_model->update_staaff($id,$data);
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','Teacher Successfully Updated ');
			redirect('staff/staff');
		} else {
			$this->load->helper('url');
			redirect('staff/staff');
		}
	    
    }
	
	
}