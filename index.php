<?php
    include 'header.php';
?>
<body>
    <h1>Idaho High School Mock Trial Competition Scoresheet</h1>
    <?php
    /*     $sql = "INSERT INTO users (first_name, last_name, username, email, password) */
    /*         VALUES('Greg', 'Dickison', 'gdickison', 'gdickison@gmail.com', 'password');"; */
    /*     mysqli_query($con, $sql); */
    /* ?>
    <?php */
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo $row['username']."</br>";
            }
        }

        teamCodeGenerator(10);
    ?>
    <form action="scoresheet.php" name="scoring-form" method="post">
    <h2>Select Teams</h2>
        <div>
            <span class="team-code-dropdown-label">Plaintiff</span>
            <span class="team-code-dropdown-label">Defendant</span>
        </div>
        <div class="team-code-select">
            <select name="plaintiff_code" id="" class="plaintiff-code-dropdown" required>
                <option value="ABC">ABC</option>
                <option value="DEF">DEF</option>
                <option value="GHI">GHI</option>
                <option value="XYZ">XYZ</option>
            </select>
            <select name="defendant_code" id="" class="defendant-code-dropdown" required>
                <option value="ABC">ABC</option>
                <option value="DEF">DEF</option>
                <option value="GHI">GHI</option>
                <option value="XYZ">XYZ</option>
            </select>
        </div>
        <div class="section-headers">
            <h2 class="radio-group-section-header">Select Round</h2>
            <h2 class="radio-group-section-header">Select Courtroom</h2>
        </div>
        <div class="round-radio-group">
            <div class="radio-group">
                <input type="RADIO" name="round_number" value="1" required>
                <label>1</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="round_number" value="2">
                <label>2</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="round_number" value="3">
                <label>3</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="round_number" value="4">
                <label>4</label>
            </div>
        </div>
        <div class="courtroom-radio-group">
            <div class="radio-group">
                <input type="RADIO" name="courtroom_number" value="1" required>
                <label>1</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="courtroom_number" value="2">
                <label>2</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="courtroom_number" value="3">
                <label>3</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="courtroom_number" value="4">
                <label>4</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="courtroom_number" value="5">
                <label>5</label>
            </div>
            <div class="radio-group">
                <input type="RADIO" name="courtroom_number" value="6">
                <label>6</label>
            </div>
        </div>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2>On a scale of 1 to 10 rate each team's performance in each scoring category.</h2>
        <h3 class="rating-scale">Ineffective: 1-2</h3>
        <h3 class="rating-scale">Fair: 3-4</h3>
        <h3 class="rating-scale">Average: 5-6</h3>
        <h3 class="rating-scale">Excellent: 7-8</h3>
        <h3 class="rating-scale">Superior: 9-10</h3>
        <?php
            createSectionHeader('Plaintiff', 'Opening Statement');
            scorePicker('plaintiff_opening');

            createSectionHeader('Defendant', 'Opening Statement');
            scorePicker('defense_opening');
        ?>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2>Plaintiff's First Witness</h2>
        <select name="plaintiff_first_witness" id="" class="witness-name-select">
            <option value="Bill">Bill</option>
            <option value="Sally">Sally</option>
            <option value="John">John</option>
        </select>
        <?php
            createSectionHeader('Plaintiff', 'Direct Examination');
            scorePicker('plaintiff_first_witness_direct');

            createSectionHeader('Defendant', 'Cross Examination');
            scorePicker('plaintiff_first_witness_cross');

            createSectionHeader('Plaintiff', 'Witness Performance');
            scorePicker('plaintiff_first_witness_performance');
        ?>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2>Plaintiff's Second Witness</h2>
        <select name="plaintiff_second_witness" id="" class="witness-name-select">
            <option value="Bill">Bill</option>
            <option value="Sally">Sally</option>
            <option value="John">John</option>
        </select>
        <?php
            createSectionHeader('Plaintiff', 'Direct Examination');
            scorePicker('plaintiff_second_witness_direct');

            createSectionHeader('Defendant', 'Cross Examination');
            scorePicker('plaintiff_second_witness_cross');

            createSectionHeader('Plaintiff', 'Witness Performance');
            scorePicker('plaintiff_second_witness_performance');
        ?>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2>Plaintiff's Third Witness</h2>
        <select name="plaintiff_third_witness" id="" class="witness-name-select">
            <option value="Bill">Bill</option>
            <option value="Sally">Sally</option>
            <option value="John">John</option>
        </select>
        <?php
            createSectionHeader('Plaintiff', 'Direct Examination');
            scorePicker('plaintiff_third_witness_direct');

            createSectionHeader('Defendant', 'Cross Examination');
            scorePicker('plaintiff_third_witness_cross');

            createSectionHeader('Plaintiff', 'Witness Performance');
            scorePicker('plaintiff_third_witness_performance');
        ?>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2>Defendant's First Witness</h2>
        <select name="defense_first_witness" id="" class="witness-name-select">
            <option value="Peter">Peter</option>
            <option value="Paul">Paul</option>
            <option value="James">James</option>
        </select>
        <?php
            createSectionHeader('Defendant', 'Direct Examination');
            scorePicker('defense_first_witness_direct');

            createSectionHeader('Plaintiff', 'Cross Examination');
            scorePicker('defense_first_witness_cross');

            createSectionHeader('Defendant', 'Witness Performance');
            scorePicker('defense_first_witness_performance');
        ?>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2>Defendant's Second Witness</h2>
        <select name="defense_second_witness" id="" class="witness-name-select">
            <option value="Peter">Peter</option>
            <option value="Paul">Paul</option>
            <option value="James">James</option>
        </select>
        <?php
            createSectionHeader('Defendant', 'Direct Examination');
            scorePicker('defense_second_witness_direct');

            createSectionHeader('Plaintiff', 'Cross Examination');
            scorePicker('defense_second_witness_cross');

            createSectionHeader('Defendant', 'Witness Performance');
            scorePicker('defense_second_witness_performance');
        ?>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2>Defendant's Third Witness</h2>
        <select name="defense_third_witness " id="" class="witness-name-select">
            <option value="Peter">Peter</option>
            <option value="Paul">Paul</option>
            <option value="James">James</option>
        </select>
        <?php
            createSectionHeader('Defendant', 'Direct Examination');
            scorePicker('defense_third_witness_direct');

            createSectionHeader('Plaintiff', 'Cross Examination');
            scorePicker('defense_third_witness_cross');

            createSectionHeader('Defendant', 'Witness Performance');
            scorePicker('defense_third_witness_performance');
        ?>
        <div class="next-section-button">
            <button>Next</button> <!-- Advance to the next section and save data entered so far -->
        </div>
        <p>-----------------------Page Break-----------------------------</p>
        <h2 class="scoring_section_header">Comments for Plaintiff</h2>
        <div class="plaintiff_scoresheet_comments">
            <textarea name="plaintiff_comments" id="" cols="100" rows="10" required></textarea>
        </div>
        <h2 class="scoring_section_header">Comments for Defendant</h2>
        <div class="defense_scoresheet_comments">
            <textarea name="defense_comments" id="" cols="100" rows="10" required></textarea>
        </div>
        <h2>Review</h2>
        <!-- Show scores, total scores, and winner; review and edit scores -->
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
<script>
    const handleSubmit = () => {

    }
</script>
</html>