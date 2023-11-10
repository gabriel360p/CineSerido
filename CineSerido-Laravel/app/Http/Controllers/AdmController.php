<?php

namespace App\Http\Controllers;

use App\Models\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    public function login()
    {
        return view("adm.auth.login");
    }

    public function logar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect(url('/'));
        }

        return back();
    }

    public function respostas()
    {
        return view('adm.questionario.respostas', ['respostas' => Resposta::orderBy('asc')->simplePaginate(2)]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function painel_adm()
    {
        return view('adm.painel-adm');
    }
}
