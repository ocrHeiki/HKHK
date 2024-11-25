


<?php

$kasutaja = "heiki";
$dbserver = "localhost";
$andmebaas = "restoranid";
$pw = "R3ban3";

$yhendus = mysqli_connect ($dbserver, $kasutaja, $pw, $andmebaas);

if (!$yhendus) {
    die ("Sa jälle ebaõnnestusid!");
}

?>