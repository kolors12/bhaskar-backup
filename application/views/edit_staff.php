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
                        <h1><?php  echo $this->lang->line('Teacher_Details_Edit'); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Teachers Admission Edit</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
				<a href="<?php echo base_url('staff/staff');?>"><button type="button" class="btn btn-primary">Back</button></a>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							<?php foreach ($staff_view_edit as $row) {?>
                                <div class="body mt-2">
								<form action="<?php echo site_url('staff/update_staaff')?>" method="POST" enctype="multipart/form-data">
                                    <div class="row clearfix">
									
                                                <input type="hidden" name="id" class="form-control" value="<?php echo $row['staff_id']?>">
                                          
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="f_name" class="form-control" value="<?php echo $row['f_name'];?>" placeholder="Frist Name">
											</div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="l_name" class="form-control " value="<?php echo $row['l_name'];?>"  placeholder="Last Name">
											</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="emp_code" class="form-control"  value="<?php echo $row['emp_code'];?>" placeholder="Employe Code">
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="work_no" class="form-control" value="<?php echo $row['work_no'];?>"  placeholder="Work Number">
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="personal_no" class="form-control" value="<?php echo $row['personal_no'];?>"  placeholder="Personal Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="work_email" class="form-control" value="<?php echo $row['work_email'];?>"  placeholder="Work Email">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="personal_email" class="form-control" value="<?php echo $row['personal_email'];?>"  placeholder="Personal Email">
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
                                                <textarea type="text" name="comm_addr" class="form-control"  placeholder="Present Address"><?php echo $row['comm_addr'];?></textarea>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <textarea type="text" name="per_addr" class="form-control" placeholder="Permanent Address"><?php echo $row['per_addr'];?></textarea>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="role_in_school">
                                                    <option value="">Role</option>
                                                    <option value="Old Student">Old Student</option>
                                                    <option value="New Student">New Student</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="classes_to_teach" class="form-control" value="<?php echo $row['classes_to_teach'];?>"  placeholder="Class to Teach" >
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="class_teacher_for" class="form-control" value="<?php echo $row['class_teacher_for'];?>"  placeholder="Class Teacher for">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="subjects" class="form-control" value="<?php echo $row['subjects'];?>"  placeholder="Subjects">
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="currently_working" class="form-control" value="<?php echo $row['currently_working'];?>"  placeholder="Currently Working">
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-control"value="<?php echo $row['username'];?>"   placeholder="username">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="password" class="form-control" placeholder="password">
                                            </div>
                                        </div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="profile_name" class="form-control" value="<?php echo $row['profile_name'];?>"  placeholder="Profile Name">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="device_id" class="form-control"  value="<?php echo $row['device_id'];?>"  placeholder="Device Id">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="device_type" class="form-control" value="<?php echo $row['device_type'];?>"  placeholder="Device Type">
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="file" name="profile_img" class="form-control"  placeholder="profile_img">
												<img src="<?php echo base_url().$row['profile_img'];?>"  width="130px;"/>
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
