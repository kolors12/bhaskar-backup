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
					<?php foreach ($admission_view_edit as $row) {?>
                        <h1><?php echo $row['student_name']?> <?php  echo $this->lang->line('Admission_Edit'); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Admission Application Edit</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
				
            </div>
			<a href="<?php echo base_url('admin/admission');?>"><button type="button" class="btn btn-success">Back</button></a>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							
                                <div class="body mt-2">
								<form action="<?php echo site_url('admin/update_admission')?>" method="POST" enctype="multipart/form-data">
                                    <div class="row clearfix">
									
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $row['adm_id']?>">
                                          
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="student_name" class="form-control" placeholder="Student's Full Name" value="<?php echo $row['student_name']?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="date" name="date_of_birth" class="form-control" placeholder="Date of Birth" value="<?php echo $row['date_of_birth']?>">
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $row['age']?>">
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="level_of_grade" class="form-control" placeholder="Level of Grade" value="<?php echo $row['level_of_grade']?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="place_of_birth" class="form-control" placeholder="Place Of Birth" value="<?php echo $row['place_of_birth']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                         <div class="form-group">
                                         <select name="gender" style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm" required>
										 <option value="">Select Gender</option>
										 <option value="Boy" <?php if(($row['gender'])=="Boy"){ echo 'selected=selected';  } ?> >Boy</option>
										 <option value="Girl" <?php if(($row['gender'])=="Girl"){ echo 'selected=selected';  } ?> >Girl</option>
										 </select>
                                         </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                              <select name="status_of_student" style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm" required>
												 <option value="">Status Of Student</option>
												 <option value="Old Student" <?php if(($row['status_of_student'])=="Old Student"){ echo 'selected=selected';  } ?> >Old Student</option>
												 <option value="New Student" <?php if(($row['status_of_student'])=="New Student"){ echo 'selected=selected';  } ?> >New Student</option>
										      </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="father_iqama_no" class="form-control" placeholder="Father's Iqama No" value="<?php echo $row['father_iqama_no']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="mother_iqama_no" class="form-control" placeholder="Mother's Iqama No" value="<?php echo $row['mother_iqama_no']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="student_iqama_no" class="form-control" placeholder="Student's Iqama No" value="<?php echo $row['student_iqama_no']?>">
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="father_occupation" class="form-control" placeholder="Father's Occupation"value="<?php echo $row['father_occupation']?>">
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="religion" class="form-control" placeholder="Religion" value="<?php echo $row['religion']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="nationality" class="form-control" placeholder="Nationality" value="<?php echo $row['nationality']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="residence_no" class="form-control" placeholder="Residence phone No"value="<?php echo $row['residence_no']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="father_work" class="form-control" placeholder="Father's work Place No" value="<?php echo $row['father_work']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="emergency_no" class="form-control" placeholder="Emergency No"value="<?php echo $row['emergency_no']?>">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="last_school_name" class="form-control" placeholder="The Last School (previous school)"value="<?php echo $row['last_school_name']?>">
                                            </div>
                                        </div>
                                         
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                               <select name="mode_of_transportation" style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm" required>
												 <option value="">Mode of Transportation</option>
												 <option value="Agree" <?php if(($row['mode_of_transportation'])=="Agree"){ echo 'selected=selected';  } ?> >Agree</option>
												 <option value="Disagree" <?php if(($row['mode_of_transportation'])=="Disagree"){ echo 'selected=selected';  } ?> >Disagree</option>
										      </select>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php  echo $this->lang->line('Birth_Certificate'); ?></label>
                                            <div class="form-group">
                                                <input type="file" name="birth_certificate" class="form-control" placeholder="Birth Certificate"><br>
												<img src="<?php echo base_url().$row['birth_certificate'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php  echo $this->lang->line('Vaccination_Certificate'); ?></label>
                                            <div class="form-group">
                                                <input type="file" name="vaccination_certificate" class="form-control" placeholder="Vaccination Certificate"><br>
												<img src="<?php echo base_url().$row['vaccination_certificate'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php  echo $this->lang->line('Valid Iqama of the father, Mother & student'); ?></label>
                                            <div class="form-group">
                                                <input type="file" name="iqama_certificate" class="form-control" placeholder="Valid Iqama of the father, Mother & student" ><br>
												<img src="<?php echo base_url().$row['iqama_certificate'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php  echo $this->lang->line('Valid Passport of the father, Mother & student'); ?></label>
                                            <div class="form-group">
                                                <input type="file" name="passport_file" class="form-control" placeholder="Valid Passport of the father, Mother & student" ><br>
												<img src="<?php echo base_url().$row['passport_file'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php  echo $this->lang->line('Child original previous Certificates stamped'); ?></label>
                                            <div class="form-group">
                                                <input type="file" name="original_certificates" class="form-control" placeholder="child's original previous certificates stamped" ><br>
												<img src="<?php echo base_url().$row['original_certificates'];?>"  width="130px;"/>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php  echo $this->lang->line('Photo for the child'); ?></label>
                                            <div class="form-group">
                                                <input type="file" name="photos_childs" class="form-control" placeholder="Photo for the child"><br>
												<img src="<?php echo base_url().$row['photos_childs'];?>"  width="130px;"/>
                                            </div>
                                        </div>
                                       </form>
                                        <div class="col-12">
                                            
                                            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                           
                                        </div>
                                    </div>
									
                                </div>
							<?php }?>
                            </div>
                            <div class="tab-pane" id="addUser">
                                
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
