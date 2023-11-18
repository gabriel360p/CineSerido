<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    use HasFactory;
    protected  $fillable=[
        'titulo',
        'foto',
        'trailer',
        'descricao',
        'tempo',
        'classificacao_indicativa',
    ];



    public function horario()
    {
        return $this->hasOne(Horario::class);
    }

}
