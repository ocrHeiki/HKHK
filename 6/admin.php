<!doctype html>
<html lang="et">
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand " href="#">Sinunimi.com</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="avaleht.php">Avaleht</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="products.php">Tooted</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Kontakt</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin.php">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                            <path
                                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </div>        
<div class="container">
    <h1>Admin</h1>
<?php
    if (isset($_GET['ok'])) {
        echo '<div class="alert alert-success" role="alert">
        Toote lisamine õnnestus!
      </div>
      ';
    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <label for="nimetus">Toote nimetus</label>
    <input type="text" name="nimetus" required><br>

    <label for="kirjeldus">Toote kirjeldus</label>
    <input type="text" name="kirjeldus" required><br>

    <label for="hind">Toote hind</label>
    <input type="number" min="0.00" max="100.00" step="0.01" name="hind" required><br>

    <label for="lisapilt">Lisa pilt</label>
    <input type="file" name="lisapilt"><br>

    <input type="hidden" name="page" value="services">

    <input class="btn btn-success" type="submit" value="Lisa uus toode">
</form>

<?php
if (isset($_POST['nimetus'])) {

    $ajutine_fail =  $_FILES['lisapilt']['tmp_name'];
    move_uploaded_file($ajutine_fail, 'img/'.$_FILES['lisapilt']['name']);

    $read=array();

    $id = array_push($read,count(file('products.csv'))+1);

    $nimetus = array_push($read, $_POST['nimetus']);
    $kirjeldus = array_push($read, $_POST['kirjeldus']);
    $hind = array_push($read, $_POST['hind']);
    $pildinimi = array_push($read, $_FILES['lisapilt']['name']);


    $path = 'products.csv';
    $fp = fopen($path, 'a'); 
    fputcsv($fp, $read);
    fclose($fp);
    header('Location:admin.php?page=admin&ok');
}

?>



<div class="row row-cols-1 row-cols-md-4 g-4 pt-5">
    <?php
    $products = "products.csv";
    $minu_csv = fopen($products, "r");

    while (!feof($minu_csv)) {
        $rida = fgetcsv($minu_csv, filesize($products), ",");

        if (is_array($rida)) {
            echo '
            <div class="col">
                <div class="card">
                    <img src="img/' . $rida[4] . '" class="card-img-top" alt="' . $rida[1] . '">
                    <div class="card-body">
                    <h5 class="card-title">' . $rida[1] . '</h5>
                    <p class="card-text">' . $rida[2] . '</p>
                    <p class="card-text">' . $rida[3] . '€</p>
                    <form method="POST">
                        <input type="hidden" name="delete_product" value="' . $rida[0] . '">
                        <button class="btn btn-danger" type="submit">Kustuta</button>
                    </form>
                    </div>
                </div>
            </div>
            ';
        }
    }
    fclose($minu_csv);

    if (isset($_POST['delete_product'])) {
        $delete_product_id = $_POST['delete_product'];

        $file = file($products);

        $fp = fopen($products, 'w');

        foreach ($file as $line) {
            $data = str_getcsv($line);

            if ($data[0] != $delete_product_id) {
                fputcsv($fp, $data);
            }
        }

        fclose($fp);

        header("Location:admin.php?page=admin");
        exit();
    }
    ?>
</div>
 </div> 
</body>
</html>