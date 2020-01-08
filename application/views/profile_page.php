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
                        <input type="checkbox" class="lv-btn">
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
                        <h2>User Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="#">Oculux</a></li> -->
                            <!-- <li class="breadcrumb-item active" aria-current="page">Profile</li> -->
                            </ol>
                        </nav>
                    </div>            
                  
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card social">
                        <div class="profile-header d-flex justify-content-between justify-content-center">
                            <div class="d-flex">
                                <div class="mr-3">
                                    <img src="../assets/images/user.png" class="rounded" alt="">
                                </div>
                                <?php $sess_data = $this->session->all_userdata();?>
                                <div class="details">
                                    <h5 class="mb-0"><?php echo $sess_data['first_name'];?>  <?php echo $sess_data['last_name'];?></h5>
                                    <span class="text-light"><?php echo $sess_data['desgenation'];?></span>
                                    <p class="mb-0"><span>Posts: <strong>321</strong></span> <span>Followers: <strong>4,230</strong></span> <span>Following: <strong>560</strong></span></p>
                                </div>                                
                            </div>
                            <div>
                                <button class="btn btn-primary btn-sm">Follow</button>
                                <button class="btn btn-success btn-sm">Message</button>
                            </div>
                        </div>
                    </div>                    
                </div>               

                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="card">
                        <div class="header">
                            <h2>Info</h2>
                            <ul class="header-dropdown dropdown">                                
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <small class="text-muted">Address: </small>
                            <p>795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923731.7533500232!2d-120.39098936853455!3d37.63767091877441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522391841133" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p><?php echo $sess_data['user_email'];?></p>                            
                            <hr>
                            <small class="text-muted">Mobile: </small>
                            <p><?php echo $sess_data['mobile_number'];?></p>
                            <hr>
                            <small class="text-muted">Birth Date: </small>
                            <p class="m-b-0"><?php echo $sess_data['date_of_birth'];?></p>
                            <hr>
                            <small class="text-muted">Social: </small>
                            <p><i class="fa fa-twitter m-r-5"></i> twitter.com/example</p>
                            <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/example</p>
                            <p><i class="fa fa-github m-r-5"></i> github.com/example</p>
                            <p><i class="fa fa-instagram m-r-5"></i> instagram.com/example</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Information</h2>
                            <ul class="header-dropdown dropdown">                                
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <h6 ><p class="text-success col-sm-12 text-success text-center" ><?php echo $this->session->flashdata('message'); ?></p></h6>
                        <div class="body">      
                        <form  id="form1" action="<?php echo base_url('login/update_profile')?>"  method="POST">                              
                            <div class="row clearfix">
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $sess_data['user_id'];?>" placeholder="First Name" >
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">                                                
                                        <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $sess_data['first_name'];?>" placeholder="First Name" required>
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">                                                
                                        <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $sess_data['last_name'];?>" placeholder="Last Name" required>
                                    </div>
                                </div>
                              <div class="col-lg-4 col-md-6">
                                         <div class="form-group">
                                         <select name="gender" name="gender" id="gender" style="padding-top: 3px;" class="form-control sml-frm  cflo input-sm" required>
										 <option value="">Select Gender</option>
										 <option value="Male" <?php if(($sess_data['gender'])=="Male"){ echo 'selected=selected';  } ?> >Male</option>
										 <option value="Female" <?php if(($sess_data['gender'])=="Female"){ echo 'selected=selected';  } ?> >Female</option>
										 </select>
                                         </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar"></i></span>
                                            </div>
                                            <input data-provide="datepicker" name="date_of_birth" id="date_of_birth" data-date-autoclose="true" class="form-control" value="<?php echo $sess_data['date_of_birth'];?>" placeholder="Birthdate" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-globe"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="http://" required>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <select class="form-control" name="country" id="country" required>
                                            <option value="">-- Select Country --</option>
                                            <option value="India" <?php if(($sess_data['country'])=="India"){ echo 'selected=selected';  } ?> >India</option>
                                            <option value="Pakistan" <?php if(($sess_data['country'])=="Pakistan"){ echo 'selected=selected';  } ?> >Pakistan</option>
                                            <option value="USA" <?php if(($sess_data['country'])=="USA"){ echo 'selected=selected';  } ?> >USA</option>
                                            <option value="Japan" <?php if(($sess_data['country'])=="Japan"){ echo 'selected=selected';  } ?> >Japan</option>
                                            <option value="Italy" <?php if(($sess_data['country'])=="Italy"){ echo 'selected=selected';  } ?> >Italy</option>
                                            <option value="Togo" <?php if(($sess_data['country'])=="Togo"){ echo 'selected=selected';  } ?> >Togo</option>
                                            <option value="Angola" <?php if(($sess_data['country'])=="Angola"){ echo 'selected=selected';  } ?> >Angola</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="state" id="state"  value="<?php echo $sess_data['state'];?>" placeholder="State/Province" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  name="city" id="city" value="<?php echo $sess_data['city'];?>" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">                                                
                                        <textarea rows="4" type="text" class="form-control" id="address" name="address"  placeholder="Address" required><?php echo $sess_data['address'];?></textarea>
                                    </div>
                                </div>
                              
                            </div>
                           

                            <button type="submit" value="Submit" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                            <button type="button" class="btn btn-round btn-default">Cancel</button>
                        </div>
                        </form>
                    </div>
                   
                    <div class="card">
                        <div class="header">
                            <h2>Account Data</h2>
                        </div>
                        <div class="body">
                        <form id="form" method="post" action="#" onSubmit="return valid()" name="form1">
                            <div class="row clearfix">
                                                               
                                <div class="col-lg-12 col-md-12">
                                    <hr>
                                    <h6>Change Password</h6>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="oldpassword"  placeholder="Current Password" value="<?php echo $sess_data['user_password'];?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password"  placeholder="New Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm New Password" required>
                                        <span id='message'></span>
                                    </div>
                                   
                                </div>
                            </div>
                            <button type="submit" name="submit"  class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                            <button type="reset" class="btn btn-round btn-default">Cancel</button>
                            </form>
                        </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>

</div>
<style>
.error{
	color: red;
}
</style>
<script type="text/javascript">
    $("#form1").validate({
    });
    $("#form").validate({
    });

	$('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Password Not Matching').css('color', 'red');
});
    </script> 

<!-- Javascript -->
<?php $this->load->view('footer');?>
</body>
</html>