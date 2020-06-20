<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    //create connection 
    $connect = mysqli_connect($servername, $username, $password);
    //check
    if (!$connect){
        die(" Connection Fail: ".mysqli_connect_error());
    }
    //Create Database
    $sql = "Create database MyBD";
    if(mysqli_query($connect, $sql)){
        echo "Creae DB Succesfully";
    } else
    {
        echo "error Creating db". mysqli_error($connect);
    }
    mysqli_close($connect);
    // sql create table;
    
?>