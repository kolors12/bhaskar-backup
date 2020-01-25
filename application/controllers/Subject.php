<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Subject extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Subject_model');
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
	
	
	public function subject()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
        $this->load->view('subject',$data);
		
	}

	public function insert_subject(){
		
			$gt = new GoogleTranslate();
			$data['subject_name'] = $this->input->post('subject_name');
			
			/*Translate String*/
			$data['subject_name_ar']=$gt->translate("en","ar",$this->input->post('subject_name'));
			/**/
			$result = $this->Subject_model->insert_subject($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Subject Successfully Added ');
				redirect('subject/subject');
			} else {
				$this->load->helper('url');
				redirect('subject/subject');
			}
	     
	   }

	function fetch_data()
	{
		/* ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL) */;

		sleep(1);
		$subject_name = $this->input->post('subject_name');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Subject_model->count_all($subject_name);
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
		'admissions_list'   => $this->Subject_model->fetch_data($config["per_page"], $start, $subject_name)
		);
		echo json_encode($output);
	}
	

	function subject_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$result = $this->Subject_model->subject_status($id,$value);
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message1','Subject Status Successfully Updated ');
			redirect('subject/subject');
		} else {
			$this->load->helper('url');
			redirect('subject/subject');
		}
		
	}
	
	function delete_subject($id)
	{
	  $result = $this->Subject_model->delete_subject($id);
	  if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message3','Subject Successfully Deleted ');
			redirect('subject/subject');
		} else {
			$this->load->helper('url');
			redirect('subject/subject');
		}
	 
	}
	
	public function edit_subject($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['subject_edit'] = $this->Subject_model->edit_subject($id);
	  $this->load->view('edit_subject',$data);
		
	}
	public function update_subject()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$gt = new GoogleTranslate();
		$id = $this->input->post('id');
		$data['subject_name'] = $this->input->post('subject_name');
		/*Translate String*/
		$data['subject_name_ar']=$gt->translate("en","ar",$this->input->post('subject_name'));
		$result = $this->Subject_model->update_Role($id,$data);
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','Subject Successfully Updated ');
			redirect('subject/subject');
		} else {
			$this->load->helper('url');
			redirect('subject/subject');
		}
		
    }
	
	
}