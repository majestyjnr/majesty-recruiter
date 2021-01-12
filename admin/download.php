<?php

include '../dbconnection.php';

if(isset($_GET['id'])){

    $path =  $_GET['id'];

    $query = "SELECT * FROM applications WHERE cv_path = '$path' OR letter_path = '$path' ";

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename= "'.basename($path).'"');
    header('Content-Length: '.filesize($path));
    readfile($path);

}
