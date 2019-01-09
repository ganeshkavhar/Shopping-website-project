<?php

include 'db.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];

		$query = "DELETE FROM `product` WHERE id='$id'";
		$run = mysqli_query($connection,$query);

		if(!$run){
			echo "<script>alert('Error Occured');</script>";
		}
	}

	if(isset($_POST['userid'])){

		$id = $_POST['userid'];

		$query = "DELETE FROM `user` WHERE id='$id'";
		$run = mysqli_query($connection,$query);

		if(!$run){
			echo "<script>alert('Error Occured');</script>";
		}	
	}


?>