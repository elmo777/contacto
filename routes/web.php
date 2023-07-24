<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuariocontroller;

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

// Route::get('/', function () {
//     return view('index')->name('usuarios.index');
// });
Route::get('index', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::post('/index.create', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/crear', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::get('/eliminar/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

Route::get('/editarll/{id}', [UsuarioController::class, 'crear'])->name('usuarios.crear');

Route::get('/editar/{id}', [UsuarioController::class, 'edit'])->name('usuarios.edit');
