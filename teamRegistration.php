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
    <h1>Team Registration</h1>
    <form action="submitRegistration.php" name="team_registration_form" method="POST">
        <input type="text" name="school_name" required>
        <input type="number" name="num_teams" min="1" max="3" value="1" required>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>