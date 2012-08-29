
<?php
include 'alku.php';
include 'kirjastoluokka.php';
tervetuloa();

?>
<html>
    <head></head>
    <body>
        <form action="kirjaudu.php" method="post">
            <p>Nimi: <br>
                <input type="text" name="nimi" <?php if (!empty($_POST['nimi'])) echo 'value=' . $_POST['nimi'] . ''; ?>></p>
            <p>salasana: <br>
                <input type="password" name="salasana"></p>
            <input type="submit" value="kirjaudu">
        </form>
    </body>
</html>

<?php
// yhteyden muodostus tietokantaan
include 'luoyhteys.php';

// kyselyn suoritus
$kirjautumistiedot = $yhteys->prepare("SELECT * FROM kirjautumistiedot");
$kirjautumistiedot->execute();

$rivi = $kirjautumistiedot->fetch();
$arvo = strcmp($rivi["nimi"], $_POST["nimi"]);
echo $arvo;

do {
    if (strcmp($rivi["nimi"], $_POST["nimi"]) == 0) {
        
    };
} while ($rivi = $kirjautumistiedot->fetch());

// linkki pääsivulle kun ollaan kirjauduttu
?>
