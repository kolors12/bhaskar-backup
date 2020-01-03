<!doctype html>
<html lang="en">

<?php $this->load->view('head');?>
<style>
.pagination li a{
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #dee2e6;
}
#loading
{
 text-align:center; 
 background: url('<?php echo base_url(); ?>assets/images/loader/loader.gif') no-repeat center; 
 position: absolute;
    top: 100px;
    width: 100%;
    height: 710px;
    display:none;
}
</style>
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
                        <h1><?php  echo $this->lang->line('Teacher Registration'); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">School App</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Staff Application Form</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
            </div>
			
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users"><?php  echo $this->lang->line('List_of_Teachers'); ?></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addUser"><?php  echo $this->lang->line('Add_Teacher'); ?></a></li>        
                        </ul>
                        <div id="loading">
                        </div>
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							   
                                <div class="search-fields" >
                              <form  >
								<div class="row clearfix">
								    <div class="col-lg-5 col-md-5 col-sm-12">
									 <div class="form-group" style="margin-top:20px;">
                                    <input type="text"   id="f_name" class="form-control" placeholder="<?php  echo $this->lang->line('Frist Name');?>" style="background-color: #fff; border-color: #fff;" required/>
									</div>
									</div>
									 <div class="col-lg-5 col-md-5 col-sm-12">
									  <div class="form-group" style="margin-top:20px;">
                                    <input type="text" id="emp_code" class="form-control " placeholder="<?php  echo $this->lang->line('Employe_Code');?>"  style="background-color: #fff; border-color: #fff;" required/>
									</div>
									</div>
									 <div class="col-lg-2 col-md-2 col-sm-12" style="margin-top:20px;">
                                    <button id="search" class="btn btn-danger">Search</button>
									</div>
                                </div>
                                </form>
                                </div>
								
                                <div class="table-responsive">
                                    <table class="table table-hover table-custom spacing8">
                                        <thead>
                                            <tr>
											    <th><?php  echo $this->lang->line('S_no'); ?></th>
                                                <th><?php  echo $this->lang->line('Teacher_Name');?></th>
                                                <th><?php  echo $this->lang->line('Employe_Code');?></th>
                                                <th><?php  echo $this->lang->line('Work_Number');?></th>
                                                <th><?php  echo $this->lang->line('Work_Email');?></th>
												<th><?php  echo $this->lang->line('View_Details');?></th>
												<th><?php  echo $this->lang->line('Teacher_Status');?></th>
                                                <th><?php  echo $this->lang->line('Action'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                <div id="pagination_link" class="pull-right">
                                </div>                
                                </div>
                            </div>
                            <div class="tab-pane" id="addUser">
                                <div class="body mt-2">
							 <form   class="form-horizontal" id="form" action="<?php echo base_url('staff/insert_staff')?>"  method="POST" enctype="multipart/form-data">
                                    <div class="row clearfix">
									
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="f_name" class="form-control " placeholder="<?php  echo $this->lang->line('Frist_Name'); ?>" required>
											</div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="l_name" class="form-control " placeholder="<?php  echo $this->lang->line('Last_Name'); ?>"required>
											</div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="emp_code" class="form-control number" placeholder="<?php  echo $this->lang->line('Employe_Code');?>"required>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="work_no" class="form-control number" placeholder="<?php  echo $this->lang->line('Work_Number');?>"required>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                          <input type="text" name="personal_no" class="form-control number" max= "10"  placeholder="<?php echo $this->lang->line('Personal Number');?>"required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="email" name="work_email" class="form-control" placeholder="<?php  echo $this->lang->line('Work_Email');?>"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="personal_email" class="form-control" placeholder="<?php  echo $this->lang->line('Work_Email');?>"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="gender" required>
                                                    <option value=""><?php  echo $this->lang->line('Gender');?></option>
                                                    <option value="Boy">Boy</option>
                                                    <option value="Girl">Girl</option>
                                                </select>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <textarea type="text" name="comm_addr" class="form-control" placeholder="<?php  echo $this->lang->line('Present_Address');?>"required></textarea>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <textarea type="text" name="per_addr" class="form-control" placeholder="<?php  echo $this->lang->line('Permanent_Address');?>"required></textarea>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="role_in_school"required>
                                                    <option value=""><?php  echo $this->lang->line('Role');?></option>
                                                    <?php foreach ($staff_roles as $row) {?>
                                                    <option value="<?php echo $row['role_name'];?>"><?php echo $row['role_name'];?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                            <select class="selectpicker form-control show-tick" name="classes_to_teach[]" multiple data-live-search="true" required>
                                            <option value="">Select <?php  echo $this->lang->line('Class_to_Teach');?></option>
                                            <?php foreach ($get_classes as $row) {?>
                                            <option value="<?php echo $row['class_name'];?>"><?php echo $row['class_name'];?> <?php echo $row['class_grade'];?></option>
                                            <?php }?>
                                            </select>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="class_teacher_for" class="form-control" placeholder="<?php  echo $this->lang->line('Class_Teacher_for');?>"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                           <div class="form-group">
                                            <select class="selectpicker form-control show-tick" name="subjects_to[]" multiple="true" required>
                                            <option value="">Select <?php  echo $this->lang->line('Subjects');?></option>
                                            <?php foreach ($get_subjects as $row) {?>
                                            <option value="<?php echo $row['subject_name'];?>"><?php echo $row['subject_name'];?></option>
                                            <?php }?>
                                            </select>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="currently_working" class="form-control" placeholder="<?php  echo $this->lang->line('Currently working');?>"required>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="username" class="form-control" placeholder="<?php  echo $this->lang->line('username');?>"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="password"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="file" name="profile_img" class="form-control" placeholder="profile_img"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="profile_name" class="form-control" placeholder="<?php  echo $this->lang->line('Profile_Name');?>"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="device_id" class="form-control" placeholder="<?php  echo $this->lang->line('Device_Id');?>"required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="device_type" class="form-control" placeholder="<?php  echo $this->lang->line('Device_Type');?>"required>
                                            </div>
                                        </div>
                                         
										 
                                        <div class="col-12">
                                            
                                            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
                                        </div>
                                       </form>
                                    </div>
									
                                </div>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Latest compiled and minified CSS -->
<style>
.error{
	color: red;
}
</style>

<script>
    $(document).ready(function(){
        ///validation///
        $("#form").validate({
        });
        ///filter and pagenation//
        filter_data(1);
        $("#search").on("click", function(){
            filter_data(1);
        });
        function filter_data(page)
        {
            $('#loading').show();
            var action = 'fetch_data';
            var f_name = $('#f_name').val();
            var emp_code = $('#emp_code').val();
            $.ajax({
                url:"<?php echo base_url(); ?>staff/fetch_data/"+page,
                method:"POST",
                dataType:"JSON",
                data:{action:action, f_name:f_name, emp_code:emp_code},
                success:function(data)
                {
                    $('tbody').html(data.admissions_list);
                    $('#pagination_link').html(data.pagination_link);
                    $('#loading').hide();
                }
            })
        }
        $(document).on('click', '.pagination li a', function(event){
            event.preventDefault();
            var page = $(this).data('ci-pagination-page');
            filter_data(page);
        });
    });

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
