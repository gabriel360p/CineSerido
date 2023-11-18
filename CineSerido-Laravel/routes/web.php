<?php

use App\Http\Controllers\AdmController;
use App\Http\Controllers\AssentoController;
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

Route::get('/', function () {
    return view('painel', [
        'filmes' => Filme::all(),
        'combos' => Combo::all(),
    ]);
});
Route::get('/a' , function () {
    return view('ass', [
    ]);
});

Route::get('/cadeira', function () {
    return view('cadeira');
});

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




Route::controller(AssentoController::class)->group(function () {
    Route::get('/assentos/{filme}', 'index')->name('assentos');
});







Route::controller(FilmeController::class)->group(function () {
    Route::get('/filmes/detalhes/{filme}', 'show')->name('filmes.detalhes');
});

Route::controller(UtiliteController::class)->group(function () {
    Route::get('/sobre', 'sobre');
});
