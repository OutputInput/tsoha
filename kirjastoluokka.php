<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php

//------------------------tervehdys----------------
function tervetuloa() {
    echo "tervetuloa";
}

//------------------siirry sivulta toiselle-------------------------------
function tuloksetsivullenappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/tulokset.php'\">tulokset</button>";
}

function paasivullenappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/paasivu.php'\">pääsivu</button>";
}

function aloitussivullenappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/aloitussivu.php'\">aloitussivu</button>";
}

function muokkaasivullenappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/muokkaa.php'\">muokkaa</button>";
}

function aanestyssivullenappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/aanestys.php'\">äänestämään</button>";
}

function luoaanestyssivullenappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/luoaanestys.php'\">luo äänestys</button>";
}

function kirjautumaannappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/luoaanestys.php'\">kirjaudu</button>";
}

function rekisteroidysivullenappula() {
    echo "<button type=\"button\" onclick=\"window.location='/aanestys/luoaanestys.php'\">rekisteröidy</button>";
}

//-----------------yhteyden muodustus----------------------

function luoyhteys() {
// yhteyden muodostus tietokantaan
    try {
        $yhteys = new PDO("pgsql:host=localhost;dbname=pxkorpel",
                        "pxkorpel", "673f4d4f186a020b");
    } catch (PDOException $e) {
        die("VIRHE: " . $e->getMessage());
    }
    $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

//--------------------aseta ehdokkaat-------------------------

function asetaehdokkaat() {
    echo "<form action=\"luoaanestys.php\" method=\"post\">
                Nimi: <input type=\"text\" name=\"ehdokas\" />
                ehdokasnumero: <input type=\"text\" name=\"ehdokasnumero\" /> </p>
               <input type=\"submit\" />
         </form>";
}

function kirjaudu() {
    ?>
    <form action="kirjaudu.php" method="post">
        <p>Nimi: <br>
            <input type="text" name="nimi" <?php if (!empty($_POST['nimi'])) echo 'value=' . $_POST['nimi'] . ''; ?>></p>
        <p>salasana: <br>
            <input type="password" name="salasana"></p>
        <input type="submit" value="kirjaudu">
    </form>
    <?php
}

function aanesta() {
    echo "<form method=\"post\">
              <p> äänestän ehdokasta numero: <input type=\"text\" name=\"aanestan\"> </p>
              <input type=\"submit\" value=\"äänestä\">
          </form>";
}

function naytaehdokkaat() {
// kyselyn suoritus     
    $kysely = $yhteys->prepare("SELECT * FROM ehdokas");
    $kysely->execute();
// haettujen rivien tulostus
    echo "<table border>";
    while ($rivi = $kysely->fetch()) {
        echo"</tr>";
        echo "<td>" . $rivi["nimi"] . "</td>";
        echo "<td>" . $rivi["ehdokasnumero"] . "</td>";
        echo"</tr>";
    }
    echo "</table>";
}

function rekisteroidyform() {
    echo "<form action=\"rekisteroidy.php\" method=POST>
                Nimi:<input type=text name=user><br />
                Salasana: <input type=password name=pass><br />
                <input type=submit>
          </form>";
}

function lisaaehdokasDB() {
    // kyselyn suoritus
    $kysely = $yhteys->prepare("INSERT INTO ehdokas (nimi,aanestyksennimi,ehdokasnumero) VALUES (?,?,?)");
    $kysely->execute(array($_POST["ehdokas"], $GLOBALS["aanestys"], $_POST["ehdokasnumero"]));
}
?>