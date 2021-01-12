<?php
$link = mysqli_connect('localhost', 'root', '');
$database = 'recruitment_system';

$link or die('Sorry...Could not connect to database');



if(!$link || !mysqli_select_db( $link, $database)){

    die('Could not connect');

}else{

   // echo '<b>Connection Established Successfully</b><hr><br><br>';

}