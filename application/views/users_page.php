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
                        <h1>Users</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li> -->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users">List Of Users </a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#addUser">Add User</a></li>        
                        </ul>
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
                                <div class="table-responsive">
                                    <table class="table table-hover table-custom spacing8">
                                        <thead>
                                            <tr>
											    <th>S no</th>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Role Type</th>
												<th>User Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										    <?php 
											 if(!empty($users_page)){	
											 $i = 0;
												foreach ($users_page as $row) {
												++$i;
											?>	
                                            
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td>
                                               <strong><?php echo $row['first_name']?></strong>
                                                <span><?php echo $row['last_name']?></span>
                                                </td>
                                                <td><?php echo $row['mobile_number']?></td>
                                                <td><?php echo $row['user_email']?></td>
                                                <td><span class="badge badge-info"><?php echo $row['role_type']?></span></td>
												<td scope="row">
												<?php if($row['user_status'] == "0")
												{ ?>
												<!-- //echo "Active"; -->
												<span class="label btn-xs badge badge-danger"> Inactive</span>
												<?php  }
												else
												{ ?>
												<!-- echo "Inactive"; -->
												<span class="label btn-xs badge badge-success">Active</span>
												<?php  }
												?>
												</td>
                                                <td>
												<?php if ($row['user_status'] == '1') { ?>
												<a  Onclick="return Inactive();" href="<?php echo base_url(); ?>users/user_status/<?php echo $row['user_id'].'/0'?>" data-toggle="tooltip" title="Inactive" class="btn btn-sm btn-primary changestatus"><span  class="fa fa-ban" title="Inactive"></span></a>
												<?php } else { ?>
												<a  Onclick="return Active();" href="<?php echo base_url(); ?>users/user_status/<?php echo $row['user_id'].'/1'?>" data-toggle="tooltip" title="Active" class="btn btn-sm btn-primary changestatus"><span class="fa fa-check-circle-o" title="Active"></span></a>
												<?php } ?>
												
						
												<!-- <a href="<?php echo base_url(); ?>users/edit_user/<?php echo $row['user_id'];?>"><button type="button" class="btn btn-info btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-check-square-o"></i></button></a> -->
												
												<a Onclick="return ConfirmDelete();" href="<?php echo base_url(); ?>users/delete_user/<?php echo $row['user_id'];?>"><button type="button" class="btn btn-danger btn-sm removebtn" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-trash-o"></i></button></a>
												
                                                </td>
												<?php  $i++; } }else{?>
												<tr>
												<td colspan="5" style="text-align:center;color:red;">No Sets Found</td>
												</tr>
												<?php } ?>
                                            </tr>
                                           
                                          
                                           
                                        </tbody>
                                    </table>                
                                </div>
                            </div>
                            <div class="tab-pane" id="addUser">
                                <div class="body mt-2">
								<form action="<?php echo site_url('users/users')?>" method="POST">
                                    <div class="row clearfix">
									
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="first_name" class="form-control" placeholder="First Name *">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Email ID *">
                                            </div>
                                        </div>
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="mobile_number" class="form-control" placeholder="Mobile No">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12">
                                            <div class="form-group">
                                                <input type="text" name="confirm_password" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                         
										 <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <select class="form-control show-tick" name="role_type">
                                                    <option value="">Select Role Type</option>
                                                    <option value="Super Admin">Super Admin</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>
                                       </form>
                                        <div class="col-12">
                                            
                                            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
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
