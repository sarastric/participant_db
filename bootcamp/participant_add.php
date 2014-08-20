<?php
	$title = 'Add a Neuroscience Boot Camp Participant';
	$participant_add = true;
	
	include 'include/header.inc.php';
?>
	

			<div class="content">

				<form action="participant_add_result.php" method="get">
				
					Boot Camp Year:	<select name="year">
					 	<option value="2009">2009</option>
					 	<option value="2010">2010</option>
					 	<option value="2011">2011</option>
					 	<option value="2012">2012</option>
					 	<option value="2013">2013</option>
					 	<option value="2014">2014</option>
					 </select><br>
					First Name: <input type="text" name="firstname"><br>
					Last Name: <input type="text" name="lastname"><br>
					Title: <input type="text" name="title"><br>
					Department: <input type="text" name="department"><br>
					University: <input type="text" name="university"><br>
					City: <input type="text" name="city"><br>
					State: <input type="text" name="state"><br>
					Country: <input type="text" name="country"><br>
					Zip:<input type="text" name="zip"><br>
					Email:<input type="text" name="email"><br><br>
					<input type="submit" value="Submit" />
				</form><br/>

			</div>

<?php

include 'include/footer.inc.php';

?>