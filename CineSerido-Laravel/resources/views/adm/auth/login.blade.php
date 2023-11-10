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
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand me-lg-5 me-0" href="/">
                <img src="http://localhost:8000/imgs/logo.png" class="logo-image img-fluid" alt=""
                    style="width: 30%;">
            </a>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="text-center mb-5">
                    <h3 style="color: white">Zona Administrativa</h3>
                </div>

                <form action="/logar" method="post" class="custom-form contact-form px-5" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="form-floating">
                                <input type="email" name="email" id="name" class="form-control"
                                    placeholder="Name" required="">

                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" id="name" class="form-control"
                                    placeholder="Name" required="">

                                <label for="floatingInput">Senha</label>
                            </div>
                        </div>
                        <div class="col-lg-12 ms-auto text-center">
                            <button style="width:300px; height:50px;" type="submit" class="btn btn-danger">Logar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
