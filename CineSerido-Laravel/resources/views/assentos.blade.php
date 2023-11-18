@extends('layouts.master')
@section('conteudo')
    <section class="latest-podcast-section section-padding pb-0" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10 col-12">

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="custom-block-icon-wrap">
                                <div class="custom-block-image-wrap custom-block-image-detail-page">
                                    <a title="Clique para ver o trailer" href="{{ $filme->trailer }}">
                                        <img src="{{ $filme->foto }}" class="img-fluid" alt="{{ $filme->titulo }}">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-12">
                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small>
                                        <i class="bi-clock-fill custom-icon"></i>
                                        {{ $filme->tempo }}
                                    </small>
                                    @if ($filme->classificacao_indicativa <= 15)
                                        <small class="ms-auto"> <span
                                                class="badge bg-success">{{ $filme->classificacao_indicativa }}</span></small>
                                    @elseif($filme->classificacao_indicativa >= 15 && $filme->classificacao_indicativa < 17)
                                        <small class="ms-auto"> <span
                                                class="badge bg-warning">{{ $filme->classificacao_indicativa }}</span></small>
                                    @elseif($filme->classificacao_indicativa >= 18)
                                        <small class="ms-auto"> <span
                                                class="badge bg-danger">{{ $filme->classificacao_indicativa }}</span></small>
                                    @endif
                                </div>

                                <h2 class="mb-2" style="color: #B5121B;">{{ $filme->titulo }}</h2>

                                <p style="color: white; text-align: justify;">{{ $filme->descricao }}</p>

                            </div>
                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <span href="{{ route('assentos', $filme->id) }}" style="background-color: #B5121B"
                                        class="btn btn-danger">
                                        {{ $filme->horario->data }}
                                        <br>
                                        {{ $filme->horario->hora }}
                                    </span>
                                </div>
                            </div>
                            </h4>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-12 col-12">
                    <div class="section-title-wrap">
                        <h5 class="section-title">Assentos</h5>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-6 col-12">
                    <img src="https://i.postimg.cc/fThCzMnr/assentos.jpg" alt="Assentos" style="width:100%">
                </div>
            </div>

            <div class="row justify-content-center mt-4">

                <div class="col-lg-4 col-12">
                    <p style="color: white; text-align: justify;">Assentos Vagos:</p>

                    <p style="color: white; text-align: justify;">
                        @foreach ($assentos as $assento)
                            {{$assento->identificacao}}; 
                        @endforeach
                    </p>

                </div>

                <div class="col-lg-4 col-12">
                    <form action="">
                        <div class="mb-3 d-flex flex-column">
                            <div>
                                <label for="" style="color:white;" class="form-label ">Escolha o Assento</label>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <input class="form-control" required name="" id="" required
                                        placeholder="Escolha o Assento">
                                </div>

                                <div class="d-flex">
                                    <button
                                        style="background-color: #B5121B; border:none; border-radius:10px; color:white; margin-left:5px;"
                                        class="btn" href=""><i class="fa-solid fa-arrow-right"
                                            style="color: #ffffff;"></i></button>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>
@endsection
