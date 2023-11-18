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
        return view('assentos', ['assentos' => Assento::where('vago', false)->get(), 'filme' => $filme]);
    }

    public function finalizar(Request $request, Filme $filme)
    {
        $assento = Assento::where('identificacao', 'like', '%' . $request->assento . '%')->first();
        if ($assento->vago == true) {
            return back();
        } else {
            $assento = Assento::where('identificacao', 'like', '%' . $request->assento . '%')->first();
            $assento->update(['vago' => true]);
            return view('finalizar',['filme'=>$filme]);
        }
    }
}
