<?php

use App\Http\Controllers\UsuarioControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', [UsuarioControlador::class, 'index']);

Route::get('terceiro', function() {
    return 'Passou pelo terceiro middleware';
})->middleware('terceiro:deni');