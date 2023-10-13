<?php


$localhost = "localhost";
$user = "root";
$pass = '';
$db = "cv";
$conn = new MYSQli($localhost,$user,$pass,$db);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}


?>