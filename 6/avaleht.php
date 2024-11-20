<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaleht</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .jumbotron {
            background: linear-gradient(to right, rgb(179, 106, 179), rgb(255, 215, 0));
            color: white;
        }
    </style>
</head>
<body>
        <div class="jumbotron jumbotron-fluid">
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

                       <div class="row mt-4">
                    <div class="col-md-6 d-flex flex-column align-items-center">
                        <?php
                            $pakkumised = array("SUPER ALE", "SUPPERPAKKUMINE","AINULT TÄNA");
                            $suvatekst = $pakkumised[array_rand($pakkumised)];
                        ?>
                        <h1 class="text-center text-dark"><?php echo $suvatekst; ?></h1>
                        <h2 class="text-center text-dark">-20% kõik tooted!</h2>
                        <p class="text-center text-dark">Kasuta ilma taustata pilti ja kindlasti võta kasutusele BS5.
                        </p>
                       <a href="products.php" class="btn btn-danger">Vaata pakkumisi -></a>
                    </div>
                    <div class="col-md-6 ">
                        <?php
                            $pildid = array("img/kobe.png", "img/image1.png");
                            $suvapildid = $pildid[array_rand($pildid)];
                        ?>
                        <img src="<?php echo $suvapildid; ?>" height="300" alt="Image 1">
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center fs-4 mt-4 mb-5">Parimad pakkumised</h1>
        <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            $products = "products.csv";
            $minu_csv = fopen($products, "r");

            while (!feof($minu_csv)) {
                $rida = fgetcsv($minu_csv, filesize($products), ",");
                if (is_array($rida)) {
                    echo '
                    <div class="col">
                        <div class="card border-0">
                            <img src="img/' . $rida[4] . '" class="card-img-top" alt="' . $rida[1] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $rida[1] . '</h5>
                                <p class="card-text">' . $rida[2] . '</p>
                                <p class="card-text">' . $rida[3] . '€</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
            fclose($minu_csv);
            ?>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="row pt-3 text-center text-light">
            <p>Heiki Rebane</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>