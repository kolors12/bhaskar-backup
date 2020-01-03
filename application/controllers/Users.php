<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
          class Users extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('User_model');
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
	
	
	public function users()
	{
	   
	   	$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		
		$this->form_validation->set_rules("first_name","Sect Name","required|trim");
		if($this->form_validation->run()== true)
        {
		$data['first_name'] = $this->input->post('first_name');
		$data['last_name'] = $this->input->post('last_name');
		$data['user_email'] = $this->input->post('email');
		$data['mobile_number'] = $this->input->post('mobile_number');
		$data['user_password'] = $this->input->post('password');
		$data['role_type'] = $this->input->post('role_type');
		
		/*Translate String*/
		$data['first_name_ar']=$gt->translate("en","ar",$this->input->post('first_name'));
		$data['last_name_ar']=$gt->translate("en","ar",$this->input->post('first_name'));
		/**/
		
		if($this->User_model->insert_users($data))
		{
		$this->load->helper('url');
			redirect('users/users');
		} else {
		$this->load->helper('url');
			redirect('users/users');
		}
		}
        $data['users_page'] = $this->User_model->users_view();
		$this->load->view('users_page',$data);
		
	}

	


	function user_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$this->User_model->user_status($id,$value);
		$this->load->helper('url');
		redirect('users/users');
	}
	function delete_user($id)
	{
	  $this->User_model->delete_user($id);
	  $this->load->helper('url');
	  redirect('users/users');
	}
	
	
}