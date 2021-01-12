<?php

include '../dbconnection.php';


if(isset($_GET['id'])){

    $id =  $_GET['id'];


    //Getting the info of users
    $query = "SELECT * FROM users WHERE id = '$id' ";

        if($query_run = mysqli_query($link, $query)){

                $query_num_rows = mysqli_num_rows($query_run);
                if($query_num_rows>=1){

                    while($query_row = mysqli_fetch_assoc($query_run)){
                        $id = $query_row['id'];
                        $username = $query_row['username'];
                        $password = $query_row['password'];
                        $email = $query_row['email'];
                        @$image = $query_row['image'];

                        //header("Location: userhome.php");
                }
               
            }
        }
        
    //Inserting into banned users
    $query4 = "INSERT INTO `banned_users` ( `username`, `password`, `email`, `image`) VALUES ('$username', '$password', '$email', '$image')";
    $query_run4 = mysqli_query($link, $query4);


    //Deleting id
    $query = "DELETE FROM `users` WHERE `users`.`id` ='$id'";
    $query_run1 = mysqli_query($link, $query);

    if($query_run1){
    //Updating the user table part 1
    $query2 = "ALTER TABLE `users` DROP `id`;";
    $query_run2 = mysqli_query($link, $query2);
    }


    





    if ($query_run4){
        //Updating the user table part 2
         $query3 = "ALTER TABLE `users` ADD `id` INT(10) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`);";
         $query_run3 = mysqli_query($link, $query3);

    echo '<script type="text/javascript">alert("User blocked Succesfully");window.location=\'all_users.php\';</script>';
 
    }else{
        

    echo '<script type="text/javascript">alert("Error in blocking user!");window.location=\'all_users.php\';</script>';
    }
    

}



?>