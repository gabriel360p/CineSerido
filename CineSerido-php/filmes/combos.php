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

    <div class="container">
        <div class="row">

            <section class="trending-podcast-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Escolha seu combo</h4>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <a href="finalizar.php">
                                <div class="custom-block custom-block-full">
                                    <div class="custom-block-image-wrap">

                                        <img src="https://i.postimg.cc/d0f7xf1R/combo1.png" class="custom-block-image img-fluid" alt="">

                                    </div>

                                    <div class="custom-block-info">
                                        <h5 class="mb-2">

                                            Combo Kids

                                        </h5>

                                        <div class="profile-block d-flex">
                                            <p>R$ 20,00</p>
                                        </div>

                                        <p class="mb-0">2 Pipocas P, 2 sucos, água 500ml e Bis.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <a href="finalizar.php">
                                <div class="custom-block custom-block-full">
                                    <div class="custom-block-image-wrap">

                                        <img src="https://i.postimg.cc/tJQsXVFY/combo2.jpg" class="custom-block-image img-fluid" alt="">

                                    </div>

                                    <div class="custom-block-info">
                                        <h5 class="mb-2">

                                            Combo Tradicional

                                        </h5>

                                        <div class="profile-block d-flex">
                                            <p>R$ 40,00</p>
                                        </div>

                                        <p class="mb-0">Balde de pipoca, 2 refrigerantes 350ml e chocolate em barra</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                            <a href="finalizar.php">
                                <div class="custom-block custom-block-full">
                                    <div class="custom-block-image-wrap">

                                        <img src="https://i.postimg.cc/zBRLZkbs/combo3.webp" class="custom-block-image img-fluid" alt="">

                                    </div>

                                    <div class="custom-block-info">
                                        <h5 class="mb-2">

                                            Combo Premium

                                        </h5>

                                        <div class="profile-block d-flex">
                                            <p>R$ 60,00</p>
                                        </div>

                                        <p class="mb-0">Balde de pipoca, Pipoca P, 3 refrigerantes 350ml e chocolate em barra </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row text-center mt-5">

                            <div class="col-lg-12 col-12">
                                <a href="finalizar.php" style="background-color: #B5121B" class="btn btn-danger">
                                    Nenhum <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


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