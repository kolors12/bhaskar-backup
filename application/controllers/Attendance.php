<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Attendance extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Attendance_model');
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
	
	
	public function attendance_view()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['class'] = $this->Attendance_model->get_class();
		$data['subject'] = $this->Attendance_model->get_subject();
        $this->load->view('attendance',$data);
		
	}
		function students_details(){
		$clas_id = $this->input->post('id',TRUE);
		$data = $this->Attendance_model->students_details($clas_id)->result();
		echo json_encode($data);
		}
	public function insert_attendance()
	 {
		       $gt = new GoogleTranslate();
			
				$data['semister'] = $this->input->post('semister');
				$data['present_day'] = $this->input->post('present_day');
				$data['class_id'] = $this->input->post('class_id');
				$data['student_id'] = $this->input->post('student_id');
				$data['subject_id'] = $this->input->post('subject_id');
			    /*Translate String*/
				$data['semister_ar']=$gt->translate("en","ar",$this->input->post('semister'));
				//print_r($data);die();
			   $result = $this->Attendance_model->insert_attendance($data);
				 if($result == '1')
				{
					$this->load->helper('url');
					$this->session->set_flashdata('message','Class Attendance Successfully Submited ');
					redirect('attendance/attendance_view');
				} else if ($result == '2') {
					$this->load->helper('url');
					$this->session->set_flashdata('message','Attendance Allready Added Completed');
					redirect('attendance/attendance_view');
				} else {
					$this->load->helper('url');
					$this->session->set_flashdata('message','Please The cheeck the data');
					redirect('attendance/attendance_view');
				}
			
			
	     
	  }

	function fetch_data()
	{
		//  ini_set('display_errors', 1);
		// ini_set('display_startup_errors', 1);
		// error_reporting(E_ALL);

		sleep(1);
		$class_id = $this->input->post('class_id');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Attendance_model->count_all($class_id);
		$config['per_page'] = 9;
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
		'admissions_list'   => $this->Attendance_model->fetch_data($config["per_page"], $start, $class_id)
		);
		echo json_encode($output);
	}
	

	function delete_student_attendance($id)
	{
	  $result = $this->Attendance_model->delete_student_attendance($id);
	  if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message','Student Attendance Successfully Deleted');
			redirect('attendance/attendance_view');
		} else {
			$this->load->helper('url');
			redirect('attendance/attendance_view');
		}
	  
	}

	public function view_students($id)
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['all_students'] = $this->Classes_assign_model->all_students_view($id);
		//print_r($data['all_students']);exit;
		// $data['students'] = $this->Classes_assign_model->get_students();
        $this->load->view('view_students',$data);
		
	}
	
	
	
}