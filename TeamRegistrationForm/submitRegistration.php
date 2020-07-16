<?php
	include '../header.php';

	$sSchoolName = $_POST[school_name];
	$sStreetAddressLine1 = $_POST[street_address_line_1];
	$sStreetAddressLine2 = $_POST[street_address_line_2];
	$sAddressCity = $_POST[address_city];
	$sAddressState = $_POST[address_state];
	$sAddressZip = $_POST[address_zip];
	$iNumTeams = $_POST[num_teams];
	$sTeacher1FirstName = $_POST[teacher_1_first_name];
	$sTeacher1LastName = $_POST[teacher_1_last_name];
	$sTeacher1Telephone = $_POST[teacher_1_telephone];
	$sTeacher1Email = $_POST[teacher_1_email];
	$sAttorne1FirstName = $_POST[attorney_1_first_name];
	$sAttorney1LastName = $_POST[attorney_1_last_name];
	$sAttorney1Telephone = $_POST[attorney_1_telephone];
	$sAttorney1Email = $_POST[attorney_1_email];
	$sArtist1FirstName = $_POST[artist_1_first_name];
	$sArtist1LastName = $_POST[artist_1_last_name];
	$sHelpRequest = $_POST[help_request];
	$sRegionalChoice = $_POST[regional_choice];
	$sPaymentMethod = $_POST[payment_method];

	$qCheckForSchool = "SELECT * FROM school WHERE school_name='$sSchoolName';";

	$res = mysqli_query($con, $qCheckForSchool);

	if(mysqli_num_rows($res) > 0){
		echo "That school is already registered";
	}
	else {
		$qNewSchool = "INSERT INTO school (
			school_name,
			street_address_line_1,
			street_address_line_2,
			address_city,
			address_state,
			address_zip,
			num_teams,
			teacher_1_first_name,
			teacher_1_last_name,
			teacher_1_telephone,
			teacher_1_email,
			attorney_1_first_name,
			attorney_1_last_name,
			attorney_1_telephone,
			attorney_1_email,
			artist_1_first_name,
			artist_1_last_name,
			help_request,
			regional_choice,
			payment_method
		) VALUES (
			'$sSchoolName',
			'$sStreetAddressLine1',
			'$sStreetAddressLine2',
			'$sAddressCity',
			'$sAddressState',
			'$sAddressZip',
			'$iNumTeams',
			'$sTeacher1FirstName',
			'$sTeacher1LastName',
			'$sTeacher1Telephone',
			'$sTeacher1Email',
			'$sAttorne1FirstName',
			'$sAttorney1LastName',
			'$sAttorney1Telephone',
			'$sAttorney1Email',
			'$sArtist1FirstName',
			'$sArtist1LastName',
			'$sHelpRequest',
			'$sRegionalChoice',
			'$sPaymentMethod'
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

		echo "</br>";

		print_r($_SESSION);

		echo "Congratulations. You have registered " . $iNumTeams . " teams for " . $sSchoolName . ".";
		echo "</br";
		echo "Here is the information you submitted";
		echo "</br>";
		foreach($_POST as $name => $value){
			echo ucwords(str_replace('_', ' ', $name)) . " " . $value . "</br>";
		}

		// TODO: Put registration details on a page they can save/print or download as a PDF
		// TODO: submit confirmation email to user
		// TODO: submit confirmation email to registrar
	}

?>