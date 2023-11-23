@extends('layouts.master')
@section('conteudo')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
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

                            @foreach ($combos as $combo)
                                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                                    <a href="{{route('finalizar',$filme->id)}}">
                                        <div class="custom-block custom-block-full">
                                            <div class="custom-block-image-wrap">
                                                {{-- <a href=""> --}}
                                                <img src="{{ $combo->foto }}" class="custom-block-image img-fluid"
                                                    alt="">
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
                                    </a>
                                </div>
                            @endforeach
                            <div class="row text-center mt-5">

                                <div class="col-lg-12 col-12">
                                    <a href="{{route('finalizar',$filme->id)}}" style="background-color: #B5121B" class="btn btn-danger">
                                        Nenhum <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                </section>


            </div>
        </div>
    </header>
@endsection
