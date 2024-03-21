<?php
$kasutaja ="heiki";
$dbserver = "localhost";
$andmebaas = "muusikapood";
$pw = "J00k5m1n3";

$yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmebaas);

if (!$yhendus){ //"!" hüümärk muudab IF funktsiooni eitavaks
    echo "Jama majas";
    die("Sa jälle ebaõnnestusid!");
}

?>