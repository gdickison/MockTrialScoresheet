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