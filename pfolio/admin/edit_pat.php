<?php

include("connection.php");

?>

<?php

	if(isset($_GET['pid']))
	{
		$pid = $_GET['pid'];
		$sql="select * from visitor where id = '$pid'";
		$result =$conn->query($sql);
		if($result->num_rows >0)
		{
			while($row=$result->fetch_assoc())
			{
				$id = $row['id'];
				$name = $row['browser_name'];
				$version = $row['browser_version'];
				$type = $row['type'];
				$os = $row['os'];
				$url = $row['url'];
				$ref = $row['ref'];
				$add = $row['added_on'];
				$country = $row['country'];
				$city = $row['city'];
				$zip = $row['zip'];
				$long = $row['long'];
				$lat = $row['lat'];
				$isp = $row['isp_org'];
				$ip = $row['ip'];
			}
			
		}
	}
	
?>


<form class="container w-50 border mt-5 p-5" method="post" action="">
	<h2 class="text-center mb-5">Edit Patient</h2>
							
							<div class="form-group col-12 ">
							<input type="hidden" value="<?php echo $id ?>" name="id">

							<label>Name:</label>
							<input type="text" class="form-control" name="name" value="<?php echo $name ?>">
						  </div>
							<div class="form-group col-12">
							<label>Browser Version:</label>
							<input type="text" class="form-control" name="version" value="<?php echo $version ?>">
						  </div>
							<div class="form-group col-12">
							<label>Type:</label>
							<input type="text" class="form-control" name="type" value="<?php echo $type ?>">
						  </div>
							<div class="form-group col-12">
							<label>OS:</label>
							<input type="text" class="form-control" name="os" value="<?php echo $os ?>">
						  </div>
							<div class="form-group col-12">
							<label>URL:</label>
							<input type="text" class="form-control" name="url" value="<?php echo $url ?>">
						  </div>
							<div class="form-group col-12">
							<label>Page Reference:</label>
							<input type="text" class="form-control" name="ref" value="<?php echo $ref ?>">
						  </div>
						  <div class="form-group col-12">
							<label>Date & Time:</label>
							<input type="text" class="form-control" name="add" value="<?php echo $add ?>">
						  </div>
						  <div class="form-group col-12">
							<label>Country:</label>
							<input type="text" class="form-control" name="country" value="<?php echo $country ?>">
						  </div>
						  <div class="form-group col-12">
							<label>City:</label>
							<input type="text" class="form-control" name="city" value="<?php echo $city ?>">
						  </div>
						  <div class="form-group col-12">
							<label>Zip:</label>
							<input type="text" class="form-control" name="zip" value="<?php echo $zip ?>">
						  </div>
						  <div class="form-group col-12">
							<label>Longitude:</label>
							<input type="text" class="form-control" name="long" value="<?php echo $long ?>">
						  </div>
						  <div class="form-group col-12">
							<label>Latitude:</label>
							<input type="text" class="form-control" name="lat" value="<?php echo $lat ?>">
						  </div>
						  <div class="form-group col-12">
							<label>Internet Service Provider:</label>
							<input type="text" class="form-control" name="isp" value="<?php echo $isp ?>">
						  </div>
						  <div class="form-group col-12">
							<label>IP:</label>
							<input type="text" class="form-control" name="ip" value="<?php echo $ip ?>">
						  </div>
						
						<button type="button" class="btn btn-danger float-end ms-2"><a href="specs.php" class="text-white">Cancel</a></button>
							<button type="submit" class="btn btn-secondary float-end" name="btn">Update</button>
</form>



<?php

if(isset($_POST['btn']))
{
	
$id = $_GET['pid'];

function val($data)
{
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
	return $data;
}
	
$name2 = $_POST['name'];
$version2 = $_POST['version'];
$type2 = $_POST['type'];
$os2 = $_POST['os'];
$url2 = $_POST['url'];
$ref2 = $_POST['ref'];
$add2 = $_POST['add'];
$country2 = $_POST['country'];
$city2 = $_POST['city'];
$zip2 = $_POST['zip'];
$long2 = $_POST['long'];
$lat2 = $_POST['lat'];
$isp2 = $_POST['isp'];
$ip2 = $_POST['ip'];


	
$sql = "update visitor set browser_name = '$name2' , browser_version = '$version2' ,type='$type2',os='$os2',url='$url2' ,ref='$ref2' ,added_on='$add2' 
,country='$country2' ,city='$city2' ,zip='$zip2' ,long='$long2' ,lat='$lat2' ,isp_org='$isp2' ,ip='$ip2'   where id ='$id' ";

if ($conn->query($sql) === TRUE) {
    header("location: visitors.php");
    exit();
}

}

?>

<?php

include("files.php");

?>

