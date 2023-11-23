<?php

namespace Database\Seeders;

use App\Models\EmBreve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmBreveSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmBreve::create([
            'titulo'=>'As Marvels',
            'foto'=>'https://i.postimg.cc/brcNmpsr/marvels.jpg',
            'categorias'=>"Aventura/Ação ",
            'lancamento'=>"30/11/2023",
        ]);

        EmBreve::create([
            'titulo'=>'Madame Web',
            'foto'=>'https://i.postimg.cc/qRCvczBW/madame-web.jpg',
            'categorias'=>"Ficção científica/Aventura ",
            'lancamento'=>"30/12/2023",
        ]);
        
        EmBreve::create([
            'titulo'=>'Homem-Aranha: Além do Aranhaverso',
            'foto'=>'https://i.postimg.cc/FzyFq8LZ/spiderman.webp',
            'categorias'=>"Ficção científica/Aventura ",    
            'lancamento'=>"25/12/2023",
        ]);

        EmBreve::create([
            'titulo'=>'Wonka',
            'foto'=>'https://i.postimg.cc/Hsmk5YqP/wonka.webp',
            'categorias'=>"Fantasia/Aventura ",    
            'lancamento'=>"1/12/2023",
        ]);
    }
}
