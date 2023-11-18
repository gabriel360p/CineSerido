@extends('layouts.master')
@section('conteudo')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-0">Compra Finalizada!</h2>
                    <h2 class="mb-0">Aproveite seu filme: </h2>
                    <h2 class="mb-0">{{$filme->titulo}}</h2>
                </div>

            </div>
        </div>
    </header>
@endsection
