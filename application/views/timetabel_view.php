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
                        <h1>Teacher Time Table</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <!--li class="breadcrumb-item"><a href="#">Oculux</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><strong>Edit Role</strong></li-->
                            </ol>
                        </nav>
                    </div>            
                   
                </div>
            </div>
			<a href="<?php echo base_url('teacher_schedual/teacher_schedual_view');?>"><button type="button" class="btn btn-success">Back</button></a>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        
                        <div class="tab-content mt-0">
                            <div class="tab-pane show active" id="Users">
							
                                <div class="body mt-2">
								
                                <html>
<head>
   <title>time table</title>
</head>
<body bgcolor="skyblue">
<H4><FONT COLOR="DARKCYAN"><CENTER>Teacher Time Table</FONT></H4>
<table border="2" cellspacing="3" align="center">
<tr>
 <td align="center">
 <td>8:30-9:30
 <td>9:30-10:30
 <td>10:3-11:30
 <td>11:30-12:30
 <td>12:30-2:00
 <td>2:00-3:00
 <td>3:00-4:00
 <td>4:00-5:00
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center">---<td align="center"><font color="blue">SUB1<br>
 <td align="center"><font color="pink">SUB2<br>
 <td align="center"><font color="red">SUB3<br>
 <td rowspan="6"align="center">L<br>U<br>N<br>C<br>H
 <td align="center"><font color="maroon">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">counselling class
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center"><font color="blue">SUB1<br>
 <td align="center"><font color="red">SUB2<br>
 <td align="center"><font color="pink">SUB3<br>
 <td align="center">---
 <td align="center"><font color="orange">SUB4<BR>
 <td align="center"><font color="maroon">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center"><font color="pink">SUB1<br>
 <td align="center"><font color="orange">SUB2<BR>
 <td align="center"><font color="brown">SWA<br>
 <td align="center">---
 <td colspan="3" align="center"><font color="green"> lab
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center">SUB1<br>
 <td align="center"><font color="brown">SUB2<br>
 <td align="center"><font color="orange">SUB3<BR>
 <td align="center">---
 <td align="center"><font color="blue">SUB4<br>
 <td align="center"><font color="red">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center"><font color="orange">SUB1<BR>
 <td align="center"><font color="maroon">SUB2<br>
 <td align="center"><font color="blue">SUB3<br>
 <td align="center">---
 <td align="center"><font color="pink">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">SATURDAY
 <td align="center"><font color="red">SUB1<br>
 <td colspan="3" align="center">seminar
 <td align="center"><font color="pink">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">library
</tr>
</body>
</html>
                                    </div>
									
                                </div>
							
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
