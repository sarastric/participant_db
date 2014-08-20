<?php

	/*Connect to server*/
	$link=mysqli_connect ('localhost', 'root', '' );
	if (!$link){
		$output='Unable to connect to the database';
		echo $output;
		exit();

	}

	/*Check for proper encoding*/
	if (!mysqli_set_charset($link, 'utf8')) {
		$output= 'Unable to set database connection encoding';
		echo $output;
		exit();

	}

	/*Connect to 'bootcamp database'*/

	if (!mysqli_select_db($link, 'bootcamp')) {
		$output= ' Unable to locate the database.';
		echo $output;
		exit();
	}
?>