<?php
	/* Use this function to generate codes for the db */
	function teamCodeGenerator($iNumTeams){
		$aTeamCodes = [];
		$permitted_chars = 'BCDFGHJKLMNPQRSTVWXZ';
		for($i = 0; $i < $iNumTeams; $i++){
			array_push($aTeamCodes, substr(str_shuffle($permitted_chars), 0, 3));
		}
		foreach($aTeamCodes as $sTeamCode){
			echo "<option value=".$sTeamCode.">".$sTeamCode."</option>";
		};
	}

	/* Pull $aTeamCodes from the db */
	function teamCodeSelectOptions($aTeamCodes){
		foreach($aTeamCodes as $sTeamCode){
			echo "<option value=".$sTeamCode.">".$sTeamCode."</option>";
		};
	}
