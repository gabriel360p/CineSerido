@extends('layouts.master')

@section('conteudo')
    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="text-center mb-5 pb-2">
                        <h1 class="text-white">Em Cartaz</h1>
                        <a href="#section_2" class="btn custom-btn smoothscroll mt-3">Em Cartaz</a>
                    </div>

                    <div class="owl-carousel owl-theme">
                        <div class="owl-carousel-info-wrap item">
                            <img src="imgs/movies/rwrb2.jpeg" class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    Vermelho Branco e Sangue Azul
                                </h4>

                                <span class="badge">Romance</span>
                            </div>

                        </div>


                        <div class="owl-carousel-info-wrap item">
                            <img src="imgs/movies/freira2.webp" class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    A Freira 2
                                </h4>

                                <span class="badge">Terror</span>

                                <span class="badge">Mistério</span>
                            </div>
                        </div>

                        <div class="owl-carousel-info-wrap item">
                            <img src="imgs/movies/rwrb2.jpeg" class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">
                                    Vermelho Branco e Sangue Azul
                                </h4>

                                <span class="badge">Romance</span>
                            </div>

                        </div>

                        <div class="owl-carousel-info-wrap item">
                            <img src="imgs/movies/guardiosGalaxia3.jpg" class="owl-carousel-image img-fluid" alt="">

                            <div class="owl-carousel-info">
                                <h4 class="mb-2">Guardiões da Galáxia Vol. 3</h4>

                                <span class="badge">Científica</span>

                                <span class="badge">Ação</span>
                            </div>
                        </div>

                        <div class="owl-carousel-info-wrap item">
                            <img src="imgs/movies/fiveNights.jpg" class="owl-carousel-image img-fluid" alt="">

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


    <section class="latest-podcast-section section-padding pb-0" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Lançamentos</h4>
                    </div>
                </div>

                @foreach ($filmes as $filme)
                    <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block d-flex align-items-center">
                            <div style="width: 30%">
                                <a href="{{ route('filmes.detalhes', $filme->id) }}" class="custom-block-image-wrap"><img
                                        src="{{ $filme->foto }}" class=" img-fluid" alt="{{ $filme->titulo }}"></a>
                            </div>

                            <div class="custom-block-info" id="block-info" style="width: 70%; text-align: justify;">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4"><i class="bi-clock-fill custom-icon"></i>
                                        {{ $filme->tempo }}</small>
                                </div>

                                <h5 class="mb-2" id="movie-title"><a
                                        href="{{ route('filmes.detalhes', $filme->id) }}">{{ $filme->titulo }}</a>
                                </h5>

                                <p class="mb-0" style="font-size: 15px;" id="teste">
                                    {{ $filme->descricao }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>


    <section class="topics-section section-padding pb-0" id="section_3">
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
                            <img src="imgs/soon/marvels.jpg" class="custom-block-image img-fluid" alt="">
                        </span>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html">As
                                    Marvels</span></h5>

                            <p class="badge mb-0"> Aventura/Ação </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <span href="" class="custom-block-image-wrap">
                            <img src="imgs/soon/madame_web.jpeg" class="custom-block-image img-fluid" alt="">
                        </span>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html">Madame
                                    Web</span></h5>

                            <p class="badge mb-0">Ficção científica/Aventura</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <span href="" class="custom-block-image-wrap">
                            <img src="imgs/soon/spiderman.webp" class="custom-block-image img-fluid" alt="">
                        </span>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html"
                                    style="font-size: 20px;">Homem-Aranha: Além do Aranhaverso</span></h5>

                            <p class="badge mb-0">Ação/Aventura</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-overlay">
                        <span href="" class="custom-block-image-wrap">
                            <img src="imgs/soon/wonka.webp" class="custom-block-image img-fluid" alt="">
                        </span>

                        <div class="custom-block-info custom-block-overlay-info">
                            <h5 style="color:#B5121B;" class="mb-1"><span href="listing-page.html">Wonka</span>
                            </h5>

                            <p class="badge mb-0">Fantasia/Aventura</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="trending-podcast-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">Combos</h4>
                    </div>
                </div>

                @foreach ($combos as $combo)
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                {{-- <a href=""> --}}
                                <img src="{{ $combo->foto }}" class="custom-block-image img-fluid" alt="">
                                {{-- </a> --}}
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    {{-- <a href=""> --}}
                                    {{ $combo->titulo }}
                                    {{-- </a> --}}
                                </h5>

                                <div class="profile-block d-flex">
                                    <p>{{ $combo->preco }}</p>
                                </div>

                                <p class="mb-0">{{ $combo->descricao }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
