<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retseptid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-5">10 esimest retsepti</h2>
        <?php
            $conn = mysqli_connect("localhost", "mart", "parool", "retseptid");
            $query = "SELECT id, nimi, kalorid FROM `retseptid` LIMIT 10";
            $result = mysqli_query($conn, $query);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nimi</th>
                    <th>Kalorid</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nimi']; ?></td>
                        <td><?php echo $row['kalorid']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="text-center mb-5 mt-5">Õhtusöögiretseptid, järjestatud kalorite järgi kahanevas järjekorras</h2>
        <?php
            $query = "SELECT tyyp, kalorid FROM `retseptid` WHERE tyyp = 'õhtu' ORDER BY kalorid DESC";
            $result = mysqli_query($conn, $query);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Tüüp</th>
                    <th>Kalorid</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['tyyp']; ?></td>
                        <td><?php echo $row['kalorid']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="text-center mt-5 mb-5">Keskmine kalorite hulk tüübi järgi</h2>
        <?php
            $query = "SELECT tyyp, AVG(kalorid) AS keskised_kalorid FROM `retseptid` GROUP BY tyyp";
            $result = mysqli_query($conn, $query);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Tüüp</th>
                    <th>Keskmine kalorite hulk</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['tyyp']; ?></td>
                        <td><?php echo $row['keskised_kalorid']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <h2 class="text-center mb-5 mt-5">3 juhuslikku retsepti hinnanguga 5</h2>
        <?php
            $query = "SELECT * FROM `retseptid` WHERE hinnang = 5 ORDER BY RAND() LIMIT 3";
            $result = mysqli_query($conn, $query);
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nimi</th>
                    <th>Koostis</th>
                    <th>Juhend</th>
                    <th>Aeg</th>
                    <th>Tüüp</th>
                    <th>Kalorid</th>
                    <th>Hinnang</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nimi']; ?></td>
                        <td><?php echo $row['koostis']; ?></td>
                        <td><?php echo $row['juhend']; ?></td>
                        <td><?php echo $row['aeg']; ?></td>
                        <td><?php echo $row['tyyp']; ?></td>
                        <td><?php echo $row['kalorid']; ?></td>
                        <td><?php echo $row['hinnang']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>