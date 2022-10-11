<?php 
	include('connection.php');

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$fee = $_POST['fees'];

		$query  = "INSERT INTO student(name, email, phone, address, fees) VALUES ('$name','$email','$phone','$address','$fee')";

		$res = mysqli_query($conn,$query);

		if ($res) {
			header('location:all_record.php');
			echo "Inserted!!";
		}else{
			echo "Something Went Wrong!!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>College</title>
	<style type="text/css">
		.card{
			box-shadow: 0px 0px 2px 2px black;
		}
	</style>
</head>
<body>
	<div class="container mt-3">
		<div class="col-md-6 card p-3 d-block m-auto">
		<h2 class="text-center text-primary">Applicaion Form</h2><hr>
		<form method="POST">
			<div class="mb-3 mt-3">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
			</div>
			<div class="mb-3 mt-3">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			</div>
			<div class="mb-3 mt-3">
				<label for="phone">Phone No:</label>
				<input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
			</div>
			<div class="mb-3 mt-3">
				<label for="address">Address:</label>
				<input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
			</div> 
			<div class="mb-3">
				<label for="fees":</label>
				<input type="text" class="form-control" id="fees" placeholder="Enter fees" name="fees">
			</div>
			
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	</div>

</body>
</html>