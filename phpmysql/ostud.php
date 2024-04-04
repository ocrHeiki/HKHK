

<?php include("config.php"); ?>

<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muusikapood OÜ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
    <h1>Maailma imelikumad palad!</h1>
<h2>Uue albumi lisamine</h2>
<form action="#" method="get">
    artist <input type="text" name="artist"><br>
    album <input type="text" name="album"><br>
    aasta <input type="number" name="aasta" min="1900"><br>
    hind <input type="number" name="hind" step="0.01"><br>
    <input type="submit" value=" + Lisa uus" name="lisa">
</form>


<h2>Otsing</h2>
    <form action="" method="get">
        Otsi: <input type="text" name="s">
        <input type="submit" value="Otsi">
    </form>
<div class="row row-cols-1 row-cols-md-6 g-4 pt-4">
      <?php

      $paring = SELECT ostud.id, kliendid.eesnimi, kliendid.perenimi, albumid.album
      FROM ostud
      INNER JOIN kliendid ON ostud.kliendid_id=kliendid.id
      INNER JOIN albumid ON ostud.albumid_id=albumid.id";
      $valjund = mysqli_query($yhendus, $paring);
      //sikutamine andmebaasist kõik vastuse
      while($rida = mysqli_fetch_assoc(valjund)){
        print_r($rida);
      }  



?>

</div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>