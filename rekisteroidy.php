
<?php

include 'alku.php';
include 'kirjastoluokka';
luoyhteys();
if (false) {
    include 'paasivulle.php';
} else {
    include 'aloitussivulle.php';
}
echo "-> rekisteröidy";
rekisteroidyform();
$user = $_POST['user'];
$pass = $_POST['pass'];
// kyselyn suoritus     
$kysely = $yhteys->prepare("SELECT * FROM kirjautumistiedot");
$kysely->execute();

if (empty($kysely)) {
    $kysely = $yhteys->prepare("INSERT INTO kirjautumistiedot (nimi,salasana) VALUES (?,?)");
    $kysely->execute(array($user, $pass));
    include 'paasivulle.php';
}

for ($i = 0; $i < count($kysely); $i++) {

    if (($user == $kysely[$i]) && ($pass == $kysely[$i + 1])) {
        header("Location: http://pxkorpel.users.cs.helsinki.fi/paasivu.php");
    }
    $i + 1;
}
echo "access Denied!";
include 'loppu.php';
?>
