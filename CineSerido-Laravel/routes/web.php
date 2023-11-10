<?php

use App\Http\Controllers\AdmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionarioController;
use App\Http\Controllers\UtiliteController;
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
    return view('painel');
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

Route::controller(UtiliteController::class)->group(function () {
    Route::get('/detalhes/a-freira2', 'freira');
    Route::get('/detalhes/five-nights-at-freddy', 'fnaf');
    Route::get('/detalhes/vermelho-branco-sangue-azul', 'royal');
    Route::get('/detalhes/guardioes-da-galaxia-3', 'ga3');
    Route::get('/sobre', 'sobre');
});
