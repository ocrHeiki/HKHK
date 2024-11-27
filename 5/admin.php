<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - HeikiRebane.ee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">HeikiRebane.ee</a>
                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php#avaleht">Avaleht</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#tooted">Tooted</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php#kontakt">Kontakt</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-5">
        <h1>Toodete haldamine</h1>

        <?php
        // CSV faili lugemine
        $tooted = [];
        if (($handle = fopen("products.csv", "r")) !== FALSE) {
            fgetcsv($handle); // Skip the header row
            while (($data = fgetcsv($handle)) !== FALSE) {
                $tooted[] = [
                    'pilt' => $data[0],
                    'pealkiri' => $data[1],
                    'hind' => $data[4]
                ];
            }
            fclose($handle);
        }

        // Toote kustutamine
        if (isset($_GET['delete'])) {
            $index = (int)$_GET['delete'];
            unset($tooted[$index]);
            // Salvestame uuesti CSV faili
            $handle = fopen("products.csv", "w");
            fputcsv($handle, ['Pilt', 'Nimi', 'Kirjeldus', 'Kategooria', 'Hind']); // Header
            foreach ($tooted as $toode) {
                fputcsv($handle, $toode);
            }
            fclose($handle);
            header("Location: admin.php");
            exit;
        }

        // Uue toote lisamine
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
            $new_product = [
                $_POST['image'],
                $_POST['name'],
                '',
                '',
                $_POST['price']
            ];
            $tooted[] = $new_product;
            // Salvestame uuesti CSV faili
            $handle = fopen("products.csv", "w");
            fputcsv($handle, ['Pilt', 'Nimi', 'Kirjeldus', 'Kategooria', 'Hind']); // Header
            foreach ($tooted as $toode) {
                fputcsv($handle, $toode);
            }
            fclose($handle);
            header("Location: admin.php");
            exit;
        }
        ?>

        <h2>Lisa uus toode</h2>
        <form method="post">
            <div class="mb-3">
                <label for="image" class="form-label">Pildi URL</label>
                <input type="text" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Toote nimi</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Hind</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" name="add_product" class="btn btn-primary">Lisa toode</button>
        </form>

        <h2 class="mt-5">Olemasolevad tooted</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Pilt</th>
                    <th>Nimi</th>
                    <th>Hind</th>
                    <th>Tegevused</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tooted as $index => $toode): ?>
                    <tr>
                        <td><img src="<?= $toode['pilt'] ?>" alt="<?= $toode['pealkiri'] ?>" style="width: 50px;"></td>
                        <td><?= $toode['pealkiri'] ?></td>
                        <td><?= $toode['hind'] ?>€</td>
                        <td>
                            <a href="admin.php?edit=<?= $index ?>" class="btn btn-warning">Muuda</a>
                            <a href="admin.php?delete=<?= $index ?>" class="btn btn-danger" onclick="return confirm('Kas oled kindel, et soovid kustutada?');">Kusta</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php
        // Toote redigeerimise vorm
        if (isset($_GET['edit'])) {
            $edit_index = (int)$_GET['edit'];
            $edit_product = $tooted[$edit_index];
        ?>
            <h2 class="mt-5">Muuda toodet</h2>
            <form method="post">
                <input type="hidden" name="edit_index" value="<?= $edit_index ?>">
                <div class="mb-3">
                    <label for="image" class="form-label">Pildi URL</label>
                    <input type="text" class="form-control" id="image" name="image" value="<?= $edit_product['pilt'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Toote nimi</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $edit_product['pealkiri'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Hind</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?= $edit_product['hind'] ?>" required>
                </div>
                <button type="submit" name="update_product" class="btn btn-primary">Salvesta muudatused</button>
            </form>
        <?php
        }

        // Toote uuendamine
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_product'])) {
            $index = (int)$_POST['edit_index'];
            $tooted[$index] = [
                $_POST['image'],
                $_POST['name'],
                '',
                '',
                $_POST['price']
            ];
            // Salvestame uuesti CSV faili
            $handle = fopen("products.csv", "w");
            fputcsv($handle, ['Pilt', 'Nimi', 'Kirjeldus', 'Kategooria', 'Hind']); // Header
            foreach ($tooted as $toode) {
                fputcsv($handle, $toode);
            }
            fclose($handle);
            header("Location: admin.php");
            exit;
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>