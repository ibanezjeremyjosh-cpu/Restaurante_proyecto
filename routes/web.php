<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');

Route::get('/registro', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/registro', [UsuarioController::class, 'store'])->name('usuarios.store');