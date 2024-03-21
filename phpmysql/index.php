<?php include("confiq.php");?>

<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muusikapood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form action="" method="get">
        Otsi: <input type="text" name="s"
        <input type="submit" value="Otsi...">
</form>


    


    <div class="container">
    <h1>Maailma imelikumad palad</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4">
    <?php

//otsing
if (isset($_GET["s"])) {
        $s = $_GET["s"];
        $paring = 'SELECT album, hind FROM albumid WHERE album LIKE "%'.$s.'%"';
}  else{
    $paring = " SELECT album, hind FROM albumid ORDER BY artist ASC LIMIT 10";
}

  //päring mille saadan andmebaasi
$paring = "SELECT album, hind 
            FROM `albumid` 
            ORDER BY artist ASC 
            LIMIT 10
            ";

//saadan soovitud ühendusele minu päringu
    $valjund = mysqli_query($yhendus, $paring);
    //sikutan andmebaasi vastse
//$rida = mysqli_fetch_assoc($valjund);
//

while($rida = mysqli_fetch_assoc($valjund)){

//echo $rida['artist']." - ".$rida["album"]."<br>";
echo'
<div class="col">
    <div class="card">
      <img src="https://picsum.photos/400/400" alt="pildike">
      <div class="card-body">
        <h5 class="card-title">'.$rida['album'].'</h5>
        <p class="card-text">'.$rida['hind'].'€</p>
        <a href="#" class="btn btn-danger">Osta</a>
      </div>
    </div>
  </div>
  ';

}

?>

<!--

  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

-->
</div>


    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>