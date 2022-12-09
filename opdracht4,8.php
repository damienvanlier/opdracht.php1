
    <?php
        if(isset($_POST["leeftijd"])){
            $leeftijd = $_POST['leeftijd'];
            $stempas = $_POST['stempas'];
            $examen = 16;

            if($leeftijd >= $examen){
                echo"Je mag praktijdexamen voor je scooterbewijs doen.<br>";
            }
            else {
                echo"Je mag geen praktijdexamen voor je scooterbewijs doen.<br>";
            }

            if($stempas == 'true' && $leeftijd >= 18){
                echo"Ja mag stemmen en heb een stempas ontvangen.";
            }
            else {
                echo"Je mag niet stemmen, want je hebt geen stempas!";
            }
        }
    ?>
</body>
</html>