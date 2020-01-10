<?php
defined('BASEPATH') OR exit('No direct script access allowed');
          require_once('googleTranslate.class.php');
		  
          class Admin extends CI_Controller {
		  public function __construct() {
		  parent::__construct();
		  error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		  $this->load->library('session');
		  $this->load->helper('url');
		  $this->load->model('Admin_model');
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
	
	
	public function admission()
	{
		$gt = new GoogleTranslate();	
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$data['class'] = $this->Admin_model->get_class();
		$data['admission_view'] = $this->Admin_model->admission_view();
		$this->load->view('admin_form',$data);
		
	}

	public function insert_admission(){
		
			$this->form_validation->set_rules("student_name","Student Name","required|trim");
			
			if($this->form_validation->run()== true)
            {
		    $gt = new GoogleTranslate();
			$data['student_name'] = $this->input->post('student_name');
			$data['date_of_birth'] = $this->input->post('date_of_birth');
			$data['age'] = $this->input->post('age');
			$data['level_of_grade'] = $this->input->post('level_of_grade');
			$data['place_of_birth'] = $this->input->post('place_of_birth');
			$data['gender'] = $this->input->post('gender');
			$data['status_of_student'] = $this->input->post('status_of_student');
			$data['father_iqama_no'] = $this->input->post('father_iqama_no');
			$data['mother_iqama_no'] = $this->input->post('mother_iqama_no');
			$data['student_iqama_no'] = $this->input->post('student_iqama_no');
			$data['father_occupation'] = $this->input->post('father_occupation');
			$data['religion'] = $this->input->post('religion');
			$data['nationality'] = $this->input->post('nationality');
			$data['residence_no'] = $this->input->post('residence_no');
			$data['father_work'] = $this->input->post('father_work');
			$data['emergency_no'] = $this->input->post('emergency_no');
			$data['last_school_name'] = $this->input->post('last_school_name');
			$data['mode_of_transportation'] = $this->input->post('mode_of_transportation');
			
			
			/* birth_certificate Code*/
			$configicon['upload_path'] = 'assets/birthcertificate/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$birthcertificate =$_FILES['birth_certificate']['name'];
			$configicon['file_name'] = $birthcertificate;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('birth_certificate'); 
			
			/* vaccination_certificate Code*/
			$configicon['upload_path'] = 'assets/vaccinationcertificate/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$vaccinationcertificate =$_FILES['vaccination_certificate']['name'];
			$configicon['file_name'] = $vaccinationcertificate;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('vaccination_certificate'); 
			
			/*iqama_certificate Code*/
			$configicon['upload_path'] = 'assets/iqamacertificate/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$iqamacertificate =$_FILES['iqama_certificate']['name'];
			$configicon['file_name'] = $iqamacertificate;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('iqama_certificate');
			
			/* Passport Code*/
			$configicon['upload_path'] = 'assets/passportfile/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$passportfile =$_FILES['passport_file']['name'];
			$configicon['file_name'] = $passportfile;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('passport_file');
			
			/* originalcertificates Code*/
			$configicon['upload_path'] = 'assets/originalcertificates/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$originalcertificates =$_FILES['original_certificates']['name'];
			$configicon['file_name'] = $originalcertificates;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('original_certificates');
			
			/* originalcertificates Code*/
			$configicon['upload_path'] = 'assets/photoschilds/'; # check path is correct
			$configicon['max_size'] = '10240000';
			$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
			$configicon['overwrite'] = FALSE;
			$configicon['remove_spaces'] = TRUE;
			$photoschilds =$_FILES['photos_childs']['name'];
			$configicon['file_name'] = $photoschilds;
			$this->load->library('upload', $configicon);
			$this->upload->initialize($configicon);
			$this->upload->do_upload('photos_childs');
			
			/*Translate String*/
			$data['student_name_ar']=$gt->translate("en","ar",$this->input->post('student_name'));
			$data['date_of_birth_ar']=$gt->translate("en","ar",$this->input->post('date_of_birth'));
			$data['age_ar']=$gt->translate("en","ar",$this->input->post('age'));
			$data['level_of_grade_ar']=$gt->translate("en","ar",$this->input->post('level_of_grade'));
			$data['place_of_birth_ar']=$gt->translate("en","ar",$this->input->post('place_of_birth'));
			$data['gender_ar']=$gt->translate("en","ar",$this->input->post('gender'));
			$data['status_of_student_ar']=$gt->translate("en","ar",$this->input->post('status_of_student'));
			$data['father_iqama_no_ar']=$gt->translate("en","ar",$this->input->post('father_iqama_no'));
			$data['mother_iqama_no_ar']=$gt->translate("en","ar",$this->input->post('mother_iqama_no'));
			$data['student_iqama_no_ar']=$gt->translate("en","ar",$this->input->post('student_iqama_no'));
			$data['father_occupation_ar']=$gt->translate("en","ar",$this->input->post('father_occupation'));
			$data['religion_ar']=$gt->translate("en","ar",$this->input->post('religion'));
			$data['nationality_ar']=$gt->translate("en","ar",$this->input->post('nationality'));
			$data['residence_no_ar']=$gt->translate("en","ar",$this->input->post('residence_no'));
			$data['father_work_ar']=$gt->translate("en","ar",$this->input->post('father_work'));
			$data['emergency_no_ar']=$gt->translate("en","ar",$this->input->post('emergency_no'));
			$data['last_school_name_ar']=$gt->translate("en","ar",$this->input->post('last_school_name'));
			$data['mode_of_transportation_ar']=$gt->translate("en","ar",$this->input->post('mode_of_transportation'));
			/**/
			
			$data['birth_certificate']  = 'assets/birthcertificate/'.$birthcertificate;
			$data['vaccination_certificate']  = 'assets/vaccinationcertificate/'.$vaccinationcertificate;
			$data['iqama_certificate']  = 'assets/iqamacertificate/'.$iqamacertificate;
			$data['passport_file']  = 'assets/passportfile/'.$passportfile;
			$data['original_certificates']  = 'assets/originalcertificates/'.$originalcertificates;
			$data['photos_childs']  = 'assets/photoschilds/'.$photoschilds;
			$result = $this->Admin_model->insert_admission($data);
			if($result == 'true')
			{
				$this->load->helper('url');
				$this->session->set_flashdata('message','Student Admission Successfully Completed ');
				redirect('admin/admission');
			} else {
			    $this->load->helper('url');
				redirect('admin/admission');
			}
	     }
	   }

	function fetch_data()
	{
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);

		sleep(1);
		$student_name = $this->input->post('student_name');
		$level_grade = $this->input->post('level_grade');
		$this->load->library('pagination');
		$config = array();
		$config['base_url'] = '#';
		$config['total_rows'] = $this->Admin_model->count_all($student_name, $level_grade);
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
		'admissions_list'   => $this->Admin_model->fetch_data($config["per_page"], $start, $student_name, $level_grade)
		);
		echo json_encode($output);
	}
	

	function admission_status($id,$value)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$result = $this->Admin_model->admission_status($id,$value);
		if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message','Student Admission Status Successfully Updated ');
			redirect('admin/admission');
		} else {
			$this->load->helper('url');
			redirect('admin/admission');
		}
		
	}
	
	function delete_admission($id)
	{
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
	    $result = $this->Admin_model->delete_admission($id);
	    if($result == 'true')
		{
			$this->load->helper('url');
			$this->session->set_flashdata('message','Student Admission Successfully Deleted ');
			redirect('admin/admission');
		} else {
			$this->load->helper('url');
			redirect('admin/admission');
		}
	  
	}
	
	public function view_details($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['admission_view'] = $this->Admin_model->view_details($id);
	  $this->load->view('view_details',$data);
		
	}
	public function edit_details($id)
	{
	  $sess_data = $this->session->all_userdata();
	  if($sess_data['user_id'] == '' ){redirect('login/login');}
	  $data['admission_view_edit'] = $this->Admin_model->view_details($id);
	  $this->load->view('edit_details',$data);
		
	}
	public function update_admission()
    {
		$sess_data = $this->session->all_userdata();
		if($sess_data['user_id'] == '' ){redirect('login/login');}
		$gt = new GoogleTranslate();
		$id = $this->input->post('id');
		$data['student_name'] = $this->input->post('student_name');
		$data['date_of_birth'] = $this->input->post('date_of_birth');
		$data['age'] = $this->input->post('age');
		$data['level_of_grade'] = $this->input->post('level_of_grade');
		$data['place_of_birth'] = $this->input->post('place_of_birth');
		$data['gender'] = $this->input->post('gender');
		$data['status_of_student'] = $this->input->post('status_of_student');
		$data['father_iqama_no'] = $this->input->post('father_iqama_no');
		$data['mother_iqama_no'] = $this->input->post('mother_iqama_no');
		$data['student_iqama_no'] = $this->input->post('student_iqama_no');
		$data['father_occupation'] = $this->input->post('father_occupation');
		$data['religion'] = $this->input->post('religion');
		$data['nationality'] = $this->input->post('nationality');
		$data['residence_no'] = $this->input->post('residence_no');
		$data['father_work'] = $this->input->post('father_work');
		$data['emergency_no'] = $this->input->post('emergency_no');
		$data['last_school_name'] = $this->input->post('last_school_name');
		$data['mode_of_transportation'] = $this->input->post('mode_of_transportation');
		
		/* birth_certificate Code*/
		$birthcertificate =$_FILES['birth_certificate']['name'];
		if($birthcertificate){
		$configicon['upload_path'] = 'assets/birthcertificate/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$birthcertificate =$_FILES['birth_certificate']['name'];
		$configicon['file_name'] = $birthcertificate;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('birth_certificate');
        $data['birth_certificate']  = 'assets/birthcertificate/'.$birthcertificate;		
		}
		/* vaccination_certificate Code*/
		$vaccinationcertificate =$_FILES['vaccination_certificate']['name'];
		if($vaccinationcertificate){
		$configicon['upload_path'] = 'assets/vaccinationcertificate/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$vaccinationcertificate =$_FILES['vaccination_certificate']['name'];
		$configicon['file_name'] = $vaccinationcertificate;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('vaccination_certificate');
        $data['vaccination_certificate']  = 'assets/vaccinationcertificate/'.$vaccinationcertificate;		
		}
		/*iqama_certificate Code*/
		$iqamacertificate =$_FILES['iqama_certificate']['name'];
		if($iqamacertificate){
		$configicon['upload_path'] = 'assets/iqamacertificate/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$iqamacertificate =$_FILES['iqama_certificate']['name'];
		$configicon['file_name'] = $iqamacertificate;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('iqama_certificate');
		$data['iqama_certificate']  = 'assets/iqamacertificate/'.$iqamacertificate;
		}
		/* Passport Code*/
		$passportfile =$_FILES['passport_file']['name'];
		if($passportfile){
		$configicon['upload_path'] = 'assets/passportfile/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$passportfile =$_FILES['passport_file']['name'];
		$configicon['file_name'] = $passportfile;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('passport_file');
		$data['passport_file']  = 'assets/passportfile/'.$passportfile;
		}
		/* originalcertificates Code*/
		$originalcertificates =$_FILES['original_certificates']['name'];
		if($originalcertificates){
		$configicon['upload_path'] = 'assets/originalcertificates/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$originalcertificates =$_FILES['original_certificates']['name'];
		$configicon['file_name'] = $originalcertificates;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('original_certificates');
		$data['original_certificates']  = 'assets/originalcertificates/'.$originalcertificates;
		}
		/* photoschilds Code*/
		$photoschilds =$_FILES['photos_childs']['name'];
		if($photoschilds){
		$configicon['upload_path'] = 'assets/photoschilds/'; # check path is correct
		$configicon['max_size'] = '10240000';
		$configicon['allowed_types'] = 'gif|jpg|png'; # add video extenstion on here
		$configicon['overwrite'] = FALSE;
		$configicon['remove_spaces'] = TRUE;
		$photoschilds =$_FILES['photos_childs']['name'];
		$configicon['file_name'] = $photoschilds;
		$this->load->library('upload', $configicon);
		$this->upload->initialize($configicon);
		$this->upload->do_upload('photos_childs');
		$data['photos_childs']  = 'assets/photoschilds/'.$photoschilds;
		}	
		
		/*Translate String*/
		$data['student_name_ar']=$gt->translate("en","ar",$this->input->post('student_name'));
		$data['date_of_birth_ar']=$gt->translate("en","ar",$this->input->post('date_of_birth'));
		$data['age_ar']=$gt->translate("en","ar",$this->input->post('age'));
		$data['level_of_grade_ar']=$gt->translate("en","ar",$this->input->post('level_of_grade'));
		$data['place_of_birth_ar']=$gt->translate("en","ar",$this->input->post('place_of_birth'));
		$data['gender_ar']=$gt->translate("en","ar",$this->input->post('gender'));
		$data['status_of_student_ar']=$gt->translate("en","ar",$this->input->post('status_of_student'));
		$data['father_iqama_no_ar']=$gt->translate("en","ar",$this->input->post('father_iqama_no'));
		$data['mother_iqama_no_ar']=$gt->translate("en","ar",$this->input->post('mother_iqama_no'));
		$data['student_iqama_no_ar']=$gt->translate("en","ar",$this->input->post('student_iqama_no'));
		$data['father_occupation_ar']=$gt->translate("en","ar",$this->input->post('father_occupation'));
		$data['religion_ar']=$gt->translate("en","ar",$this->input->post('religion'));
		$data['nationality_ar']=$gt->translate("en","ar",$this->input->post('nationality'));
		$data['residence_no_ar']=$gt->translate("en","ar",$this->input->post('residence_no'));
		$data['father_work_ar']=$gt->translate("en","ar",$this->input->post('father_work'));
		$data['emergency_no_ar']=$gt->translate("en","ar",$this->input->post('emergency_no'));
		$data['last_school_name_ar']=$gt->translate("en","ar",$this->input->post('last_school_name'));
		$data['mode_of_transportation_ar']=$gt->translate("en","ar",$this->input->post('mode_of_transportation'));
		
		$result = $this->Admin_model->update_admission($id,$data);
		if($result == 'true')
		{
		$this->load->helper('url');
		$this->session->set_flashdata('message','Student Admission Successfully Updated');
		redirect('admin/admission');
		} else {
		$this->load->helper('url');
		redirect('admin/admission');
		}
      
     
    }
	
	
}