@extends('layouts.master')

@section('conteudo')
    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="text-center mb-4">
                    <h2 style="color: white">Questionário de avaliação</h2>
                </div>

                <form action="/questionario/salvar" method="post" class="custom-form contact-form" role="form">
                    @csrf
                    <div class="row p-5">

                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">O OBJETIVO PRINCIPAL É CLARO
                                    E ÓBVIO ?</label>
                                <textarea class="form-control" required name="resposta1" id="" rows="2" required
                                    placeholder="O OBJETIVO PRINCIPAL É CLARO E ÓBVIO ?">{{ @old('resposta1') }}</textarea>

                                @error('resposta1')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">OBJETIVO PRINCIPAL FOI
                                    CUMPRIDO ?</label>
                                <textarea class="form-control" required name="resposta2" id="" rows="2" required
                                    placeholder="OBJETIVO PRINCIPAL FOI CUMPRIDO ?">{{ @old('resposta2') }}</textarea>

                                @error('resposta2')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">FUNCIONAIDADES COMPREENSÍVEIS
                                    E DIRETAS
                                    ?</label>
                                <textarea class="form-control" required name="resposta3" id="" rows="2" required
                                    placeholder="FUNCIONAIDADES COMPREENSÍVEIS E DIRETAS ?
                          ">{{ @old('resposta3') }}</textarea>
                                @error('resposta3')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">OBJETIVO PRINCIPAL FOI
                                    CUMPRIDO ?</label>
                                <textarea required class="form-control" name="resposta4" id="" rows="2" required
                                    placeholder="ELEMENTOS ÚTEIS?">{{ @old('resposta4') }}</textarea>
                                @error('resposta4')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CONFORTO DE OPERAÇÃO (Nº DE
                                    CLIQUES)
                                    ?</label>
                                <textarea required class="form-control" name="resposta5" id="" rows="2" required
                                    placeholder="CONFORTO DE OPERAÇÃO (Nº DE CLIQUES) ?
                          ">{{ @old('resposta5') }}</textarea>
                                @error('resposta5')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CREDIBILIDADE DE INFORMAÇÕES
                                    ?</label>
                                <textarea required class="form-control" name="resposta6" id="" rows="2" required
                                    placeholder="CREDIBILIDADE DE INFORMAÇÕES ?">{{ @old('resposta6') }}</textarea>
                                @error('resposta6')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">ORGANIZAÇÃO DOS ELEMENTOS
                                    ?</label>
                                <textarea required class="form-control" name="resposta7" id="" rows="2" required
                                    placeholder="ORGANIZAÇÃO DOS ELEMENTOS ?
                        ">{{ @old('resposta7') }}</textarea>
                                @error('resposta7')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CORES (PALETA DE
                                    CORES) ?</label>
                                <textarea required class="form-control" name="resposta8" id="" rows="2" required
                                    placeholder="CORES (PALETA DE CORES) ?">{{ @old('resposta8') }}</textarea>
                                @error('resposta8')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">USABILIDADE
                                    ?</label>
                                <textarea required class="form-control" name="resposta9" id="" rows="2" required
                                    placeholder="ORGANIZAÇÃO DOS ELEMENTOS ?
                      ">{{ @old('resposta9') }}</textarea>
                                @error('resposta9')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">CONFORTO ?</label>
                                <textarea required class="form-control" name="resposta10" id="" rows="2" required
                                    placeholder="CONFORTO ?">{{ @old('resposta10') }}</textarea>
                                @error('resposta10')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="col-lg-12 col-12">

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">FEEDBACK
                                    ?</label>
                                <textarea required class="form-control" name="resposta11" id="" rows="2" required
                                    placeholder="FEEDBACK?
                    ">{{ @old('resposta11') }}</textarea>
                                @error('resposta11')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="" style="color:white;" class="form-label ">IDENTIDADE VISUAL
                                    ?</label>
                                <textarea required class="form-control" name="resposta12" id="" rows="2" required
                                    placeholder="IDENTIDADE VISUAL ?">{{ @old('resposta12') }}</textarea>
                                @error('resposta12')
                                    <span class="badge">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-12 ms-auto text-center">
                            <button style="width:300px; height:50px;" type="submit" id="btn"
                                class="btn btn-danger">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.querySelector('button#btn').addEventListener('click', show)

        function show() {
            alert('A CineSeridó agradece pela sua avaliação!')
        }
    </script>
@endsection
