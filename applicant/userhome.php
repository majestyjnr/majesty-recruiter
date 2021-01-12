<?php 
session_start();
@$current_file = $_SERVER['SCRIPT_NAME'];
@$http_referer = $_SERVER['HTTP_REFERER']; 
?>

<!DOCTYPE html>
<html>
<title>Majesty recruitment System</title>
<?php 
include '../dbconnection.php';

@$username = strtoupper($_SESSION['username']);

 

?>
<link id="browser_favicon" rel="shortcut icon" href="../logo.jpg">

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content=""/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="../logo.jpg">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/style.css">
<link rel="stylesheet" href="../dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="../dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="../dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">


<!-- form wizard -->
<link rel="stylesheet" href="../dist/plugins/formwizard/jquery-steps.css">
<link rel="stylesheet" href="../style1.css">
<link rel="stylesheet" href="../style2.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<style>

html,body,h1,h2,h3,h4,h5 {font-family: "RobotoDraft","Roboto",sans-serif;}
.w3-sidenav a {padding:16px;font-weight:bold}






.user-pro-box{
  background: url(../dist/img/user-bg.jpg) no-repeat center top;
  padding: 60px 20px 50px 20px;
	border-radius: 3px;
}
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
  <a href="#" class="w3-border-bottom w3-large"><img src="../logo.png" style="width:80%;"></a>
  <a href="javascript:void(0)" onclick="w3_close()"class="w3-text-teal w3-hide-large w3-closenav w3-large">Close &times;</a>
  <a href="userhome.php">Home</a>			
  <a href="../jobs/alljobs.php">All Jobs</a>	
  <a href="settings.php">Settings</a>		
 
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
              <li class="header">You have 2 new messages</li>
              <li>
                <ul class="menu">
                <li><a href="#">
                    <div class="pull-left"><img src="../logo.png" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
                    <h4><?php echo "Majesty Corporation" ?></h4>
                    <p><?php echo 'Thanks for signing up with us '.$username.'</span>';?></p>
                    
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="../dp.jpg" class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
                    <h4><?php echo "CEO - Majesty Corporation"?></h4>
                    <p><?php echo 'I would like to see you work in my <br>company '.$username.'</span>';?></p>
                    </a></li>
                </ul>
              </li>
              
            </ul>
          </li>
         
            </a>
            
          </li>

          <?php

// Specify the query to execute
$query = "SELECT * FROM users WHERE username = '$username'";

// Execute query
$query_run = mysqli_query($link, $query);

// Loop through each records 
while($row = mysqli_fetch_array($query_run)){


@$email= $row['email'];
@$profile = $row['image'];
//$min_qualification= $row['min_qualification'];
//$description = $row['description'];

?>

                    
          
                

      
<?php
}
?>



          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php if(@$profile == ""){ echo "<img src='../logo.jpg' class='user-image' alt='User Image'>"; }else{ echo "<img src='".@$profile."' class='user-image' alt='User Image'>";};?> <span class="hidden-xs"><?php echo '<span style = "color: white">'.@$username.'</span>';?></span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img">
                <?php 

                if(@$profile == ""){

                  echo "<img src='../logo.jpg' class='img-responsive img-circle' alt='User Image'>" ;

                }else{

                  echo "<img src='".@$profile."' class='img-responsive img-circle' alt='User Image'>" ;
                
                }
              
                ?> 
                </div>
                <p class="text-left"><?php echo '<span style = "color: white">'.@$username.'</span>';?><small><?php echo @$email;?></small> </p>
              </li>
              <li><a href="userhome.php"><i class="icon-profile-male"></i> My Profile</a></li>
              
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="settings.php"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../destroy_session.php"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one" style="position: relative">
      <h7>.   Majesty Recruitment System</h7>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
      </ol>
    </div>
    
    <!-- Main content -->

    <div class="content">
      <div class="row">
      <center>
        <div class="col-lg-4" wid>
       
          <div class="user-pro-box m-b-3" style="">
            <div class="box-profile text-white">
            <?php 

                if(@$profile == ""){

                  echo "<img src='logo.jpg' class='profile-user-img img-responsive img-circle m-b-2' alt='User Image'>" ;

                }else{
                  echo "<img src='".@$profile."' class='profile-user-img img-responsive img-circle m-b-2' alt='User Image'>" ;
                }
              
                ?> 
             

              <h3 class="profile-username text-center"><?php echo '<span style = "color: white">'.@$username.'</span>';?></h3>
              <p class="text-center">© <?php echo '<span style = "color: white">'.strtolower(@$username).'</span>';?></p>
              <p class="text-center">Majesty Corporation is an IT Firm whose vision is to deliver solutions to the doorstep of everyone across the globe via the use of technology. Join us in making the world a better place through the use of Technology.</p>
            </div>
          </div>
          <div class="card m-b-3">
            <div class="card-body">
              <div class="box-body"> <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                <p class="text-muted"> B.S. in Computer Science from the University of Education, Winneba </p>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                <p class="text-muted">Accra, Ghana</p>
                <hr>
                <strong><i class="fa fa-envelope margin-r-5"></i> Email address </strong>
                <p class="text-muted"><?php echo @$email;?></p>
                <hr>
                <strong><i class="fa fa-phone margin-r-5"></i> Phone</strong>
                <p>(+233) 54 417 4142 </p>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> Address</strong>
                <div class="embed-container maps">
                  <iframe class="full-wid" src="https://maps.google.co.in/maps?sll=34.0204989,-118.4117325&amp;sspn=0.8745562,1.4073488&amp;cid=16298491244936825076&amp;q=Los+Angeles,+CA,+USA&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+Los+Angeles+County,+California,+United+States&amp;t=m&amp;ll=34.052234,-118.243685&amp;spn=0.697085,0.848982&amp;output=embed" style="pointer-events: none;"></iframe>
                </div>
                <hr>
                <!---
                <strong style ="float: left"><i style ="float: left"class="fa fa-phone margin-r-5"></i> Social Profile</strong><br>
                <div class="text-left"> <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a> <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a> <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a> <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a> </div>
                --->
              </div>
              <!-- /.box-body --> 
              </center>
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
      <!-- Main row --> 
    
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->


  <center>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2020 Majesty Corporation. All rights reserved.</footer>
</center>


 <!-- jQuery 3 --> 
 <script src="../dist/js/jquery.min.js"></script>  
  <script src="../dist/bootstrap/js/bootstrap.min.js"></script> 
  
  <!-- template --> 
  <script src="dist/js/bizadmin.js"></script> 
  
  <!-- for demo purposes --> 
  <script src="dist/js/demo.js"></script>


  

</script>
  
  <!-- form wizard --> 
  <script src="../dist/plugins/formwizard/jquery-steps.js"></script> 
  <script src="../../../../../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script> 
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
 
  <div class="control-sidebar-bg"></div>
</div>
     
</body>

</html> 