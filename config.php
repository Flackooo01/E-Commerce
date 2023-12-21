<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "users";

session_start();
error_reporting(0);

$conn = mysqli_connect($server,$user,$pass,$database);


if(!$conn){
    die("<script>alert('Connection Failed')</script>");
}


?>