<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Login_model');
		  $this->load->library("form_validation");
		  $this->load->helper('language');
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
	
	
	
	
	public function login()
	{
		$this->form_validation->set_rules("user_email","Email","required|valid_email|trim");
        $this->form_validation->set_rules("user_password","Password","required|trim");
        
		if($this->form_validation->run()== true)
        {
		
		
		    $user_email= $this->input->post('user_email');
			$user_password= $this->input->post('user_password');
			
			$result = $this->Login_model->login($user_email,$user_password);
			
			if($result =='true')
			{
				$sess_data = $this->session->all_userdata();
				
			    redirect('dashboard/dashboard');
			}
			 else
            {
			    $this->session->set_flashdata('message','Password Worng');
				redirect('login/login');
			}
		}		
		 $this->load->view('login');
	}
	function logout(){
		
		  $user_session_items = array(
				
			'user_id' => $row->user_id,
			'first_name' => '',
			'last_name' => '',
			'user_email' => '',
			'mobile_number' => '',
			'user_password' => '',
			'role_type' => '',
			'user_status' => '',
				
		);
		$sess_data = $this->session->all_userdata();
		$this->session->unset_userdata($user_session_items);
		$this->session->sess_destroy();
		redirect('login/login');
		
	}
	
	
	
	
	public function profile_page()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$this->load->view('profile_page');
	}
}
?>
