<?php
     $servername = "localhost";
     $username = "root";
     $password ="";
     $database = "myBD";
     //create connection 
     $connect = mysqli_connect($servername, $username, $password,$database);
     //check
     if (!$connect){
         die(" Connection Fail: ".mysqli_connect_error());
     }
     $table = "create table MyTable(
        id int(6) UNSIGNED AUTO_INCREMENT primary key,
        firstname Varchar(20) NOT NULL,
        lastname Varchar(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if( mysqli_query($connect,$table)){
        echo "Creating successfully";
    }else
    {
        echo" error". mysqli_error($connect);
    }
?>