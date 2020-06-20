<?php
$servername = "localhost";
$username = "root";
$password = "";
$datebase = "myBD";
// create conneion
$connect = mysqli_connect($servername,$username,$password,$datebase);
if(!$connect){
    die("connection fail: ". mysqli_connect_error());
}
$insert = "INSERT INTO MyTable(firstname, lastname, email)
            Values('Trung','Dang', 'dangthanhtrung301@gmail.com')";
    if(mysqli_query($connect,$insert)){
        echo " New values";
    }else 
    {
        echo "error". $insert."<br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>
