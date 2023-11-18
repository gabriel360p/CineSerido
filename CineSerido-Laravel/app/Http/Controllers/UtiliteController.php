<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assento;
use App\Models\Filme;
class UtiliteController extends Controller
{
    function sobre()
    {
        return view('sobre');
    }

    public function index(Filme $filme)
    {
        return view('assentos',['assentos'=>Assento::where('vago',false)->get(),'filme'=>$filme]);
    }
}
