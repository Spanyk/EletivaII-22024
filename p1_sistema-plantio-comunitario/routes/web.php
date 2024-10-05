<?php

use App\Http\Controllers\TerrenoController;
use App\Models\Terreno;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/layouts/app');
});


Route::resource('terreno', TerrenoController::class);

Route::get('/terreno/{id}/edit', [TerrenoController::class, 'edit'])->name('terreno.edit');

Route::post('/terrenos/{terreno}', [TerrenoController::class, 'destroy'])->name('terreno.delete');