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
        Schema::create('nota_fiscals', function (Blueprint $table) {
            $table->id();

            
            $table->unsignedBigInteger('filme_id');
            $table->foreign('filme_id')->references('id')->on('filmes');

            $table->unsignedBigInteger('horario_id');
            $table->foreign('horario_id')->references('id')->on('horarios');

            $table->unsignedBigInteger('combo_id');
            $table->foreign('combo_id')->references('id')->on('combos');

            $table->unsignedBigInteger('assento_id');
            $table->foreign('assento_id')->references('id')->on('assentos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_fiscals');
    }
};
