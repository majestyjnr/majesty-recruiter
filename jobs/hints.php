<?php
include '../dbconnection.php';

if(isset($_GET['search'])){
  $search = $_GET['search'];
}

if(!empty($search)){


        $query = "SELECT job_title FROM jobs WHERE job_title LIKE '".mysqli_real_escape_string($link, $search)."%'";
        $query_run = mysqli_query($link, $query);

        while($query_row = mysqli_fetch_assoc($query_run)){
            $results = '<a href ="details.php?search='.$query_row['job_title'].'">'.$query_row['job_title'].'<br>';

            echo $results;
        }

}

?>