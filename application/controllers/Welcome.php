<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		public function __construct() {
		parent::__construct();
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  //$this->load->library('session');
		  $this->load->helper('url');
		  //$this->load->model('admin/user_model');
		 // $this->load->library("form_validation");
	}
	
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	
}
