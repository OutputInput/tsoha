<?php
//linkit pääsivulle
//mahdollisuus luoda uusi äänestys
//=> lisää uusi äänestys tietokantaan
//=> ja äänestysvirkailijatauluun uusi
//=> luo ehdokkaita ehdokastauluun
// käytä submit buttonia ehdokkaiden kirjaamiseen ja näytä alhaalla jo luodut ehdokkaat
//laita psql tauluista ehdokkaiden hakuun ehto että ne kuuluu oikeaan äänestykseen
?>


<?php

include 'alku.php';
include 'kirjastoluokka.php';
paasivullenappula();
?>
<form action="luoaanestys.php" method="post">
    äänestyksen nimi: <input type="text" name="aanestys" <?php if (!empty($_POST['aanestys'])) echo 'value=' . $_POST['aanestys'] . ''; ?>> </p>
    <?php include 'pvm.php' ?> </p>
</form>
<?php
$GLOBALS["aanestys"] = $_POST["aanestys"];
include 'ehdokkaidenasetus.php';
include 'lisaaehdokas.php';
include 'lisaaaanestys.php';

?>

<?php
naytaehdokkaat();
include 'loppu.php';
?>
        



