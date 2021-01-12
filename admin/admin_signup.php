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

if(isset($_POST['username']) && isset($_POST['password'])){
		
    // receive data
     $username = $_POST['username'];
      $email = $_POST['email'];

    
    //Validate Email
    if(!@$email){
?>
        <div class="alert alert-danger" style = "margin-left: 50px; margin-right: 50px; "><?php echo $Translation['email invalid'];?></div>

<?php
    }

    @$password = $_POST['password'];
    @$confirmpassword = $_POST['confirmpassword'];

    //Validate Password
    if(!empty($username) && !empty($password)){
        if($password != $confirmpassword){
            ?>
            <div class="alert alert-danger" style = "margin-left: 50px; margin-right: 50px; "><?php echo $Translation['password no match'];?></div>
        <?php
        }else{

        $username;

        $query = "INSERT Into admin VALUES ('', '$username', '$password', '$email')" ;

        $query_run = mysqli_query($link, $query);
            
      if($query_run){
?>
            <div class="alert " style = "position: fixed; margin-top: 80px; margin-left: 50px; margin-right: 50px; background-color: #1183e1"><?php echo '<center><span style = "color: white">The Registration of <b>'.$username.'</b>  was successful!</center>'?></div>
<?php
              //echo '<center><span style = "color: blue">Congrats <b>'.$username.'</b> your registration was successful!<br>You can now login.</center><hr>';
        }else{
        echo '<script>alert("Registration Failed")</script>';
  }
    }
}
}

?>
<br>
<br>
<center><h3>Register New Admin</h3></center>


<center>
<div class = 'table' style ='width: 800px; margin-left: 400px;' >

        <div class="row m-t-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h4>Admin Registration Panel</h4>
              <p>Majesty Corporation</p>
              <hr>
              
                
<form action="admin_signup.php" method="post">
                <div class="form-group">
                  <label for="exampleInputuname">Admin Username</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-user"></i></div>
                    <input class="form-control" name= "username" id="exampleInputuname" placeholder="Admin Username" type="text" required> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-email"></i></div>
                    <input class="form-control" name= "email" id="exampleInputEmail1" placeholder="Enter email" type="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pwd1">Password</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                    <input class="form-control" name= "password" id="pwd1" placeholder="Enter Password" type="password" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="pwd2">Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-lock"></i></div>
                    <input class="form-control"  name= "confirmpassword" id="pwd2" placeholder="Re-enter Password" type="password" required>
                  </div>
                </div>
               
                <button type="submit" id ="signUp" class="btn btn-success waves-effect waves-light m-r-10">Sign Up</button>
               <!--- <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>--->
</form>
            </div>
          </div>
        </div>

</div>
</div>


</center>
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