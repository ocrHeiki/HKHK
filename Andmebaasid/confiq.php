<?php
    $kasutaja = "mario";
    $dbserver = "localhost";
    $andmebaas = "muusikapood";
    $pw = "mario";

    $yhendus = mysqli_connect($dbserver, $kasutaja, $pw, $andmebaas);

    if(!$yhendus){
        die("Sa jälle ebaõnnestusid!");
    } 

?>