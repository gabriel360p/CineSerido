<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class   FilmeController extends Controller
{

    public function show(Filme $filme)
    {
        return view('filmes.show',['filme'=>$filme]);
    }

}
