<?php
	/* Use this function to generate codes for the db */
	function teamCodeGenerator(){
		$permitted_chars = 'BCDFGHJKLMNPQRSTVWXZ';
		$sTeamCode = substr(str_shuffle($permitted_chars), 0, 3);
		return $sTeamCode;
	}

	/* Pull $aTeamCodes from the db */
	function teamCodeSelectOptions($aTeamCodes){
		foreach($aTeamCodes as $sTeamCode){
			echo "<option value=".$sTeamCode.">".$sTeamCode."</option>";
		};
	}
