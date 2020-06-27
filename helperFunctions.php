<?php
	/* Use this function to generate codes for the db */
	function teamCodeGenerator(){
		$permitted_chars = 'BCDFGHJKLMNPQRSTVWXZ';
		$sTeamCode = substr(str_shuffle($permitted_chars), 0, 3);
		return $sTeamCode;
	}

	/* Pull $aTeamCodes from the db */
	function teamCodeSelectOptions($con){
		$qGetTeamCodes = "SELECT team_code FROM team_codes;";
		$response = mysqli_query($con, $qGetTeamCodes);
		while ($row = mysqli_fetch_array($response, MYSQLI_ASSOC)){
			echo "<option value='".$row['team_code']."'>".$row['team_code']."</option>";
		};
	}

	function highSchoolSelector($con){
		$qGetSchools = "SELECT school_name FROM idaho_high_schools;";
		$response = mysqli_query($con, $qGetSchools);
		while ($row = mysqli_fetch_array($response, MYSQLI_ASSOC)){
            echo "<option value='".$row['school_name']."'>".$row['school_name']."</option>";
        };
	}