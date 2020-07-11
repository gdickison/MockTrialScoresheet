<?php
	include 'header.php';

	$sSchoolName = $_POST[school_name];

	$qCheckForSchool = "SELECT * FROM school WHERE school_name='$sSchoolName';";

	$res = mysqli_query($con, $qCheckForSchool);

	if(mysqli_num_rows($res) > 0){
		echo "That school is already registered";
	}
	else {
		$qNewSchool = "INSERT INTO school (
			school_name
		) VALUES (
			'$sSchoolName'
		);";

		mysqli_query($con, $qNewSchool);

		$x = "A";
		for($i = 0; $i < $_POST[num_teams]; $i++){
			$sTeamCode = teamCodeGenerator();
			$newTeam = "INSERT INTO team_codes (
				team_name,
				team_code
			) VALUES (
				CONCAT('$sSchoolName', ' ' , '$x'),
				'$sTeamCode'
			);";
			mysqli_query($con, $newTeam);
			$x++;
		}

		foreach($_POST as $name => $value){
			echo ucwords(str_replace('_', ' ', $name)) . " " . $value . "</br>";
		}

		echo "</br>";

		print_r($_SESSION);

		echo "Congratulations. You have registered " . $_POST[num_teams] . " teams for " . $sSchoolName . ".";
		echo "Here is the information you submitted:";
		// TODO: Put registration details on a page they can save/print or download as a PDF
		// TODO: submit confirmation email to user
		// TODO: submit confirmation email to registrar
	}

?>