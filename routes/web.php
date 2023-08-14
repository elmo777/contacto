<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('login');
})->name('login');

// Rutas de autenticación y registro

Route::get('/register', [LoginController::class, 'Registrousuario'])->name('register');
Route::post('/register', [LoginController::class, 'Crearusuario']);
Route::post('/check', [LoginController::class, 'check']);
Route::get('/salir', [LoginController::class, 'sacar'])->name('salir');

// Rutas para usuarios

Route::get('/index', [UserController::class, 'index'])->name('usuarios.index');
Route::post('/usuarios', [UserController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/editar/{id}', [UserController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UserController::class, 'update'])->name('usuarios.update');
Route::get('/usuarios/eliminar/{id}', [UserController::class, 'destroy'])->name('usuarios.destroy');

// Rutas para productos

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::get('/productos/{id}', [ProductoController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
Route::get('/productos/eliminar/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

// Rutas para categorías

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('/categorias/{id}', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::get('/categorias/eliminar/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

