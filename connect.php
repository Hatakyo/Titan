<?php
$user="root";
$password="";
$host="localhost";
$database="titan";
$connection =new mysqli($host,$user,$password,$database);
mysqli_set_charset($connection, 'UTF8');  
if($connection->connect_error){
    mysqli_set_charset($connect, 'UTF8');
	die("connection is error");
};
