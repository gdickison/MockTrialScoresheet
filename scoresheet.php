<?php
    if(isset($_POST['submit'])){
        echo "<h1>Data</h1>";
        echo "<h2>Round No: " . $_POST['round_number'] . "</h2>";
        echo "<h2>Courtroom No: " . $_POST['courtroom_number'] . "</h2>";
        echo "<h2>Plaintiff: " . $_POST['plaintiff_code'] . "</h2>";
        echo "<h2>Defendant: " . $_POST['defendant_code'] . "</h2>";

        foreach($_POST as $name => $value){
            echo ucwords(str_replace('_', ' ', $name)) . " " . $value . "</br>";
        }
    }
?>