<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ListaExercicioController;



Route::get('/', function () {
    return view('home');
});

Route::get('/form', [FormController::class, 'mostrarForm', 'receberValor']);
Route::get('/processarForm', [FormController::class,  'receberValor']);

Route::post('/exercicio/{exercicio2}', [ListaExercicioController::class,'mostrarExercicio', 'subtrair']);
Route::any('/resultado-exercicio-2', [ListaExercicioController::class, 'subtrair']);

Route::match(['get','post'],'/exercicio/{exercicio3}', [ListaExercicioController::class,'mostrarExercicio', 'multiplicar']);
Route::any('/resultado-exercicio-3', [ListaExercicioController::class, 'multiplicar']);

Route::post('/exercicio/{exercicio4}', [ListaExercicioController::class,'mostrarExercicio', 'divisao']);
Route::get('/resultado-exercicio-4', [ListaExercicioController::class, 'divisao']);
