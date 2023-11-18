@extends('layouts.master')
@section('conteudo')
    <section class="latest-podcast-section section-padding pb-0" id="section_2">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-3">
                    @for ($i = 0; $i < 48; $i++)
                        <a class="btn btn-success mt-3 mx-2">
                            A1
                        </a>
                    @endfor
                </div>

                <div class="col-1">                    
                </div>

                <div class="col-3 text-center">

                    @for ($i = 0; $i < 48; $i++)
                    <a class="btn btn-success mt-3 mx-3">
                            A
                        </a>
                    @endfor
                </div>
               

            </div>


        </div>

    </section>
@endsection
