<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Majesty Recruitment System</title>

 

<link rel="stylesheet" href="../style1.css">
<link rel="stylesheet" href="../style2.css">
<link href='https://fonts.googleapis.com/css?family=RobotoDraft' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">



<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content=""/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link id="browser_favicon" rel="shortcut icon" href="../logo.jpg">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/style.css">
<link rel="stylesheet" href="../dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="../dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="../dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
</head>
<body>
<?php
include 'navbar.php';
include '../dbconnection.php';

?>

<br>
<br>
  
<center><h3>All Registered Admin</h3></center>

<!-- Main content -->
<div class="content">
      <div class="card">
      <div class="card-body">
      <h4 class="text-black">Report of all users</h4>
      <p>Export data to Copy, CSV, Excel & Note</p>
      <div class="table-responsive">
                  <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                      <tr>
                        <th><strong>ID #</strong></th>
                        <th><strong>Username</strong></th>
                        <th><strong>Email</strong></th>
                        <th><strong>Account Type</strong></th>
                       
                      </tr>
                    </thead>



<?php

// Specify the query to execute
$query = "SELECT * FROM admin";

// Execute query
$query_run = mysqli_query($link, $query);

// Loop through each records 
while($row = mysqli_fetch_array($query_run)){

$id = $row['id'];
$username = $row['username'];
$email= $row['email'];
//$min_qualification= $row['min_qualification'];
//$description = $row['description'];

?>

                    <tbody>
                      <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $username;?></td>
                        <td><?php echo $email;?></td>
                        <td>Admin</td>
                      </tr>
                

      
<?php
}

// Retrieve Number of records returned
$records = mysqli_num_rows($query_run);
?>
                      <tr>
                        <td colspan="6" class="style3"><br><br><div align="left" class="style12"><?php echo "<center>Total Records of Approved Majesty Human Resourse Adminstrators = <b>".$records." Admins</b></center>"; ?> </div></td>
                      </tr>
                      </table>
                      <?php
// Close the connection
mysqli_close($link);
?>
                      </div>
   
   </div>
   </div>
   </div>            

                </div>
</center>


<center>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2020 Majesty Corporation. All rights reserved.</footer>
</center>


<!-- jQuery 3 --> 
<script src="../dist/js/jquery.min.js"></script> 

<script src="../dist/plugins/popper/popper.min.js"></script> 
<script src="../dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="../dist/js/bizadmin.js"></script> 

<!-- for demo purposes --> 
<script src="..dist/js/demo.js"></script>
 
<!-- DataTable --> 
<script src="../dist/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="../dist/plugins/datatables/dataTables.bootstrap.min.js"></script> 
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script src="../dist/plugins/table-expo/filesaver.min.js"></script>
<script src="../dist/plugins/table-expo/xls.core.min.js"></script>
<script src="../dist/plugins/table-expo/tableexport.js"></script>
<script>
$("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
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


</html>