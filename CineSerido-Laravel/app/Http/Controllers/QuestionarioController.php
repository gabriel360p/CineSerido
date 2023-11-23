<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resposta;
use App\Http\Requests\ValidacaoQuestionario;

class QuestionarioController extends Controller
{
    function show(Request $request)
    {
        return view("questionario",['message'=>'']);
    }

    function store(ValidacaoQuestionario $request)
    {
        // as perguntas serão salvas através dessa função
        //ele vai receber o id do questionario e as respostas
        //ele recebe o id do questionario e vai armazenar as perguntas referentes a aquele questionario
        Resposta::create($request->all());
        return back();
    }

    function update(Request $request)
    {
        //uma possível função para editar respostas
    }
}
