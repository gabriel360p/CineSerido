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
        Schema::create('em_breves', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('foto');
            $table->text('categorias');
            $table->string('lancamento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('em_breves');
    }
};
