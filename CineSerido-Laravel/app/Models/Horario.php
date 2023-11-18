<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable=[
        'data',
        'dia',
        'hora',
        'filme_id',
    ];

    public function filme()
    {
        return $this->belongsTo(Filme::class);
    }

}
