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
                        <h1><?php  echo $this->lang->line('Student_Admission');?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">School App</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Admission Application Form</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
            </div>
            <h6 ><p class="text-success col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message1'); ?></p></h6>
            <h6 ><p class="text-warning col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message2'); ?></p></h6>
			<h6 ><p class="text-danger col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message3'); ?></p></h6>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users"><?php  echo $this->lang->line('List_of_Admission'); ?></a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addUser"><?php  echo $this->lang->line('Add_Admission'); ?></a></li>        
                        </ul>
                        <div id="loading">
                        </div>
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							   
                                <div class="search-fields" >
                                   
								<div class="row clearfix">
								    <div class="col-lg-5 col-md-5 col-sm-12">
									 <div class="form-group" style="margin-top:20px;">
                                    <input type="text"   id="student_name" class="form-control" placeholder="<?php  echo $this->lang->line('Student_Name'); ?>" style="background-color: #fff; border-color: #fff;" required/>
									</div>
									</div>
									 <div class="col-lg-5 col-md-5 col-sm-12">
									  <div class="form-group" style="margin-top:20px;">
                                      <select class=" form-control show-tick " name="level_grade" id="level_grade" style="background-color: #fff; border-color: #fff;" required>
                                        <option value=""><?php  echo $this->lang->line('Level_of_Grade');?></option>
                                        <?php foreach ($class as $row) {?>
                                        <option value="<?php echo $row['class_id'];?>"><?php echo $row['class_name'];?> <?php echo $row['class_grade'];?></option>
                                        <?php }?>
                                    </select>
									</div>
									</div>
									 <div class="col-lg-2 col-md-2 col-sm-12" style="margin-top:20px;">
                                    <button id="search" class="btn btn-success"><?php  echo $this->lang->line('Search'); ?></button>
									</div>
                                </div>
                                
                                </div>
								
                                <div class="table-responsive">
                                    <table class="table table-hover table-custom spacing8">
                                        <thead>
                                            <tr>
											    <th><?php  echo $this->lang->line('S_no'); ?></th>
                                                <th><?php  echo $this->lang->line('Student_Name'); ?></th>
                                                <th><?php  echo $this->lang->line('Date_of_Birth'); ?></th>
                                                <th><?php  echo $this->lang->line('Student_Age'); ?></th>
                                                <th><?php  echo $this->lang->line('Level_of_Grade'); ?></th>
												<!--th><?php  //echo $this->lang->line('View_Details'); ?></th-->
												<th><?php  echo $this->lang->line('Admission_Status'); ?></th>
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
								<form   class="form-horizontal" id="form" action="<?php echo base_url('admin/insert_admission')?>"  method="POST" enctype="multipart/form-data">
                                    <div class="row clearfix">
									
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="student_name" class="form-control " placeholder="<?php  echo $this->lang->line('Student_Full_Name');?>" required>
												
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" id ="datepicker-12" name="date_of_birth" class="form-control" placeholder="<?php  echo $this->lang->line('Date_of_Birth');?>" required>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="age" class="form-control number" placeholder="<?php  echo $this->lang->line('Student_Age');?>" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="form-group">
                                            <select class=" form-control show-tick " name="level_of_grade" id="level_of_grade" required>
                                            <option value=""><?php  echo $this->lang->line('Level_of_Grade');?></option>
                                            <?php foreach ($class as $row) {?>
                                            <option value="<?php echo $row['class_id'];?>"><?php echo $row['class_name'];?> <?php echo $row['class_grade'];?></option>
                                            <?php }?>
                                           </select>
                                         </div>
                                        </div>
										
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="place_of_birth" class="form-control" placeholder="<?php  echo $this->lang->line('Place_Of_Birth');?>" required>
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
                                                <select class="form-control show-tick" name="status_of_student" required>
                                                    <option value=""><?php  echo $this->lang->line('Status_Of_Student');?></option>
                                                    <option value="Old Student">Old Student</option>
                                                    <option value="New Student">New Student</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="father_iqama_no" class="form-control" placeholder="<?php  echo $this->lang->line('Father_Iqama_No');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="mother_iqama_no" class="form-control" placeholder="<?php  echo $this->lang->line('Mother_Iqama_No');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="student_iqama_no" class="form-control" placeholder="<?php  echo $this->lang->line('Student_Iqama_No');?>"required>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="father_occupation" class="form-control" placeholder="<?php  echo $this->lang->line('Father_Occupation');?>"required>
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="religion" class="form-control" placeholder="<?php  echo $this->lang->line('Religion');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="nationality" class="form-control" placeholder="<?php  echo $this->lang->line('Nationality');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="residence_no" class="form-control" placeholder="<?php  echo $this->lang->line('Residence_phone_No');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="father_work" class="form-control" placeholder="<?php  echo $this->lang->line('Father_work_Place_No');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="emergency_no" class="form-control" placeholder="<?php  echo $this->lang->line('Emergency_No');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="user_name" class="form-control" placeholder="<?php  echo $this->lang->line('user_name');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="<?php  echo $this->lang->line('Password');?>" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="last_school_name" class="form-control" placeholder="<?php  echo $this->lang->line('The_Last_School_(previous school)');?>" required>
                                            </div>
                                        </div>
                                         
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="mode_of_transportation" required>
                                                    <option value=""><?php echo $this->lang->line('Mode_of_Transportation');?></option>
                                                    <option value="Agree">Agree</option>
                                                    <option value="Disagree">Disagree</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php echo $this->lang->line('Birth_Certificate');?></label>
                                            <div class="form-group">
                                                <input type="file" name="birth_certificate" class="form-control" placeholder="Birth Certificate" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php echo $this->lang->line('Vaccination_Certificate');?></label>
                                            <div class="form-group">
                                                <input type="file" name="vaccination_certificate" class="form-control" placeholder="Vaccination Certificate" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php echo $this->lang->line('Valid Iqama of the father, Mother & student');?></label>
                                            <div class="form-group">
                                                <input type="file" name="iqama_certificate" class="form-control" placeholder="Valid Iqama of the father, Mother & student" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php echo $this->lang->line('Valid Passport of the father, Mother & student');?></label>
                                            <div class="form-group">
                                                <input type="file" name="passport_file" class="form-control" placeholder="Valid Passport of the father, Mother & student" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php echo $this->lang->line('Child original previous Certificates stamped');?></label>
                                            <div class="form-group">
                                                <input type="file" name="original_certificates" class="form-control" placeholder="child's original previous certificates stamped" required>
                                            </div>
                                        </div>
										<div class="col-lg-6 col-md-6 col-sm-12">
										<label><?php echo $this->lang->line('Photo for the child');?></label>
                                            <div class="form-group">
                                                <input type="file" name="photos_childs" class="form-control" placeholder="Photo for the child" required>
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
        ////Date Picker//
        $( "#datepicker-12" ).datepicker();
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
            var student_name = $('#student_name').val();
            var level_grade = $('#level_grade').val();
            $.ajax({
                url:"<?php echo base_url(); ?>admin/fetch_data/"+page,
                method:"POST",
                dataType:"JSON",
                data:{action:action, student_name:student_name, level_grade:level_grade},
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
