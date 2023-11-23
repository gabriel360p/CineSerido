@extends('layouts.master')
@section('conteudo')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center" style="margin-top: 12%">
                    <h3 class="mb-0">Compra Finalizada!</h3>
                    <br>
                    <h5 class="mb-0" style="color:white;">{{$filme->titulo}}</h5>
                    <img src="https://i.postimg.cc/C149fzcH/checkbox-unscreen.gif" alt="Compra Concluída">
                </div>

            </div>
        </div>
    </header>
@endsection
