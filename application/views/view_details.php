<!doctype html>
<html lang="en">

<?php $this->load->view('head');?>
<body class="theme-cyan font-montserrat light_version">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<!-- Theme Setting -->
<div class="themesetting">
    <a href="javascript:void(0);" class="theme_btn"><i class="icon-magic-wand"></i></a>
    <div class="card theme_color">
        <div class="header">
            <h2>Theme Color</h2>
        </div>
        <ul class="choose-skin list-unstyled mb-0">
            <li data-theme="green"><div class="green"></div></li>
            <li data-theme="orange"><div class="orange"></div></li>
            <li data-theme="blush"><div class="blush"></div></li>
            <li data-theme="cyan" class="active"><div class="cyan"></div></li>
            <li data-theme="indigo"><div class="indigo"></div></li>
            <li data-theme="red"><div class="red"></div></li>
        </ul>
    </div>
    <div class="card font_setting">
        <div class="header">
            <h2>Font Settings</h2>
        </div>
        <div>
            <div class="fancy-radio mb-2">
                <label><input name="font" value="font-krub" type="radio"><span><i></i>Krub Google font</span></label>
            </div>
            <div class="fancy-radio mb-2">
                <label><input name="font" value="font-montserrat" type="radio" checked><span><i></i>Montserrat Google font</span></label>
            </div>
            <div class="fancy-radio">
                <label><input name="font" value="font-roboto" type="radio"><span><i></i>Robot Google font</span></label>
            </div>
        </div>
    </div>
    <div class="card setting_switch">
        <div class="header">
            <h2>Settings</h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                Light Version
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="lv-btn" checked="">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                RTL Version
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="rtl-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                Horizontal Henu
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="hmenu-btn" >
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                Mini Sidebar
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="mini-sidebar-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="form-group">
            <label class="d-block">Traffic this Month <span class="float-right">77%</span></label>
            <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="d-block">Server Load <span class="float-right">50%</span></label>
            <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
            </div>
        </div>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

   <?php $this->load->view('header');?>
    <?php $this->load->view('sidemenu');?>
	

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
					<?php foreach ($admission_view as $row) {


                        $siteLang=$this->session->userdata('site_lang');
                      
                        if($siteLang == 'arabic'){
                            $student_name   =	$row['student_name_ar'];
                            $date_of_birth  =	$row['date_of_birth_ar'];
                            $age            =	$row['age_ar'];
                            $level_of_grade   =	$row['level_of_grade_ar'];
                            $place_of_birth   =	$row['place_of_birth_ar'];
                            $gender   =	$row['gender_ar'];
                            $status_of_student   =	$row['status_of_student_ar'];
                            $father_iqama_no   =	$row['father_iqama_no_ar'];
                            $mother_iqama_no   =	$row['mother_iqama_no_ar'];
                            $student_iqama_no   =	$row['student_iqama_no_ar'];
                            $father_occupation   =	$row['father_occupation_ar'];
                            $religion            =	$row['religion_ar'];
                            $nationality         =	$row['nationality_ar'];
                            $residence_no   =	$row['residence_no_ar'];
                            $father_work   =	$row['father_work_ar'];
                            $emergency_no   =	$row['emergency_no_ar'];
                            $last_school_name   =	$row['last_school_name_ar'];
                            $mode_of_transportation   =	$row['mode_of_transportation_ar'];
                            $class_name     =	$row['class_name_ar'];
					        $class_grade     =	$row['class_grade_ar'];
                         
                            }else{
                            $student_name   =	$row['student_name'];
                            $date_of_birth  =	$row['date_of_birth'];
                            $age            =	$row['age'];
                            $level_of_grade   =	$row['level_of_grade'];
                            $place_of_birth   =	$row['place_of_birth'];
                            $gender           =	$row['gender'];
                            $status_of_student   =	$row['status_of_student'];
                            $father_iqama_no   =	$row['father_iqama_no'];
                            $mother_iqama_no   =	$row['mother_iqama_no'];
                            $student_iqama_no   =	$row['student_iqama_no'];
                            $father_occupation   =	$row['father_occupation'];
                            $religion            =	$row['religion'];
                            $nationality   =	$row['nationality'];
                            $residence_no   =	$row['residence_no'];
                            $father_work   =	$row['father_work'];
                            $emergency_no   =	$row['emergency_no'];
                            $last_school_name   =	$row['last_school_name'];
                            $mode_of_transportation   =	$row['mode_of_transportation'];
                            $class_name    =	$row['class_name'];
					        $class_grade    =	$row['class_grade'];
                           
                            }
                        
                        ?>
                        <h1><?php echo $row['student_name']?> Admission Details</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Admission Application  Details</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
            </div>
			<a href="<?php echo base_url('admin/admission');?>"><button type="button" class="btn btn-primary">Back</button></a>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            
                                 
                        </ul>
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							
                                   <div class="body mt-2">
								
                                    <div class="row clearfix">
									
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Student_Full_Name');?></strong>:   <?php echo $student_name; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Date_of_Birth');?></strong>:  <?php echo $date_of_birth; ?>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              <strong><?php echo $this->lang->line('Student_Age');?></strong>:  <?php echo $age?>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                 <strong><?php echo $this->lang->line('Level_of_Grade');?></strong> : <?php echo $class_name; ?>  <?php echo $class_grade; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Place_Of_Birth');?></strong>:  <?php echo $place_of_birth?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Gender');?></strong>	:  <?php echo $gender?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Status_Of_Student');?></strong>:  <?php echo $status_of_student?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Father_Iqama_No');?></strong>:  <?php echo $father_iqama_no?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Mother_Iqama_No');?></strong>:  <?php echo $mother_iqama_no?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Student_Iqama_No');?></strong>:  <?php echo $student_iqama_no?>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Father_Occupation');?></strong>:  <?php echo $father_occupation?>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Religion');?></strong>:  <?php echo $religion?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Nationality');?></strong>:  <?php echo $nationality?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Residence_phone_No');?></strong>:  <?php echo $residence_no?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php echo $this->lang->line('Father_work_Place_No');?></strong>:  <?php echo $father_work?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              	<strong><?php echo $this->lang->line('Emergency_No');?></strong>:  <?php echo $emergency_no?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                             <strong><?php echo $this->lang->line('The_Last_School_(previous school)');?></strong>:  <?php echo $last_school_name?>
                                            </div>
                                        </div>
                                         
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Mode_of_Transportation');?></strong>:  <?php echo $mode_of_transportation?>
                                            </div>
                                        </div>
										
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Birth_Certificate');?></strong><br>  
												<img src="<?php echo base_url().$row['birth_certificate'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Vaccination_Certificate');?></strong><br>  
												<img src="<?php echo base_url().$row['vaccination_certificate'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Valid Iqama of the father, Mother & student');?></strong><br>  
												<img src="<?php echo base_url().$row['iqama_certificate'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Valid Passport of the father, Mother & student');?></strong><br>  
												<img src="<?php echo base_url().$row['passport_file'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Child original previous Certificates stamped');?></strong><br>  
												<img src="<?php echo base_url().$row['original_certificates'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php echo $this->lang->line('Photo for the child');?></strong><br>  
												<img src="<?php echo base_url().$row['photos_childs'];?>"  width="130px;"/>
                                            </div>
                                        </div>
                                     
                                       
                                    </div>
									
                                </div>
								 <?php }?>
                            </div>
                           
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script>
function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
	function Inactive()
    {
      var x = confirm("Are you sure you want to Inactive?");
      if (x)
          return true;
      else
        return false;
    }
	function Active()
    {
      var x = confirm("Are you sure you want to Active?");
      if (x)
          return true;
      else
        return false;
    }
</script>
<?php $this->load->view('footer');?>
</body>
</html>
