<?php

namespace Database\Seeders;

use App\Models\Combo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComboSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Combo::create([
            'titulo' => "Combo Kids ",
            'descricao' => "2 Pipocas P, 2 sucos, água 500ml e Bis.",
            'preco' => "R$ 20,00",
            'foto' => "https://i.postimg.cc/d0f7xf1R/combo1.png",
        ]);

        Combo::create([
            'titulo' => "Combo Tradicional ",
            'descricao' => "Balde de pipoca, 2 refrigerantes 350ml e chocolate em barra",
            'preco' => "R$ 40,00",
            'foto' => "https://i.postimg.cc/tJQsXVFY/combo2.jpg",
        ]);

        Combo::create([
            'titulo' => "Combo Premium ",
            'descricao' => "Balde de pipoca, Pipoca P, 3 refrigerantes 350ml e chocolate em barra ",
            'preco' => "R$ 60,00",
            'foto' => "https://i.postimg.cc/zBRLZkbs/combo3.webp",
        ]);

        //  Combo::create([
        //     'titulo'=>"",
        //     'descricao'=>"",
        //     'preco'=>"",
        //     'foto'=>"",
        //  ]);
    }
}
