<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('aerolineas', App\Http\Controllers\AerolineaController::class);
Route::resource('fabricants', App\Http\Controllers\FabricantController::class);
Route::resource('aeronavs', App\Http\Controllers\AeronavController::class);
