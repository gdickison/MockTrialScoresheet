<?php
    include 'header.php';

    $sSchoolName = $_POST['school_name'];

    $qCheckForSchool = "SELECT * FROM school WHERE school_name='$_POST[school_name]';";

    $res = mysqli_query($con, $qCheckForSchool);

    if(mysqli_num_rows($res) > 0){
        echo "That school is already registered";
    }
    else {
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

        echo "Congratulations. You have registered " . $_POST[num_teams] . " teams for " . $sSchoolName . ".";
    }

?>