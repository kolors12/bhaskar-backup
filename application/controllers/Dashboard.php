<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  //$this->load->model('admin/user_model');
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
	
	public function dashboard()
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$this->load->view('dashboard');
	}
}
?>
