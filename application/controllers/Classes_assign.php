<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Classes_assign extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Classes_assign_model');
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
	
	
	public function class_assign_view()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
	    $data['subject'] = $this->Classes_assign_model->get_subject();
		$data['class'] = $this->Classes_assign_model->gett_class();
		$data['students'] = $this->Classes_assign_model->get_students();
        $this->load->view('classes_assign',$data);
		
	}
	function resource_details(){
		$subject_id = $this->input->post('id',TRUE);
		$class_id = $this->input->post('class_id',TRUE);
		$data = $this->Classes_assign_model->resource_details($subject_id,$class_id)->result();
		echo json_encode($data);
    }

	public function insert_assign_studenst()
	 {
		      $gt = new GoogleTranslate();
			  $sess_data = $this->session->all_userdata();
			  $data['class_id'] = $this->input->post('class_id');
			  $data['subject_id'] = $this->input->post('subject_id');
			  $data['resource'] = $this->input->post('resource');
			  $data['student_id'] = $this->input->post('student_id');
			  $data['from_date'] = $this->input->post('from_date');
			  $data['to_date'] = $this->input->post('to_date');
			  $data['description'] = $this->input->post('description');
			  $data['tech_id'] = $sess_data['emp_id'];
			  
			  $data['from_date_ar']=$gt->translate("en","ar",$this->input->post('from_date'));
			  $data['to_date_ar']=$gt->translate("en","ar",$this->input->post('to_date'));
			  $data['description_ar']=$gt->translate("en","ar",$this->input->post('description'));
				
			  $result = $this->Classes_assign_model->insert_assign_studenst($data);
			
			 if($result == '1')
			{
			   $this->load->helper('url');
			   $this->session->set_flashdata('message','Assign Successfully');
			   redirect('classes_assign/class_assign_view');
			} else if ($result == '2') {
			   $this->load->helper('url');
			   $this->session->set_flashdata('message','Student Allready Added To Class');
			   redirect('classes_assign/class_assign_view');
			} else {
				$this->load->helper('url');
				$this->session->set_flashdata('message','Please The cheeck the data');
				redirect('classes_assign/class_assign_view');
			}
			
			
	     
	  }

	function fetch_data()
	{
		//  ini_set('display_errors', 1);
		// ini_set('display_startup_errors', 1);
		// error_reporting(E_ALL);

		sleep(1);
		$class_id = $this->input->post('class_id');
		$subject_id = $this->input->post('subject_id');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Classes_assign_model->count_all($class_id,$subject_id);
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
		'admissions_list'   => $this->Classes_assign_model->fetch_data($config["per_page"], $start, $class_id,$subject_id)
		);
		echo json_encode($output);
	}
	

	function delete_assign_student($id)
	{
	  $result = $this->Classes_assign_model->delete_assign_student($id);
	  if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message','Student  Successfully Deleted');
			redirect('classes_assign/class_assign_view');
		} else {
			$this->load->helper('url');
			redirect('classes_assign/class_assign_view');
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