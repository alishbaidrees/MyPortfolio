<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "cv";

$conn = new MySQLi($server,$user,$password,$db);

if($conn -> connect_error)
{
	die ("Connection error!");
}



?>