<div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>W3softsol</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="<?php echo base_url();?>assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
				<?php $sess_data = $this->session->all_userdata();?>
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo $sess_data['first_name']; ?>&nbsp;<?php echo $sess_data['last_name']; ?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="<?php echo base_url('login/profile_page');?>"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
                        <!--li><a href="app-inbox.html"><i class="fa fa-commenting" aria-hidden="true"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-wrench" aria-hidden="true"></i>Settings</a></li-->
                        <li><a href="<?php echo base_url('login/logout');?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                    </ul>
                </div>                
            </div>  
            
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="header">Main</li>
                    <li class=""><a href="<?php echo base_url('dashboard/dashboard');?>"><i class="fa fa-sun-o" aria-hidden="true"></i><span><?php  echo $this->lang->line('Dashboard'); ?></span></a></li>
                    <li><a href="<?php echo base_url('users/users');?>"><i class="fa fa-user" aria-hidden="true"></i><span><?php  echo $this->lang->line('Users'); ?></span></a></li>
                    <li><a href="<?php echo base_url('admin/admission');?>"> <i class="fa fa-grav" aria-hidden="true"></i><span><?php  echo $this->lang->line('Student_Admission'); ?> </span></a></li>
					<li><a href="<?php echo base_url('staff/staff');?>"> <i class="fa fa-star" aria-hidden="true"></i><span><?php  echo $this->lang->line('Teacher_Registration'); ?></span></a></li>
					<li><a href="<?php echo base_url('teacher_schedual/teacher_schedual_view');?>"> <i class="fa fa-grav" aria-hidden="true"></i><span><?php  echo $this->lang->line('Teachers_Schedual'); ?></a></li>
					<li><a href="<?php echo base_url('school_schedual/school_schedual_view');?>"> <i class="fa fa-handshake-o" aria-hidden="true"></i><span><?php  echo $this->lang->line('Schools_Schedual'); ?></a></li>
					<li><a href="<?php echo base_url('class_schedual/class_schedual_view');?>"> <i class="fa fa-caret-square-o-up" aria-hidden="true"></i>
                    <span><?php  echo $this->lang->line('Class_Schedual'); ?></a></li>
                    <!--li><a href="employee.html"><i class="icon-users"></i><span>Employee</span></a></li>
                    <li><a href="activities.html"><i class="icon-equalizer"></i><span>Activities</span></a></li>
                    <li><a href="holidays.html"><i class="icon-flag"></i><span>Holidays</span></a></li>
                    <li><a href="events.html"><i class="icon-calendar"></i><span>Events</span></a></li>
                    <li><a href="payroll.html"><i class="icon-credit-card"></i><span>Payroll</span></a></li>
                    <li><a href="accounts.html"><i class="icon-wallet"></i><span>Accounts</span></a></li>
                    <li><a href="report.html"><i class="icon-bar-chart"></i><span>Report</span></a></li-->
					
                </ul>
				<a href="#sanctions" aria-expanded="false" data-toggle="collapse" > <span><?php  echo $this->lang->line('Settings'); ?></span></a>
                <ul id="sanctions" class="collapse list-unstyled metismenu ">
				<li><a href="<?php echo base_url('role/role');?>"><i class="fa fa-user-circle-o" aria-hidden="true"></i><span><?php  echo $this->lang->line('Roles'); ?></span></a></li>
				<li><a href="<?php echo base_url('classes/class_view');?>"><i class="fa fa-cubes" aria-hidden="true"></i><span><?php  echo $this->lang->line('Classes'); ?></span></a></li>
				<li><a href="<?php echo base_url('subject/subject');?>"><i class="fa fa-desktop" aria-hidden="true"></i><span><?php  echo $this->lang->line('Subjects'); ?></span></a></li>
               </ul>
            
            </nav>     
        </div>
    </div>


    