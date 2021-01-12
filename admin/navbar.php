<?php

session_start();
 $app_name = 'Majesty Recruitment System';
?>
<center><h3 style ="padding: 10px;"><?php echo $app_name ?> </h3></center>
<?php
echo "<center><strong><span style = 'color: darkcyan;' >Logged in as: <strong>".@$username = strtolower($_SESSION['username'])."</strong></strong></center>";
?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: darkcyan;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #004d4d;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="insertjob.php">Insert Jobs</a></li>
  <li><a href="managejob.php">Manage Jobs</a></li>
  <li><a href="applications.php">Submitted Applications</a></li>
  <li><a href="admin_signup.php">Signup New HR Personnel</a></li>
  <li><a href="all_users.php">All Applicants</a></li>
  <li><a href="all_admins.php">All Adminstrators</a></li>
  <li><a href="audit_trails.php">Audit Trail</a></li>
  
  <li style="float:right"><a href="../destroy_session.php">Logout</a></li>
  <!--<input type ="button" name = 'quit' value = 'Logout' style ="float:right; margin-right: 0px; padding-right: px; padding: 14px; width: 100px;">-->
</ul>

<script>
function quit(){

var result = confirm("Do you really want to share this page?");
if(result == true){
    alert("Thanks for visiting ");
}
else{

    alert("Thanks for staying with us ");

}

}
</script>

</body>
