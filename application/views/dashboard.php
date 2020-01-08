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
                        <h1>Dashboard</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li> -->
                            </ol>
                        </nav>
                    </div>            
                    <!--div class="col-md-6 col-sm-12 text-right hidden-xs">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
                        <a href="https://themeforest.net/item/oculux-bootstrap-4x-admin-dashboard-clean-modern-ui-kit/23091507" class="btn btn-sm btn-success" title="Themeforest"><i class="icon-basket"></i> Buy Now</a>
                    </div-->
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body ribbon">
                            <div class="ribbon-box green">5</div>
                            <a href="users.html" class="my_sort_cut text-muted">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span>Users</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="holidays.html" class="my_sort_cut text-muted">
                                <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>
                                <span>Holidays</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body ribbon">
                            <div class="ribbon-box orange">8</div>
                            <a href="events.html" class="my_sort_cut text-muted">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                <span>Events</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="payroll.html" class="my_sort_cut text-muted">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <span>Payroll</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="accounts.html" class="my_sort_cut text-muted">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                <span>Accounts</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="report.html" class="my_sort_cut text-muted">
                                <i class="fa fa-bug" aria-hidden="true"></i>
                                <span>Report</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Employee Structure</h2>
                        </div>
                        <div class="body text-center">
                            <div id="chart-bar-stacked" style="height: 130px"></div>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-6">
                                    <h6 class="mb-0">50</h6>
                                    <small class="text-muted">Male</small>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-0">17</h6>
                                    <small class="text-muted">Female</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="1700">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card-value float-right text-muted"><i class="wi wi-fog"></i></div>
                                        <h3 class="mb-1">12°C</h3>
                                        <div>London</div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card-value float-right text-muted"><i class="wi wi-day-cloudy"></i></div>
                                        <h3 class="mb-1">18°C</h3>
                                        <div>New York</div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card-value float-right text-muted"><i class="wi wi-sunrise"></i></div>
                                        <h3 class="mb-1">37°C</h3>
                                        <div>New Delhi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Employee Satisfaction</h2>
                        </div>
                        <div class="body text-center">
                            <div id="chart-area-spline-sracked" style="height: 130px"></div>
                            <hr>
                            <div class="row clearfix">
                                <div class="col-6">
                                    <h6 class="mb-0">195</h6>
                                    <small class="text-muted">Last Month</small>
                                </div>
                                <div class="col-6">
                                    <h6 class="mb-0">163</h6>
                                    <small class="text-muted">This Month</small>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="card-value float-right text-muted"><i class="icon-user"></i></div>
                            <h3 class="mb-1">13</h3>
                            <div>New Employee</div>
                        </div>
                    </div>
            
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Salary Statistics</h2>
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
                            <small class="text-muted">Salary Statistics Performance on this year</small>
                            <div id="flotChart" class="flot-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Employee Performance</h2>
                            <ul class="header-dropdown dropdown">
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
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Employee ID</th>
                                        <th>Phone</th>
                                        <th>Join Date</th>
                                        <th>Role</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="w60">
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                            <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                        </td>
                                        <td>
                                            <div class="font-15">Marshall Nichols</div>
                                            <span class="text-muted">marshall-n@gmail.com</span>
                                        </td>
                                        <td><span>LA-0215</span></td>
                                        <td><span>+ 264-625-2583</span></td>
                                        <td>24 Jun, 2015</td>
                                        <td>Web Designer</td>
                                        <td>
                                            <span class="chart">5,3,-7,8,-6,1,4,9</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                            <img src="<?php echo base_url();?>assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                        </td>
                                        <td>
                                            <div class="font-15">Susie Willis</div>
                                            <span class="text-muted">sussie-w@gmail.com</span>
                                        </td>
                                        <td><span>LA-0216</span></td>
                                        <td><span>+ 264-625-2583</span></td>
                                        <td>28 Jun, 2015</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <span class="chart">5,3,7,8,6,1,4,9</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                            <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                                        </td>
                                        <td>
                                            <div class="font-15">Debra Stewart</div>
                                            <span class="text-muted">debra@gmail.com</span>
                                        </td>
                                        <td><span>LA-0218</span></td>
                                        <td><span>+ 264-625-2583</span></td>
                                        <td>21 July, 2015</td>
                                        <td>Web Developer</td>
                                        <td>
                                            <span class="chart">-5,3,7,8,6,1,4,9</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                            <img src="<?php echo base_url();?>assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                        </td>
                                        <td>
                                            <div class="font-15">Francisco Vasquez</div>
                                            <span class="text-muted">francisv@gmail.com</span>
                                        </td>
                                        <td><span>LA-0222</span></td>
                                        <td><span>+ 264-625-2583</span></td>
                                        <td>18 Jan, 2016</td>
                                        <td>Team Leader</td>
                                        <td>
                                            <span class="chart">5,3,7,8,6,1,-4,9</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                            <img src="<?php echo base_url();?>assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                        </td>
                                        <td>
                                            <div class="font-15">Jane Hunt</div>
                                            <span class="text-muted">jane-hunt@gmail.com</span>
                                        </td>
                                        <td><span>LA-0232</span></td>
                                        <td><span>+ 264-625-2583</span></td>
                                        <td>08 Mar, 2016</td>
                                        <td>Android Developer</td>
                                        <td>
                                            <span class="chart">5,-3,7,8,6,-1,4,9</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<?php $this->load->view('footer');?>
</body>
</html>
