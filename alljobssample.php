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

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-top w3-container w3-padding-16 w3-theme w3-large">
  <i class="fa fa-bars w3-opennav w3-hide-large w3-xlarge w3-margin-left w3-margin-right" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide"><?php echo 'Logged in as: <span style = "color: #4da6ff">'.$username.'</span>';?> </span>
</div>

<header class="w3-container w3-theme w3-padding-64 w3-padding-jumbo">

<script type = 'text/javascript'>


    function findmatch(){
        if(window.XMLHttpRequest){
            xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        };
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById('result').innerHTML = xmlhttp.responseText;

            }else{
              document.getElementById('result').innerHTML = 'No Result Found';
            }
        }

    xmlhttp.open('GET', 'hints.php?search='+document.search.search.value, true);
    xmlhttp.send();
    }

</script>



  <center>
  
    <div class="dropdown">
    <div class = '' style ="cursor: pointer; background-color: white; border-radius: 100%; height: 100px; width: 100px;" ><img src= "dp.jpg" style ="height: 100px; weight:100px; border-radius: 100%;"/></div>
    
    <div class="dropdown-content">
    <center><img src= "dp.jpg" style ="height: 200px; weight:200px; border-radius: 30%;"/></center>
    </div>
    
    </div>
          
  
  </center>
  
  <center>
  
    <h2 class="w3-xxxlarge w3-padding-16"><?php echo '<span style = "color: #4da6ff">'.$username.'</span>';?></h2>
    <li style = 'list-style-type: none; background-color: white; width: 60px;'><a href="destroy_session.php" style="text-decoration: none; color:black;">Logout</a></li>
  </center>
 
</header>
<br>
<br>


<center>
<form id = 'search' name= 'search'>
    <b>Search Jobs:</b><br>
    <input type = 'text' name = 'search' onkeyup ='findmatch();'/>
    </form>

    <br><br>
    <div id ='result'></div>

</center>
<?php
// Specify the query to execute
$query = "SELECT * FROM jobs";

// Execute query
$query_run = mysqli_query($link, $query);

// Loop through each records 
while($row = mysqli_fetch_array($query_run)){

$id = $row['id'];
$job_title = $row['job_title'];
$vacancy= $row['vacancy'];
$min_qualification= $row['min_qualification'];
$salary = $row['salary'];
$description = $row['description'];

?>
<div class="w3-container w3-padding-jumbo">
  <!---<h1 class="w3-text-teal"><?php echo 'About <span style = "color: #4da6ff"><b>'.$username.'</b></span>';?></h1>--->
  <!---<h5>W3.CSS is a small, fast, and modern CSS framework with built-in responsiveness.</h5>--->
  <ul class="w3-leftbar w3-theme-border" style="list-style-type:none">
  <hr>
   <li>Job Title:  <strong><?php echo $job_title;?></strong></li>
   <li>Salary:  <strong><?php echo $salary;?></strong></li>
   <li>Qualification:  <strong><?php echo $min_qualification;?></strong></li>
   <li>Job Description:  <strong><?php echo $description;?></strong></li>
   <br>
   <form method = 'get' action ='application_form.php' >
   <input type= 'button' name = 'apply' Value = 'Apply Now' onclick = "window.location.href='application_form.php'">
   </form>
   <hr>

  </ul>
</div>
  <?php


                     

}
?>

<div>
<footer class="w3-container w3-theme w3-padding-jumbo">
  <h5>Footer</h5>
  <p>Footer information goes here</p>
</footer>
     
</div>
<script>

function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

<script>
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4");
    }
}

function myFunc(id) {
    document.getElementById(id).classList.toggle("w3-show");
    document.getElementById(id).previousElementSibling.classList.toggle("w3-theme");
}
</script>

     
</body>

</html> 