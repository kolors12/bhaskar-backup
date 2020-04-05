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
<body class="theme-orange font-montserrat light_version">

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
                        <h1>Resource</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Classes</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
            </div>
            <h6 ><p class="text-success col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message'); ?></p></h6>
            <h6 ><p class="text-danger col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message2'); ?></p></h6>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users">List of Resource</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addUser"> Add Resource</a></li>        
                        </ul>
                        <div id="loading">
                        </div>
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							   
                                <div class="search-fields" >
								<div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group" style="margin-top:20px;">
                                        <select class="form-control show-tick" id="class_id" name="class_id" style="background-color: #fff; border-color: #fff;" required>
                                        <option value=""><?php  echo $this->lang->line('Select_Class'); ?></option>
                                        <?php foreach ($class as $row) {?>
                                        <option value="<?php echo $row['class_id'];?>"><?php echo $row['class_name'];?> <?php echo $row['class_grade'];?></option>
                                        <?php }?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <div class="form-group" style="margin-top:20px;">
                                        <select class="form-control show-tick"  id="subjects_id" style="background-color: #fff; border-color: #fff;" required>
                                        <option value="">Select Subject</option>
                                        <?php foreach ($subject as $row) {?>
                                        <option value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>
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
												<th><?php  echo $this->lang->line('Classes_Name'); ?> & <?php  echo $this->lang->line('Grade_Name'); ?></th>
                                                <th><?php  echo $this->lang->line('Subject_Name'); ?></th>
                                                <th>Topic Name</th>
                                                <th>Url Name</th>
												<th>Document</th>
                                                
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
								<h5>Add To Resource</h5>
								<form   class="form-horizontal" id="form" action="<?php echo base_url('resource/insert_resource')?>"  method="post"  enctype="multipart/form-data">
                                    <div class="row clearfix">
									
									 <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="form-group">
                                            <select class=" form-control show-tick " name="class_id" id="classes_id" required>
                                            <option value="">Select Class & Grade</option>
                                            <?php foreach ($class as $row) {?>
                                            <option value="<?php echo $row['class_id'];?>"><?php echo $row['class_name'];?> <?php echo $row['class_grade'];?></option>
                                            <?php }?>
                                           </select>
                                         </div>
                                        </div>
                                      
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="form-group">
                                            <select class=" form-control show-tick " name="subject_id" id="subject_id" required>
                                            <option value="">Select Subject</option>
                                            <?php foreach ($subject as $row) {?>
                                            <option value="<?php echo $row['subject_id'];?>"><?php echo $row['subject_name'];?></option>
                                            <?php }?>
                                           </select>
                                         </div>
                                        </div>
                                      
                                        
                                       <div class="col-lg-6 col-md-6 col-sm-12">
                                          <div class="form-group">
                                           <h6> Topics</h6>
                                         </div>
                                        </div>
                                        <div class="col-12">
										<div class="field_wrapper">
											<div>
												<input type="text"  class="mr"  name="topic_name[]" value="" placeholder="Enter Topic Name">
												 <input type="text" class="mr"  name="url_name[]" value="" placeholder="Enter Url"/>
												 <input type="text" class="mr"  name="description[]" value="" placeholder="Enter Description"/>
												  <input type="file" class="mr"  name="files[]"    multiple=""  />
												   
												<a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus-circle btn btn-primary"></i></a>
											</div>
										</div>
                                       
                                       
                                            
                                            <button type="submit"  name="Submit" value="Submit" class="btn btn-primary">Submit</button>
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
.mr4{
	margin-right: 4px;
    border: 1px solid #e1e8ed;
    height: 36px;
    margin-bottom: 5px;
}
.mr{
    border: 1px solid #e1e8ed;
    height: 36px;
    margin-bottom: 5px;
}
</style>
 
<script>
    $(document).ready(function(){
        ////Date Picker//
        
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
            var class_id = $('#class_id').val();
            var subjects_id = $('#subjects_id').val();
            $.ajax({
                url:"<?php echo base_url(); ?>resource/fetch_data/"+page,
                method:"POST",
                dataType:"JSON",
                data:{action:action, class_id:class_id,subjects_id:subjects_id},
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

//////////

$(document).ready(function(){
    var maxField = 120; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" class="mr4" name="topic_name[]" value="" placeholder="Enter Topic Name"/><input type="text" class="mr4" name="url_name[]" value="" placeholder="Enter Your Url"/><input type="text" class="mr4" name="description[]" value="" placeholder=" Enter Description"/><input type="file" class="mr4" name="files[]" multiple="" value=""/><a href="javascript:void(0);" class="remove_button"><i class="fa fa-minus-circle btn btn-danger"></i></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
/////////////////
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
