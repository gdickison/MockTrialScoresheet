<?php
    if(isset($_POST['submit'])){
        echo "<h1>Data</h1>";
        $scoreSelectRound = $_POST['score_select_round'];
        foreach($_POST as $name => $value){
            echo $name . " " . $value . "</br>";
        }
    }
?>