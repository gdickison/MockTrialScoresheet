<?php
	include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Team Registration</title>
</head>
<body>
	<img class="banner" src="resources/ILF-blue-horizontal.5d72d865746a76.72733695.png" alt="ILF banner">
	<h1>2021 Idaho High School Mock Trial Competition</h1>
	<h3>Team Registration Form</h3>
	<div>
		<p>
			The Idaho High School Mock Trial Competiton is open to all Idaho public and private high schools, and high school-age home school groups. Each school can register up to 3 teams. Registration is open from September 3 to January 15. The registration fee is $200 from September 3 to November 15 and $300 from November 16 to January 15.
		</p>
		<p>
			Completely fill out all the information on this form to register your teams(s) for the 2020 Idaho High School Mock Trial Competition. If you have questions, contact Carey Shoufler.
		</p>
		<p>
			PLEASE NOTE: THE REGISTRATION FEE IS NON-REFUNDABLE.
		</p>
		<button>Next</button>
	</div>
	<form action="submitRegistration.php" name="team_registration_form" method="POST">
		<div>
			<h3>School Information</h3>
			<fieldset>
				<h4>School Name</h4>
				<select name="school_name" id="school_name" class="school-name-dropdown" required>
					<?php
						highSchoolSelector($con);
					?>
				</select>
				<p>Don't see your school? Please contact us and we will make sure you are added to the list.</p>
				<h4>Address</h4>
				<label for="street_address_line_1">Street Address</label>
				<input name="street_address_line_1" id="street_address_line_1" type="text" required>
				<label for="street_address_line_2">Street Address Line 2</label>
				<input name="street_address_line_2" id="street_address_line_2" type="text">
				<label for="address_city">City</label>
				<input name="address_city" id="address_city" type="text" required>
				<label for="address_state">State</label>
				<input name="address_state" id="address_state" type="text" value="ID" required>
				<label for="address_zip">Zip</label>
				<input name="address_zip" id="address_zip" type="text" required>
			</fieldset>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div>
			<h3>Team Information</h3>
			<p>Each school can register up to three teams. Please indicate how many teams your school is registering.</p>
			<input type="number" name="num_teams" min="1" max="3" value="1" required>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div>
			<p>
				Each team should have a teacher sponsor and an attorney coach, and must have a minimum of six and a maximum of nine team members. On the following pages please enter the name and contact information for each teacher sponsor and attorney coach.
			</p>
			<p>
				For schools with more than one team, we encourage you to have separate teacher and attorney coaches for each team. But, if you are unable to provide separate coaches for each team, you may enter the same teacher sponsor or attorney coach name for each team.
			</p>
			<p>
				Please note: a teacher sponsor, attorney coach, or other supervising adult must be present during competitions for each team. For schools with two or three teams this means that each team must have a separate adult present with each team during the competition.
			</p>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div>
			<!-- TODO: Make this dynamic so it generates one for each team being registered -->
			<h3>Team 1</h3>
			<fieldset>
				<h4>Team 1 Teacher Sponsor</h4>
				<label for="teacher_1_first_name">First Name</label>
				<input name="teacher_1_first_name" id="teacher_1_first_name" type="text" required>
				<label for="teacher_1_last_name">Last Name</label>
				<input name="teacher_1_last_name" id="teacher_1_last_name" type="text" required>
				<label for="teacher_1_telephone">Phone #</label>
				<input name="teacher_1_telephone" id="teacher_1_telephone" type="tel" required>
				<label for="teacher_1_email">Email</label>
				<input name="teacher_1_email" id="teacher_1_email" type="email" required>
				<h4>Team 1 Attorney Coach</h4>
				<label for="attorney_1_first_name">First Name</label>
				<input name="attorney_1_first_name" id="attorney_1_first_name" type="text" required>
				<label for="attorney_1_last_name">Last Name</label>
				<input name="attorney_1_last_name" id="attorney_1_last_name" type="text" required>
				<label for="attorney_1_telephone">Phone #</label>
				<input name="attorney_1_telephone" id="attorney_1_telephone" type="tel" required>
				<label for="attorney_1_email">Email</label>
				<input name="attorney_1_email" id="attorney_1_email" type="email" required>
			</fieldset>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div>
			<h3>Courtroom Artist</h3>
			<p>
				The Courtroom Artist Contest is open to students in grades 9 through 12, to allow artistically talented students the opportunity to participate in the mock trial program. Artists observe trials and submit sketches that depict actual courtroom scenes. The top six finishers from regional contests will be invited to participate in the state mock trial competition.
			</p>
			<p>
				Each mock trial team may register one courtroom artist per team (so if your school has three teams, you can enter up to 3 artists). A team does not have to have a named artist at the time of registration. An artist who participates with a team will still compete solely on their own efforts and will NOT be considered as part of their school’s team in terms of advancing or not advancing to the state competition.
			</p>
			<h4>Artist - Team 1</h4>
			<fieldset> <!-- TODO: Make this dynamic so it generates one for each team being registered -->
				<label for="artist_1_first_name">First Name</label>
				<input name="artist_1_first_name" id="artist_1_first_name" type="text">
				<label for="artist_1_last_name">Last Name</label>
				<input name="artist_1_last_name" id="artist_1_last_name" type="text">
			</fieldset>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div>
			<h4>Team Support</h4>
			<p>Please let us know if you need any assistance</p>
			<fieldset>
				<legend>Select all that apply</legend>
				<div>
					<input name="help_request" value="attorney_coach_help" id="attorney_coach_help" type="checkbox">
					<p>
						My team would like some assistance recruiting an attorney coach
					</p>
				</div>
				<div>
					<input name="help_request" value="mentor_help" id="mentor_help" type="checkbox">
					<p>
						My team would like an experienced coach to serve as a team mentor.
					</p>
				</div>
				<div>
					<input name="help_request" value="scrimmage_help" id="scrimmage_help" type="checkbox">
					<p>
						My team would be interested in participating in a scrimmage prior to regionals.
					</p>
				</div>
				<div>
					<input name="help_request" value="training_help" id="training_help" type="checkbox">
					<p>
						My coaches would be interested in attending a mock trial training.
					</p>
				</div>
			</fieldset>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div> <!-- TODO: replace this with online scrimmage/regional options, or do a schedule sign up later -->
			<h4>Regional Competition Selection</h4>
			<p>
				PLEASE NOTE: If you select a regional competition that does not end up having enough teams to support a tournament, you may be asked to compete in another regional. For scheduling purposes, the State Competiton will be in Boise on March 18 to 20. Please select the regional competition in which you expect to participate.
			</p>
			<fieldset>
				<legend>Select Regional</legend>
				<input type="radio" name="regional_choice" value="regional_1" required>
					<p>Regional 1</p>
				<input type="radio" name="regional_choice" value="regional_2">
					<p>Regional 2</p>
				<input type="radio" name="regional_choice" value="regional_3">
					<p>Regional 3</p>
			</fieldset>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div>
			<h4>Fee Information</h4>
			<p>
				Team Registration: Each team must pay a non-refundable registration fee of $200 per team from September 3 to November 15, 2019 or $300 per team from November 16, 2019 through the final registration deadline of January 15, 2020. No teams may register after the final registration deadline.
			</p>
			<p>
				Season Completion Deposit: Each team must pay a $50 deposit per team. This deposit will be refunded to each team that participates in their regional competition. Teams that drop out of the competition before their regional competition agree to forfeit ther deposit to cover expenses associated with their cancellation.
			</p>
			<p>
				Courtroom Artist Fee: Each participating school may enter up to one artist per team. The fee is $30 per artist.
			</p>
			<p>
				Reduced or Waived Fees: If your team is having difficulty paying the registration fee, contact Carey Shoufler at cshoufler@isb.idaho.gov to discuss the possibility of reducing or waiving mock trial fees.
			</p>
			<p>
				Payment Method: Teams may pay the registration fees online via PayPal (a 3% PayPal transaction fee will be added) or by mailing a check. Registration is not complete and case materials will not be sent until payment is received.
			</p>
			<p>
				Please click "Next" to calculate the fees and choose a payment option.
			</p>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div>
			<h4>Fee Calculation</h4>
			<h3>Subtotals</h3>
			<ul>
				<li>X teams x $300 registration fee per team = $$$</li>
				<li>X teams x $50 season completion deposit per team = $$$</li>
				<li>X courtroom artists x $30 registration fee per artist = $$$</li>
			</ul>
			<h3>Total fees</h3>
			<ul>
				<li>Fees if paid by check = $$$</li>
				<li>Fees if paid by PayPal ($$$ + $$$ transaction fee) = $$$</li>
			</ul>
			<h3>Select a payment option</h3>
			<input type="radio" name="payment_method" value="pay_by_check_">
				<p>Pay by Check</p>
			<input type="radio" name="payment_method" value="pay_by_paypal">
				<p>Pay online via PayPal</p>
			<button>Back</button>
			<button>Next</button>
		</div>
		<div> <!-- pay by check section -->
			<p>
				Make your check in the amount of {totalFees152} payable to "Idaho Law Foundation" and write "2020 Idaho Mock Trial Competition" on the memo line. Mail your check to Idaho Law Foundation, PO Box 895, Boise, ID 83701.
			</p>
			<p>
				Reminders: The registration fee is non-refundable and registration is not complete and case materials will not be sent until payment is received.
			</p>
			<p>
				Registration Fees to be paid via PayPal (clicking Submit will take you to PayPal)
			</p>
			<p>Total fees = $$$</p>
		</div>
		<button>Back</button>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>