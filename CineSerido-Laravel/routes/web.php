<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\FilmeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionarioController;
use App\Http\Controllers\UtiliteController;
use App\Models\Combo;
use App\Models\Filme;
use App\Models\Resposta;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/adm', [AdmController::class, 'login']);

Route::controller(AdmController::class)->group(function () {
    Route::post('/logar', 'logar');
    Route::get('/logout', 'logout');
    Route::get('/questionario/respostas', 'respostas');
})->middleware(['auth']);

Route::controller(QuestionarioController::class)->group(function () {
    Route::get('/questionario', 'show');
    Route::post('/questionario/salvar', 'store');
});


Route::controller(FilmeController::class)->group(function () {
    Route::get('/filmes/detalhes/{filme}', 'show')->name('filmes.detalhes');
    Route::get('/filmes/em-breve/{emBreve}', 'em_breve')->name('filmes.em_breve');
});

Route::controller(UtiliteController::class)->group(function () {
    Route::get('/', 'painel');
    Route::get('/sobre', 'sobre');
    Route::get('/assentos/{filme}', 'index')->name('assentos');
    Route::post('/combos/{filme}', 'save')->name('assento.save');
    Route::get('/combos/{filme}', 'combos')->name('combos');
    Route::get('/finalizar/{filme}', 'finalizar')->name('finalizar');
});
