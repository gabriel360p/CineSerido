<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtiliteController extends Controller
{
    function fnaf()
    {
        return view('filmes.detalhes-five-nights-at-freddy');
    }

    function ga3()
    {
        return view('filmes.detalhes-guardioes-da-galaxia-3');
    }

    function freira()
    {
        return view('filmes.detalhes-freira2');
    }

    function royal()
    {
        return view('filmes.detalhes-vermelho-branco-sangue-azul');
    }

    function sobre()
    {
        return view('sobre');
    }
}
