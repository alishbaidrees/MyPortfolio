
<?php
include("config.php");
include("links.php");


    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $msg = $_POST['message'];
    $date = date('Y-m-d h:i:sa');  
    $sql = "insert into contact (id,name,email,phone,msg) values ('' , '$name' , '$email' , '$phone' , '$msg' )";
		if($conn->query($sql) === true){
		$send = "done";
		}
			

    




?>