<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Filme;

class FilmeSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Filme::create([
            'titulo' => "Five Nights at Freddy's - O Pesadelo Sem Fim",
            'foto' => "https://i.postimg.cc/hjHdfYR4/five-Nights.jpg",
            'trailer' => "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=video&cd=&cad=rja&uact=8&ved=2ahUKEwidhe3uoLqCAxWWrpUCHc4xCAsQtwJ6BAgBEAI&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DakJMKqpfUww&usg=AOvVaw2i005t2K6tUEYHAFB_KMzX&opi=89978449",
            'descricao' => "No Freddy Fazbear's Pizza, robôs animados
            fazem a festa das crianças durante o dia. Mas, quando chega a noite, eles se transformam
            em assassinos psicopatas.",
            'tempo' => "109 Minutos",
            'classificacao_indicativa' => "14",
        ]);

        Filme::create([
            'titulo' => "A freira 2",
            'trailer'=>"https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=video&cd=&cad=rja&uact=8&ved=2ahUKEwijpeqwoLqCAxUOrZUCHT_BCmcQtwJ6BAgSEAI&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D0JZ8WGVSrwM&usg=AOvVaw2TuOKVCsSOoxUqoRyV8t4z&opi=89978449",
            'foto' => "https://i.postimg.cc/pdL878Bv/freira2.webp",
            'descricao' => "Em 1956, na França, um padre é assassinado e
            parece que um mal está se espalhando. Determinada a deter o maligno, irmã Irene mais uma
            vez fica cara a cara com uma força demoníaca.",
            'tempo' => "110 Minutos",
            'classificacao_indicativa' => "16",
        ]);

        Filme::create([
            'titulo' => "Guardiões da Galáxia: Volume 3",
            'trailer'=>"https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=video&cd=&cad=rja&uact=8&ved=2ahUKEwi2zfbEoLqCAxVol5UCHWESAzQQtwJ6BAgUEAI&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3Dd1yNc9skssk&usg=AOvVaw1QtrhBOiqEGhHPtuRxeUhz&opi=89978449",
            'foto' => "https://i.postimg.cc/G2BD3CNS/guardios-Galaxia3.jpg",
            'descricao' => "Peter Quill deve reunir sua equipe para
            defender o universo e proteger um dos seus. Se a missão não for totalmente bem-sucedida,
            isso pode levar ao fim dos Guardiões.",
            'tempo' => "147 Minutos",
            'classificacao_indicativa' => "14",
        ]);


        Filme::create([
            'titulo' => "Vermelho branco e sangue azul",
            'foto' => "https://i.postimg.cc/s2HSRXnh/rwrb.webp",
            'trailer'=>"https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=video&cd=&cad=rja&uact=8&ved=2ahUKEwjFle2ToLqCAxU6t5UCHShaBegQtwJ6BAgVEAI&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D64e2oJteP7A&usg=AOvVaw0zDh4LqiKwjMGc6qvtF1of&opi=89978449",
            'descricao' => "Alex, o filho da presidenta dos Estados
            Unidos, se envolve em uma confusão com o príncipe britânico Henry, o que gera uma
            crise
            internacional de imagem. Os dois são grandes rivais, mas fingem que são amigos pelo
            bem
            de seus países. Porém, essa relação fria começa a derreter e dá lugar a um
            sentimento
            intenso e novo para os dois.",
            'tempo' => "118 Minutos",
            'classificacao_indicativa' => "17",
        ]);


        // Filme::create([
        //     'titulo' => "",
        //     'foto' => "",
        //     'descricao' => "",
        //     'tempo' => "",
        //     'classificacao_indicativa' => "",
        // ]);

    }
}
