<?php
    include 'header.php';

    $sSchoolName = $_POST['school_name'];

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
?>