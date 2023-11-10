<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">

    <title>CineSeridó</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link href="{{ asset('css/templatemo-pod-talk.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand me-lg-5 me-0" href="/">
                <img src="http://localhost:8000/imgs/logo.png" class="logo-image img-fluid" alt=""
                    style="width: 140px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Início</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/questionario">Questionário</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/questionario/respostas">Respostas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Sair</a>
                        </li>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>




    <main>
        @yield('conteudo')
    </main>





    <footer class="site-footer">

        <div class="col-lg-12 col-12">
            <div class="section-title-wrap mb-5">
            </div>
        </div>

        <div class="container text-center pt-0" id="contato">
            <div class="row">
                <div class="col-lg-6 col-12 mb-5 mb-lg-0">

                    <iframe class="google-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.819917806043!2d103.84793601429608!3d1.281807962148459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da190c2c94ccb3%3A0x11213560829baa05!2sTwitter!5e0!3m2!1sen!2smy!4v1669212183861!5m2!1sen!2smy"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contato</h6>

                    <p class="mb-2"><strong class="d-inline me-2">Telefone/Whatsapp:</strong>(84) 9.9987-0125</p>

                    <p><strong class="d-inline me-2">Email:</strong><a href="#">cineserido@gmail.com</a></p>

                    <p><strong class="d-inline me-2">Instagram:</strong><a href="#">@cine_serido</a></p>

                    <h6 class="site-footer-title mb-3">Avalie o CineSeridó!</h6>

                    <p><strong class="d-inline me-2">Formulário:</strong><a href="/questionario">Acesse o
                            questionário</a></p>

                </div>



            </div>
        </div>
    </footer>

</body>

<!-- JAVASCRIPT FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
