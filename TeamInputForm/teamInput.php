<?php

include '../header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<form action="/submitTeam.php" name="team_registration_form" method="POST">
	<div>
		<h3>School Information</h3>
		<fieldset>
			<h4>School Name</h4>
			<select name="school_name" id="school_name" class="school-name-dropdown" required>
				<?php
					highSchoolSelector($con);
				?>
			</select>
		</fieldset>
	</div>
	<div>
		<label for="num_teams">Number of Teams</label>
		<input type="number" name="num_teams" min="1" max="3" value="1" required>
	</div>
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>