<!doctype html>
<html lang="en">

<head>
<title>Oculux HR | Payroll</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="keywords" content="admin template, Oculux admin template, dashboard template, flat admin template, responsive admin template, web app, Light Dark version">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/animate-css/vivify.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/site.min.css">

</head>
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

    <nav class="navbar top-navbar">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.html"><img src="<?php echo base_url();?>assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-envelope"></i>
                            <span class="notification-dot bg-green">4</span>
                        </a>
                        <ul class="dropdown-menu right_chat email vivify fadeIn">
                            <li class="header green">You have 4 New eMail</li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                        <div class="media-body">
                                            <span class="name">James Wert <small class="float-right text-muted">Just now</small></span>
                                            <span class="message">Update GitHub</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                        <div class="media-body">
                                            <span class="name">Folisise Chosielie <small class="float-right text-muted">12min ago</small></span>
                                            <span class="message">New Messages</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="<?php echo base_url();?>assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Louis Henry <small class="float-right text-muted">38min ago</small></span>
                                            <span class="message">Design bug fix</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media mb-0">
                                        <img class="media-object " src="<?php echo base_url();?>assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Debra Stewart <small class="float-right text-muted">2hr ago</small></span>
                                            <span class="message">Fix Bug</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="notification-dot bg-azura">4</span>
                        </a>
                        <ul class="dropdown-menu feeds_widget vivify fadeIn">
                            <li class="header blue">You have 4 New Notifications</li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left bg-red"><i class="fa fa-check"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-danger">Issue Fixed <small class="float-right text-muted">9:10 AM</small></h4>
                                        <small>WE have fix all Design bug with Responsive</small>
                                    </div>
                                </a>
                            </li>                               
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left bg-info"><i class="fa fa-user"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-info">New User <small class="float-right text-muted">9:15 AM</small></h4>
                                        <small>I feel great! Thanks team</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left bg-orange"><i class="fa fa-question-circle"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-warning">Server Warning <small class="float-right text-muted">9:17 AM</small></h4>
                                        <small>Your connection is not private</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="feeds-left bg-green"><i class="fa fa-thumbs-o-up"></i></div>
                                    <div class="feeds-body">
                                        <h4 class="title text-success">2 New Feedback <small class="float-right text-muted">9:22 AM</small></h4>
                                        <small>It will give a smart finishing to your site</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown language-menu">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="fa fa-language"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item pt-2 pb-2" href="#"><img src="<?php echo base_url();?>assets/images/flag/us.svg " class="w20 mr-2 rounded-circle"> US English</a>
                            <a class="dropdown-item pt-2 pb-2" href="#"><img src="<?php echo base_url();?>assets/images/flag/gb.svg " class="w20 mr-2 rounded-circle"> UK English</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item pt-2 pb-2" href="#"><img src="<?php echo base_url();?>assets/images/flag/russia.svg " class="w20 mr-2 rounded-circle"> Russian</a>
                            <a class="dropdown-item pt-2 pb-2" href="#"><img src="<?php echo base_url();?>assets/images/flag/arabia.svg " class="w20 mr-2 rounded-circle"> Arabic</a>
                            <a class="dropdown-item pt-2 pb-2" href="#"><img src="<?php echo base_url();?>assets/images/flag/france.svg " class="w20 mr-2 rounded-circle"> French</a>
                        </div>
                    </li>
                    <li><a href="javascript:void(0);" class="megamenu_toggle icon-menu" title="Mega Menu">Mega</a></li>
                    
                </ul>
            </div>
            
            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result"><i class="icon-magnifier"></i></a></li>
                        <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i><span class="notification-dot bg-pink">2</span></a></li>
                        <li><a href="page-login.html" class="icon-menu"><i class="icon-power"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
    </nav>

    <div class="search_div">
        <div class="card">
            <div class="body">
                <form id="navbar-search" class="navbar-form search-form">
                    <div class="input-group mb-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            <a href="javascript:void(0);" class="search_toggle btn btn-danger"><i class="icon-close"></i></a>
                        </div>
                    </div>
                </form>
            </div>            
        </div>
        <span>Search Result <small class="float-right text-muted">About 90 results (0.47 seconds)</small></span>
        <div class="table-responsive">
            <table class="table table-hover table-custom spacing5">
                <tbody>
                    <tr>
                        <td class="w40">
                            <span>01</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>SS</span></div>
                                <div class="ml-3">
                                    <a href="page-invoices-detail.html" title="">South Shyanne</a>
                                    <p class="mb-0">south.shyanne@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>02</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url();?>assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Zoe Baker</a>
                                    <p class="mb-0">zoe.baker@example.com</p>
                                </div>
                            </div>                                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>03</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                    <div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>CB</span></div>
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Colin Brown</a>
                                    <p class="mb-0">colinbrown@example.com</p>
                                </div>
                            </div>                                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>04</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avtar-pic w35 bg-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>KG</span></div>
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Kevin Gill</a>
                                    <p class="mb-0">kevin.gill@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>05</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url();?>assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Brandon Smith</a>
                                    <p class="mb-0">Maria.gill@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>06</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url();?>assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Kevin Baker</a>
                                    <p class="mb-0">kevin.baker@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>07</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo base_url();?>assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Zoe Baker</a>
                                    <p class="mb-0">zoe.baker@example.com</p>
                                </div>
                            </div>                                        
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="megamenu" class="megamenu particles_js">
        <a href="javascript:void(0);" class="megamenu_toggle btn btn-danger"><i class="icon-close"></i></a>
        <div class="container">
            <div class="row clearfix">
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body ribbon">
                            <div class="ribbon-box green">5</div>
                            <a href="users.html" class="my_sort_cut text-muted">
                                <i class="icon-users"></i>
                                <span>Users</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="holidays.html" class="my_sort_cut text-muted">
                                <i class="icon-like"></i>
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
                                <i class="icon-calendar"></i>
                                <span>Events</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="payroll.html" class="my_sort_cut text-muted">
                                <i class="icon-credit-card"></i>
                                <span>Payroll</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="accounts.html" class="my_sort_cut text-muted">
                                <i class="icon-calculator"></i>
                                <span>Accounts</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="card">
                        <div class="body">
                            <a href="report.html" class="my_sort_cut text-muted">
                                <i class="icon-pie-chart"></i>
                                <span>Report</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-4 col-sm-12">
                    <div class="card w_card3">
                        <div class="body">
                            <div class="text-center"><i class="icon-picture text-info"></i>
                                <h4 class="m-t-25 mb-0">104 Picture</h4>
                                <p>Your gallery download complete</p>
                                <a href="javascript:void(0);" class="btn btn-info btn-round">Download now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card w_card3">
                        <div class="body">
                            <div class="text-center"><i class="icon-diamond text-success"></i>
                                <h4 class="m-t-25 mb-0">813 Point</h4>
                                <p>You are doing great job!</p>
                                <a href="javascript:void(0);" class="btn btn-success btn-round">Read now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card w_card3">
                        <div class="body">
                            <div class="text-center"><i class="icon-social-twitter text-primary"></i>
                                <h4 class="m-t-25 mb-0">3,756</h4>
                                <p>New Followers on Twitter</p>
                                <a href="javascript:void(0);" class="btn btn-primary btn-round">Find more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Anyone send me a message
                            <div class="float-right">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Anyone seeing my profile page
                            <div class="float-right">
                                <label class="switch">
                                    <input type="checkbox" checked="">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Anyone posts a comment on my post
                            <div class="float-right">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>

    <div id="rightbar" class="rightbar">
        <div class="body">
            <ul class="nav nav-tabs2">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Chat-one">Chat</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-list">List</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-groups">Groups</a></li>
            </ul>
            <hr>
            <div class="tab-content">
                <div class="tab-pane vivify fadeIn delay-100 active" id="Chat-one">
                    <div class="chat_detail">
                        <ul class="chat-widget clearfix">
                            <li class="left float-left">
                                <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                                <div class="chat-info">       
                                    <span class="message">Hello, John<br>What is the update on Project X?</span>
                                </div>
                            </li>
                            <li class="right">
                                <img src="<?php echo base_url();?>assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                <div class="chat-info">
                                    <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                                </div>
                            </li>
                            <li class="left float-left">
                                <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                                <div class="chat-info">
                                    <span class="message">That's great. Will catch you in evening.</span>
                                </div>
                            </li>
                            <li class="right">
                                <img src="<?php echo base_url();?>assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                <div class="chat-info">
                                    <span class="message">Sure we'will have a blast today.</span>
                                </div>
                            </li>
                        </ul>
                        <div class="input-group mb-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <a href="javascript:void(0);" class=""><i class="icon-camera text-warning"></i></a>
                                </span>
                            </div>
                            <textarea type="text" row="" class="form-control" placeholder="Enter text here..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane vvivify fadeIn delay-100" id="Chat-list">
                    <ul class="right_chat list-unstyled mb-0">
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie</span>
                                        <span class="message">offline</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url();?>assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Marshall Nichols</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">Louis Henry</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-orange"><span>DS</span></div>
                                    <div class="media-body">
                                        <span class="name">Debra Stewart</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-green"><span>SW</span></div>
                                    <div class="media-body">
                                        <span class="name">Lisa Garett</span>
                                        <span class="message">offline since May 12</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url();?>assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Debra Stewart</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="<?php echo base_url();?>assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Lisa Garett</span>
                                        <span class="message">offline since Jan 18</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">Louis Henry</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-pink"><span>DS</span></div>
                                    <div class="media-body">
                                        <span class="name">Debra Stewart</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-info"><span>SW</span></div>
                                    <div class="media-body">
                                        <span class="name">Lisa Garett</span>
                                        <span class="message">offline since May 12</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                    </ul>
                </div>
                <div class="tab-pane vivify fadeIn delay-100" id="Chat-groups">
                    <ul class="right_chat list-unstyled mb-0">
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-cyan"><span>DT</span></div>
                                    <div class="media-body">
                                        <span class="name">Designer Team</span>
                                        <span class="message">offline</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
						</li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-azura"><span>SG</span></div>
                                    <div class="media-body">
                                        <span class="name">Sale Groups</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-orange"><span>NF</span></div>
                                    <div class="media-body">
                                        <span class="name">New Fresher</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-indigo"><span>PL</span></div>
                                    <div class="media-body">
                                        <span class="name">Project Lead</span>
                                        <span class="message">offline since May 12</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.html"><img src="<?php echo base_url();?>assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>Oculux</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="<?php echo base_url();?>assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Louis Pierce</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="profile.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>                
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li class="header">Main</li>
                    <li><a href="../html/index.html"><i class="icon-home"></i><span>Home</span></a></li>
                    <li><a href="index.html"><i class="icon-speedometer"></i><span>HR Dashboard</span></a></li>
                    <li><a href="users.html"><i class="icon-user"></i><span>Users</span></a></li>
                    <li><a href="departments.html"><i class="icon-grid"></i><span>Departments</span></a></li>
                    <li><a href="employee.html"><i class="icon-users"></i><span>Employee</span></a></li>
                    <li><a href="activities.html"><i class="icon-equalizer"></i><span>Activities</span></a></li>
                    <li><a href="holidays.html"><i class="icon-flag"></i><span>Holidays</span></a></li>
                    <li><a href="events.html"><i class="icon-calendar"></i><span>Events</span></a></li>
                    <li class="active open"><a href="payroll.html"><i class="icon-credit-card"></i><span>Payroll</span></a></li>
                    <li><a href="accounts.html"><i class="icon-wallet"></i><span>Accounts</span></a></li>
                    <li><a href="report.html"><i class="icon-bar-chart"></i><span>Report</span></a></li>
                </ul>
            </nav>     
        </div>
    </div>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h1>Payroll</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Payroll</li>
                            </ol>
                        </nav>
                    </div>            
                    <div class="col-md-6 col-sm-12 text-right hidden-xs">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
                        <a href="https://themeforest.net/item/oculux-bootstrap-4x-admin-dashboard-clean-modern-ui-kit/23091507" class="btn btn-sm btn-success" title="Themeforest"><i class="icon-basket"></i> Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs2">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#EmployeeSalary">Employee Salary</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Payslip">Payslip</a></li>                
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="EmployeeSalary">
                                <div class="table-responsive invoice_list mb-4">
                                    <table class="table table-hover table-custom spacing8">
                                        <thead>
                                            <tr> 
                                                <th style="width: 20px;">#</th>
                                                <th>Employee</th>
                                                <th class="w100">Role</th>
                                                <th class="w60">Salary</th>
                                                <th class="w60">Status</th>
                                                <th class="w60">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span>01</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>SS</span></div>
                                                        <div class="ml-3">
                                                            <a href="{{route('pages.invoicedetails')}}" title="">South Shyanne</a>
                                                            <p class="mb-0">south.shyanne@example.com</p>
                                                        </div>
                                                    </div>                                        
                                                </td>
                                                <td>Web Developer</td>
                                                <td>$1200</td>
                                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>02</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo base_url();?>assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                        <div class="ml-3">
                                                            <a href="{{route('pages.invoicedetails')}}" title="">Zoe Baker</a>
                                                            <p class="mb-0">zoe.baker@example.com</p>
                                                        </div>
                                                    </div>                                        
                                                </td>
                                                <td>Graphics Desgber</td>
                                                <td>$378</td>
                                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>03</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                            <div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>CB</span></div>
                                                        <div class="ml-3">
                                                            <a href="{{route('pages.invoicedetails')}}" title="">Colin Brown</a>
                                                            <p class="mb-0">colinbrown@example.com</p>
                                                        </div>
                                                    </div>                                        
                                                </td>
                                                <td>HTML Developer</td>
                                                <td>$653</td>
                                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>04</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avtar-pic w35 bg-green" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>KG</span></div>
                                                        <div class="ml-3">
                                                            <a href="{{route('pages.invoicedetails')}}" title="">Kevin Gill</a>
                                                            <p class="mb-0">kevin.gill@example.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Mobile</td>
                                                <td>$451</td>
                                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>05</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo base_url();?>assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                        <div class="ml-3">
                                                            <a href="{{route('pages.invoicedetails')}}" title="">Brandon Smith</a>
                                                            <p class="mb-0">Maria.gill@example.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>VueJs FrontEnd</td>
                                                <td>$1,989</td>
                                                <td><span class="badge badge-success  ml-0 mr-0">Done</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>06</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo base_url();?>assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                        <div class="ml-3">
                                                            <a href="javascript:void(0);" title="">Kevin Baker</a>
                                                            <p class="mb-0">kevin.baker@example.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Java Developer</td>
                                                <td>$343</td>
                                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>13</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo base_url();?>assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                        <div class="ml-3">
                                                            <a href="javascript:void(0);" title="">Colin Brown</a>
                                                            <p class="mb-0">colin-brown@example.com</p>
                                                        </div>
                                                    </div>                                        
                                                </td>
                                                <td>Designer</td>
                                                <td>$653</td>
                                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span>14</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?php echo base_url();?>assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                                                        <div class="ml-3">
                                                            <a href="javascript:void(0);" title="">Kevin Gill</a>
                                                            <p class="mb-0">kevin-gill@example.com</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Team Leader</td>
                                                <td>$451</td>
                                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice" data-toggle="tooltip" data-placement="top"><i class="icon-envelope text-info"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                                    <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash text-danger"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="Payslip">
                                <div class="card">
                                    <article class="media body mb-0">
                                        <div class="mr-3">
                                            <img class="rounded" src="<?php echo base_url();?>assets/images/xs/avatar4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="content">
                                                <span><strong>Order ID: </strong> C09</span>
                                                <p class="h5">John Smith <small class="float-right badge badge-primary">AUG 15, 2018</small></p>
                                                <p>795 Folsom Ave, Suite 546 San Francisco, CA 54656</p>
                                            </div>
                                            <nav class="d-flex text-muted">
                                                <a href="javascript:void(0);" class="icon mr-3"><i class="icon-envelope text-info"></i></a>
                                                <a href="javascript:void(0);" class="icon mr-3"><i class="icon-printer"></i></a>
                                            </nav>
                                        </div>
                                    </article>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-custom spacing5">
                                                    <thead>
                                                        <tr>
                                                            <th class="w60">#</th>
                                                            <th></th>
                                                            <th class="w100">Earnings</th>
                                                            <th class="w100">Deductions</th>
                                                            <th class="w100 text-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01</td>
                                                            <td>
                                                                <span>Basic Salary</span>
                                                            </td>                                                    
                                                            <td>$1,500</td>
                                                            <td>-</td>
                                                            <td class="text-right">$380</td>
                                                        </tr>
                                                        <tr>
                                                            <td>02</td>
                                                            <td>
                                                                <span>House Rent Allowance (H.R.A.)</span>
                                                            </td>
                                                            <td>$62</td>
                                                            <td>-</td>
                                                            <td class="text-right">$250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>03</td>
                                                            <td>
                                                                <span>Tax Deducted at Source (T.D.S.)</span>
                                                            </td>
                                                            <td>-</td>
                                                            <td>$80</td>
                                                            <td class="text-right">$120</td>
                                                        </tr>                                                
                                                        <tr>
                                                            <td>04</td>
                                                            <td>
                                                                <span>C/Bank Loan</span>
                                                            </td>
                                                            <td>-</td>
                                                            <td>$120</td>
                                                            <td class="text-right">$120</td>
                                                        </tr>                                                
                                                        <tr>
                                                            <td>05</td>
                                                            <td>
                                                                <span>Other Allowance</span>
                                                            </td>
                                                            <td>$121</td>
                                                            <td>-</td>
                                                            <td class="text-right">$120</td>
                                                        </tr>                                                
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="2"><span><strong>Note:</strong> Ipsum is simply dummy text of the printing and typesetting industry.</span></td>
                                                            <td>$1683</td>
                                                            <td>$200</td>
                                                            <td class="text-right">
                                                                <strong class="text-success">$1483.00</strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-info"><i class="icon-printer"></i> Print</button>
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
<script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>

<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
