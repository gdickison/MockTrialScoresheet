<?php
    include 'header.php';

    $sSchoolName = $_POST['school_name'];

    /* TODO - this is comparing the entire input to the table, but if the input contains anything new it won't work. What can I do instead? */
    $qCheckForSchool = "SELECT * FROM school WHERE school_name LIKE CONCAT('%', '$_POST[school_name]', '%');";

    $res = mysqli_query($con, $qCheckForSchool);

    print_r(mysqli_num_rows($res));

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