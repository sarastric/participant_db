<?php
	$title = 'Edit Participant Data';
	
	
	include 'include/header.inc.php';
?>

<div class="content">
	<?php

		include 'include/db.inc.php';

		$participant_id= $_GET['participant_id'];

	?>
<?php 

	include 'include/footer.inc.php';

?>