<?php

namespace App\Http\Controllers;

use App\Models\EmBreve;
use App\Models\Filme;
use Illuminate\Http\Request;

class   FilmeController extends Controller
{

    public function show(Filme $filme)
    {
        return view('filmes.show',['filme'=>$filme]);
    }


    public function em_breve(EmBreve $emBreve)
    {
        return view('filmes.em-breve',['filme'=>$emBreve]);
    }
}
