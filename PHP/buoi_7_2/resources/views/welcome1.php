<?php
    $server ="localhost";
    $username = "root";
    $password = "";
     $con = mysqli_connect($server,$username,$password);
     if (!$con){
         die("Error: ". mysqli_connect_error());
     }
     $datebase = "Create database User";
     if(mysqli_query($con,$datebase)){
         echo "Create Data Base successfully";
     } else {
         echo "Error:". mysqli_error($con);
     }
?>