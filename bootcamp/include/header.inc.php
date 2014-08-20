<?php 

	if(isset($participant_show) && $participant_show == true) {
		$participant_show_class = 'navcurr';
	} else { 
		$participant_show_class = 'nav';
	}

	if(isset($participant_add) && $participant_add == true) {
		$participant_add_class = 'navcurr';
	} else {
		$participant_add_class = 'nav';
	}

	if(isset($search) && $search == true) {
		$search_class = 'navcurr';
	} else {
		$search_class = 'nav';

	}
?>

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html: charset=UTF-8" />
		<link href="assets/style.css" type="text/css" rel="stylesheet"/>
		<title><?php echo $title; ?></title>

		<body>
			<div class="wrapper">
				<div class="headline"></div>
				<div class="header">
				<a href="http://www.neuroethics.upenn.edu"><img src="assets/cns_logo_2c.jpg" alt="University of Pennsylvania Center for Neuroscience &amp; Society" ></a>
				<h1><?php echo $title; ?></h1>
			</div>

			<div class="navbar">
				<a href="participant_show.php" class="nav">Show Participant</a> |
				<a href="participant_add.php" class="nav">Add Participant</a> | 
				<a href="search.php" class="nav">Participant Search</a> | 
			</div>

	</head>