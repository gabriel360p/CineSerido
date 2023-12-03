<?php
include_once __DIR__ . '/helpers.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="assets/imgs/favicon.png" type="image/x-icon">

    <title>CineSeridó</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://kit.fontawesome.com/065cbb313e.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/temo-pod-talk.css">
    <link rel="stylesheet" href="assets/css/templatemo-pod-talk.css">

</head>

<body>

    <?php
    Helper::component('navbar.php');
    ?>

    <main>
        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">Lançamentos </h1>
                            <a href="#lançamentos" class="btn custom-btn smoothscroll mt-3">Em Cartaz</a>
                        </div>

                        <div class="owl-carousel owl-theme">
                            <div class="owl-carousel-info-wrap item">
                                <img src="assets/imgs/movies/rwrb2.jpeg" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Vermelho Branco e Sangue Azul
                                    </h4>

                                    <span class="badge">Romance</span>
                                </div>

                            </div>


                            <div class="owl-carousel-info-wrap item">
                                <img src="assets/imgs/movies/freira2.webp" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        A Freira 2
                                    </h4>

                                    <span class="badge">Terror</span>

                                    <span class="badge">Mistério</span>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="assets/imgs/movies/rwrb2.jpeg" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">
                                        Vermelho Branco e Sangue Azul
                                    </h4>

                                    <span class="badge">Romance</span>
                                </div>

                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="assets/imgs/movies/guardiosGalaxia3.jpg" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">Guardiões da Galáxia Vol. 3</h4>

                                    <span class="badge">Científica</span>

                                    <span class="badge">Ação</span>
                                </div>
                            </div>

                            <div class="owl-carousel-info-wrap item">
                                <img src="assets/imgs/movies/fiveNights.jpg" class="owl-carousel-image img-fluid" alt="">

                                <div class="owl-carousel-info">
                                    <h4 class="mb-2">Five Nights at Freddy's</h4>

                                    <span class="badge">Terror</span>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="lançamentos">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Lançamentos</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-4  mt-4 mb-lg-0">
                        <div class="custom-block d-flex align-items-center">
                            <div style="width: 30%">
                                <a href="filmes/fnaf.php" class="custom-block-image-wrap"><img src="https://i.postimg.cc/hjHdfYR4/five-Nights.jpg" class=" img-fluid" alt="Five Nights at Freddy's - O Pesadelo Sem Fim"></a>
                            </div>

                            <div class="custom-block-info" id="block-info" style="width: 70%; text-align: justify;">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4"><i class="bi-clock-fill custom-icon"></i>
                                        109 Minutos</small>
                                </div>

                                <h5 class="mb-2" id="movie-title"><a href="filmes/fnaf.php">Five Nights at Freddy's - O Pesadelo Sem Fim</a>
                                </h5>

                                <p class="mb-0" style="font-size: 15px;" id="teste">
                                    No Freddy Fazbear's Pizza, robôs animados
                                    fazem a festa das crianças durante o dia. Mas, quando chega a noite, eles se transformam
                                    em assassinos psicopatas.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4  mt-4 mb-lg-0">
                        <div class="custom-block d-flex align-items-center">
                            <div style="width: 30%">
                                <a href="filmes/afreira2.php" class="custom-block-image-wrap"><img src="https://i.postimg.cc/pdL878Bv/freira2.webp" class=" img-fluid" alt="A freira 2"></a>
                            </div>

                            <div class="custom-block-info" id="block-info" style="width: 70%; text-align: justify;">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4"><i class="bi-clock-fill custom-icon"></i>
                                        110 Minutos</small>
                                </div>

                                <h5 class="mb-2" id="movie-title"><a href="filmes/afreira2.php">A freira 2</a>
                                </h5>

                                <p class="mb-0" style="font-size: 15px;" id="teste">
                                    Em 1956, na França, um padre é assassinado e
                                    parece que um mal está se espalhando. Determinada a deter o maligno, irmã Irene mais uma
                                    vez fica cara a cara com uma força demoníaca.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4  mt-4 mb-lg-0">
                        <div class="custom-block d-flex align-items-center">
                            <div style="width: 30%">
                                <a href="filmes/guardioes3.php" class="custom-block-image-wrap"><img src="https://i.postimg.cc/G2BD3CNS/guardios-Galaxia3.jpg" class=" img-fluid" alt="Guardiões da Galáxia: Volume 3"></a>
                            </div>

                            <div class="custom-block-info" id="block-info" style="width: 70%; text-align: justify;">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4"><i class="bi-clock-fill custom-icon"></i>
                                        147 Minutos</small>
                                </div>

                                <h5 class="mb-2" id="movie-title"><a href="filmes/guardioes3.php">Guardiões da Galáxia: Volume 3</a>
                                </h5>

                                <p class="mb-0" style="font-size: 15px;" id="teste">
                                    Peter Quill deve reunir sua equipe para
                                    defender o universo e proteger um dos seus. Se a missão não for totalmente bem-sucedida,
                                    isso pode levar ao fim dos Guardiões.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4  mt-4 mb-lg-0">
                        <div class="custom-block d-flex align-items-center">
                            <div style="width: 30%">
                                <a href="filmes/vermelho-branco-sangue-azul.php" class="custom-block-image-wrap"><img src="https://i.postimg.cc/s2HSRXnh/rwrb.webp" class=" img-fluid" alt="Vermelho branco e sangue azul"></a>
                            </div>

                            <div class="custom-block-info" id="block-info" style="width: 70%; text-align: justify;">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4"><i class="bi-clock-fill custom-icon"></i>
                                        118 Minutos</small>
                                </div>

                                <h5 class="mb-2" id="movie-title"><a href="filmes/vermelho-branco-sangue-azul.php">Vermelho branco e sangue azul</a>
                                </h5>

                                <p class="mb-0" style="font-size: 15px;" id="teste">
                                    Alex, o filho da presidenta dos Estados
                                    Unidos, se envolve em uma confusão com o príncipe britânico Henry, o que gera uma
                                    crise
                                    internacional de imagem. Os dois são grandes rivais, mas fingem que são amigos pelo
                                    bem
                                    de seus países. Porém, essa relação fria começa a derreter e dá lugar a um
                                    sentimento
                                    intenso e novo para os dois.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="em-breve">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h5 class="section-title">Em Breve</h5>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">

                            <span href="" class="custom-block-image-wrap">
                                <a href="breve/marvels.php">
                                    <img src="https://i.postimg.cc/brcNmpsr/marvels.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </span>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html">

                                        <a href="breve/marvels.php">

                                            As Marvels</a></span></h5><a href="http://localhost:8000/filmes/em-breve/1">
                                </a>

                                <p class="badge mb-0"> Aventura/Ação </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">

                            <span href="" class="custom-block-image-wrap">
                                <a href="breve/madame-web.php">
                                    <img src="https://i.postimg.cc/qRCvczBW/madame-web.jpg" class="custom-block-image img-fluid" alt="">
                                </a>
                            </span>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html">

                                        <a href="breve/madame-web.php">

                                            Madame Web</a></span></h5><a href="http://localhost:8000/filmes/em-breve/2">
                                </a>

                                <p class="badge mb-0"> Ficção científica/Aventura </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">

                            <span href="" class="custom-block-image-wrap">
                                <a href="breve/aranhaverso.php">
                                    <img src="https://i.postimg.cc/FzyFq8LZ/spiderman.webp" class="custom-block-image img-fluid" alt="">
                                </a>
                            </span>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html">

                                        <a href="breve/aranhaverso.php">

                                            Homem-Aranha: Além do Aranhaverso</a></span></h5>

                                <p class="badge mb-0"> Ficção científica/Aventura </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-overlay">

                            <span href="" class="custom-block-image-wrap">
                                <a href="breve/wonka.php">
                                    <img src="https://i.postimg.cc/Hsmk5YqP/wonka.webp" class="custom-block-image img-fluid" alt="">
                                </a>
                            </span>

                            <div class="custom-block-info custom-block-overlay-info">
                                <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html">

                                        <a href="breve/wonka.php">
                                            Wonka</a></span></h5><a href="http://localhost:8000/filmes/em-breve/4">
                                </a>

                                <p class="badge mb-0"> Fantasia/Aventura </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="combos">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Combos</h4>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
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
                    </div>
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
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
                    </div>
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
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
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php
    Helper::component('footer.php');
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
</body>

</html>