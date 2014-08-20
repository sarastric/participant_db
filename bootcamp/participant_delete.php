<?php 

	include 'include/db.inc.php';
	$participant_id = $_GET['participant_id'];

	$sql = "DELETE FROM bc_academic WHERE participant_id='$participant_id'";

	$result = mysqli_query($link, $sql);

	if(!$result) {
		$error = 'Error deleting participant' . mysqli_error($link);
		echo $error;
		exit();
	}

	header('location:product_show.php');


?>