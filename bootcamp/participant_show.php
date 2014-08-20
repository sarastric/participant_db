<?php
	
	$title = 'All Boot Camp Participants';
	$participant_show = true;

	include 'include/header.inc.php';
	include 'include/db.inc.php';

					$sql = 'SELECT participant_id, year, firstname, lastname, title, department, university, email FROM bc_academic ORDER BY lastname ASC';

					$result = mysqli_query($link, $sql);

					if (!$result) {
						$error = 'Error fetching data: ' . mysqli_error($link);
						echo $error;
						exit();
					}

					while($recording=mysqli_fetch_array($result)) {
						$participant_id = htmlspecialchars($recording['participant_id'], ENT_QUOTES, 'UTF-8');
						$year = htmlspecialchars($recording['year'], ENT_QUOTES, 'UTF-8');
						$firstname = htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
						$lastname = htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
						$title = htmlspecialchars($recording['title'], ENT_QUOTES, 'UTF-8');
						$department = htmlspecialchars($recording['department'], ENT_QUOTES, 'UTF-8');
						$university = htmlspecialchars($recording['university'], ENT_QUOTES, 'UTF-8');
						$email = htmlspecialchars($recording['email'], ENT_QUOTES, 'UTF-8');
					
					
						echo "<div class='participant'><div class='name'>" . $firstname .  " ". $lastname; 
						echo "<span class='year'>" .  " (" .  $year .  ")" . "</span></div>";
						echo "<div class='affiliation'><strong>Title:</strong> " . $title . ", " . $department . "<br>" . "<strong>University</strong>: ". $university . "</div>"
							;
				
						echo "<a onclick='return confirm(\"Are you sure?\");' href='participant_delete.php?participant_id="  . $participant_id . "'>Delete this participant</a> | ";
                        
                        echo "<a href='participant_edit.php?participant_id="  . $participant_id . "'>Edit this participant</a>";
                        echo "</div>";

					}	
	include 'include/footer.inc.php';

?>			



			
			