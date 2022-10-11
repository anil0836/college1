<?php 
	include('connection.php');

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query  = "DELETE FROM student WHERE id = $id";
		$res  = mysqli_query($conn,$query);

		if($res){
			header('location:all_record.php');	
		}else{
			echo "Something Went Wrong!!";
		}
	}

?>   