<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Role extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Role_model');
		  $this->load->library("form_validation");
		  $siteLang=$this->session->userdata('site_lang');
		  //print_r($siteLang);
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
	
	
	public function role()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
        $this->load->view('role',$data);
		
	}

	public function insert_role(){
		
			$gt = new GoogleTranslate();
			$data['role_name'] = $this->input->post('role_name');
			
			/*Translate String*/
			$data['role_name_ar']=$gt->translate("en","ar",$this->input->post('role_name'));
			/**/
			$result = $this->Role_model->insert_role($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message1','Role Successfully Added ');
				redirect('role/role');
			} else {
			    $this->load->helper('url');
				redirect('role/role');
			}
	     
	   }

	function fetch_data()
	{
		/* ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL) */;

		sleep(1);
		$role_name = $this->input->post('role_name');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Role_model->count_all($role_name);
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
		'admissions_list'   => $this->Role_model->fetch_data($config["per_page"], $start, $role_name)
		);
		echo json_encode($output);
	}
	

	function role_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$result = $this->Role_model->role_status($id,$value);
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message1','Role Status Successfully Updated ');
			redirect('role/role');
		} else {
			$this->load->helper('url');
			redirect('role/role');
		}
		
	}
	
	function delete_role($id)
	{
	  $result = $this->Role_model->delete_role($id);
	  if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message3','Role Successfully Deleted ');
			redirect('role/role');
		} else {
			$this->load->helper('url');
			redirect('role/role');
		}
	
	}
	
	public function edit_role($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['admission_view_edit'] = $this->Role_model->edit_role($id);
	  $this->load->view('edit_role',$data);
		
	}
	public function update_role()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$gt = new GoogleTranslate();
		$id = $this->input->post('id');
		$data['role_name'] = $this->input->post('role_name');
		/*Translate String*/
		$data['role_name_ar']=$gt->translate("en","ar",$this->input->post('role_name'));
		$result = $this->Role_model->update_Role($id,$data);
		
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message2','Role Successfully Updated');
			redirect('role/role');
		} else {
			$this->load->helper('url');
			redirect('role/role');
		}
    }
	
	
}