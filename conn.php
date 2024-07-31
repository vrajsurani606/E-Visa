<?php
$servername="localhost";
$username="root";
$password="";
$dbname="e-visa";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con) 
{
    die("connection failed".mysqli_connect_error());
}
else{
    // echo"CONNECTION ESTABLISHED SUCCESSFILLY..";
}
?>