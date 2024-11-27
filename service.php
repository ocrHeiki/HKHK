<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodutoo3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
      .jumbo{
        background-image: url(bs3_man.jpg);
        background-size: cover;                
      }
      .nav-pills .nav-link {
        color: black; 
      }
      .nav-pills .nav-link:hover {
        color: grey; 
      }
      .navbar {
        background-color: white !important;
    }
     
    </style>
      
</head>
<body>
    
      
      <div class="container mt-5">
        <h1>Tulemus</h1>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Kontrollime, kas mõlemad väljad on täidetud
                if (!empty($_POST['number1']) && !empty($_POST['number2'])) {
                    // Arvutame korrutise
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $tulemus = $number1 * $number2;
                    echo "<p>Korrutise tulemus: $tulemus</p>";
                } else {
                    echo "<p class='text-danger'>Mõlemad väljad peavad olema täidetud!</p>";
                }
            }
        ?>
        <a href="services.php" class="btn btn-primary">Tagasi</a>
    </div>
        
              

      

    <div class="footer"> 

    </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>