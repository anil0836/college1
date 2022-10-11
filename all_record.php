<?php 
include('connection.php');
$query  = "SELECT * FROM student";
$res = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>College</title>
</head>
<body>
	<div class="container mt-3">
		<div class="col-md-12">
			<div>
				<h2 class="text-center text-danger">Student Records</h2><hr>
				<span style="float: right; margin-bottom: 10px;"><a style="text-decoration: none;" class="btn-sm btn-primary " href="register.php">+Add New</a></span>
				
			</div>
			<table class="table">
				<tr>
					<thead>
						<th>Sr.No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone No. </th>
						<th>Address</th>
						<th>Fees</th>
						<th >Action</th>
					</thead>
				</tr>
				<?php 
				$i= 1;
				while ($row = mysqli_fetch_assoc($res)) { ?>
					<tr>
						<td><?php echo $i++ ;?></td>
						<td><?php echo $row['name'] ;?></td>
						<td><?php echo $row['email'] ;?></td>
						<td><?php echo $row['phone'] ;?></td>
						<td><?php echo $row['address'] ;?></td>
						<td><?php echo $row['fees'] ;?></td>
						<td>
							<a style="text-decoration: none;" class="btn-sm btn-danger" href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('dont deleterecord?')">Delete</a>
							<a style="text-decoration: none;" class="btn-sm btn-success" href="#   ">Update</a>
						</td>
					</tr>
				<?php } ?>

			</table>
		</div>
	</div>
</body>
</html>