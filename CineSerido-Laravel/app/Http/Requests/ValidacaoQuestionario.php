<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoQuestionario extends FormRequest
{
    /**     
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'resposta1'=>'required|min:2|max:400',
            'resposta2'=>'required|min:2|max:400',
            'resposta3'=>'required|min:2|max:400',
            'resposta4'=>'required|min:2|max:400',
            'resposta5'=>'required|min:2|max:400',
            'resposta6'=>'required|min:2|max:400',
            'resposta7'=>'required|min:2|max:400',
            'resposta8'=>'required|min:2|max:400',
            'resposta9'=>'required|min:2|max:400',
            'resposta10'=>'required|min:2|max:400',
            'resposta11'=>'required|min:2|max:400',
            'resposta12'=>'required|min:2|max:400',
        ];
    }

}
