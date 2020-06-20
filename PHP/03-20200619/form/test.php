<?php
    $server ="localhost";
    $username = "root";
    $password = "";
    $database ="User";
    
    $ten = $_POST['Name'];
    $email = $_POST['Email'];
    
    
    $con = mysqli_connect($server,$username,$password,$database);
    if(!$con){
        die("Connect error:". mysqli_connect_error());
    }
   
    
   
    $insert = "INSERT INTO MyUser(nameUser,pass)
            Values('$ten','$email')";
    if(mysqli_query($con,$insert)){
        echo " New values";
    }else 
    {
        echo "error". $insert."<br>". mysqli_error($con);
    }
    mysqli_close($con);
?>