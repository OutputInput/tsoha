<?php

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

?>