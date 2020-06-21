<?php
	function teamCodeGenerator($iNumTeams){
		$aTeamCodes = [];
		$permitted_chars = 'BCDFGHJKLMNPQRSTVWXZ';
		for($i = 0; $i < $iNumTeams; $i++){
			array_push($aTeamCodes, substr(str_shuffle($permitted_chars), 0, 3));
		}
		print_r($aTeamCodes);
	}
