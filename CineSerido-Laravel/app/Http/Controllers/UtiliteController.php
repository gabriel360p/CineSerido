<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assento;
use App\Models\Combo;
use App\Models\EmBreve;
use App\Models\Filme;

class UtiliteController extends Controller
{
    function sobre()
    {
        return view('sobre');
    }

    function painel()
    {
        return view('painel', [
            'filmes' => Filme::all(),
            'combos' => Combo::all(),
            'EmBreves' => EmBreve::all(),
        ]);
    }

    public function index(Filme $filme)
    {
        return view('assentos', ['assentos' => Assento::where('vago', false)->get(), 'filme' => $filme]);
    }

    public function save(Request $request, Filme $filme)
    {
        $assento = Assento::where('identificacao', 'like', '%' . $request->assento . '%')->first();
        if ($assento->vago == true) {
            return back();
        } else {
            $assento = Assento::where('identificacao', 'like', '%' . $request->assento . '%')->first();
            $assento->update(['vago' => true]);
            return view('combos', ['filme' => $filme, 'combos' => Combo::all()]);
        }
    }

    public function finalizar(Filme $filme)
    {
        return view('finalizar', ['filme' => $filme]);
    }
}
