<?php


include("connection.php");

?>


<?php


$sql="truncate contact";
$result = $conn->query($sql);
$sql2 = "truncate visitor";
	
if($conn -> query($sql2) === TRUE)
{
	header('location:contact.php');
}



?>