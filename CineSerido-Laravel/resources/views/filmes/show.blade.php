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
                                    @elseif($filme->classificacao_indicativa >= 15 && $filme->classificacao_indicativa <= 17)
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

                            <h4 class="section-title mt-2 mb-2">Horários</h4>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <a href="{{route('assentos',$filme->id)}}" style="background-color: #B5121B" class="btn btn-danger">
                                        {{ $filme->horario->data }}
                                        <br>
                                        {{ $filme->horario->hora }}
                                    </a>
                                </div>
                            </div>
                            </h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
