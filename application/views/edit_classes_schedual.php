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
                        <h1><?php  echo $this->lang->line('Edit_School_Schedual'); ?> </h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Edit Role</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
            </div>
			<a href="<?php echo base_url('school_schedual/school_schedual_view');?>"><button type="button" class="btn btn-success">Back</button></a>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							<?php foreach ($school_edit as $row) {?>
                                <div class="body mt-2">
								<form id ="form" action="<?php echo site_url('school_schedual/update_school_schedual')?>" method="POST">
                                    <div class="row clearfix">
									
                                          <input type="hidden" name="id" class="form-control" value="<?php echo $row['sch_id']?>">
                                          
                                       
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                         <strong><?php  echo $this->lang->line('Name_of_the_day'); ?> :</strong>
                                          <div class="form-group">
                                            <select class="form-control show-tick" name="schedual_day" required>
                                            <option value="">Select Day</option>
											<option value="Monday" <?php if(($row['schedual_day'])=="Monday"){ echo 'selected=selected';  } ?> >Monday</option>
										    <option value="Tuesday" <?php if(($row['schedual_day'])=="Tuesday"){ echo 'selected=selected';  } ?> >Tuesday</option>
                                            <option value="Wednesday" <?php if(($row['schedual_day'])=="Wednesday"){ echo 'selected=selected';  } ?> >Wednesday</option>
										    <option value="Thursday" <?php if(($row['schedual_day'])=="Thursday"){ echo 'selected=selected';  } ?> >Thursday</option>
                                            <option value="Friday" <?php if(($row['schedual_day'])=="Friday"){ echo 'selected=selected';  } ?> >Friday</option>
                                            <option value="Saturday" <?php if(($row['schedual_day'])=="Saturday"){ echo 'selected=selected';  } ?> >Saturday</option>
                                            <option value="Sunday" <?php if(($row['schedual_day'])=="Sunday"){ echo 'selected=selected';  } ?> >Sunday</option>
                                            
                                           
                                            </select>
                                         </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                       <strong><?php  echo $this->lang->line('Class_and_Grade'); ?> :</strong>
                                          <div class="form-group">
                                           <input type="text" name="class" class="form-control" placeholder="Class Name" value="<?php echo $row['class_name']?> <?php echo $row['class_grade'];?>" readonly >
                                         </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                        <strong><?php  echo $this->lang->line('Subject_Name'); ?> :</strong>
                                          <div class="form-group">
                                           <input type="text" name="subjects" class="form-control" placeholder="Class Name" value="<?php echo $row['subjects']?>" readonly>
                                         </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                        <strong><?php  echo $this->lang->line('From_Time'); ?> :</strong>
                                            <div class="form-group">
                                                <input type="time" name="from_time"  class="form-control " placeholder="To Time" value="<?php echo $row['from_time']?>" required>
											</div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                        <strong><?php  echo $this->lang->line('To_Time'); ?> :</strong>
                                            <div class="form-group">
                                                <input type="time" name="to_time"  class="form-control " placeholder="From Time" value="<?php echo $row['to_time']?>" required>
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
    ///validation///
    $(document).ready(function(){
    $("#form").validate({
        });
    }
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
