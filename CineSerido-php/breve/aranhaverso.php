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
    Helper::component('navbar.php');
    ?>
    <div class="row">

        <div class="col-lg-12 col-12 text-center">
            <div style="margin-top: 160px;">
                <img src="https://i.postimg.cc/FzyFq8LZ/spiderman.webp" alt="Homem-Aranha: Além do Aranhaverso" style="width:45%;">
            </div>
            <div class="mt-3">
                <h2 class="mb-0">EM BREVE!</h2>
            </div>
            <div class="mt-3">
                <p style="color:white; font-size:20px;">25/12/2023</p>
            </div>
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