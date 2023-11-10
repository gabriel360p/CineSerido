@extends('layouts.master')
@section('conteudo')
    <link rel="shortcut icon" href="imgs/favicon.png" type="image/x-icon">


    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="text-center mb-4">
                    <h2 style="color: white">Respostas</h2>
                </div>

                @foreach ($respostas as $r)
                    <div class="row border p-5 mb-5 rounded">

                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">O OBJETIVO PRINCIPAL É CLARO
                                    E ÓBVIO ?</label>
                                <textarea class="form-control" required name="resposta1" id="" rows="2" required
                                    placeholder="O OBJETIVO PRINCIPAL É CLARO E ÓBVIO ?">{{ $r->resposta1 }}</textarea>

                                @error('resposta1')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">OBJETIVO PRINCIPAL FOI
                                    CUMPRIDO ?</label>
                                <textarea class="form-control" required name="resposta2" id="" rows="2" required
                                    placeholder="OBJETIVO PRINCIPAL FOI CUMPRIDO ?">{{ $r->resposta2 }}</textarea>
                            </div>

                        </div>

                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">FUNCIONAIDADES COMPREENSÍVEIS
                                    E DIRETAS
                                    ?</label>
                                <textarea class="form-control" required name="resposta3" id="" rows="2" required
                                    placeholder="FUNCIONAIDADES COMPREENSÍVEIS E DIRETAS ?
                      ">{{ $r->resposta3 }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">OBJETIVO PRINCIPAL FOI
                                    CUMPRIDO ?</label>
                                <textarea required class="form-control" name="resposta4" id="" rows="2" required
                                    placeholder="ELEMENTOS ÚTEIS?">{{ $r->resposta4 }}</textarea>
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CONFORTO DE OPERAÇÃO (Nº DE
                                    CLIQUES)
                                    ?</label>
                                <textarea required class="form-control" name="resposta5" id="" rows="2" required
                                    placeholder="CONFORTO DE OPERAÇÃO (Nº DE CLIQUES) ?
                      ">{{ $r->resposta5 }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CREDIBILIDADE DE INFORMAÇÕES
                                    ?</label>
                                <textarea required class="form-control" name="resposta6" id="" rows="2" required
                                    placeholder="CREDIBILIDADE DE INFORMAÇÕES ?">{{ $r->resposta6 }}</textarea>
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">ORGANIZAÇÃO DOS ELEMENTOS
                                    ?</label>
                                <textarea required class="form-control" name="resposta7" id="" rows="2" required
                                    placeholder="ORGANIZAÇÃO DOS ELEMENTOS ?
                    ">{{ $r->resposta7 }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CORES (PALETA DE
                                    CORES) ?</label>
                                <textarea required class="form-control" name="resposta8" id="" rows="2" required
                                    placeholder="CORES (PALETA DE CORES) ?">{{ $r->resposta8 }}</textarea>
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">USABILIDADE
                                    ?</label>
                                <textarea required class="form-control" name="resposta9" id="" rows="2" required
                                    placeholder="ORGANIZAÇÃO DOS ELEMENTOS ?
                  ">{{ $r->resposta9 }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CONFORTO ?</label>
                                <textarea required class="form-control" name="resposta10" id="" rows="2" required
                                    placeholder="CONFORTO ?">{{ $r->resposta10 }}</textarea>
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">FEEDBACK
                                    ?</label>
                                <textarea required class="form-control" name="resposta11" id="" rows="2" required
                                    placeholder="FEEDBACK?
                ">{{ $r->resposta11 }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">IDENTIDADE VISUAL
                                    ?</label>
                                <textarea required class="form-control" name="resposta12" id="" rows="2" required
                                    placeholder="IDENTIDADE VISUAL ?">{{ $r->resposta12 }}</textarea>
                            </div>

                        </div>
                    </div>
                @endforeach
                {{ $respostas->links() }}

            </div>
        </div>

    </section>
@endsection
