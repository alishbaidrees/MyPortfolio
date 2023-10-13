<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from doccure.dreamguystech.com/html/template/admin/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Jun 2023 12:14:25 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title> Visitors - List</title>

<?php

	include("files.php");
	include("connection.php");
	
?>
<?php
		
	session_start();
	$img = $_SESSION['img'];
	$name = $_SESSION['name']; 
	
	if(!isset($_SESSION['username']))
	{
		header('location:login.php');
	}
	
?>
</head>
<body>

<div class="main-wrapper">


<?php

	include("header.php");
	
?>
	

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">List of Patient</h3>

</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<div class="table-responsive">
<div class="table-responsive">
<table class="table table-hover table-center mb-0">
<thead>
<tr>
<th>Visitor<br> ID</th>
<th>Browser <br> Name</th>
<th>Browser <br> Version</th>
<th>Device Type</th>
<th>Operating<br>System</th>
<th>URL</th>
<th>Reference <br> Page</th>
<th>Date & Time</th>
<th>Country</th>
<th>City</th>
<th>Zip</th>
<th>Long, Lat</th>
<th>ISP</th>
<th>IP</th>
<th class="text-center">Actions</th>

</tr>
</thead>
<tbody>
	
<?php

	$sql = "select * from visitor group by id desc";
	$result = $conn->query($sql);
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
	?>
	
			<tr>
			<td>#P00<?php echo $row['id'] ?></td>
			<td>
			<h2 class="table-avatar">
			<a href="#"><?php echo $row['browser_name'] ?></a>
			</h2>
			</td>
			<td><?php echo $row['browser_version'] ?></td>
			<td><?php echo $row['type'] ?></td>
			<td><?php echo $row['os'] ?></td>
			<td><?php echo $row['url'] ?></td>
			<td><?php echo $row['ref'] ?></td>
			<td><?php echo $row['added_on'] ?></td>
			<td><?php echo $row['country'] ?></td>
			<td><?php echo $row['city'] ?></td>
			<td><?php echo $row['zip'] ?></td>
			<td><?php echo $row['long'] ." , ". $row['lat'] ?></td>
			<td><?php echo $row['isp_org'] ?></td>
			<td><?php echo $row['ip'] ?></td>

			<td>
			<div class="actions d-flex justify-content-center">

								<a href="edit_pat.php?pid=<?php echo $row['id']?>" class="btn btn-sm bg-success-light me-2">
									<i class="fe fe-pencil"></i> Edit 
								</a>
								<a class="btn btn-sm bg-danger-light" data-bs-toggle="modal" href="#delete_modal<?php echo $row['id']?>">
									<i class="fe fe-trash"></i> Delete
								</a>
								</form>

			</div>

			</td>

			</tr>
	
	
<div class="modal fade" id="delete_modal<?php echo $row['id']?>" aria-hidden="true" role="dialog">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body">
<div class="form-content p-2">
<h4 class="modal-title">Delete</h4>
<p class="mb-4">Are you sure want to delete?</p>
<button type="button" class="btn btn-danger float-end " data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary float-end me-2"><a href="delete_pat.php?id2=<?php echo $row['id']?>" class="text-white">Save</a> </button>

</div>
</div>
</div>
</div>
</div>
	
<?php	
	}
	}
	
?>

<a class="btn btn-sm bg-success-light mb-2" href="insert_pat.php">
						<i class="fe fe-plus"></i> Add Visitor
</a>
<br>
<a class="btn btn-sm bg-danger-light mb-2" href="delete_all.php">
						<i class="fe fe-minus"></i> Delete All Visitors
</a>

	
	

	
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.4.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body></html>