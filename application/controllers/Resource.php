<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Resource extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Resource_model');
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
	
	
	public function resource_view()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['class'] = $this->Resource_model->get_class();
		$data['subject'] = $this->Resource_model->get_subject();
		$this->load->view('resource',$data);
		
	}
	
	
	public function insert_resource()
	 {
		       $gt = new GoogleTranslate();
			
				
				$data['class_id'] = $this->input->post('class_id');
				$data['subject_id'] = $this->input->post('subject_id');
				$data['topic_name'] = $this->input->post('topic_name');
				$data['url_name'] = $this->input->post('url_name');
				$data['description'] = $this->input->post('description');
				
				$count = count($_FILES['files']['name']);
				
				  for($i=0;$i<$count;$i++){
				  if(!empty($_FILES['files']['name'][$i])){
				  $_FILES['file']['name'] = $_FILES['files']['name'][$i];
				  $_FILES['file']['type'] = $_FILES['files']['type'][$i];
				  $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				  $_FILES['file']['error'] = $_FILES['files']['error'][$i];
				  $_FILES['file']['size'] = $_FILES['files']['size'][$i];
				  $config['upload_path'] = 'assets/resource/'; 
				  $config['allowed_types'] = 'jpg|jpeg|png|gif';
				  $config['max_size'] = '5000';
				  $config['file_name'] = $_FILES['files']['name'][$i];
			   
				  $this->load->library('upload',$config); 
				  if($this->upload->do_upload('file')){
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];
					$data['document'][] = $filename;
					  }
					}
			     }
				
			    /*Translate String*/
			     $data['topic_name_ar']=$gt->translate("en","ar",$this->input->post('topic_name'));
				 $data['description_ar']=$gt->translate("en","ar",$this->input->post('description'));
				
				$result = $this->Resource_model->insert_resource($data);
				 if($result == '1')
				{
					$this->load->helper('url');
					$this->session->set_flashdata('message','Class Resource Successfully Submited ');
					redirect('resource/resource_view');
				} else if ($result == '2') {
					$this->load->helper('url');
					$this->session->set_flashdata('message','Resource Allready Added Completed');
					redirect('resource/resource_view');
				} else {
					$this->load->helper('url');
					$this->session->set_flashdata('message','Please The cheeck the data');
					redirect('resource/resource_view');
				}
			
			
	     
	  }

	function fetch_data()
	{
		//  ini_set('display_errors', 1);
		// ini_set('display_startup_errors', 1);
		// error_reporting(E_ALL);

		sleep(1);
		$class_id = $this->input->post('class_id');
		$subjects_id = $this->input->post('subjects_id');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Resource_model->count_all($class_id,$subjects_id);
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
		'admissions_list'   => $this->Resource_model->fetch_data($config["per_page"], $start, $class_id,$subjects_id)
		);
		echo json_encode($output);
	}
	

	function delete_resource($id)
	{
	  $result = $this->Resource_model->delete_resource($id);
	  if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','Resource Successfully Deleted');
			redirect('resource/resource_view');
		} else {
			$this->load->helper('url');
			redirect('resource/resource_view');
		}
	  
	}

	public function view_all_resources($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['all_resources'] = $this->Resource_model->view_all_resources($id,$value);
		$this->load->view('view_all_resources',$data);
	}
	
	
	
}