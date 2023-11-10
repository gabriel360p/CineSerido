<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            
            //essa parte é totalmente personalizada, ele deve ser construída através de quais perguntas e como elas devem ser respondidas
            $table->text('resposta1');
            $table->text('resposta2');
            $table->text('resposta3');
            $table->text('resposta4');
            $table->text('resposta5');
            $table->text('resposta6');
            $table->text('resposta7');
            $table->text('resposta8');
            $table->text('resposta9');
            $table->text('resposta10');
            $table->text('resposta11');
            $table->text('resposta12');
            //e etc..
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
};
