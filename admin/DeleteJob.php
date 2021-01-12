<?php

include '../dbconnection.php';

if(isset($_GET['id'])){

    $id =  $_GET['id'];

    //Deleting id
    $query = "DELETE FROM `jobs` WHERE `jobs`.`id` = '$id'";
    $query_run1 = mysqli_query($link, $query);

    //Updating the table
    $query2 = "ALTER TABLE `jobs` DROP `id`;";
    $query_run2 = mysqli_query($link, $query2);





    if (@$query_run3){
         
        echo '<script type="text/javascript">alert("Job Deleted Succesfully");window.location=\'managejob.php\';</script>';
 
    }else{
        
        $query3 = "ALTER TABLE `jobs` ADD `id` INT(10) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);";
        $query_run3 = mysqli_query($link, $query3);

        echo '<script type="text/javascript">alert("Job Deleted Succesfully!");window.location=\'managejob.php\';</script>';
    }
    

}

    
?>