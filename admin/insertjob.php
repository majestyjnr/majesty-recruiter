<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel ='stylesheet' href ='style1.css'>-->
    <title>Majesty Recruitment System</title>

<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
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
    <style>
        table {
             display:table; 
             margin:15px 0; 
             padding:0;
             border:1px solid #B7CAF6;
             font-size:100%;}
        tr {display:table-row;}
        th, td {display: table-cell;
             border:1px solid #c3c3a2; 
             margin:0; 
             padding:5px; 
             vertical-align:top; 
             text-align:left;}
        th {background-color: #c3c3a2;
             text-align:center; 
             color:#192666; 
             font-weight:bold;
        }

    </style>


</head>
<body>
<?php
include 'navbar.php';
include '../dbconnection.php';

if(isset($_POST['jobtitle']) && isset($_POST['totalvacancy']) && isset($_POST['qualification']) && isset($_POST['salary']) && isset($_POST['description'])){

  $jobtitle = $_POST['jobtitle'];
  $vacancy = $_POST['totalvacancy'];
  $qualification = $_POST['qualification'];
  $salary = $_POST['salary'];
  $description = $_POST['description'];
  
$query = "INSERT into jobs VALUES ('', '".$jobtitle."', '".$vacancy."', '".$qualification."', '".$salary."','".$description."') ";            //INSERT INTO users VALUES ('','devloper', 'icode', 'Majesty', 'King')

if($query_run = mysqli_query ($link, $query))

echo '<script type="text/javascript">alert("Job Inserted Succesfully");window.location=\'insertjob.php\';</script>';

}else{

 '<script type="text/javascript">alert("Error encounted in inserting job!");window.location=\'insertjob.php\';</script>';

}


?>
<br>
<br>
<center><h3>Insert New Job</h3></center>



<div style ='width: 800px; margin-left: 300px;'> 
<div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card ">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0 ">Job Insertion Panel <span class="fa fa-briefcase " aria-hidden="true"></span></h5>
            </div>
            <div class="card-body">
              
              <form method="post" action="insertJob.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Job Title</label>
                    <input class="form-control" name="jobtitle" placeholder="Job Title" type="text" required>
                    <span class="fa fa-laptop form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Total vacancy</label>
                    <input class="form-control" name="totalvacancy" placeholder="Total Vacancy" type="text" required>
                    <span class="fa fa-users form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Qualification</label>
                    <input class="form-control" name="qualification" placeholder="Qualification" type="text" required>
                    <span class="fa fa-graduation-cap form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group has-feedback">
                    <label class="control-label">Salary</label>
                    <input class="form-control" name="salary" placeholder="Salary" type="number" required>
                    <span class="fa fa-usd form-control-feedback" aria-hidden="true"></span> </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group has-feedback">
                    <label class="control-label">Job description</label>
                    <textarea name="description" class="form-control" id="placeTextarea" rows="3" placeholder="Job description" required></textarea>
                  </div>
                </div>
                
                <div class="col-md-12">
                  <button type="submit" name="submit" class="btn btn-success">Insert</button>
                </div>
                 </div>
              </form>
           
            </div>
          </div>
        </div>
      </div>
                    </div>






<br>
<br>
<br>
<center>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2020 Majesty Corporation. All rights reserved.</footer>
</center>

</body>
</html>