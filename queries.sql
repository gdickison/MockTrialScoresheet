/* These are draft queries to create the tables and insert the data from the scoresheet */

CREATE SCHEMA `idaho_mock_trial`;

/* These have not been run yet  */

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password
BY 'AcQBBWkmV4Di';

CREATE TABLE `idaho_mock_trial`.`users` (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `first_name` VARCHAR(50),
    `last_name` VARCHAR(50),
    `username` VARCHAR(100),
    `email` VARCHAR(100),
    `password` VARCHAR(255),
    `create_date` DATE,
    `user_closed` VARCHAR(3)
    )
    AUTO_INCREMENT = 100;
    
SELECT * FROM idaho_mock_trial.users;

CREATE TABLE idaho_mock_trial.scoresheet (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `round_number` INT,
    `courtroom_number` INT,
    `plaintiff_code` VARCHAR(3),
    `defendant_code` VARCHAR(3),
    `plaintiff_opening` INT,
    `defense_opening` INT,
    `plaintiff_first_witness` VARCHAR (50),
    `plaintiff_first_witness_direct` INT,
	`plaintiff_first_witness_cross` INT,
	`plaintiff_first_witness_performance` INT,
    `plaintiff_second_witness` VARCHAR (50),
	`plaintiff_second_witness_direct` INT,
	`plaintiff_second_witness_cross` INT,
	`plaintiff_second_witness_performance` INT,
    `plaintiff_third_witness` VARCHAR (50),
	`plaintiff_third_witness_direct` INT,
	`plaintiff_third_witness_cross` INT,
	`plaintiff_third_witness_performance` INT,
    `defense_first_witness` VARCHAR (50),
	`defense_first_witness_direct` INT,
	`defense_first_witness_cross` INT,
	`defense_first_witness_performance` INT,
    `defense_second_witness` VARCHAR (50),
	`defense_second_witness_direct` INT,
	`defense_second_witness_cross` INT,
	`defense_second_witness_performance` INT,
    `defense_third_witness` VARCHAR (50),
	`defense_third_witness_direct` INT,
	`defense_third_witness_cross` INT,
	`defense_third_witness_performance` INT
);

CREATE TABLE idaho_mock_trial.comments (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `round_number` INT,
    `team_code` VARCHAR(3),
    `comments` TEXT
);

INSERT INTO idaho_mock_trial.scoresheet(
    round_number,
    courtroom_number,
    plaintiff_code,
    defendant_code,
    plaintiff_opening,
    defense_opening,
    plaintiff_first_witness,
    plaintiff_first_witness_direct,
    plaintiff_first_witness_cross,
    plaintiff_first_witness_performance,
    plaintiff_second_witness,
    plaintiff_second_witness_direct,
    plaintiff_second_witness_cross,
    plaintiff_second_witness_performance,
    plaintiff_third_witness,
    plaintiff_third_witness_direct,
    plaintiff_third_witness_cross,
    plaintiff_third_witness_performance,
    defense_first_witness,
    defense_first_witness_direct,
    defense_first_witness_cross,
    defense_first_witness_performance,
    defense_second_witness,
    defense_second_witness_direct,
    defense_second_witness_cross,
    defense_second_witness_performance,
    defense_third_witness,
    defense_third_witness_direct,
    defense_third_witness_cross,
    defense_third_witness_performance
) VALUES (
    $iRound,
    $iCourtroom,
    $sPlaintiff,
    $sDefendant,
    $iPlaintiffOpening,
    $iDefenseOpening,
    $iPlaintiff1stWitnessDirect,
    $iPlaintiff1stWitnessCross,
    $iPlaintiff1stWitnessPerformance,
    $iPlaintiff2ndWitnessDirect,
    $iPlaintiff2ndWitnessCross,
    $iPlaintiff2ndWitnessPerformance,
    $iPlaintiff3rdWitnessDirect,
    $iPlaintiff3rdWitnessCross,
    $iPlaintiff3rdWitnessPerformance,
    $iDefense1stWitnessDirect,
    $iDefense1stWitnessCross,
    $iDefense1stWitnessPerformance,
    $iDefense2ndWitnessDirect,
    $iDefense2ndWitnessCross,
    $iDefense2ndWitnessPerformance,
    $iDefense3rdWitnessDirect,
    $iDefense3rdWitnessCross,
    $iDefense3rdWitnessPerformance
);

INSERT INTO idaho_mock_trial.comments (round_number, team_code, comments)
VALUES ($iRound, $sPlaintiff, $sPlaintiffComments), ($iRound, $sDefendant, $sDefendantComments);

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

ALTER TABLE idaho_mock_trial.school

ADD `street_address_line_1` VARCHAR(50),
ADD `street_address_line_2` VARCHAR(50),
ADD `address_city` VARCHAR(50),
ADD `address_state` VARCHAR(2),
ADD `address_zip` INT,
ADD `num_teams` INT,
ADD `teacher_1_first_name` VARCHAR(50),
ADD `teacher_1_last_name` VARCHAR(50),
ADD `teacher_1_telephone` VARCHAR(15),
ADD `teacher_1_email` VARCHAR(50),
ADD `attorney_1_first_name` VARCHAR(50),
ADD `attorney_1_last_name` VARCHAR(50),
ADD `attorney_1_telephone` VARCHAR(15),
ADD `attorney_1_email` VARCHAR(50),
ADD `artist_1_first_name` VARCHAR(50),
ADD `artist_1_last_name` VARCHAR(50),
ADD `help_request` VARCHAR(50),
ADD `regional_choice` VARCHAR(50),
ADD `payment_method` VARCHAR(50);