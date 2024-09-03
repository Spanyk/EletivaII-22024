<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'mostrarForm']);

Route::post('/processarForm', [FormController::class, 
                'receberValor']);

Route::post('/respostaExer1', [ListaController::class, 'sum'], 'mostrarExer1');

Route:post('/respostaExer2', [ListaController::class, 'soma']);