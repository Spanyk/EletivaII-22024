<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ListaExercicioController;



Route::get('/', function () {
    return view('home');
});

Route::get('/form', [FormController::class, 'mostrarForm', 'receberValor']);
Route::get('/processarForm', [FormController::class,  'receberValor']);

Route::post('/exercicio/{exercicio1}', [ListaExercicioController::class,'mostrarExercicio', 'somar']);
Route::get('/resultado-exercicio-1', [ListaExercicioController::class, 'somar']);
// Testando método match()
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

Route::post('/exericio/{exercicio8}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularAreaRetangulo']);
Route::get('/resultado-exercicio-8', [ListaExercicioController::class, 'calcularAreaRetangulo']);

Route::post('/exericio/{exercicio9}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularAreaCirculo']);
Route::get('/resultado-exercicio-9', [ListaExercicioController::class, 'calcularAreaCirculo']);

Route::post('/exericio/{exercicio10}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularPerimetroRetangulo']);
Route::get('/resultado-exercicio-10', [ListaExercicioController::class, 'calcularPerimetroRetangulo']);

Route::post('/exericio/{exercicio11}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularPerimetroRaio']);
Route::get('/resultado-exercicio-11', [ListaExercicioController::class, 'calcularPerimetroRaio']);

Route::post('/exericio/{exercicio12}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularExpoente']);
Route::get('/resultado-exercicio-12', [ListaExercicioController::class, 'calcularExpoente']);

Route::post('/exericio/{exercicio13}', [ListaExercicioController::class, 'mostrarExercicio', 'conversorCentimetros']);
Route::get('/resultado-exercicio-13', [ListaExercicioController::class, 'conversorCentimetros']);

Route::post('/exericio/{exercicio14}', [ListaExercicioController::class, 'mostrarExercicio', 'conversorMilhas']);
Route::get('/resultado-exercicio-14', [ListaExercicioController::class, 'conversorMilhas']);

Route::post('/exericio/{exercicio15}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularIMC']);
Route::get('/resultado-exercicio-15', [ListaExercicioController::class, 'calcularIMC']);

Route::post('/exericio/{exercicio16}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularDesconto']);
Route::get('/resultado-exercicio-16', [ListaExercicioController::class, 'calcularDesconto']);

Route::post('/exericio/{exercicio17}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularJurosSimples']);
Route::get('/resultado-exercicio-17', [ListaExercicioController::class, 'calcularJurosSimples']);

Route::post('/exericio/{exercicio18}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularJurosCompostos']);
Route::get('/resultado-exercicio-18', [ListaExercicioController::class, 'calcularJurosCompostos']);

Route::post('/exericio/{exercicio19}', [ListaExercicioController::class, 'mostrarExercicio', 'conversorDateTime']);
Route::get('/resultado-exercicio-19', [ListaExercicioController::class, 'conversorDateTime']);

Route::post('/exericio/{exercicio20}', [ListaExercicioController::class, 'mostrarExercicio', 'calcularVelocidadeMedia']);
Route::get('/resultado-exercicio-20', [ListaExercicioController::class, 'calcularVelocidadeMedia']);
