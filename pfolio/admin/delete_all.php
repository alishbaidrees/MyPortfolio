<?php


include("connection.php");

?>


<?php


$sql="truncate visitor";
$result = $conn->query($sql);
$sql2 = "truncate visitor";
	
if($conn -> query($sql2) === TRUE)
{
	header('location:visitors.php');
}



?>