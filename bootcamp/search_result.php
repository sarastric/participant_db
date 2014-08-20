<?php
	$title= 'Boot Camp Participant Search';
	include 'include/header.inc.php';


?>


<div class="content">
	<?php

		include 'include/db.inc.php';

		$keyword = $_GET['keyword'];

		echo '<h3> Search results for '. $keyword . '</h3>';

		$fields="SELECT  

		/* the SQL alias AS temporarily renames a column to something else*/
				/*bc_academic.participant_id as participant_id,*/
				bc_academic.year as year,
				bc_academic.lastname as lastname,
				bc_academic.firstname as firstname,
				bc_academic.title as title,
				bc_academic.department as department,
				bc_academic.university as university,
				bc_academic.city as city, 
				bc_academic.state as state,
				bc_academic.country as country,
				bc_academic.zip as zip,
				bc_academic.email as email";

			$table="FROM bc_academic";

			$where="WHERE lastname LIKE '%$keyword%' OR firstname LIKE '%$keyword%'";
                                
                /*where should the following go?--> if ($keyword != '')*/

			$sql=$fields.$table.$where;

			$result = mysqli_query($link, $sql); 
			if (!$result) {
				$error = 'Error fetching data: ' . mysqli_error($link);
				echo $error;
				exit();
			}


			while($recording=mysqli_fetch_array($result)){
						$year = htmlspecialchars($recording['year'], ENT_QUOTES, 'UTF-8');
						$firstname = htmlspecialchars($recording['firstname'], ENT_QUOTES, 'UTF-8');
						$lastname = htmlspecialchars($recording['lastname'], ENT_QUOTES, 'UTF-8');
						$title = htmlspecialchars($recording['title'], ENT_QUOTES, 'UTF-8');
						$department = htmlspecialchars($recording['department'], ENT_QUOTES, 'UTF-8');
						$university = htmlspecialchars($recording['university'], ENT_QUOTES, 'UTF-8');
						$email = htmlspecialchars($recording['email'], ENT_QUOTES, 'UTF-8');


						echo "<div class='participant'><div class='name'>" . $firstname .  " ". $lastname; 
						echo "<span class='year'>" .  " (" .  $year .  ")" . "</span></div>";
						echo "<div class='affiliation'><strong>Title:</strong> " . $title . ", " . $department . "<br>" . "<strong>University</strong>: ". $university;
						
						/*echo*/ "</div>";
					}

		?>



<?php 
 
 include 'include/footer.inc.php';

?>