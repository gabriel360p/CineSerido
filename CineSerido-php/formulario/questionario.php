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
    <main>

        <div class="container" style="margin-top: 120px;">
            <div class="row">

                <div class="text-center mb-4">
                    <h2 style="color: white">Questionário de avaliação</h2>
                </div>

                <form action="database.php" method="post" class="custom-form contact-form" role="form">
                    <input type="hidden" name="_token" value="UPBc4UVkGOsJKy7GDXeCIGGkoqCXzs4BK1yJDxXx" autocomplete="off">
                    <div class="row p-5">

                        <div class="col-lg-12 col-12">
                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">EMAIl (Opcional)</label>
                                <input type="email" class="form-control" name="email" id="" rows="2" placeholder="Email (Opcional">

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" style="color:white;" class="form-label ">O OBJETIVO PRINCIPAL É CLARO
                                E ÓBVIO ?</label>
                            <textarea class="form-control" required name="resposta1" id="" rows="2" placeholder="O OBJETIVO PRINCIPAL É CLARO E ÓBVIO ?"></textarea>

                        </div>

                        <div class="mb-3">
                            <label for="" style="color:white;" class="form-label ">OBJETIVO PRINCIPAL FOI
                                CUMPRIDO ?</label>
                            <textarea class="form-control" required name="resposta2" id="" rows="2" placeholder="OBJETIVO PRINCIPAL FOI CUMPRIDO ?"></textarea>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">FUNCIONAIDADES COMPREENSÍVEIS
                                    E DIRETAS
                                    ?</label>
                                <textarea class="form-control" required name="resposta3" id="" rows="2" placeholder="FUNCIONAIDADES COMPREENSÍVEIS E DIRETAS ?
                          "></textarea>
                            </div>

                        </div>



                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">ORGANIZAÇÃO DOS ELEMENTOS
                                    ?</label>
                                <textarea required class="form-control" name="resposta4" id="" rows="2" placeholder="ORGANIZAÇÃO DOS ELEMENTOS ?
                        "></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CORES (PALETA DE
                                    CORES) ?</label>
                                <textarea required class="form-control" name="resposta5" id="" rows="2" placeholder="CORES (PALETA DE CORES) ?"></textarea>
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CONFORTO ?</label>
                                <textarea required class="form-control" name="resposta6" id="" rows="2" placeholder="CONFORTO ?"></textarea>
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">FEEDBACK
                                    ?</label>
                                <textarea required class="form-control" name="resposta7" id="" rows="2" placeholder="FEEDBACK?
                    "></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">IDENTIDADE VISUAL
                                    ?</label>
                                <textarea required class="form-control" name="resposta8" id="" rows="2" placeholder="IDENTIDADE VISUAL ?"></textarea>
                            </div>

                        </div>
                        <div class="col-lg-12 ms-auto text-center">
                            <button style="width:300px; height:50px;" type="submit" id="btn" class="btn btn-danger">Enviar</button>
                        </div>
                    </div>
            </div>

            </form>
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