<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php harjutus</title>
</head>
<body>

<h1>Harjutused 4</h1>
<?php
$p = 4;
switch ($p) {
    case ($p > 10):
        echo "SUPER";
        break;
    case ($p >=5 && $p<=9):
        echo "Tehtud";
        break;
    case ($p <5):
        echo "Kasin";
        break;
    default:
        echo "Punkte pole lisatud";
        break;
}



?>


<form action="" method="GET">
    Lisa sünniaasta <input type="number" name="synd" min="1900" max="2100" required >
    <input type="submit" value="Leia juubel"><br>
</form>
<?php

if (!empty($_GET["synd"])) {
    $aasta = $_GET["synd"];
    $seeaasta = date("Y");
    $vanus = $seeaasta - $aasta;
    if ($vanus % 5 == 0) {
        echo "Sul on juubel";
    } else {
        echo "Sul ei ole juubel";
    }
}

?>
<br>
<?php
$nr1 = 2;
$nr2 = 5;

if ($nr2 != 0 && $nr1 !=0) {
    $tehe = $nr1 / $nr2;
    echo $tehe;
} 

else { 
echo "Nulliga ei saa jagada";
}
?>

    <h2>Harjutused 2</h2>
    <?php
    $arv1 = 5;
    $arv2 = 3;
    $tehe = $arv1/$arv2;
    $jaak = $arv1 % $arv2;

    echo "Vastus: $tehe <br>";
    printf("Vastus: %d / %0.2f = %0.2f<br>",$arv1,$arv2, $tehe);
    echo $jaak;
    ?>
<!-- action - fail kuhu saadetakse
methor - kuidas saadetakse, GET on avalik, Post on peidetud -->
    
<h1>Harjutused 3</h1>
    <form action="" method="GET">
        Toode1: <input type="number" name="toode1"><br>
        Toode2: <input type="number" name="toode2"><br>
        Toode3: <input type="number" name="toode3"><br>
        <input type="submit" value="Arvuta">
    </form>
    <?php
    if (!empty($_GET["toode1"]) &&
        !empty($_GET["toode2"]) &&
        !empty($_GET["toode3"]))
     {
       
    $t1 = $_GET["toode1"];
    $t2 = $_GET["toode2"];
    $t3 = $_GET["toode3"];
    $kokku = $t1+$t2+$t3;

    echo "Toode1: $t1 tk<br>";
    echo "Toode1: $t2 tk<br>";
    echo "Toode1: $t3 tk<br>";
    echo "Kõik kokku: $kokku tk";
}

    ?>









    <h1>Harjutused 01</h1>
    <?php

    $nimi = "Heiki";
    $pnimi = "Rebane";
    $vanus = 21;
    $pikkus = 2.05;
    $hyydnimi = "BOSS";
    $lugu = 'Dr.Alban - "It\'s My Life"';



    echo"<p>Tere $nimi \"$hyydnimi\" $pnimi! <br>";
    echo"Vanus: $vanus <br>Pikkus:$pikkus</p>";
    echo'Lemmik lugu on: '.$lugu; //punt on kokkuliitmiseks
    
    
    ?>
</body>
</html>