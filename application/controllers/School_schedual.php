<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class School_schedual extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('School_schedual_model');
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
	
	
	public function school_schedual_view()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['subject'] = $this->School_schedual_model->get_subject();
		$data['class'] = $this->School_schedual_model->get_classes();
        $this->load->view('school_schedual',$data);
		
	}

	public function insert_school_schedual()
	    {
		  $gt = new GoogleTranslate();
		  
		   $data['schedual_day'] = $this->input->post('schedual_day');
		   $data['class'] = $this->input->post('class');
		   $data['subjects'] = $this->input->post('subjects');
		   $data['to_time'] = $this->input->post('to_time');
		   $data['from_time'] = $this->input->post('from_time');
		
		   /*Translate String*/
		   $data['schedual_day_ar']=$gt->translate("en","ar",$this->input->post('schedual_day'));
		   $data['class_ar']=$gt->translate("en","ar",$this->input->post('class'));
		   $data['subjects_ar']=$gt->translate("en","ar",$this->input->post('subjects'));
		   $data['to_time_ar']=$gt->translate("en","ar",$this->input->post('to_time'));
		   $data['from_time_ar']=$gt->translate("en","ar",$this->input->post('from_time'));
		   
		   /**/
		
			$result = $this->School_schedual_model->insert_school_schedual($data);

			if($result == '1')
			{
			   $this->load->helper('url');
			   $this->session->set_flashdata('message','Successfully Added School Schedual');
			   redirect('school_schedual/school_schedual_view');
			} else if ($result == '2') {
			   $this->load->helper('url');
			   $this->session->set_flashdata('message','Please cheeck Timeings');
			   redirect('school_schedual/school_schedual_view');
			} else {
				$this->load->helper('url');
				$this->session->set_flashdata('message','Please The cheeck the data');
				redirect('school_schedual/school_schedual_view');
			}

	     
	      }

	function fetch_data()
	{
		/*  ini_set('display_errors', 1);
		 ini_set('display_startup_errors', 1);
		 error_reporting(E_ALL); */

		sleep(1);
		$class_id = $this->input->post('class_id');
		$schedual_day = $this->input->post('schedual_day');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->School_schedual_model->count_all($class_id,$schedual_day);
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
		'admissions_list'   => $this->School_schedual_model->fetch_data($config["per_page"], $start, $class_id,$schedual_day)
		);
		//print_r($output);die();
		echo json_encode($output);
	}
	

	function school_schedual_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$this->School_schedual_model->school_schedual_status($id,$value);
		$this->load->helper('url');
		redirect('school_schedual/school_schedual_view');
	}
	
	function delete_schedual_school($id)
	{
	  $this->School_schedual_model->delete_schedual_school($id);
	  $this->load->helper('url');
	  redirect('school_schedual/school_schedual_view');
	}
	
	public function edit_classes_schedual($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['school_edit'] = $this->School_schedual_model->school_edit($id);
	  $this->load->view('edit_classes_schedual',$data);
		
	}
	public function update_school_schedual()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$gt = new GoogleTranslate();
		$id = $this->input->post('id');
		$data['schedual_day'] = $this->input->post('schedual_day');
		//$data['class'] = $this->input->post('class');
		$data['subjects'] = $this->input->post('subjects');
		$data['to_time'] = $this->input->post('to_time');
		$data['from_time'] = $this->input->post('from_time');
		/*Translate String*/
		$data['schedual_day_ar']=$gt->translate("en","ar",$this->input->post('schedual_day'));
		//$data['class_ar']=$gt->translate("en","ar",$this->input->post('class'));
		$data['subjects_ar']=$gt->translate("en","ar",$this->input->post('subjects'));
		$data['to_time_ar']=$gt->translate("en","ar",$this->input->post('to_time'));
		$data['from_time_ar']=$gt->translate("en","ar",$this->input->post('from_time'));
		$this->School_schedual_model->update_school_schedual($id,$data);
		redirect('school_schedual/school_schedual_view');
    }
	
	
}