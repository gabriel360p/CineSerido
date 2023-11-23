@extends('layouts.master')

@section('conteudo')
    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 text-center">
                    <div style="margin-top: 160px;">
                        <img src="{{ $filme->foto }}" alt="{{ $filme->titulo }}" style="width:45%;">
                    </div>
                    <div class="mt-3">
                        <h2 class="mb-0">EM BREVE!</h2>
                    </div>  
                    <div class="mt-3">
                        <p style="color:white; font-size:20px;">{{$filme->lancamento}}</p>
                    </div>  
                </div>

            </div>
        </div>
    </header>
@endsection
