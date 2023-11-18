<?php

namespace Database\Seeders;

use App\Models\Horario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Horario::create([
            'data' => "18/11",
            'dia' => "Sábado",
            'hora' => "17:15",
            'filme_id' => "1",
        ]);




        Horario::create([
            'data' => "20/11",
            'dia' => "Segunda",
            'hora' => "14:30",
            'filme_id' => "2",
        ]);



        Horario::create([
            'data' => "21/11",
            'dia' => "Terça",
            'hora' => "14:30",
            'filme_id' => "3",
        ]);





        Horario::create([
            'data' => "22/11",
            'dia' => "Quarta",
            'hora' => "19:30",
            'filme_id' => "4",
        ]);



        // Horario::create([
        //     'data'=>"",
        //     'dia'=>"",
        //     'hora'=>"",
        //     'filme_id'=>"",
        // ]);
    }
}
