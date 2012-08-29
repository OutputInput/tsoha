

<?php
include 'alku.php';
include 'paasivulle.php';
include 'kirjastoluokka.php';
aanesta();
luoyhteys();

// kyselyn suoritus
$ehdokasnumero = (int) $_POST["aanestan"];

$paljonaania = $yhteys->prepare("SELECT aanimaara FROM ehdokas WHERE ehdokasnumero=? ");
$paljonaania->execute(array($ehdokasnumero));

$aanimaara = $paljonaania->fetch(PDO::FETCH_COLUMN);
$aanimaara++;

if ((int) $_POST["aanestan"] > 0) {
    $ehdokasnumero = (int) $_POST["aanestan"];
    $kysely = $yhteys->prepare("UPDATE ehdokas SET aanimaara=? WHERE ehdokasnumero=? ");
    $kysely->execute(array($aanimaara, $ehdokasnumero));
}
naytaehdokkaat();
include 'loppu.php';
?>



