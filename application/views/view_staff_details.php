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
                        <h1><?php  echo $this->lang->line('Teacher_Registration_Details'); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Staff Details</strong></li-->
                            </ol>
							
                        </nav>
						<a href="<?php echo base_url('staff/staff');?>"><button type="button" class="btn btn-primary">Back</button></a>
                    </div>            
                   
                </div>
            </div>
			
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            
                                 
                        </ul>
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							<?php foreach ($staff_view as $row) {

                                 $siteLang=$this->session->userdata('site_lang');
                      
                                 if($siteLang == 'arabic'){
                                     $f_name   =	$row['f_name_ar'];
                                     $l_name   =	$row['l_name_ar'];
                                     $emp_code   =	$row['emp_code_ar'];
                                     $work_no   =	$row['work_no_ar'];
                                     $personal_no   =	$row['personal_no_ar'];
                                     $work_email   =	$row['work_email_ar'];
                                     $personal_email   =	$row['personal_email_ar'];
                                     $gender   =	$row['gender_ar'];
                                     $comm_addr   =	$row['comm_addr_ar'];
                                     $per_addr   =	$row['per_addr'];
                                     $class_teacher_for   =	$row['class_teacher_for_ar'];
                                     $role_in_school   =	$row['role_in_school_ar'];
                                     $currently_working   =	$row['currently_working_ar'];
                                     $username   =	$row['username_ar'];
                                     $profile_name   =	$row['profile_name_ar'];
                                     $device_id   =	$row['device_id_ar'];
                                     $device_type   =	$row['device_type_ar'];
                                    
                                     
                                  
                                     }else{
                                     $f_name   =	$row['f_name'];
                                     $l_name   =	$row['l_name'];
                                     $emp_code   =	$row['emp_code'];
                                     $work_no   =	$row['work_no'];
                                     $personal_no   =	$row['personal_no'];
                                     $work_email   =	$row['work_email'];
                                     $personal_email   =	$row['personal_email'];
                                     $gender   =	$row['gender'];
                                     $comm_addr   =	$row['comm_addr'];
                                     $per_addr   =	$row['per_addr'];
                                     $class_teacher_for   =	$row['class_teacher_for'];
                                     $role_in_school   =	$row['role_in_school'];
                                     $currently_working   =	$row['currently_working'];
                                     $username   =	$row['username'];
                                     $profile_name   =	$row['profile_name'];
                                     $device_id   =	$row['device_id'];
                                     $device_type   =	$row['device_type'];
                                   
                                    
                                    
                                     }
                                
                                
                                ?>
                                   <div class="body mt-2">
								
                                    <div class="row clearfix">
									
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php  echo $this->lang->line('Frist_Name'); ?></strong> : <?php echo $f_name?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Last_Name'); ?></strong>:  <?php echo $l_name?>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              <strong><?php  echo $this->lang->line('Employe_Code'); ?></strong>:  <?php echo $emp_code?>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                 <strong><?php  echo $this->lang->line('Work_Number'); ?></strong> : <?php echo $work_no?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Personal Number'); ?></strong>:  <?php echo $rpersonal_no?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php  echo $this->lang->line('Work_Number'); ?></strong>	:  <?php echo $work_email?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Personal_Email'); ?></strong>:  <?php echo $personal_email?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Gender'); ?></strong>:  <?php echo $gender?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php  echo $this->lang->line('Present_Address'); ?></strong>:  <?php echo $comm_addr?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Permanent_Address'); ?></strong>:  <?php echo $per_addr?>
                                            </div>
                                        </div>
										
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Subjects'); ?></strong>:  <?php echo $row['subjects']?>
                                               <?php $sub = $row['subjects'];
                                                 $array =  explode(',', $sub);
                                                 foreach ($array as $sb) {
                                                 echo "<br>$sb";
                                                 }
                                                 ?>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Class_to_Teach'); ?></strong>: 
                                                <?php $numbers = $row['classes_to_teach'];
                                                 $array =  explode(',', $numbers);
                                                 foreach ($array as $item) {
                                                 echo "<br>$item";
                                                 }
                                                 ?>
                                               
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Class_Teacher_for'); ?></strong>:  <?php echo $class_teacher_for?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Role'); ?></strong>:  <?php echo $role_in_school?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <strong><?php  echo $this->lang->line('Currently working'); ?></strong>:  <?php echo $currently_working?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              	<strong><?php  echo $this->lang->line('username'); ?></strong>:  <?php echo $username?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              	<strong><?php  echo $this->lang->line('Profile_Name'); ?></strong>:  <?php echo $profile_name?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              	<strong><?php  echo $this->lang->line('Device_Id'); ?></strong>:  <?php echo $device_id?>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              	<strong><?php  echo $this->lang->line('Device_Type'); ?></strong>:  <?php echo $device_type?>
                                            </div>
                                        </div>
										
										
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <strong><?php  echo $this->lang->line('	'); ?></strong><br>  
												<img src="<?php echo base_url().$row['profile_img'];?>"  width="130px;"/>
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
