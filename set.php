<?php 
session_start();
@$current_file = $_SERVER['SCRIPT_NAME'];
@$http_referer = $_SERVER['HTTP_REFERER']; 
?>

<!DOCTYPE html>
<html>
<title>Majesty recruitment System</title>
<?php 
include 'dbconnection.php';

$username = strtoupper($_SESSION['username']);
function alert($message){
  echo "<script type= 'text/javascript'>alert('$message');</script>";
}
if($http_referer == "http://localhost:8080/recruitment/index.php" or $http_referer == " " or $http_referer == "http://localhost:8080/recruitment/login.php"){
  alert("Welcome to Majesty Recruitment System ".$username);

}

 

?>
<link id="browser_favicon" rel="shortcut icon" href="logo.jpg">

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content=""/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<!-- form wizard -->
<link rel="stylesheet" href="dist/plugins/formwizard/jquery-steps.css">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style2.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>

html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}

.dropdown {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: fixed;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    cursor: pointer;
}

.dropdown:hover .dropdown-content {
    display: block;
    cursor: pointer;
}

</style>
<body>

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left w3-card-2" style="z-index:5;width:250px;">
  <a href="#" class="w3-border-bottom w3-large"><img src="logo.png" style="width:80%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()"class="w3-text-teal w3-hide-large w3-closenav w3-large">Close &times;</a>
  <a href="userhome.php">Home</a>	
  <a href="settings.php">Settings</a>			
  <a href="alljobs.php">All Jobs</a>		
 
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

  <header class="main-header" style="position: "> 
    <!-- Logo --> 
    <a href="" class="logo blue-bg"  > 
    <!-- mini logo for sidebar mini 50x50 pixels --> 
    <span class="logo-mini"></span> 
    <!-- logo for regular state and mobile devices --> 
    <span class="logo-lg" >M-R System</span></a> 
    <!-- Header Navbar -->
    <nav class="navbar blue-bg navbar-static-top"> 
      
      </ul>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages -->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 new messages</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left"><img src="dist/img/img1.jpg" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
                    <h4>Alex C. Patton</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="dist/img/img3.jpg" class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
                    <h4>Nikolaj S. Henriksen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">10:15 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="dist/img/img2.jpg" class="img-circle" alt="User Image"> <span class="profile-status away pull-right"></span></div>
                    <h4>Kasper S. Jessen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">8:45 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="dist/img/img4.jpg" class="img-circle" alt="User Image"> <span class="profile-status busy pull-right"></span></div>
                    <h4>Florence S. Kasper</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">12:15 AM</span></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">View All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications  -->
          <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
                    <h4>Alex C. Patton</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
                    <h4>Nikolaj S. Henriksen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">1:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
                    <h4>Kasper S. Jessen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
                    <h4>Florence S. Kasper</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">11:10 AM</span></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all Notifications</a></li>
            </ul>
          </li>
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="dist/img/img1.jpg" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo '<span style = "color: white">'.$username.'</span>';?></span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img"><img src="dist/img/img1.jpg" class="img-responsive img-circle" alt="User"></div>
                <p class="text-left"><?php echo '<span style = "color: white">'.$username.'</span>';?><small>alexander@gmail.com</small> </p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-wallet"></i> My Balance</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="destroy_session.php"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li> <a href="#" data-toggle="control-sidebar"><i class="fa fa-gear animated "></i></a> </li>
        </ul>
      </div>
    </nav>
  </header>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one" style="position: relative">
      <h1>>  Majesty Recruitment System</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
  
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1"> 
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Profile Settings</a> </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                     
                </div>
                <div class="tab-pane" id="settings" role="tabpanel">
                  <div class="card-body">
                    <form class="form-horizontal form-material">
                      <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                          <input placeholder="" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                          <input placeholder="example@gmail.com" class="form-control form-control-line" name="example-email" id="example-email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                          <input value="" class="form-control form-control-line" type="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Phone No</label>
                        <div class="col-md-12">
                          <input placeholder="+233 57 432 1997" class="form-control form-control-line" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Message</label>
                        <div class="col-md-12">
                          <textarea rows="5" class="form-control form-control-line"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-12">Select Country</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-line">
                            <option>London</option>
                            <option>India</option>
                            <option>Usa</option>
                            <option>Canada</option>
                            <option>Thailand</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button class="btn btn-success">Update Profile</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main row --> 
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->


  <center>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2019 Majesty Corporation. All rights reserved.</footer>
</center>


 <!-- jQuery 3 --> 
 <script src="dist/js/jquery.min.js"></script>  
  <script src="dist/bootstrap/js/bootstrap.min.js"></script> 
  
  <!-- template --> 
  <script src="dist/js/bizadmin.js"></script> 
  
  <!-- for demo purposes --> 
  <script src="dist/js/demo.js"></script>
  
  <!-- form wizard --> 
  <script src="dist/plugins/formwizard/jquery-steps.js"></script> 
  <script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script> 
  <script>
      var frmRes = $('#frmRes');
      var frmResValidator = frmRes.validate();
      
      var frmInfo = $('#frmInfo');
      var frmInfoValidator = frmInfo.validate();
  
      var frmLogin = $('#frmLogin');
      var frmLoginValidator = frmLogin.validate();
  
      var frmMobile = $('#frmMobile');
      var frmMobileValidator = frmMobile.validate();
  
      $('#demo1').steps({
        onChange: function (currentIndex, newIndex, stepDirection) {
          console.log('onChange', currentIndex, newIndex, stepDirection);
          // tab1
          if (currentIndex === 0) {
            if (stepDirection === 'forward') {
              var valid = frmRes.valid();
              return valid;
            }
            if (stepDirection === 'backward') {
              frmResValidator.resetForm();
            }
          }
          
          // tab2
          if (currentIndex === 1) {
            if (stepDirection === 'forward') {
              var valid = frmInfo.valid();
              return valid;
            }
            if (stepDirection === 'backward') {
              frmInfoValidator.resetForm();
            }
          }
  
          // tab3
          if (currentIndex === 2) {
            if (stepDirection === 'forward') {
              var valid = frmLogin.valid();
              return valid;
            }
            if (stepDirection === 'backward') {
              frmLoginValidator.resetForm();
            }
          }
  
          // tab4
          if (currentIndex === 3) {
            if (stepDirection === 'forward') {
              var valid = frmMobile.valid();
              return valid;
            }
            if (stepDirection === 'backward') {
              frmMobileValidator.resetForm();
            }
          }
  
          return true;
  
        },
        onFinish: function () {
          alert('Wizard Completed');
        }
      });
    </script> 
  <script>
      $('#demo').steps({
        onFinish: function () {
          alert('Wizard Completed');
        }
      });
    </script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  </body>
  
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
     
</body>

</html> 