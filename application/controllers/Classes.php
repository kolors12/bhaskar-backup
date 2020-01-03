<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Classes extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Classes_model');
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
	
	
	public function class_view()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['subject'] = $this->Classes_model->get_subject();
        $this->load->view('classes',$data);
		
	}

	public function insert_class()
	 {
		      $gt = new GoogleTranslate();
			  $rev = $this->input->post('subjects_name');
			  $data=array(
			  'subjects_name'=>implode(",",$rev),
			  );
			  $data['class_name'] = $this->input->post('class_name');
			  $data['class_grade'] = $this->input->post('class_grade');
			
			
			/*Translate String*/
			   $data['subjects_name_ar']=$gt->translate("en","ar",$this->input->post('subjects_name'));
			   $data['class_name_ar']=$gt->translate("en","ar",$this->input->post('class_name'));
			   $data['class_grade_ar']=$gt->translate("en","ar",$this->input->post('class_grade'));
			   
			/**/
			
			if($this->Classes_model->insert_class($data))
			{
			   $this->load->helper('url');
			   redirect('classes/class_view');
			} else {
			   $this->load->helper('url');
			   redirect('classes/class_view');
			}
	     
	  }

	function fetch_data()
	{
		//  ini_set('display_errors', 1);
		// ini_set('display_startup_errors', 1);
		// error_reporting(E_ALL);

		sleep(1);
		$class_name = $this->input->post('class_name');
		$class_grade = $this->input->post('class_grade');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Classes_model->count_all($class_name,$class_grade);
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
		'admissions_list'   => $this->Classes_model->fetch_data($config["per_page"], $start, $class_name,$class_grade)
		);
		echo json_encode($output);
	}
	

	function class_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$this->Classes_model->class_status($id,$value);
		$this->load->helper('url');
		redirect('classes/class_view');
	}
	
	function delete_classes($id)
	{
	  $this->Classes_model->delete_classes($id);
	  $this->load->helper('url');
	  redirect('classes/class_view');
	}
	
	public function edit_classes($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['classes_edit'] = $this->Classes_model->edit_classes($id);
	  $this->load->view('edit_classes',$data);
		
	}
	public function update_class()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$gt = new GoogleTranslate();
		$id = $this->input->post('id');
		$data['class_name'] = $this->input->post('class_name');
		$data['class_grade'] = $this->input->post('class_grade');
		$data['subjects'] = $this->input->post('subjects');
		/*Translate String*/
		$data['class_name_ar']=$gt->translate("en","ar",$this->input->post('class_name'));
		$data['class_grade_ar']=$gt->translate("en","ar",$this->input->post('class_grade'));
		$data['subjects_ar']=$gt->translate("en","ar",$this->input->post('subjects'));
		$this->Classes_model->update_class($id,$data);
		redirect('classes/class_view');
    }
	
	
}