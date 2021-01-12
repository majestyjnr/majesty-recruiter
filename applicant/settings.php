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
@$email = $_SESSION['email'];






    

?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
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

<!-- dropify -->
<link rel="stylesheet" href="../dist/plugins/dropify/dropify.min.css">

<!-- form wizard -->
<link rel="stylesheet" href="../dist/plugins/formwizard/jquery-steps.css">
<link rel="stylesheet" href="../style1.css">
<link rel="stylesheet" href="../style2.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
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
                    <div class="pull-left"><img src="logo.png" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
                    <h4><?php echo "Majesty Corporation" ?></h4>
                    <p><?php echo 'Thanks for signing up with us '.$username.'</span>';?></p>
                   
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left"><img src="dp.jpg" class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
                    <h4><?php echo "CEO - Majesty Corporation"?></h4>
                    <p><?php echo 'I would like to see you work in my <br>company '.$username.'</span>';?></p>
                    
                    </a></li>
                </ul>
              </li>
              
            </ul>
          </li>
        
          </li>

          <?php

// Specify the query to execute
$query = "SELECT * FROM users WHERE username = '$username'";

// Execute query
$query_run = mysqli_query($link, $query);

// Loop through each records 
while($row = mysqli_fetch_array($query_run)){


$email= $row['email'];
$profile = $row['image'];
//$min_qualification= $row['min_qualification'];
//$description = $row['description'];

?>

                    
          
                

      
<?php
}
?>
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if(@$profile == ""){ echo "<img src='../logo.jpg' class='user-image' alt='User Image'>"; }else{ echo "<img src='".@$profile."' class='user-image' alt='User Image'>";};?> <span class="hidden-xs"><?php echo '<span style = "color: white">'.@$username.'</span>';?></span> </a>
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
        <li><a href="settings.php">Settings</a></li>
      </ol>
    </div>


    
<?php

//Uploading profile picture into database-->

if(isset($_POST['submit']) ){

  $picture_name = $_FILES["profile"]["name"];
  $tmp_name = $_FILES["profile"]["tmp_name"];
  $location = "../profile_pics/$picture_name";
  move_uploaded_file($tmp_name, $location);
 

$query = "UPDATE users set image = '".$location."' where username ='".$username."'";

if($query_run = mysqli_query ($link, $query)){
    
   
  echo '<script type="text/javascript">alert("Profile picture updated uccesfully");window.location=\'settings.php\';</script>';

 }else{
  
  echo '<script type="text/javascript">alert("Error encounted in updating profile picture! Please try again later");window.location=\'settings.php\';</script>';

 }

}



?>



    <!-- Main content -->
    <div class="content">

<form action= "settings.php" method ="post" enctype ="multipart/form-data">
      <div class="row">
        <div style = "margin-left: 15px;"class="col-lg-6 col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Set New Profile picture</h4>
              <label for="input-file-now-custom-1">Change your profile picture here<hr><span style ="color: red">Select a picture that comes in a form of a square (4 by 4), else you might encounter an error.(Highly Recommended)</span></label>
              <input type="file" name='profile' data-max-file-size="1M" id="input-file-now-custom-1 input-file-max-fs" class="dropify" data-default-file="<?php if($profile == ""){ echo 'logo.jpg';}else{ echo "$profile";}?>" required/>
            </div>

            <center>
            <div class="form-group">
                        <div class="col-sm-12">
                          <input type ='submit' class="btn btn-success" name ='submit' value = 'Save Picture'> <!--class="btn btn-success"-->
                        </div>
                      </div>
            </center>
            
          </div>
        </div>
      </div>
</form>   



      <br>
      <br>
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
 
</div>
</div>

<center>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2020 Majesty Corporation. All rights reserved.</footer>
</center>



<!-- jQuery 3 --> 
<script src="../dist/js/jquery.min.js"></script>  
<script src="../dist/bootstrap/js/bootstrap.min.js"></script> 



<!-- dropify --> 
<script src="../dist/plugins/dropify/dropify.min.js"></script> 
<script>
	$(document).ready(function(){
	// Basic
	$('.dropify').dropify();

	// Translated
	 $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
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

<!-- Mirrored from uxliner.com/bizadmin/demo/main/form-uploads.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 00:06:30 GMT -->
</html>
