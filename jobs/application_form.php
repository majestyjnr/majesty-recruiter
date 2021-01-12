<?php 
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];

?>
<!DOCTYPE html>
<html>
<title>Majesty recruitment System</title>
<?php 
@$username = strtoupper($_SESSION['username']);
include '../dbconnection.php';


?>


<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="M-R System is a multipurpose recruitment system designed by Solomon Aidoo Junior for MAjesty Corporation" />
<meta name="keywords" content="" />
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

<!-- dropify -->
<link rel="stylesheet" href="../dist/plugins/dropify/dropify.min.css">

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
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-text-teal w3-hide-large w3-closenav w3-large">Close &times;</a>
  <a href="../applicant/userhome.php">Home</a>			
  <a href="alljobs.php">All Jobs</a>	
  <a href="../applicant/settings.php">Settings</a>		
 
</nav>

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-main" >


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
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php if(@$profile == ""){ echo "<img src='logo.jpg' class='user-image' alt='User Image'>"; }else{ echo "<img src='".@$profile."' class='user-image' alt='User Image'>";};?> <span class="hidden-xs"><?php echo '<span style = "color: white">'.@$username.'</span>';?></span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img">
                <?php 

                if(@$profile == ""){

                  echo "<img src='logo.jpg' class='img-responsive img-circle' alt='User Image'>" ;

                }else{
                  echo "<img src='".@$profile."' class='img-responsive img-circle' alt='User Image'>" ;
                }
              
                ?> 
                
                </div>
                <p class="text-left"><?php echo '<span style = "color: white">'.@$username.'</span>';?><small><?php echo @$email;?></small> </p>
              </li>
              <li><a href="../applicant/userhome.php"><i class="icon-profile-male"></i> My Profile</a></li>
              <li><a href="#"><i class="icon-envelope"></i> Inbox</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../applicant/settings.php"><i class="icon-gears"></i> Account Setting</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../destroy_session.php"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </li>
         
        </ul>
      </div>
    </nav>
  </header>

<?php
include '../dbconnection.php';


if(isset($_POST['submit'])){
  
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $email = $_POST['email'];
  $contact = $_POST['contact_number'];
  $d_o_b = $_POST['d_o_b'];
  $location = $_POST['location'];
  $job_title = $_POST['job_title'];
  $job_description = $_POST['job_description'];
  $highest_qualification = $_POST['highest_qualification'];
  $area_of_study = $_POST['area_of_study'];
  $other_qualifications = $_POST['other_qualifications'];
  $academic_achievements = $_POST['academic_achievements'];
  //$cv = $_POST['cv'];
  //$application_letter = $_POST['application_letter'];

  //CV 
  $cv_name = $_FILES["cv"]["name"];
  $cv_tmp_name = $_FILES["cv"]["tmp_name"];
  $cv_location = "uploads/$cv_name";
  move_uploaded_file($cv_tmp_name, $cv_location);

  //Application Letter
  $letter_name = $_FILES["application_letter"]["name"];
  $letter_tmp_name = $_FILES["application_letter"]["tmp_name"];
  $letter_location = "uploads/$letter_name";
  move_uploaded_file($letter_tmp_name, $letter_location);
   


 $query = "INSERT into applications (applicant_firstname, applicant_lastname, applicant_email, applicant_contact, applicant_dob, applicant_location, job_title, job_description, highest_qualification, area_of_study, other_qualifications, academic_achievements, cv_path, letter_path) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$contact."', '".$d_o_b."', '".$location."', '".$job_title."', '".$job_description."', '".$highest_qualification."', '".$area_of_study."', '".$other_qualifications."', '".$academic_achievements."', '".$cv_location."', '".$letter_location."') ";            //INSERT INTO users VALUES ('','devloper', 'icode', 'Majesty', 'King')
 
 if($query_run = mysqli_query ($link, $query)){
    
   
   echo '<script type="text/javascript">alert("Application Submitted Succesfully");window.location=\'userhome.php\';</script>';
 
  }else{
   
   echo '<script type="text/javascript">alert("Error encounted in inserting job! Please complete all required fields");window.location=\'application_form.php\';</script>';
 
  }
 
}
 
?>

<br>
<br>




<form  method="post" action="application_form.php" enctype ="multipart/form-data">

     <!-- Main content -->
     <div class="content">
        <div class="card" style="margin-left:250px;">
        <div class="card-body">
          <h4 class="text-black m-b-3">Application Form</h4>
          <div id="demo">
            <div class="step-app">
              <ul class="step-steps">
                <li><a href="#step1"><span class="number">1</span> Personal Info</a></li>
                <li><a href="#step2"><span class="number">2</span> Job Info</a></li>
                <li><a href="#step3"><span class="number">3</span> Educational Qualifications</a></li>
                <li><a href="#step4"><span class="number">4</span>Documents Upload</a></li>
              </ul>
              <div class="step-content">
                <div class="step-tab-panel" id="step1">
                
                    <div class="row m-t-2">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstName1">First Name:</label>
                          <input class="form-control" name = "fname" type="text" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastName1">Last Name:</label>
                          <input class="form-control" name= "lname" type="text" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstName1">Email Address:</label>
                          <input class="form-control" name = "email" type="email" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastName1">Phone Number:</label>
                          <input class="form-control" name = "contact_number" type="number" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="location1">Select City :</label>
                          <select class="custom-select form-control" id="location1" name="location">
                            <option  value="">Select City</option>
                            <option name = "Accra" value="Accra">Accra</option>
                            <option name = "Kumasi" value="Kumasi">Kumasi</option>
                            <option name = "Tamale" value="Tamale">Tamale</option>
                            <option name = "Johannesburg" value="Johannesburg">Johannesburg</option>
                            <option name = "London" value="London">London</option>
                            <option name = "Beijing" value="Beijing">Beijing</option>
                            <option name = "New York" value="New York">New York</option>
                            <option name = "Washington DC" value="Washington DC">Washington DC</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="date1">Date of Birth :</label>
                          <input name = "d_o_b" class="form-control" id="date1" type="date" required>
                        </div>
                      </div>
                    </div>
                  
                </div>
                <div class="step-tab-panel" id="step2">
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="jobTitle1">Job Title:</label>
                        <input name = "job_title" class="form-control" id="jobTitle1" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
          
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="shortDescription1">State the qualities that make you qualified for this job :   <span style ="color: red">Avoid the use of punctuation marks (eg: " , ' and .)</span></label>
                        <textarea name="job_description" id="shortDescription1" rows="6" class="form-control" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="step-tab-panel" id="step3">
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="int1">Highest Academic Qualification:</label>
                        <select name= "highest_qualification" class="custom-select form-control" id="intType1" placeholder="Type to search cities" required>
                          <option  value=""></option>
                          <option value="certificate">Certificate</option>
                          <option value="diploma">Diploma</option>
                          <option value="first degree">BSc / BBA / BTech / BA</option>
                          <option value="second degree">MSc / MPhil / MA</option>
                          <option value="phd">PHD</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="intType1">Specific Area of study: </label>
                          <input name= "area_of_study" class="form-control" id="int1" type="text" placeholder ="eg: BSc Information Technology, PhD Computer Science" required>
                      </div>
                      <div class="form-group">
                        <label for="Location1">Other Academic Qualifications: **If Any**</label>
                        <input name= "other_qualifications" class="form-control" id="int1" type="text" required>
                      </div>
                    </div>
                    <div class="col-md-6">
  
                      <div class="form-group">
                        <label>Any Academic Achievements? Specify if any </label>
                        <div class="c-inputs-stacked">
                        <input name= "academic_achievements" class="form-control" id="int1" type="text" placeholder ="eg: Academic Awards" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="step-tab-panel" id="step4">
                  <div class="row m-t-2">
                    <div class="col-md-6">
                      <div class="form-group">
                      <div class="row m-t-3">
                      <div class="col-lg-6 col-md-6" >
          


          <div class="card" style="width:300px;">
            <div class="card-body" style="width:300px;">
              <h4 class="text-black">Upload Your CV</h4>
              <label for="input-file-max-fs">The maximum size is 1 megabyte(1MB) </label>
              <input type="file" name= "cv" id="input-file-max-fs" class="dropify" data-max-file-size="1M"/>
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 col-md-6" >
          <div class="card" style="width:300px;">
            <div class="card-body" style="width:300px;">
              <h4 class="text-black">Upload Application Letter</h4>
              <label for="input-file-max-fs">The maximum size is 1 megabyte(1MB) </label>
              <input type="file" name= "application_letter" id="input-file-max-fs" class="dropify" data-max-file-size="1M"/>
            </div>
          </div>
        </div>
                      </div>
                      <div class="form-group">
                        
                      </div>
                      <div class="form-group">
               
                    
                      </div>
                    </div>
                    <div class="col-md-6">
                      
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <center>
              <div class="step-footer">
                <button data-direction="prev" class="btn btn-light">Previous</button>
                <button data-direction="next" class="btn btn-primary">Next</button>
                <input type="submit" name="submit" class="btn btn-primary" value ="Submit">
              </div>
              </center>
            </div>
          </div>
          <hr class="m-t-5 m-b-5">

</div>
</div>
</div>

</form>

    <!-- /.content-wrapper -->
 
    <center>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">Version 1.0</div>
        Copyright © 2020 Majesty Corporation. All rights reserved.</footer>
</center>
    <!-- /.control-sidebar --> 
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->


  <!-- ./wrapper --> 
  
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
  
  <!-- Mirrored from uxliner.com/bizadmin/demo/main/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2019 00:06:29 GMT -->
  </html>