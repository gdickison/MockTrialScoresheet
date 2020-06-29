<?php

function scorePicker($name){
	echo "<div class='score-radio-group'>";
	for($i = 1; $i <=10; $i++){
		echo
			"<div class='radio-group'>
				<input type='RADIO' name=".$name." value=".$i." required>
				<label>".$i."</label>
			</div>";
	};
	echo "</div>";
}