<?php

/*Include file to connect to server and database*/
	include 'include/db.inc.php';

/*Get data from form, clean it up for MySQL database*/
	$year = mysqli_real_escape_string($link, $_GET['year']); 
	$lastname = mysqli_real_escape_string($link, $_GET['lastname']); 
	$firstname = mysqli_real_escape_string($link, $_GET['firstname']);
	$title = mysqli_real_escape_string($link, $_GET['title']);
	$department = mysqli_real_escape_string($link, $_GET['department']);
	$university = mysqli_real_escape_string($link, $_GET['university']);
	$city = mysqli_real_escape_string($link, $_GET['city']);
	$state = mysqli_real_escape_string($link, $_GET['state']);
	$country= mysqli_real_escape_string($link, $_GET['country']);
	$zip = mysqli_real_escape_string($link, $_GET['zip']);
	$email = mysqli_real_escape_string($link, $_GET['email']);


/*Include file to connect to server and database*/
	$sql = "INSERT INTO bc_academic SET
	year = '$year',
	lastname = '$lastname',
	firstname = '$firstname',
	title = '$title',
	department = '$department',
	university = '$university',
	city = '$city',
	state = '$state',
	country = '$country',
	zip = '$zip',
	email= '$email'";

/*Check for errors*/
	if (!mysqli_query($link, $sql)){
		$error = 'Error adding submitted data: ' . 
			mysqli_error($link);
		echo $error;
		exit();
	}

/*Redirect to participant_show.php */

	header('Location:participant_show.php');

?>




