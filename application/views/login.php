<!doctype html>
<html lang="en">

<?php $this->load->view('head');?>
<body class="theme-cyan font-montserrat">

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


<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);"><img src="<?php echo base_url();?>assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">W3softsol</a>
        </div>
		<h4><p class="text-danger col-sm-12 text-success" ><?php echo $this->session->flashdata('message'); ?></p></h4>
        <div class="card">
            <div class="body">
                <p class="lead">Login to your account</p>
                <form class="form-auth-small m-t-20"  action="<?php echo base_url('login/login');?>" method="post">
                    <div class="form-group">
                        <label for="signin-email" class="control-label sr-only">Email</label>
                        <input type="email" class="form-control round" name="user_email" value="<?php echo set_value("user_email")?>" placeholder="Email">
						<span class="text-danger" style="float: right"><?php echo form_error("user_email") ?></span>
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                        <input type="password" class="form-control round" name="user_password" value="<?php echo set_value("user_password")?>" placeholder="Password">
						<span class="text-danger" style="float: right"><?php echo form_error("user_password") ?></span>
                    </div>
                    <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox">
                            <span>Remember me</span>
                        </label>								
                    </div>
                    <!--button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button-->
					<input type="submit" class="btn btn-primary btn-round btn-block" name="submit"  value="LOGIN">
                    <div class="bottom">
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                        <span>Don't have an account? <a href="page-register.html">Register</a></span>
                    </div>
                </form>
				
            </div>
        </div>
    </div>
   
</div>
<!-- END WRAPPER -->
    
<?php $this->load->view('footer');?>	
</body>
</html>
