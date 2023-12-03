<?php
include_once __DIR__ . '/../helpers.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../assets/imgs/favicon.png" type="image/x-icon">

    <title>CineSeridó</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://kit.fontawesome.com/065cbb313e.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/temo-pod-talk.css">
    <link rel="stylesheet" href="../assets/css/templatemo-pod-talk.css">

</head>

<body>

    <?php
    Helper::component('navbar-filmes.php');
    ?>
    <div class="row">

        <div class="col-lg-12 col-12 text-center" style="margin-top: 12%">
            <h3 class="mb-0">Ingresso Reservado!</h3>
            <!-- <br>
            <h5 class="mb-0" style="color:white;">Five Nights at Freddy's - O Pesadelo Sem Fim</h5> -->
            <img src="https://i.postimg.cc/C149fzcH/checkbox-unscreen.gif" alt="Compra Concluída">
        </div>

    </div>

    <?php
    Helper::component('footer.php');
    ?>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
</body>

</html>