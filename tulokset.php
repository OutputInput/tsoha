<?php

//tänne linkki muokkaa sivulle 
//tänne summaus äänestyksen tilanteesta 
?>


<?php

include 'alku.php';
paasivullenappula();
luoyhteys();

$tulokset = $yhteys->prepare("SELECT * FROM ehdokas");
$tulokset->execute();

$aanimaara = $tulokset->fetch(PDO::FETCH_COLUMN);

echo "<table border>";
while ($rivi = $tulokset->fetch()) {
    echo"</tr>";
    echo "<td>" . $rivi["nimi"] . "</td>";
    echo "<td>" . $rivi["aanimaara"] . "</td>";
    echo"</tr>";
}
echo "</table>";
include 'loppu.php';
?>