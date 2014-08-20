<?php 
	$title = 'Participant Search';
	include 'include/header.inc.php';
?>

			<div class="content">

				<form action="search_result.php"method="get">
					<input type="text"name="keyword">
					<input type="submit" value="Search">
				</form>
<?php

	include 'include/footer.inc.php';

?>