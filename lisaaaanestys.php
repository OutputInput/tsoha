<?php

include 'luoyhteys.php';
// kyselyn suoritus
$kysely = $yhteys->prepare("INSERT INTO aanestys (aanestyksennimi,alkamisaika,paattymisaika) VALUES (?,?,?)");
$kysely->execute(array($_POST["aanestys"], $GLOBALS["apvm"], $GLOBALS["lpvm"]));
?>