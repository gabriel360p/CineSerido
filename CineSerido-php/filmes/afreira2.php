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


    <section class="latest-podcast-section section-padding pb-0" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10 col-12">

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-icon-wrap">
                                <div class="custom-block-image-wrap custom-block-image-detail-page">
                                    <a title="Clique para ver o trailer" href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=video&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwijpeqwoLqCAxUOrZUCHT_BCmcQtwJ6BAgSEAI&amp;url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D0JZ8WGVSrwM&amp;usg=AOvVaw2TuOKVCsSOoxUqoRyV8t4z&amp;opi=89978449">
                                        <img src="https://i.postimg.cc/pdL878Bv/freira2.webp" class="img-fluid" alt="A freira 2">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-12">
                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>
                                        <i class="bi-clock-fill custom-icon"></i>
                                        110 Minutos
                                    </small>
                                    <small class="ms-auto"> <span class="badge bg-warning">16</span></small>
                                </div>

                                <h2 class="mb-2" style="color: #B5121B;">A freira 2</h2>

                                <p style="color: white; text-align: justify;">Em 1956, na França, um padre é assassinado e
                                    parece que um mal está se espalhando. Determinada a deter o maligno, irmã Irene mais uma
                                    vez fica cara a cara com uma força demoníaca.</p>

                            </div>

                            <h4 class="section-title mt-2 mb-2">Horários</h4>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <a href="assentos_afreira2.php" style="background-color: #B5121B" class="btn btn-danger">
                                        20/11
                                        <br>
                                        14:30
                                    </a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    Helper::component('footer.php');
    ?>


    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
</body>

</html>