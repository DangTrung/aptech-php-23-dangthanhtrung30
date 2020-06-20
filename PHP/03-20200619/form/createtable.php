<?php
    $server ="localhost";
    $username = "root";
    $password = "";
    $database ="User";
    $connect = mysqli_connect($server,$username,$password,$database);
    $table = "create table MyUser(
        id int(6) UNSIGNED AUTO_INCREMENT primary key,
        nameUser  VARCHAR(30),
        pass VARCHAR(20),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
if ( mysqli_query($connect,$table)){
    echo "Table ready";
} else
{
    echo "Error creating table: " . mysqli_error($connect);
}
mysqli_close($connect);
?>
