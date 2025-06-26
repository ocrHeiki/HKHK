<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HeikiRebane.ee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">HeikiRebane.ee</a>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#avaleht">Avaleht</a></li>
                        <li class="nav-item"><a class="nav-link" href="#tooted">Tooted</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kontakt">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div id="avaleht" class="container mt-5">
            <div id="banner" class="row">
                <?php
                $banners = [
                    ['image' => 'img/b4.jpg', 'title' => 'parim pakkumine', 'text' => 'The best classic dress is on sale at coro'],
                    ['image' => 'img/b7.jpg', 'title' => 'kevad/suvi', 'text' => '20% sootsamalt'],
                    ['image' => 'img/b10.jpg', 'title' => 'super soodsad', 'text' => 'Ära jäta endale kasutamata'],
                    ['image' => 'img/b17.jpg', 'title' => 'suured allahindlused', 'text' => 'Leidke oma uus lemmikriietus'],
                    ['image' => 'img/b18.jpg', 'title' => 'vabadust ja värve', 'text' => 'Suvine garderoob on siin'],
                ];

                shuffle($banners); // Segame bännerid, et need iga kord muutuksid

                for ($i = 0; $i < 2; $i++) {
                    $banner = $banners[$i];
                    echo '<div class="col-md-6">';
                    echo '<div class="banner-card" style="background-image: url(\'' . $banner['image'] . '\'); height: 40vh;">';
                    echo '<h4 class="text-white">' . $banner['title'] . '</h4>';
                    echo '<h1 class="text-white">' . $banner['text'] . '</h1>';
                    echo '<p class="text-white">The best classic dress is on sale at coro</p>';
                    echo '<div class="card-button">';
                    echo '<button class="btn btn-outline-light">Vaata lähemalt</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <div id="tooted" class="container mt-5">
            <h1 class="text-center fw-bolder">Parimad pakkumised</h1>
            <div class="row">
                <?php
                // CSV faili lugemine
                $tooted = [];
                if (($handle = fopen("products.csv", "r")) !== FALSE) {
                    fgetcsv($handle); // Skip the header row
                    while (($data = fgetcsv($handle)) !== FALSE) {
                        $tooted[] = [
                            'pilt' => $data[0],
                            'pealkiri' => $data[1],
                            'hind' => $data[4] . '€'
                        ];
                    }
                    fclose($handle);
                }

                shuffle($tooted); // Segame tooted, et need iga kord muutuksid

                for ($i = 0; $i < count($tooted); $i += 4) {
                    echo '<div class="row">';
                    for ($j = 0; $j < 4 && ($i + $j) < count($tooted); $j++) {
                        $toode = $tooted[$i + $j];
                        echo '<div class="col-md-3">
                                <div class="card mb-4">
                                    <img src="' . $toode['pilt'] . '" class="card-img-top" alt="Toode">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $toode['pealkiri'] . '</h5>
                                        <p class="card-text">Hind: ' . $toode['hind'] . '</p>
                                    </div>
                                </div>
                              </div>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <div id="kontakt" class="container mt-5">
            <h2>Kontakt</h2>
            <p>Leht ei ole saadaval.</p>
        </div>

    </main>

    <footer class="text-center mt-5">
        <p>&copy; 2024 HeikiRebane.ee - Ajahädas käpard</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>