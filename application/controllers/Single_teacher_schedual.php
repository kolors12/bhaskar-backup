<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Single_teacher_schedual extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Single_teacher_schedual_model');
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
	
	
	public function single_teacher_schedual_view()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['subject'] = $this->Single_teacher_schedual_model->get_subject();
		$data['class'] = $this->Single_teacher_schedual_model->get_classes();
		$data['teacher_list'] = $this->Single_teacher_schedual_model->teacher_list($sess_data['emp_id']);
        $this->load->view('single_teachers_schedual',$data);
		
	}

	public function insert_teacher_schedual()
	    {
		  $gt = new GoogleTranslate();
		  
		   $data['teacher_name'] = $this->input->post('teacher_name');
		   $data['schedual_day'] = $this->input->post('schedual_day');
		   $data['class'] = $this->input->post('class');
		   $data['subjects'] = $this->input->post('subjects');
		   $data['to_time'] = $this->input->post('to_time');
		   $data['from_time'] = $this->input->post('from_time');
		
		   /*Translate String*/
		   $data['teacher_name_ar']=$gt->translate("en","ar",$this->input->post('teacher_name'));
		   $data['schedual_day_ar']=$gt->translate("en","ar",$this->input->post('schedual_day'));
		   $data['class_ar']=$gt->translate("en","ar",$this->input->post('class'));
		   $data['subjects_ar']=$gt->translate("en","ar",$this->input->post('subjects'));
		   $data['to_time_ar']=$gt->translate("en","ar",$this->input->post('to_time'));
		   $data['from_time_ar']=$gt->translate("en","ar",$this->input->post('from_time'));
		   
		   /**/
		   $result = $this->Single_teacher_schedual_model->insert_single_teacher_schedual($data);
		  
		   //print_r($result);die();
			if($result == '1')
			{
			   $this->load->helper('url');
			   $this->session->set_flashdata('message1','Successfully Added Teacher Schedual');
			   redirect('single_teacher_schedual/single_teacher_schedual_view');
			} else if ($result == '2') {
			   $this->load->helper('url');
			   $this->session->set_flashdata('message3','Please cheeck Timeings');
			   redirect('single_teacher_schedual/single_teacher_schedual_view');
			} else {
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Please The cheeck the data');
				redirect('single_teacher_schedual/single_teacher_schedual_view');
			}


	      }

	function fetch_data()
	{
		/*  ini_set('display_errors', 1);
		 ini_set('display_startup_errors', 1);
		 error_reporting(E_ALL); */

		sleep(1);
		$teacher_name = $this->input->post('teacher_name');
		$schedual_day = $this->input->post('schedual_day');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Single_teacher_schedual_model->count_all($teacher_name,$schedual_day);
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
		'admissions_list'   => $this->Single_teacher_schedual_model->fetch_data($config["per_page"], $start, $teacher_name,$schedual_day)
		);
		//print_r($output);die();
		echo json_encode($output);
	}
	

	function schedual_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$this->Teacher_schedual_model->schedual_status($id,$value);
		$this->load->helper('url');
		redirect('teacher_schedual/teacher_schedual_view');
	}
	
	function delete_schedual($id)
	{
	  $result = $this->Teacher_schedual_model->delete_schedual($id);
	  if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message3','Teacher Schedual Successfully Deleted ');
			redirect('teacher_schedual/teacher_schedual_view');
		} else {
			$this->load->helper('url');
			redirect('teacher_schedual/teacher_schedual_view');
		}
	 
	}
	
	public function edit_teacher_schedual($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['edit_teacher_sch'] = $this->Teacher_schedual_model->edit_tech_schedual($id);
	  $data['subject'] = $this->Teacher_schedual_model->get_subject();
	  $data['class'] = $this->Teacher_schedual_model->get_classes();
	  $this->load->view('edit_teacher_schedual',$data);
		
	}
	public function update_teacher_schedual()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$gt = new GoogleTranslate();
		$id = $this->input->post('id');
		$data['teacher_name'] = $this->input->post('teacher_name');
		$data['schedual_day'] = $this->input->post('schedual_day');
		$data['class'] = $this->input->post('class');
		$data['subjects'] = $this->input->post('subjects');
		$data['to_time'] = $this->input->post('to_time');
		$data['from_time'] = $this->input->post('from_time');
		/*Translate String*/
		$data['teacher_name_ar']=$gt->translate("en","ar",$this->input->post('teacher_name'));
		$data['schedual_day_ar']=$gt->translate("en","ar",$this->input->post('schedual_day'));
		$data['class_ar']=$gt->translate("en","ar",$this->input->post('class'));
		$data['subjects_ar']=$gt->translate("en","ar",$this->input->post('subjects'));
		$data['to_time_ar']=$gt->translate("en","ar",$this->input->post('to_time'));
		$data['from_time_ar']=$gt->translate("en","ar",$this->input->post('from_time'));
		$result = $this->Teacher_schedual_model->update_teacher_schedual($id,$data);
		if($result == '1')
			{
			   $this->load->helper('url');
			   $this->session->set_flashdata('message2',' Successfully Updated Teacher Schedual');
			   redirect('teacher_schedual/teacher_schedual_view');
			} else if ($result == '2') {
			   $this->load->helper('url');
			   $this->session->set_flashdata('message3','Please cheeck Timeings');
			   redirect('teacher_schedual/teacher_schedual_view');
			} else {
				$this->load->helper('url');
				$this->session->set_flashdata('message3','Please The cheeck the data');
				redirect('teacher_schedual/teacher_schedual_view');
			}
		
	}
	public function view_timetabel()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$this->load->view('timetabel_view',$data);
		
	}
	
	
}