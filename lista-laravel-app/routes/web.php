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
Route::match(['get'],'/resultado-exercicio-2', [ListaExercicioController::class, 'subtrair']);
// Testando método match()
Route::match(['get','post'],'/exercicio/{exercicio3}', [ListaExercicioController::class,'mostrarExercicio', 'multiplicar']);
Route::any('/resultado-exercicio-3', [ListaExercicioController::class, 'multiplicar']);

Route::post('/exercicio/{exercicio4}', [ListaExercicioController::class,'mostrarExercicio', 'divisao']);
Route::get('/resultado-exercicio-4', [ListaExercicioController::class, 'divisao']);

Route::post('/exericio/{exercicio5}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-5', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio6}', [ListaExercicioController::class, 'mostrarExercicio', 'conversorTemperaturaParaFahrenheit']);
Route::get('/resultado-exercicio-6', [ListaExercicioController::class, 'conversorTemperaturaParaFahrenheit']);

Route::post('/exericio/{exercicio7}', [ListaExercicioController::class, 'mostrarExercicio', 'conversorTemperaturaParaCelcius']);
Route::get('/resultado-exercicio-7', [ListaExercicioController::class, 'conversorTemperaturaParaCelcius']);

Route::post('/exericio/{exercicio8}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio9}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-9', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio10}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-10', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio11}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-11', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio12}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-12', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio13}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-13', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio14}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-14', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio15}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-15', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio16}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-16', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio17}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-17', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio18}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-18', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio19}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-19', [ListaExercicioController::class, 'calcularMedia']);

Route::post('/exericio/{exercicio20}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularMedia']);
Route::get('/resultado-exercicio-20', [ListaExercicioController::class, 'calcularMedia']);
